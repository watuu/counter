import $ from "jQuery";
import Utility from './utility';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import { ScrollToPlugin } from "gsap/ScrollToPlugin"
import { DrawSVGPlugin } from "gsap/DrawSVGPlugin"

import Swiper, { Navigation, Pagination, Autoplay, Scrollbar, EffectFade } from 'swiper';
import 'swiper/css/bundle'
Swiper.use([Navigation, Pagination, Autoplay, Scrollbar, EffectFade]);

export default class Page {
    constructor() {
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, DrawSVGPlugin);
        this.settings = {
            swipers: [],
            eventListeners: [],
            scrollY: 0,
        }
        // this.cHeadingSection()
        if (document.querySelector('.cm-block-media-youtube')) {
            this.cmBlockMediaYoutube()
        }
        if (document.querySelector('.p-top-service')) {
            this.pTopService()
        }
        if (document.querySelector('.p-top-creative__list') && Utility.isPC()) {
            this.pTopCreative()
        }
        if (document.querySelector('.p-media-pickup')) {
            this.pMediaPickup()
        }


    }
    // cHeadingSection() {
    //
    // }
    cmBlockMediaYoutube() {
        const mySwiper = new Swiper ('.cm-block-media-youtube .swiper', {
            loop: true,
            loopAdditionalSlides: 1,
            slidesPerView: 1,
            spaceBetween: 16,
            pagination: {
                el: '.cm-block-media-youtube__paginate',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                }
            },
        });
    }

    pTopService() {
        gsap.fromTo(gsap.utils.toArray('.p-top-service__bg svg path'), {
            drawSVG:"0 0"
        },{
            scrollTrigger: {
                trigger: '.p-top-service',
                start: 'top top',
                markers: false,
            },
            duration: 20,
            stagger: 0.5,
            drawSVG:"100% 0",
            ease: 'power3.out',
        })
        ScrollTrigger.create({
            trigger: '.p-top-service',
            start: 'top top',
            //end: `bottom-=${200/1440*window.innerWidth} bottom`,
            end: `bottom bottom`,
            pin: '.p-top-service__bg',
            pinSpacing: false,
            markers: false,
        })
        if (Utility.isPC()) {
            ScrollTrigger.create({
                trigger: '.p-top-service',
                start: 'top top',
                end: 'bottom bottom',
                pin: '.p-top-service__head',
                pinSpacing: false,
                markers: false,
            })
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

    pMediaPickup() {
        const mySwiper = new Swiper ('.p-media-pickup .swiper', {
            loop: true,
            loopAdditionalSlides: 1,
            slidesPerView: 1,
            spaceBetween: 12,
            initialSlide: 1,
            pagination: {
                el: '.p-media-pickup__paginate',
            },
            breakpoints: {
                1024: {
                    spaceBetween: 36,
                }
            },
        });
    }
}
