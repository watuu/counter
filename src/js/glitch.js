import * as THREE from "three"
import { GUI } from "lil-gui";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default class Glitch {
    constructor() {
        document.querySelectorAll('.jsGlitchPic').forEach(el => {
            // const clone = el.cloneNode(true);
            // el.parentNode.insertBefore(clone, el.nextSibling);
            this.draw(el)
        });
    }

    draw(container) {
        const settings = {
            params: {
                // frequency: 15.0,
                speed: 1,
                scroll: 0.5,
                gain: 1.0,
                transition: 0.0,
            }
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

        // 透過背景
        renderer.setClearColor(0xffffff, 0);
        container.appendChild(renderer.domElement);

        // ====== テクスチャ読み込み ======
        const imgEl = container.querySelector(`img`);
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
            scroll: { value: settings.params.scroll },
            gain: { value: settings.params.gain },
            transition: { value: settings.params.transition },
        };

        const vertexShader = /* glsl */`
      uniform float u_time;

      varying vec2 vUv;
      varying vec3 vPosition;
      void main() {
        // v_uv = uv;
        //
        // vec3 pos = position;
        //
        // float wave = sin(uv.y * 15.0 + u_time) * 0.1;
        // pos.x += wave;
        //
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
      }
    `;

        const fragmentShader = /* glsl */`
      precision highp float;
      uniform float u_time;
      uniform sampler2D u_texture;
      uniform float scroll;
      uniform float gain;
      uniform float transition;
      varying vec2 vUv;

      float inside(vec2 uv) {
        return step(abs(uv.x - 0.5), 0.5) * step(abs(uv.y - 0.5), 0.5);
      }

      vec4 readTex(vec2 uv) {
        return texture2D(u_texture, uv) * inside(uv);
      }

      void main() {
        vec2 uv = vUv;
        
        float revealThreshold = 1.0 - transition;
        float transitionFactor = 1.0 - smoothstep(revealThreshold - 0.2, revealThreshold + 0.2, uv.y);
        
        float d = scroll * 0.5;
        // d *= abs(
        //   sin(floor(gl_FragCoord.y / 2.0) * 3.0 + u_time * 2.0) + 
        //   sin(floor(gl_FragCoord.y / 3.0) * 10.0 - u_time * 3.0)
        // );
         d *= abs(
          sin(floor(gl_FragCoord.y / 5.0) * 3.0 + u_time * 2.0) + 
          sin(floor(gl_FragCoord.y / 5.0) * 10.0 - u_time * 3.0)
        );
        
        vec4 cr = readTex(uv + vec2(0.0, d * 0.25 * transitionFactor));
        vec4 cg = readTex(uv + vec2(0.0, d * 0.5 * transitionFactor));
        vec4 cb = readTex(uv + vec2(0.0, d * 0.75 * transitionFactor));
        
        vec4 normalColor = readTex(uv);
        
        vec3 shiftedColor = vec3(cr.r, cg.g, cb.b);
        vec3 finalColor = mix(normalColor.rgb, shiftedColor, transitionFactor) * gain;
        float finalAlpha = mix(normalColor.a, (cr.a + cg.a + cb.a) / 3.0, transitionFactor);
        
        gl_FragColor = vec4(finalColor, finalAlpha);
        // gl_FragColor = texture2D(u_texture, v_uv);
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

        function animate() {
            const elapsed = clock.getElapsedTime();
            uniforms.u_time.value = elapsed * settings.params.speed;

            renderer.render(scene, camera);
            requestAnimationFrame(animate);
        }
        animate();

        // ====== ScrollTrigger アニメーション ======
        gsap.to(uniforms.transition, {
            value: 1.0,
            ease: "power3.out",
            duration: 2.0,
            scrollTrigger: {
                trigger: container,
                start: "top 70%",
                end: "bottom 70%",
                // scrub: true,
                // markers: true,
            }
        });


        // ====== カメラ調整関数 ======
        function setCameraSize() {
            const frustumSize = 1;
            camera.left   = (-frustumSize * aspect) / 2;
            camera.right  = ( frustumSize * aspect) / 2;
            camera.top    =  frustumSize / 2;
            camera.bottom = -frustumSize / 2;
            camera.updateProjectionMatrix();
        }

        // ====== リサイズ対応 ======
        function onResize() {
            const w = container.clientWidth;
            const h = container.clientHeight;
            setCameraSize();
            renderer.setSize(w, h);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        }
        window.addEventListener('resize', onResize);
    }
}