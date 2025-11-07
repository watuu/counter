import $ from "jQuery";
import Utility from './utility';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import { ScrollToPlugin } from "gsap/ScrollToPlugin"
import { DrawSVGPlugin } from "gsap/DrawSVGPlugin"

import Swiper, { Navigation, Pagination, Autoplay, Scrollbar, EffectFade } from 'swiper';
import 'swiper/css/bundle'
Swiper.use([Navigation, Pagination, Autoplay, Scrollbar, EffectFade]);

import MicroModal from 'micromodal'

export default class Page {
    constructor() {
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, DrawSVGPlugin);
        this.settings = {
            swipers: [],
            eventListeners: [],
            scrollY: 0,
        }
        // this.cHeadingSection()
        if (document.querySelector('.cm-post')) {
            this.cmPost()
            if (document.querySelector('.cm-post--creative')) {
                this.cmPostCreative()
            }
        }
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
        if (document.querySelector('.cm-modal-blog')) {
            this.cmModalBlog()
        }



    }
    // cHeadingSection() {
    //
    // }
    cmPost() {
        // プロフィール
        document.querySelectorAll('.single-media__card-more').forEach(button => {
            button.addEventListener('click', () => {
                const card = button.closest('.single-media__card');
                if (!card) return;

                const text = card.querySelector('.single-media__card-text--hidden');
                if (text) {
                    text.classList.remove('single-media__card-text--hidden');
                }

                button.remove();
            });
        });
        // ボタン装飾
        document.querySelectorAll('a.wp-block-button__link').forEach(el => {
            // テキスト「->」を削除
            if (el.textContent.includes('->')) {
                el.textContent = el.textContent.replace(/->/g, '').trim();
            }
            // アイコン
            const icon = document.createElement('i');
            icon.className = 'c-btn-more__arrow';
            icon.innerHTML = `
    <svg width="40" height="40">
      <use href="#ico-arrow"></use>
    </svg>
    `;
            el.appendChild(icon);
        });
    }
    cmPostCreative() {
        // H2装飾
        document.querySelectorAll('.cm-post h2').forEach(h2 => {
            if (h2.textContent.trim().startsWith("(")) return;

            h2.innerHTML = `(${h2.innerHTML.trim()})`;
            h2.classList.add("is-bracketed");
        });
        // ボタン装飾
        document.querySelectorAll('.cm-post a[rel="noopener"]:not(.c-link-arrow)').forEach(link => {
            const text = link.textContent.trim();
            link.innerHTML = '';
            link.classList.add('c-link-arrow');

            // テキスト部分
            const span = document.createElement('span');
            span.className = 'c-link-arrow__txt';
            span.textContent = text;
            link.appendChild(span);

            // アイコン
            const icon = document.createElement('i');
            icon.className = 'c-link-arrow__arrow';
            icon.innerHTML = '<svg width="40" height="40"><use href="#ico-arrow"></use></svg>';
            link.appendChild(icon);
        });
    }
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

    cmModalBlog() {
        document.addEventListener('DOMContentLoaded', function () {
            MicroModal.init();

            let isOpened = false;

            window.addEventListener('scroll', function () {
                if (isOpened) return;
                if (window.scrollY > window.innerHeight) {
                    MicroModal.show('modal-blog');
                    isOpened = true;
                }
            });
        });
    }

}
