"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;
var THREE = _interopRequireWildcard(require("three"));
var _GLTFLoader = require("three/examples/jsm/loaders/GLTFLoader.js");
var _OrbitControls = require("three/examples/jsm/controls/OrbitControls.js");
var _lilGui = require("lil-gui");
function _interopRequireWildcard(e, t) { if ("function" == typeof WeakMap) var r = new WeakMap(), n = new WeakMap(); return (_interopRequireWildcard = function _interopRequireWildcard(e, t) { if (!t && e && e.__esModule) return e; var o, i, f = { __proto__: null, default: e }; if (null === e || "object" != _typeof(e) && "function" != typeof e) return f; if (o = t ? n : r) { if (o.has(e)) return o.get(e); o.set(e, f); } for (var _t in e) "default" !== _t && {}.hasOwnProperty.call(e, _t) && ((i = (o = Object.defineProperty) && Object.getOwnPropertyDescriptor(e, _t)) && (i.get || i.set) ? o(f, _t, i) : f[_t] = e[_t]); return f; })(e, t); }
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var GridViewer = exports.default = /*#__PURE__*/function () {
  function GridViewer() {
    var _this = this;
    var selector = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "#mv";
    _classCallCheck(this, GridViewer);
    _defineProperty(this, "container", null);
    _defineProperty(this, "renderer", void 0);
    _defineProperty(this, "camera", void 0);
    _defineProperty(this, "scene", void 0);
    _defineProperty(this, "controls", void 0);
    _defineProperty(this, "shaderMaterials", []);
    _defineProperty(this, "modelSize", void 0);
    _defineProperty(this, "gui", void 0);
    _defineProperty(this, "params", {
      noiseStrength: 0.1,
      scanWidth: 1.2,
      baseSpeed: 0.4
    });
    _defineProperty(this, "speedMultipliers", {
      plane1: 10 / 6,
      plane2: 10 / 1.5,
      plane3: 10 / 1,
      plane4: 10 / 2,
      plane5: 10 / 4
    });
    _defineProperty(this, "handleResize", function () {
      if (!_this.container || !_this.modelSize) return;
      var aspect = _this.container.clientWidth / _this.container.clientHeight;
      _this.updateCameraForCover(_this.modelSize, aspect);
      _this.renderer.setSize(_this.container.clientWidth, _this.container.clientHeight);
    });
    this.container = document.querySelector(selector);
    if (!this.container) return;
    this.init();
  }
  return _createClass(GridViewer, [{
    key: "init",
    value: function init() {
      var container = this.container;
      this.scene = new THREE.Scene();
      // this.scene.background = new THREE.Color(0xf1f1f4);

      var aspect = container.clientWidth / container.clientHeight;
      var frustumSize = 1;
      this.camera = new THREE.OrthographicCamera(frustumSize * aspect / -2, frustumSize * aspect / 2, frustumSize / 2, frustumSize / -2, 0.1, 1000);
      this.camera.position.set(0, 1, 1);
      this.camera.lookAt(0, 0, 0);
      this.renderer = new THREE.WebGLRenderer({
        antialias: true,
        alpha: true
      });
      this.renderer.setSize(container.clientWidth, container.clientHeight);
      this.renderer.setPixelRatio(window.devicePixelRatio);
      this.renderer.outputColorSpace = THREE.LinearSRGBColorSpace;
      this.renderer.toneMapping = THREE.NoToneMapping;
      container.appendChild(this.renderer.domElement);

      // Lights
      var ambientLight = new THREE.AmbientLight(0xffffff, 1.0);
      this.scene.add(ambientLight);
      var directionalLight = new THREE.DirectionalLight(0xffffff, 1.0);
      directionalLight.position.set(10, 10, 5);
      this.scene.add(directionalLight);

      // Controls
      this.controls = new _OrbitControls.OrbitControls(this.camera, this.renderer.domElement);
      this.controls.enableDamping = true;
      this.controls.dampingFactor = 0.05;

      // GUI setup
      this.initGUI();

      // Load model
      this.loadModel(aspect);

      // Event
      window.addEventListener("resize", this.handleResize);
    }
  }, {
    key: "initGUI",
    value: function initGUI() {
      var _this2 = this;
      this.gui = new _lilGui.GUI();
      this.gui.add(this.params, "noiseStrength", 0, 0.1, 0.001).name("Noise Strength").onChange(function (v) {
        _this2.shaderMaterials.forEach(function (m) {
          return m.uniforms.noiseStrength.value = v;
        });
      });
      this.gui.add(this.params, "scanWidth", 0.1, 3.0, 0.01).name("Gradient Width").onChange(function (v) {
        _this2.shaderMaterials.forEach(function (m) {
          return m.uniforms.scanWidth.value = v;
        });
      });
      this.gui.add(this.params, "baseSpeed", 0.1, 2.0, 0.01).name("Base Speed").onChange(function (v) {
        _this2.shaderMaterials.forEach(function (m, i) {
          var planeName = Object.keys(_this2.speedMultipliers)[i % Object.keys(_this2.speedMultipliers).length];
          var speedMultiplier = _this2.speedMultipliers[planeName] || 1;
          m.uniforms.scanSpeed.value = v * speedMultiplier;
        });
      });
    }
  }, {
    key: "createGradientShader",
    value: function createGradientShader(minX, maxX, speedMultiplier) {
      return new THREE.ShaderMaterial({
        uniforms: {
          uTime: {
            value: 0
          },
          baseColor: {
            value: new THREE.Vector3(1.0, 85.0 / 255.0, 43.0 / 255.0)
          },
          scanSpeed: {
            value: this.params.baseSpeed * speedMultiplier
          },
          scanWidth: {
            value: this.params.scanWidth
          },
          minX: {
            value: minX
          },
          maxX: {
            value: maxX
          },
          noiseStrength: {
            value: this.params.noiseStrength
          }
        },
        vertexShader: "\n        varying vec3 vPosition;\n        void main() {\n          vPosition = position;\n          gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);\n        }\n      ",
        fragmentShader: "\n        uniform float uTime;\n        uniform vec3 baseColor;\n        uniform float scanSpeed;\n        uniform float scanWidth;\n        uniform float minX;\n        uniform float maxX;\n        uniform float noiseStrength;\n        varying vec3 vPosition;\n        float random(vec2 st){\n          return fract(sin(dot(st.xy, vec2(12.9898,78.233))) * 43758.5453123);\n        }\n        void main(){\n          float normalizedX=((vPosition.x-minX)/(maxX-minX))*2.0-1.0;\n          float scanPosition1=mod(uTime*scanSpeed,2.0+scanWidth*2.0)-1.0-scanWidth;\n          float scanPosition2=scanPosition1+2.0+scanWidth*2.0;\n          float distance1=abs(normalizedX-scanPosition1);\n          float distance2=abs(normalizedX-scanPosition2);\n          float distance=min(distance1,distance2);\n          float alpha=smoothstep(0.0,scanWidth,distance);\n          vec2 noiseCoord=gl_FragCoord.xy+uTime*10.0;\n          float noise=random(noiseCoord)*noiseStrength;\n          vec3 finalColor=baseColor+vec3(noise);\n          gl_FragColor=vec4(finalColor,alpha);\n        }\n      ",
        side: THREE.DoubleSide,
        transparent: true,
        depthWrite: false
      });
    }
  }, {
    key: "applyMaterialsToModel",
    value: function applyMaterialsToModel(model) {
      var _this3 = this;
      var planeNames = Object.keys(this.speedMultipliers);
      var gridColor = new THREE.Color(0xff552b);
      model.traverse(function (child) {
        if (!(child instanceof THREE.Mesh)) return;
        var matchedPlane = planeNames.find(function (n) {
          return child.name.toLowerCase().includes(n);
        });
        if (matchedPlane) {
          var geo = child.geometry;
          geo.computeBoundingBox();
          var bbox = geo.boundingBox;
          var speed = _this3.speedMultipliers[matchedPlane] || 1;
          var mat = _this3.createGradientShader(bbox.min.x, bbox.max.x, speed);
          child.material = mat;
          _this3.shaderMaterials.push(mat);
          child.renderOrder = 1;
        } else {
          var materials = Array.isArray(child.material) ? child.material : [child.material];
          materials.forEach(function (m) {
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
  }, {
    key: "updateCameraForCover",
    value: function updateCameraForCover(modelSize, windowAspect) {
      var modelAspect = modelSize.x / modelSize.y;
      var frustumWidth;
      var frustumHeight;
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
  }, {
    key: "loadModel",
    value: function loadModel(aspect) {
      var _this4 = this;
      var loader = new _GLTFLoader.GLTFLoader();
      var clock = new THREE.Clock();
      loader.load("./assets/model/grid.glb", function (gltf) {
        var temp = gltf.scene.clone();
        var box = new THREE.Box3().setFromObject(temp);
        var size = box.getSize(new THREE.Vector3());
        var center = box.getCenter(new THREE.Vector3());
        var spacing = size.z;
        var positions = [-spacing, 0, spacing];
        positions.forEach(function (zOffset, i) {
          var group = new THREE.Group();
          var model = gltf.scene.clone();
          model.position.sub(center);
          group.add(model);
          if (i === 1) group.rotation.y = Math.PI;
          group.position.z = zOffset;
          _this4.applyMaterialsToModel(model);
          _this4.scene.add(group);
        });
        var totalHeight = spacing * 2 + size.y;
        _this4.modelSize = new THREE.Vector3(size.x, totalHeight, size.z);
        _this4.updateCameraForCover(_this4.modelSize, aspect);
        var maxDim = Math.max(size.x, totalHeight, size.z);
        var distance = maxDim * 2;
        _this4.camera.position.set(0, distance, distance);
        _this4.camera.lookAt(0, 0, 0);
        _this4.controls.target.set(0, 0, 0);
        _this4.controls.update();
        _this4.animate(clock);
      }, undefined, function (e) {
        return console.error("Error loading model:", e);
      });
    }
  }, {
    key: "animate",
    value: function animate(clock) {
      var _this5 = this;
      var _loop = function loop() {
        requestAnimationFrame(_loop);
        var time = clock.getElapsedTime();
        _this5.shaderMaterials.forEach(function (m) {
          return m.uniforms.uTime.value = time;
        });
        _this5.controls.update();
        _this5.renderer.render(_this5.scene, _this5.camera);
      };
      _loop();
    }
  }, {
    key: "destroy",
    value: function destroy() {
      window.removeEventListener("resize", this.handleResize);
      if (this.gui) this.gui.destroy();
      this.shaderMaterials.forEach(function (m) {
        return m.dispose();
      });
      this.renderer.dispose();
      if (this.container && this.renderer.domElement.parentNode === this.container) {
        this.container.removeChild(this.renderer.domElement);
      }
    }
  }]);
}();