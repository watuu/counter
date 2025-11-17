import * as THREE from "three"
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default class GlitchText {
    constructor() {
        document.querySelectorAll('.jsGlitchTxt').forEach(el => {
            // const clone = el.cloneNode(true);
            // el.parentNode.insertBefore(clone, el.nextSibling);
            this.draw(el)
        });
    }

    draw(container) {
        const settings = {
            params: {
                // frequency: 15.0,
                // speed: 1,
                speed: 1,
                scroll: 0.5,
                gain: 1.0,
                transition: 0.0,

            },
            isWhite: container.classList.contains('is-white'),
        };
        // ====== 基本セットアップ ======
        // const container = document.getElementById('canvas_pic');

        const scene = new THREE.Scene();

        // const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 100);
        // camera.position.set(0, 0, 5);
        const aspect = container.clientWidth / container.clientHeight;
        const frustumSize = 1;
        const camera = new THREE.OrthographicCamera(
            (frustumSize * aspect) / -2,
            (frustumSize * aspect) / 2,
            frustumSize / 2,
            frustumSize / -2,
            0.1,
            1000
        );
        camera.position.set(0, 0, 1);
        camera.lookAt(0, 0, 0);

        // レンダラー
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        renderer.setSize(container.clientWidth, container.clientHeight);
        renderer.setPixelRatio(1);

        // 透過背景
        renderer.setClearColor(0xffffff, 0);
        container.appendChild(renderer.domElement);

        // ====== テクスチャ読み込み ======
        const imgEl = container.querySelector(`img`);
        let imgRect = imgEl.getBoundingClientRect();
        console.log(imgRect)
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
            // scroll: { value: settings.params.scroll },
            // gain: { value: settings.params.gain },
            // transition: { value: settings.params.transition },

            resolution: { value: new THREE.Vector2() },
            enterTime:  { value: 0 },
            delay:      { value: 0 },
            lineColor:  { value: new THREE.Color(1,0.333,0.169) },
        };
        if (settings.isWhite) {
            uniforms.lineColor.value = new THREE.Color(1,1,1);
        }

        const vertexShader = /* glsl */`
      uniform float u_time;

      varying vec2 vUv;
      varying vec3 vPosition;
      void main() {
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
      }
    `;

        const fragmentShader = /* glsl */`
    precision highp float;
    varying vec2 vUv;
    uniform sampler2D u_texture;
    uniform vec2 resolution;
    uniform float u_time;
    uniform float enterTime;
    // uniform float leaveTime;
    uniform float delay;
    uniform vec3 lineColor;
    #define speed 0.85 // slitscanのスピード

    // out vec4 outColor;

    float nn(float y, float t) {
        float n = (
            sin(y * .07 + t * 8. + sin(y * .5 + t * 10.)) +
            sin(y * .7 + t * 2. + sin(y * .3 + t * 8.)) * .7 +
            sin(y * 1.1 + t * 2.8) * .4
        );
        n += sin(y * 124. + t * 100.7) * sin(y * 877. - t * 38.8) * .3;
        return n;
    }

    vec4 readTex(sampler2D tex, vec2 uv) {
        if (uv.x < 0. || uv.x > 1. || uv.y < 0. || uv.y > 1.) { return vec4(0); }
        // return texture(tex, uv);
        return clamp(texture(tex, uv), 0.0, 1.0);
    }

    vec4 glitch(vec2 uv) {
        vec2 uvr = uv, uvg = uv, uvb = uv;
        float t = mod(u_time, 30.);
        float amp = 10. / resolution.x;
        if (abs(nn(uv.y, t)) > 1.) {
            uvr.x += nn(uv.y, t) * amp;
            uvg.x += nn(uv.y, t + 10.) * amp;
            uvb.x += nn(uv.y, t + 20.) * amp;
        }
        vec4 cr = readTex(u_texture, uvr);
        vec4 cg = readTex(u_texture, uvg);
        vec4 cb = readTex(u_texture, uvb);
        
        //vec4 color = vec4(
        return vec4(
            cr.r,
            cg.g,
            cb.b,
            smoothstep(.0, 1., cr.a + cg.a + cb.a)
        );
    }
    vec4 slitscan(vec2 uv) {
        float t = max(enterTime - delay, 0.) * speed;
        if (t <= 0.0) {
            return vec4(0);
        }
    
        vec2 uvr = uv, uvg = uv, uvb = uv;
        uvr.x = min(uvr.x, t);
        uvg.x = min(uvg.x, max(t - 0.2, 0.));
        uvb.x = min(uvb.x, max(t - 0.4, 0.));
    
        vec4 cr = readTex(u_texture, uvr);
        vec4 cg = readTex(u_texture, uvg);
        vec4 cb = readTex(u_texture, uvb);
    
        vec4 color = vec4(
            cr.r, cg.g, cb.b, (cr.a + cg.a + cb.a) / 1.
        );
        
        color = mix(color, vec4(cg.rgb, cg.a), cg.a);
        color = mix(color, vec4(cb.rgb, cb.a), cb.a);
    
        // 元のuvと異なる（=シフトされた）領域を検出
        float shifted = step(abs(uvr.x - uv.x) + abs(uvg.x - uv.x) + abs(uvb.x - uv.x), 0.0001);
    
        // shifted = 1.0 → 変化なし（そのまま）
        // shifted = 0.0 → ずれている（白く）
        // color.rgb = mix(vec3(1.0, 0.333, 0.169), color.rgb, shifted);
        // color.rgb = mix(vec3(1.0, 1.0, 1.0), color.rgb, shifted);
        color.rgb = mix(lineColor, color.rgb, shifted);
    
        return color;
    }

    void main (void) {
        vec2 uv = gl_FragCoord.xy / resolution;
        gl_FragColor = slitscan(uv);
        
        // if (enterTime < 1.0) {
        //     gl_FragColor = slitscan(uv);
        // } else {
        //     gl_FragColor = glitch(uv);
        // }
    }
    `;

        const material = new THREE.ShaderMaterial({
            uniforms,
            vertexShader,
            fragmentShader,
            transparent: true
        });

        // ====== メッシュ作成（R3Fの planeGeometry args: [4, 3, 32, 32]） ======
        const geometry = new THREE.PlaneGeometry(aspect, frustumSize, 32, 32);
        const mesh = new THREE.Mesh(geometry, material);
        scene.add(mesh);

        // ====== lil-gui ======
        // const gui = new GUI();
        // gui.add(settings.params, 'scroll', 0, 1.0, 0.05).name('(scroll)').onChange(v => uniforms.scroll.value = v);
        // gui.add(settings.params, 'gain', 1.0, 3.0, 0.05).name('(gain)').onChange(v => uniforms.gain.value = v);
        // gui.add(settings.params, 'transition', 0.0, 1.0, 0.05).name('(transition)').onChange(v => uniforms.transition.value = v);

        // ====== アニメーション ======
        const clock = new THREE.Clock();
        let enterAt = 0;
        let isEntered = false;

        function animate() {
            const now = Date.now() / 1000;
            if (!isEntered && isElementInView(container)) {
                enterAt = now;
                isEntered = true;
            }

            const elapsed = clock.getElapsedTime();
            uniforms.u_time.value = elapsed * settings.params.speed;
            uniforms.enterTime.value = isEntered ? (now - enterAt) : 0;
            uniforms.resolution.value.x = imgRect.width;
            uniforms.resolution.value.y = imgRect.height;

            renderer.render(scene, camera);
            requestAnimationFrame(animate);
        }
        animate();

        // ====== カメラ調整関数 ======
        function setCameraSize() {
            const frustumSize = 1;
            camera.left   = (-frustumSize * aspect) / 2;
            camera.right  = ( frustumSize * aspect) / 2;
            camera.top    =  frustumSize / 2;
            camera.bottom = -frustumSize / 2;
            camera.updateProjectionMatrix();
        }

        // ====== ScrollTrigger ======
        function isElementInView(el) {
            const rect = el.getBoundingClientRect();

            const vw = window.innerWidth;
            const vh = window.innerHeight;

            return rect.right >= 0 &&
                rect.bottom >= 0 &&
                rect.left <= vw &&
                rect.top <= vh;
        }

        // ====== リサイズ対応 ======
        function onResize() {
            const w = container.clientWidth;
            const h = container.clientHeight;
            setCameraSize();
            renderer.setSize(w, h);
            // renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

            imgRect = imgEl.getBoundingClientRect();
            uniforms.resolution.value.x = imgRect.width;
            uniforms.resolution.value.y = imgRect.height;
        }
        window.addEventListener('resize', onResize);
    }

}