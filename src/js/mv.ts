import * as THREE from "three"
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';
import { GUI } from "lil-gui";

export default class GridViewer {
    private container: HTMLElement | null = null;
    private renderer!: THREE.WebGLRenderer;
    private camera!: THREE.OrthographicCamera;
    private scene!: THREE.Scene;
    private controls!: OrbitControls;
    private shaderMaterials: THREE.ShaderMaterial[] = [];
    private modelSize?: THREE.Vector3;
    private modelGroups: { group: THREE.Group; direction: number; instances: THREE.Group[] }[] = []
    private gui!: GUI;
    private params = {
        noiseStrength: 0.15,
        scanWidth: 1.2,
        baseSpeed: 0.4,
        scrollSpeed: 0.2,
    };

    constructor(selector = "#mv") {
        this.container = document.querySelector(selector);
        if (!this.container) return;
        this.init();
    }

    private init() {
        const container = this.container!;
        this.scene = new THREE.Scene();
        // this.scene.background = new THREE.Color(0xf1f1f4);

        const aspect = container.clientWidth / container.clientHeight;
        const frustumSize = 1;
        this.camera = new THREE.OrthographicCamera(
            (frustumSize * aspect) / -2,
            (frustumSize * aspect) / 2,
            frustumSize / 2,
            frustumSize / -2,
            0.1,
            1000
        );
        this.camera.position.set(0, 1, 1);
        this.camera.lookAt(0, 0, 0);

        this.renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        this.renderer.setSize(container.clientWidth, container.clientHeight);
        this.renderer.setPixelRatio(window.devicePixelRatio);
        this.renderer.outputColorSpace = THREE.LinearSRGBColorSpace;
        this.renderer.toneMapping = THREE.NoToneMapping;
        container.appendChild(this.renderer.domElement);

        // Lights
        const ambientLight = new THREE.AmbientLight(0xffffff, 1.0);
        this.scene.add(ambientLight);
        const directionalLight = new THREE.DirectionalLight(0xffffff, 1.0);
        directionalLight.position.set(10, 10, 5);
        this.scene.add(directionalLight);

        // Controls
        this.controls = new OrbitControls(this.camera, this.renderer.domElement);
        this.controls.enableDamping = true;
        this.controls.dampingFactor = 0.05;

        // GUI setup
        this.initGUI();

        // Load model
        this.loadModel(aspect);

        // Event
        window.addEventListener("resize", this.handleResize);
    }

    private initGUI() {
        this.gui = new GUI();

        this.gui
            .add(this.params, "noiseStrength", 0, 1, 0.01)
            .name("Noise Strength")
            .onChange((v: number) => {
                this.shaderMaterials.forEach((m) => (m.uniforms.noiseStrength.value = v));
            });

        this.gui
            .add(this.params, "scanWidth", 0.1, 3.0, 0.01)
            .name("Gradient Width")
            .onChange((v: number) => {
                this.shaderMaterials.forEach((m) => (m.uniforms.scanWidth.value = v));
            });

        this.gui
            .add(this.params, "baseSpeed", 0.1, 2.0, 0.01)
            .name("Base Speed")
            .onChange((v: number) => {
                this.shaderMaterials.forEach((m, i) => {
                    const planeName = Object.keys(this.speedMultipliers)[i % Object.keys(this.speedMultipliers).length];
                    const speedMultiplier = this.speedMultipliers[planeName] || 1;
                    m.uniforms.scanSpeed.value = v * speedMultiplier;
                });
            });
        this.gui.add(this.params, "scrollSpeed", 0, 1, 0.01).name("Scroll Speed")
    }

    private speedMultipliers: Record<string, number> = {
        plane1: 10 / 6,
        plane2: 10 / 1.5,
        plane3: 10 / 1,
        plane4: 10 / 2,
        plane5: 10 / 4,
    };

    private createGradientShader(minX: number, maxX: number, speedMultiplier: number) {
        return new THREE.ShaderMaterial({
            uniforms: {
                uTime: { value: 0 },
                baseColor: { value: new THREE.Vector3(1.0, 85.0 / 255.0, 43.0 / 255.0) },
                scanSpeed: { value: this.params.baseSpeed * speedMultiplier },
                scanWidth: { value: this.params.scanWidth },
                minX: { value: minX },
                maxX: { value: maxX },
                noiseStrength: { value: this.params.noiseStrength },
            },
            vertexShader: `
        varying vec3 vPosition;
        void main() {
          vPosition = position;
          gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
        }
      `,
            fragmentShader: `
        uniform float uTime;
        uniform vec3 baseColor;
        uniform float scanSpeed;
        uniform float scanWidth;
        uniform float minX;
        uniform float maxX;
        uniform float noiseStrength;
        varying vec3 vPosition;
        float random(vec2 st){
          return fract(sin(dot(st.xy, vec2(12.9898,78.233))) * 43758.5453123);
        }
        void main(){
          float normalizedX=((vPosition.x-minX)/(maxX-minX))*2.0-1.0;
          float scanPosition1=mod(uTime*scanSpeed,2.0+scanWidth*2.0)-1.0-scanWidth;
          float scanPosition2=scanPosition1+2.0+scanWidth*2.0;
          float distance1=abs(normalizedX-scanPosition1);
          float distance2=abs(normalizedX-scanPosition2);
          float distance=min(distance1,distance2);
          float alpha=smoothstep(0.0,scanWidth,distance);
          vec2 noiseCoord=gl_FragCoord.xy+uTime*10.0;
          float noise=random(noiseCoord)*noiseStrength;
          vec3 finalColor=baseColor+vec3(noise);
          gl_FragColor=vec4(finalColor,alpha);
        }
      `,
            side: THREE.DoubleSide,
            transparent: true,
            depthWrite: false,
        });
    }

