import $ from "jQuery";
import Utility from './utility';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import { ScrollToPlugin } from "gsap/ScrollToPlugin"

import Swiper, { Navigation, Pagination, Autoplay, Scrollbar, EffectFade } from 'swiper';
import 'swiper/css/bundle'
Swiper.use([Navigation, Pagination, Autoplay, Scrollbar, EffectFade]);

export default class Page {
    constructor() {
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
        this.settings = {
            swipers: [],
            eventListeners: [],
            scrollY: 0,
        }
        if (document.querySelector('.p-top-creative__list') && Utility.isPC()) {
            this.pTopCreative()
        }
    }
    pTopCreative() {
        const xTo = gsap.quickTo('.p-top-creative__figure figure', "x", { duration: 0.4, ease: "power3" });
        const yTo = gsap.quickTo('.p-top-creative__figure figure', "y", { duration: 0.4, ease: "power3" });

        document.addEventListener("mousemove", moveElement);

        function moveElement(e) {
            const shift = document.querySelector('.p-top-creative__figure figure').offsetHeight / 2;
            xTo(e.clientX + (40 / 1600 * window.innerWidth));
            yTo(e.clientY - shift);
        }

        $('.p-top-creative__list li').on('mouseenter', function() {
            let index = $(this).index();
            $('.p-top-creative__figure figure').css('opacity', 0);
            $('.p-top-creative__figure figure').eq(index).css('opacity', 1);
        });
        $('.p-top-creative__list').on('mouseleave', function() {
            $('.p-top-creative__figure figure').css('opacity', 0);
        });

        this.settings.eventListeners.push({ element: document, event: "mousemove", handler: moveElement });
    }
}
