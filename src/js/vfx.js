
import { VFX } from '@vfx-js/core';

export default class AnimeVFX {
    constructor() {
        // this.animation('canvas_design');
        // this.animation('canvas_movie');
        this.animationWeb();
        // this.animationDigital();
        // this.design();
    }
    animation(container_id) {
        const settings = {
            params: {
                amplitude: 0.1,
                frequency: 15.0,
                speed: 2.5,
            }
        };
        // ====== 基本セットアップ ======
        const container = document.getElementById(container_id);

        const scene = new THREE.Scene();

        const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 100);
        camera.position.set(0, 0, 5);

        // レンダラー
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        renderer.setSize(container.clientWidth, container.clientHeight);

        // 透過背景
        renderer.setClearColor(0x000000, 0);
        container.appendChild(renderer.domElement);

        // ====== テクスチャ読み込み ======
        const imgEl = document.querySelector(`#${container_id} img`);
        const loader = new THREE.TextureLoader();
        const texture = loader.load(imgEl.getAttribute('src'), () => {
            texture.wrapS = THREE.ClampToEdgeWrapping;
            texture.wrapT = THREE.ClampToEdgeWrapping;
            texture.minFilter = THREE.LinearFilter;
            texture.magFilter = THREE.LinearFilter;
            texture.anisotropy = renderer.capabilities.getMaxAnisotropy?.() || 1;
        });

        // ====== シェーダ（R3F版と同等） ======
        const uniforms = {
            u_texture:   { value: texture },
            u_time:      { value: 0 },
            u_amplitude: { value: settings.params.amplitude },
            u_frequency: { value: settings.params.frequency },
        };

        const vertexShader = /* glsl */`
      uniform float u_time;
      uniform float u_amplitude;
      uniform float u_frequency;

      varying vec2 v_uv;

      void main() {
        v_uv = uv;

        vec3 pos = position;

        float wave = sin(uv.y * u_frequency + u_time) * u_amplitude;
        pos.x += wave;

        gl_Position = projectionMatrix * modelViewMatrix * vec4(pos, 1.0);
      }
    `;

        const fragmentShader = /* glsl */`
      uniform sampler2D u_texture;
      varying vec2 v_uv;

      void main() {
        gl_FragColor = texture2D(u_texture, v_uv);
      }
    `;

        const material = new THREE.ShaderMaterial({
            uniforms,
            vertexShader,
            fragmentShader,
            transparent: true
        });

        // ====== メッシュ作成（R3Fの planeGeometry args: [4, 3, 32, 32]） ======
        const geometry = new THREE.PlaneGeometry(4, 3, 32, 32);
        const mesh = new THREE.Mesh(geometry, material);
        scene.add(mesh);

        // ====== lil-gui ======
        // const gui = new GUI();
        // gui.add(settings.params, 'amplitude', 0, 0.2, 0.01).name('振幅 (Amplitude)').onChange(v => uniforms.u_amplitude.value = v);
        // gui.add(settings.params, 'frequency', 1, 20, 0.1).name('周波数 (Frequency)').onChange(v => uniforms.u_frequency.value = v);
        // gui.add(settings.params, 'speed', 0.1, 3, 0.1).name('速度 (Speed)');

        // ====== アニメーション ======
        const clock = new THREE.Clock();

        function animate() {
            const elapsed = clock.getElapsedTime();
            uniforms.u_time.value = elapsed * settings.params.speed;

            renderer.render(scene, camera);
            requestAnimationFrame(animate);
        }
        animate();

        // ====== リサイズ対応 ======
        function onResize() {
            const w = container.clientWidth;
            const h = container.clientHeight;
            camera.aspect = w / h;
            camera.updateProjectionMatrix();
            renderer.setSize(w, h);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        }
        window.addEventListener('resize', onResize);