    private applyMaterialsToModel(model: THREE.Group) {
        const planeNames = Object.keys(this.speedMultipliers);
        const gridColor = new THREE.Color(0xff552b);

        model.traverse((child) => {
            if (!(child instanceof THREE.Mesh)) return;
            const matchedPlane = planeNames.find((n) => child.name.toLowerCase().includes(n));
            if (matchedPlane) {
                const geo = child.geometry;
                geo.computeBoundingBox();
                const bbox = geo.boundingBox!;
                const speed = this.speedMultipliers[matchedPlane] || 1;
                const mat = this.createGradientShader(bbox.min.x, bbox.max.x, speed);
                child.material = mat;
                this.shaderMaterials.push(mat);
                child.renderOrder = 1;
            } else {
                const materials = Array.isArray(child.material) ? child.material : [child.material];
                materials.forEach((m: any) => {
                    if (m.color) {
                        m.color.copy(gridColor);
                        if ("emissive" in m) {
                            m.emissive = gridColor.clone();
                            m.emissiveIntensity = 0.5;
                        }
                    }
                });
            }
        });
    }

    private updateCameraForCover(modelSize: THREE.Vector3, windowAspect: number) {
        const modelAspect = modelSize.x / modelSize.y;
        let frustumWidth: number;
        let frustumHeight: number;
        if (modelAspect > windowAspect) {
            frustumHeight = modelSize.y;
            frustumWidth = frustumHeight * windowAspect;
        } else {
            frustumWidth = modelSize.x;
            frustumHeight = frustumWidth / windowAspect;
        }
        this.camera.left = frustumWidth / -2;
        this.camera.right = frustumWidth / 2;
        this.camera.top = frustumHeight / 2;
        this.camera.bottom = frustumHeight / -2;
        this.camera.updateProjectionMatrix();
    }

    private loadModel(aspect: number) {
        const loader = new GLTFLoader();
        const clock = new THREE.Clock();

        loader.load(
            "./assets/model/grid.glb",
            (gltf) => {
                const temp = gltf.scene.clone();
                const box = new THREE.Box3().setFromObject(temp);
                const size = box.getSize(new THREE.Vector3());
                const center = box.getCenter(new THREE.Vector3());

                const spacing = size.z;
                const positions = [-spacing, 0, spacing];
                const directions = [1, -1, 1]

                positions.forEach((zOffset, modelIndex) => {
                    const instances: THREE.Group[] = []
                    const direction = directions[modelIndex]

                    for (let i = 0; i < 2; i++) {
                        const group = new THREE.Group()
                        const model = gltf.scene.clone()

                        model.position.sub(center)
                        group.add(model)

                        if (modelIndex === 1) {
                            group.rotation.y = Math.PI
                        }

                        group.position.z = zOffset
                        group.position.x = i * size.x * direction

                        this.applyMaterialsToModel(model)
                        this.scene.add(group)
                        instances.push(group)
                    }

                    this.modelGroups.push({ group: instances[0], direction, instances })

                });

                const totalHeight = spacing * 2 + size.y;
                this.modelSize = new THREE.Vector3(size.x, totalHeight, size.z);
                this.updateCameraForCover(this.modelSize, aspect);

                const maxDim = Math.max(size.x, totalHeight, size.z);
                const distance = maxDim * 2;
                this.camera.position.set(0, distance, distance);
                this.camera.lookAt(0, 0, 0);
                this.controls.target.set(0, 0, 0);
                this.controls.update();

                this.animate(clock);
            },
            undefined,
            (e) => console.error("Error loading model:", e)
        );
    }

    private animate(clock: THREE.Clock) {
        const loop = () => {
            requestAnimationFrame(loop);
            const time = clock.getElapsedTime();
            this.shaderMaterials.forEach((m) => (m.uniforms.uTime.value = time));

            if (this.modelSize) {
                this.modelGroups.forEach(({ direction, instances }) => {
                    instances.forEach((instance) => {
                        instance.position.x += direction * this.params.scrollSpeed * 0.001

                        if (direction > 0 && instance.position.x > this.modelSize.x) {
                            instance.position.x -= this.modelSize.x * 2
                        } else if (direction < 0 && instance.position.x < -this.modelSize.x) {
                            instance.position.x += this.modelSize.x * 2
                        }
                    })
                })
            }

            this.controls.update();
            this.renderer.render(this.scene, this.camera);
        };
        loop();
    }

    private handleResize = () => {
        if (!this.container || !this.modelSize) return;
        const aspect = this.container.clientWidth / this.container.clientHeight;
        this.updateCameraForCover(this.modelSize, aspect);
        this.renderer.setSize(this.container.clientWidth, this.container.clientHeight);
    };

    public destroy() {
        window.removeEventListener("resize", this.handleResize);
        if (this.gui) this.gui.destroy();
        this.shaderMaterials.forEach((m) => m.dispose());
        this.renderer.dispose();
        if (this.container && this.renderer.domElement.parentNode === this.container) {
            this.container.removeChild(this.renderer.domElement);
        }
    }
}
