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
        if (document.querySelector('.p-company-member__list')) {
            this.pCompanyModal()
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
            loopAdditionalSlides: document.querySelectorAll('.cm-block-media-youtube .swiper-slide').length,
            slidesPerView: 1,
            spaceBetween: 16,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.cm-block-media-youtube__paginate',
                clickable: true,
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

    pCompanyModal() {
        MicroModal.init({
            onClose: modal => {
                // メンバー
                const img = modal.querySelector('.cm-modal-member__pic img');
                if (img) {
                    img.src = '';
                }
            }
        });

        const jsonDataElement = document.getElementById('memberData');
        const modal = document.getElementById('modal-member');
        if ($('.c-btn-member').length && jsonDataElement && modal) {
            let currentOrder = 1;
            const memberData = JSON.parse(jsonDataElement.textContent);

            const preloadedImages = {};
            if (memberData) {
                memberData.forEach(member => {
                    if (member['pic']) {
                        const img = new Image();
                        img.src = member['pic'];
                        preloadedImages[member.order] = img;
                    }
                });
            }

            function updateModal(order) {
                const member = memberData.find(item => item.order === order);
                if (!member) return;
                gsap.timeline({
                    defaults: {
                        ease: 'none'
                    }
                })
                    .to('.cm-modal-member', {
                        opacity: 0,
                        duration: 0.3,
                        ease: 'power3.out',
                    })
                    .add( function(){
                        // モーダル内のDOM要素を更新
                        document.querySelector(".cm-modal-member__pic img").src = member['pic'];
                        document.querySelector(".cm-modal-member #job").textContent = member.job;
                        document.querySelector(".cm-modal-member #name").textContent = member.name;
                        document.querySelector(".cm-modal-member #message p").innerHTML = member.message;

                        currentOrder = order;
                    })
                    .to('.cm-modal-member', {
                        opacity: 1,
                        delay: 0.1,
                        duration: 0.3,
                        ease: 'power3.out',
                    })

            }

            document.querySelectorAll(".c-btn-member").forEach(button => {
                button.addEventListener("click", () => {
                    const order = parseInt(button.getAttribute("data-order"));
                    updateModal(order);
                });
            });

        }

    }

    pMediaPickup() {
        const mySwiper = new Swiper ('.p-media-pickup .swiper', {
            loop: true,
            loopAdditionalSlides: document.querySelectorAll('.p-media-pickup .swiper .swiper-slide').length,
            slidesPerView: 1,
            spaceBetween: 12,
            initialSlide: 1,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.p-media-pickup__paginate',
                clickable: true,
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
