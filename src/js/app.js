"use strict";

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
var _utility = _interopRequireDefault(require("./utility"));
var _common = _interopRequireDefault(require("./common"));
var _page = _interopRequireDefault(require("./page"));
var _vfx = _interopRequireDefault(require("./vfx"));
var _glitchText = _interopRequireDefault(require("./glitch-text"));
var _glitch = _interopRequireDefault(require("./glitch"));
var _budoux = _interopRequireDefault(require("./budoux"));
var _mv = _interopRequireDefault(require("./mv"));
function _interopRequireDefault(e) { return e && e.__esModule ? e : { default: e }; }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); } // @ts-ignore
// @ts-ignore
// @ts-ignore
// @ts-ignore
// @ts-ignore
// import { RepeatTextScrollFx } from './repeatTextScrollFx';
var APP = /*#__PURE__*/_createClass(function APP() {
  _classCallCheck(this, APP);
  var common = new _common.default();
  common.load();
  // new Barba();
  new _page.default();
  new _budoux.default();
  if (document.querySelector('#mv')) {
    new _mv.default();
  }
  // new RepeatTextScrollFx();
  // new VFX();
  new _glitchText.default();
  new _glitch.default();
});
new APP();