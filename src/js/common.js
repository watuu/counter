// import barba from '@barba/core';
import $ from "jQuery";
import Utility from './utility';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger'

import 'overlayscrollbars/overlayscrollbars.css';
import {
    OverlayScrollbars,
    // ScrollbarsHidingPlugin,
    // SizeObserverPlugin,
    // ClickScrollPlugin
} from 'overlayscrollbars';

/*
 * common
 * 共通変数と関数
 */
export default class common {

    constructor() {
        gsap.registerPlugin(ScrollTrigger);
        // barba.hooks.beforeOnce((data) => {
        //     console.log('once')
        //     this.load();
        // })
        // barba.hooks.after((data) => {
        //     console.log('after')
        //     this.load();
        // });
    }

    load() {
        console.log('load')
        const osInstance = OverlayScrollbars(document.querySelector('body'), {
            showNativeOverlaidScrollbars: true,
        });

        this.loader();
        this.scrollEvent();
        this.setDeviceClassToBody();
        this.globalMenu();
        this.smoothScroll();
        this.cMouseStalker();
        this.jsSplitText();
        this.jsClone();
        this.jsStickySection();
        this.jsAccordion();
        this.isSectionDark();
        this.isVisible();
        this.isVisibleSpan();
        this.isVisibleType();
    }

    reload() {
    }

    /*
     * loader()
     * ローディング処理
     */
    loader() {
        const loadedClass = 'loadedLower';
        const classNameScroll = 'is-scrolled';
        const marginScrolled = 300;

        setTimeout(() => {
            document.body.classList.add(loadedClass);
        }, 500);

        const handleScroll = () => {
            if (window.scrollY > marginScrolled) {
                document.body.classList.add(classNameScroll);
            } else {
                document.body.classList.remove(classNameScroll);
            }
        };

        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', handleScroll);
        window.addEventListener('orientationchange', handleScroll);

    }

    /*
     * scrollEvent
     * スクロール動作
     */
    scrollEvent() {
        let defPos = 0;
        let ticking = false;

        window.addEventListener('scroll', () => {
            if (!ticking) {
                ticking = true;
                requestAnimationFrame(() => {
                    addBodyScrollClass();
                    ticking = false;
                });
            }
        });

        function addBodyScrollClass() {
            let currentPos = window.scrollY;
            if (currentPos > defPos) {
                if (currentPos >= 200) {
                    document.body.classList.add('scrollDown');
                    document.body.classList.remove('scrollUp');
                }
            } else {
                document.body.classList.remove('scrollDown');
                document.body.classList.add('scrollUp');
            }
            defPos = currentPos;
        }

        // footerクラスの存在チェックとScrollTrigger
        const footer = document.querySelector('.l-footer');
        if (footer) {
            ScrollTrigger.create({
                trigger: footer,
                start: 'top bottom',
                onEnter: () => document.body.classList.add('is-footer-show'),
                onLeaveBack: () => document.body.classList.remove('is-footer-show'),
            });
        }
    }