        // 初期サイズ
        onResize();
    }

    animationWeb(){
        const vfx = new VFX();

        const lerp = (a, b, t) => a * (1 - t) + b * t;

        const shaderH = `
precision highp float;
uniform vec2 resolution;
uniform vec2 offset;
uniform float time;
uniform sampler2D src;
uniform float scroll;
uniform float gain;  // 色の持ち上げ係数（例: 1.5〜3.0）

float inside(vec2 uv) {
  return step(abs(uv.x - 0.5), 0.5) * step(abs(uv.y - 0.5), 0.5);
}
vec4 readTex(vec2 uv) {
  return texture2D(src, uv) * inside(uv);
}

void main() {
  vec2 uv = (gl_FragCoord.xy - offset) / resolution;
  
  float d = scroll * .5;
  
  // Shift by x position
  // d *= abs(
  //   sin(floor(gl_FragCoord.x / 17.) * 7. + time * 2.) + 
  //   sin(floor(gl_FragCoord.x / 19.) * 19. - time * 3.)
  // );
  d *= abs(
    sin(floor(gl_FragCoord.x / 2.) * 7. + time * 2.) + 
    sin(floor(gl_FragCoord.x / 3.) * 19. - time * 3.)
  );
  
  vec4 cr = readTex(uv + vec2(0, d));
  vec4 cg = readTex(uv + vec2(0, d * 2.));
  vec4 cb = readTex(uv + vec2(0, d * 3.));
  
  gl_FragColor = vec4(
    cr.r, cg.g, cb.b, (cr.a + cg.a + cb.a)
  );
 }
`;

        let scroll = 0;

        vfx.add(document.querySelector('#canvas_pic img'), {
            shader: shaderH,
            overflow: 500,
            uniforms: {
                scroll: () => {
                    const diff = window.scrollY - scroll;
                    scroll = lerp(scroll, window.scrollY, 0.03);
                    return diff / window.innerHeight;
                }
            }
        });
    }

    animationDigital(){

        const img = document.querySelector('#canvas_digital img');

        const vfx = new VFX();

        const lerp = (a, b, t) => a * (1 - t) + b * t;

        const shader = `
precision highp float;
uniform vec2 resolution;
uniform vec2 offset;
uniform float time;
uniform bool autoCrop;
uniform sampler2D src;
out vec4 outColor;
uniform float scroll;

vec4 readTex(sampler2D tex, vec2 uv) {
    if (autoCrop && (uv.x < 0. || uv.x > 1. || uv.y < 0. || uv.y > 1.)) {
        return vec4(0);
    }
    return texture(tex, uv);
}

float nn(float y, float t) {
    float n = (
        sin(y * .07 + t * 8. + sin(y * .5 + t * 10.)) +
        sin(y * .7 + t * 2. + sin(y * .3 + t * 8.)) * .7 +
        sin(y * 1.1 + t * 2.8) * .4
    );

    n += sin(y * 124. + t * 100.7) * sin(y * 877. - t * 38.8) * .3;

    return n;
}

float step2(float t, vec2 uv) {
    return step(t, uv.x) * step(t, uv.y);
}

void main (void) {
    vec2 uv = (gl_FragCoord.xy - offset) / resolution;
    vec2 uvr = uv, uvg = uv, uvb = uv;


    float t = mod(time, 30.);

    float amp = 1. / resolution.x;

    float s = clamp(scroll*6.0, -20.0, 20.0);

    if (abs(nn(uv.y, t)) > 1.) {
        uvr.x += nn(uv.y, t) * amp * s;
        uvg.x += nn(uv.y, t + 10.) * amp * s;
        uvb.x += nn(uv.y, t + 20.) * amp * s;
    }

    vec4 cr = readTex(src, uvr);
    vec4 cg = readTex(src, uvg);
    vec4 cb = readTex(src, uvb);

    outColor = vec4(
        cr.r,
        cg.g,
        cb.b,
        smoothstep(.0, 1., cr.a + cg.a + cb.a)
    );
}
`;
        vfx.add(img, {
            shader: shader,
            overflow: 100,
            uniforms: {
                scroll: () => {
                    const diff = window.scrollY - scroll;
                    scroll = lerp(scroll, window.scrollY, 0.03);
                    return diff / window.innerHeight;
                }
            }
        });

    }

}