import { VFX } from '@vfx-js/core';

// gsap.registerPlugin(ScrollTrigger);

export default class GlitchText {
    constructor() {
        document.querySelectorAll('.jsGlitchSVG').forEach(el => {
            // const clone = el.cloneNode(true);
            // el.parentNode.insertBefore(clone, el.nextSibling);
            this.draw(el)
        });
    }

    draw(container) {
        const vfx = new VFX();

        const lerp = (a, b, t) => a * (1 - t) + b * t;

        const shaderH = `
    precision highp float;
    uniform vec2 resolution;
    uniform vec2 offset;
    uniform float time;
    uniform float enterTime;
    uniform float leaveTime;
    uniform sampler2D src;

    uniform float delay;
    #define speed 0.75

    out vec4 outColor;

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
        return texture(tex, uv);
    }
    
    bool isOut(vec2 u) {
        return (u.x < 0.0 || u.x > 1.0 || u.y < 0.0 || u.y > 1.0);
    }

    vec4 glitch(vec2 uv) {
        vec2 uvr = uv, uvg = uv, uvb = uv;
        float t = mod(time, 30.);
        float amp = 10. / resolution.x;
        if (abs(nn(uv.y, t)) > 1.) {
            uvr.x += nn(uv.y, t) * amp;
            uvg.x += nn(uv.y, t + 10.) * amp;
            uvb.x += nn(uv.y, t + 20.) * amp;
        }
        vec4 cr = readTex(src, uvr);
        vec4 cg = readTex(src, uvg);
        vec4 cb = readTex(src, uvb);
        
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
    
        vec4 cr = readTex(src, uvr);
        vec4 cg = readTex(src, uvg);
        vec4 cb = readTex(src, uvb);
    
        vec4 color = vec4(
            cr.r, cg.g, cb.b, (cr.a + cg.a + cb.a) / 1.
        );
    
        // 元のuvと異なる（=シフトされた）領域を検出
        float shifted = step(abs(uvr.x - uv.x) + abs(uvg.x - uv.x) + abs(uvb.x - uv.x), 0.0001);
    
        // shifted = 1.0 → 変化なし（そのまま）
        // shifted = 0.0 → ずれている（白く）
        color.rgb = mix(vec3(1.0, 0.333, 0.169), color.rgb, shifted);
    
        return color;
    }

    void main (void) {
        vec2 uv = (gl_FragCoord.xy - offset) / resolution;
        outColor = slitscan(uv);
        // if (leaveTime > 0.) {
        //     float t = clamp(leaveTime - 0.5, 0., 1.);
        //     outColor = glitch(uv) * (1. - t);
        // } else if (enterTime < 1.0) {
        //     outColor = slitscan(uv);
        // } else {
        //     outColor = glitch(uv);
        // }
        // float val = enterTime;
        // val = clamp(val, 0.0, 1.0);
        // outColor = vec4(val, 1.0 - val, 0.0, 1.0);
    }
`;

        let scroll = 0;

        vfx.add(container, {
            shader: shaderH,
            overflow: 500,
            uniforms: {
                // enterTime: () => {
                //     return Date.now() / 1000;
                // },
                scroll: () => {
                    const diff = window.scrollY - scroll;
                    scroll = lerp(scroll, window.scrollY, 0.03);
                    return diff / window.innerHeight;
                }
            }
        });
    }
}