    /*
     * globalMenu
     * グローバルメニューの動作
     */
    globalMenu() {

        const classNameNavOpen = 'is-nav-open';
        const classNameNavClose = 'is-nav-closing';
        const header = document.querySelector('.l-header');
        const btnMenu = document.querySelector('.l-header-menu');
        const btnMegaMenu = document.querySelector('#btnNavService');

        if (!header || !btnMenu) return;

        btnMenu.addEventListener('click', () => {
            btnMenu.classList.toggle(classNameNavOpen);
            if (btnMenu.classList.contains(classNameNavOpen)) {
                document.body.classList.add(classNameNavOpen);
            } else {
                navClose();
            }
        });

        btnMegaMenu.addEventListener('mouseenter', (e) => {
            // e.preventDefault()
            if (!document.body.classList.contains('is-megaMenu-closing')) {
                btnMegaMenu.classList.toggle('is-megaMenu-open');
                if (btnMegaMenu.classList.contains('is-megaMenu-open')) {
                    document.body.classList.add('is-megaMenu-open');
                } else {
                    navClose();
                }
            }
        });

        const headerLinks = header.querySelectorAll('.l-header-nav a');
        // headerLinks.forEach(link => {
        //     link.addEventListener('click', () => {
        //         btnMenu.classList.remove(classNameNavOpen);
        //         navClose();
        //     });
        // });
        headerLinks.forEach(link => {
            if (!link.matches('#btnNavService')) {
                link.addEventListener('mouseenter', () => {
                    if (document.body.classList.contains('is-megaMenu-open')) {
                        btnMegaMenu.classList.remove('is-megaMenu-open');
                        navClose();
                    }
                });
            }
        });

        // メガメニューエリア外でclose
        const headerMegaMenuClose = header.querySelector('.l-header-megaMenu__close');
        headerMegaMenuClose.addEventListener('mouseenter', (e) => {
            if (document.body.classList.contains('is-megaMenu-open')) {
                btnMegaMenu.classList.remove('is-megaMenu-open');
                navClose();
            }
        });

        // ナビゲーションを閉じる処理
        function navClose() {
            document.body.classList.remove(classNameNavOpen, 'is-megaMenu-open');
            document.body.classList.add(classNameNavClose, 'is-megaMenu-closing');
            setTimeout(() => {
                document.body.classList.remove(classNameNavClose, 'is-megaMenu-closing');
            }, 600);
        }

        // Escキーでメニューを閉じる
        window.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' || event.keyCode === 27) {
                btnMenu.classList.remove(classNameNavOpen);
                btnMegaMenu.classList.remove('is-megaMenu-open');
                navClose();
            }
        });

        // 検索ボタン
        const formSearch = document.querySelector('.l-header-drawer__search .c-form-search');
        const button = document.querySelector('.l-header-drawer__search .c-form-search__btn');
        if (!Utility.isPC()) {
            button.addEventListener('click', (e) => {
                if (!formSearch.classList.contains('is-show')) {
                    e.preventDefault();
                    formSearch.classList.add('is-show');
                }
            });
        }
    }

    /*
     * smoothScroll
     * アンカーリンクのスムーススクロール
     */
    smoothScroll() {

        const anchors = document.querySelectorAll('a[data-scroll-anchor]:not(.noscroll)');

        anchors.forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();

                const href = anchor.getAttribute('href');
                const index = href.indexOf('#');
                if (index === -1) return;

                const targetSelector = href.slice(index);
                const target = document.querySelector(targetSelector);
                if (!target) return;

                const targetPos = target.getBoundingClientRect().top + window.pageYOffset;
                const currentScroll = window.pageYOffset;
                let scroll = Math.abs(currentScroll - targetPos);
                let duration = 0.7 * scroll;

                if (duration > 300) {
                    duration = 300;
                }

                // スクロール
                window.scrollTo({
                    top: targetPos,
                    behavior: 'smooth'
                });

                // スクロール後にURL更新（元の動作と完全一致はしないが、ほぼ同様）
                setTimeout(() => {
                    history.pushState(null, '', href);
                }, duration);
            });
        });
    }

    cMouseStalker() {
        const btn = document.querySelector('.l-aside-stalker .c-btn-stalker');
        const stalkerTriggers = document.querySelectorAll('.js-stalker-show, a[class^="c-card"]');

        if (btn && ScrollTrigger.isTouch !== 1) {
            const xTo = gsap.quickTo(btn, "x", { duration: 0.2, ease: "power2.out" });
            const yTo = gsap.quickTo(btn, "y", { duration: 0.2, ease: "power2.out" });

            document.addEventListener('mousemove', (e) => {
                const shift = btn.offsetWidth / 2;
                xTo(e.clientX - shift);
                yTo(e.clientY - shift);
            });

            // document.addEventListener('mousemove', (e) => {
            //     const shift = btn.offsetWidth / 2;
            //
            //     gsap.to(btn, {
            //         x: e.clientX - shift,
            //         y: e.clientY - shift,
            //         ease: 'power1.out',
            //         delay: 0.005,
            //     });
            // });

            stalkerTriggers.forEach(trigger => {
                trigger.addEventListener('mouseenter', () => {
                    btn.classList.add('on-stalker-show');
                });
                trigger.addEventListener('mouseleave', () => {
                    btn.classList.remove('on-stalker-show');
                });
            });
        }
    }


    jsClone() {
        const elements = document.querySelectorAll('.js-clone');

        elements.forEach(el => {
            // data-clone-num の数だけ複製
            const cloneNum = parseInt(el.dataset.cloneNum, 10) || 1;

            for (let i = 0; i < cloneNum; i++) {
                const clone = el.cloneNode(true);
                clone.setAttribute('aria-hidden', 'true');
                el.parentNode.insertBefore(clone, el.nextSibling);
            }
        });
    }

    jsSplitText() {
        const domList = document.querySelectorAll('.js-split-text');

        if (domList.length) {
            domList.forEach(el => {
                Utility.convertSpiltSpan(el);
            });
        }
    }

    jsStickySection() {
        const container = document.querySelector('.js-sticky-section');
        const pin = document.querySelector('.js-sticky-section__aside');
        const asideLis = document.querySelectorAll('.js-sticky-section__aside li');
        const sections = document.querySelectorAll('.js-sticky-section__content section');

        if (container && pin && Utility.isPC()) {
            window.addEventListener('load', () => {
                // sticky
                const pinUl = pin.querySelector('ul');
                const pinHeight = pinUl ? pinUl.offsetHeight : 0;

                ScrollTrigger.create({
                    trigger: container,
                    start: 'top top+=160px',
                    end: `bottom top+=${pinHeight}`,
                    pin: pin,
                    pinSpacing: false,
                    markers: false,
                });

                // 現在地表示
                sections.forEach((section, index) => {
                    ScrollTrigger.create({
                        trigger: section,
                        start: 'top top+=160px',
                        end: 'bottom top+=160px',
                        markers: false,
                        onEnter: () => {
                            asideLis.forEach(li => li.classList.remove('is-current'));
                            if (asideLis[index]) {
                                asideLis[index].classList.add('is-current');
                            }
                        },
                        onEnterBack: () => {
                            asideLis.forEach(li => li.classList.remove('is-current'));
                            if (asideLis[index]) {
                                asideLis[index].classList.add('is-current');
                            }
                        },
                    });
                });
            });
        }
    }


    jsAccordion() {
        // vars
        const btn = '.js-accordion';

        // functions
        if ($(btn).length) {
            $(btn).on('click', function(e){
                e.preventDefault()
                let isFlex = $(this).attr('data-accordion-flex')? true: false;
                $(this).toggleClass('is-open')
                if ($(this).hasClass('is-open')) {
                    if (isFlex) {
                        $(this).next().stop(0, 0).slideDown({
                            start: function () {
                                $(this).css({
                                    display: "flex"
                                })
                            }
                        })
                    } else {
                        $(this).next().stop(0, 0).slideDown()
                    }
                } else {
                    $(this).next().stop(0, 0).slideUp()
                }
            })
        }
    }

    isSectionDark() {
        const shift = Utility.isPC()?
            100/1440*window.innerWidth/2:
            75/390*window.innerWidth/2

        document.querySelectorAll('.is-section-dark:not(.l-header-drawer):not(.l-header-megaMenu)').forEach(section => {
            ScrollTrigger.create({
                trigger: section,
                start: `top-=${shift} top`,
                end: `bottom-=${shift} top`,
                markers: false,

                onEnter: () => document.body.classList.add('is-header-dark'),
                onLeave: () => document.body.classList.remove('is-header-dark'),
                onEnterBack: () => document.body.classList.add('is-header-dark'),
                onLeaveBack: () => document.body.classList.remove('is-header-dark'),
            });
        });
    }

    isVisible() {
        const elements = document.querySelectorAll('.js-visible');

        elements.forEach(el => {
            ScrollTrigger.create({
                trigger: el,
                toggleClass: 'is-visible',
                start: 'top bottom-=20%',
                once: true,
                onEnter: () => {
                    const handler = (e) => {
                        if (e.propertyName === 'clip-path') {
                            el.classList.add('is-active');
                            el.removeEventListener('transitionend', handler);
                        }
                    };
                    el.addEventListener('transitionend', handler);
                }
            });
        });
    }

    isVisibleSpan() {
        const domList = document.querySelectorAll('.js-visible-span');

        if (domList.length) {
            domList.forEach(el => {
                const spans = el.querySelectorAll('span');
                const delay = parseFloat(el.getAttribute('data-delay')) || 0;
                const each = parseFloat(el.getAttribute('data-each')) || 0.015;
                const shift = el.getAttribute('data-shift') || '20%';

                gsap.set(spans, { opacity: 0, y: 10 });
                gsap.set(el, { opacity: 1});

                gsap.to(spans, {
                    scrollTrigger: {
                        trigger: el,
                        start: `top bottom-=${shift}`,
                    },
                    delay: delay,
                    opacity: 1,
                    duration: 0.01,
                    stagger: {
                        each: each,
                        from: "random",
                    },
                    ease: 'power3.out',
                });
            });
        }
    }

    isVisibleType() {
        const domList = document.querySelectorAll('.js-visible-type');

        if (domList.length) {
            domList.forEach(el => {
                Utility.convertSpiltSpan(el);
            });

            domList.forEach(el => {
                const spans = el.querySelectorAll('span');

                gsap.set(spans, { opacity: 0, y: '20%' });

                gsap.to(spans, {
                    scrollTrigger: {
                        trigger: el,
                        start: 'top bottom-=20%',
                    },
                    delay: 0.5,
                    opacity: 1,
                    y: '0%',
                    stagger: 0.03,
                    ease: 'power3.out', // 修正：typoだった 'poser3.out' → 'power3.out'
                });
            });
        }
    }


    /*globalMenu
     * setDeviceClassToBody
     * デバイスサイズによるクラス付
     */
    setDeviceClassToBody() {
        const updateBodyClass = () => {
            const body = document.body;

            body.classList.toggle('isSP', Utility.isSP());
            body.classList.toggle('isTAB', Utility.isTAB());
            body.classList.toggle('isPC', Utility.isPC());
        };

        // 初回とリサイズ等に対応
        window.addEventListener('load', updateBodyClass);
        window.addEventListener('resize', updateBodyClass);
        window.addEventListener('orientationchange', updateBodyClass);
    }

}

