// 無限スライダー

document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.poplog-infinite__slider');
    const sliderInner = document.querySelector('.poplog-infinite__slider-inner');

    sliderInner.innerHTML += sliderInner.innerHTML;
    gsap.set(slider, {
        x: 0
    });
    const tl = gsap.timeline({
        repeat: -1,
        defaults: {
            ease: 'none'
        }
    });
    const sliderWidth = sliderInner.offsetWidth / 2;
    tl.to(slider, {
        x: -sliderWidth,
        duration: 20,
        ease: 'none',
        onComplete: () => {
            gsap.set(slider, { x: 0 });
        }
    });


    const hamburger = document.querySelector('.poplog-header__hamburger');
    const nav = document.querySelector('.js-nav');
    const body = document.body;

    // オーバーレイを動的に追加
    const overlay = document.createElement('div');
    overlay.className = 'poplog-header__overlay';
    body.appendChild(overlay);

    hamburger.addEventListener('click', function () {
        this.classList.toggle('is-active');
        nav.classList.toggle('is-active');
        overlay.classList.toggle('is-active');
        body.classList.toggle('no-scroll'); // スクロール防止
    });

    // オーバーレイクリックでメニューを閉じる
    overlay.addEventListener('click', function () {
        hamburger.classList.remove('is-active');
        nav.classList.remove('is-active');
        this.classList.remove('is-active');
        body.classList.remove('no-scroll');
    });


    const jsCtaSection = document.querySelector('.poplog-js-cta');
    const jsSpSection = document.querySelector('.poplog-js-sp');
    const mvSection = document.querySelector('.poplog-mv');
    const formSection = document.querySelector('#poplog-form');
    let isClosed = false;
    let showCTA, showSpCTA;

    // 閉じるボタンのイベントリスナー
    const closeButton = document.querySelector('.poplog-js-cta__close');
    if (closeButton) {
        closeButton.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                if (showSpCTA) {
                    showSpCTA.reverse();
                    jsSpSection.classList.remove('is-active');
                }
            } else {
                if (showCTA) {
                    showCTA.reverse();
                    jsCtaSection.classList.remove('is-active');
                }
            }
            isClosed = true;
        });
    }

    gsap.registerPlugin(ScrollTrigger);

    function initAnimations() {
        // 既存のScrollTriggerをクリア
        ScrollTrigger.getAll().forEach(trigger => trigger.kill());

        // デバイスサイズに応じた表示制御
        if (window.innerWidth <= 768) {
            // モバイル表示設定
            gsap.set(jsCtaSection, { display: 'none' });
            gsap.set(jsSpSection, { display: 'block', yPercent: 200 }); // 初期位置を設定

            showSpCTA = gsap.to(jsSpSection, {
                yPercent: 0,
                duration: 0.5,
                ease: "power2.out",
                autoAlpha: 1,
                paused: true
            });

            // MVセクション後のスクロールトリガー
            ScrollTrigger.create({
                trigger: mvSection,
                start: "bottom top",
                onUpdate: (self) => {
                    if (!isClosed) {
                        if (self.direction === 1 && self.progress === 1) {
                            showSpCTA.play();
                            jsSpSection.classList.add('is-active');
                        } else if (self.direction === -1 && self.progress < 1) {
                            showSpCTA.reverse();
                            jsSpSection.classList.remove('is-active');
                        }
                    }
                }
            });

            // フォームセクション付近でのCTA非表示
            ScrollTrigger.create({
                trigger: formSection,
                start: "top 80%",
                onEnter: () => {
                    if (!isClosed) {
                        showSpCTA.reverse();
                        jsSpSection.classList.remove('is-active');
                    }
                }
            });

        } else {
            // PC表示設定
            gsap.set(jsSpSection, { display: 'none' });
            gsap.set(jsCtaSection, { display: 'block', yPercent: 200 }); // 初期位置を設定

            showCTA = gsap.to(jsCtaSection, {
                yPercent: 0,
                duration: 0.5,
                ease: "power2.out",
                autoAlpha: 1,
                paused: true
            });

            // MVセクション後のスクロールトリガー
            ScrollTrigger.create({
                trigger: mvSection,
                start: "bottom top",
                onUpdate: (self) => {
                    if (!isClosed) {
                        if (self.direction === 1 && self.progress === 1) {
                            showCTA.play();
                            jsCtaSection.classList.add('is-active');
                        } else if (self.direction === -1 && self.progress < 1) {
                            showCTA.reverse();
                            jsCtaSection.classList.remove('is-active');
                        }
                    }
                }
            });

            // フォームセクション付近でのCTA非表示
            ScrollTrigger.create({
                trigger: formSection,
                start: "top 80%",
                onEnter: () => {
                    if (!isClosed) {
                        showCTA.reverse();
                        jsCtaSection.classList.remove('is-active');
                    }
                }
            });
        }
    }

    // 初期化
    initAnimations();

    // リサイズ時の処理
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            initAnimations();
        }, 250); // リサイズ完了後250msで実行
    });
});

$(document).ready(function () {
    $('.poplog-flow__slider-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.poplog-flow__slider-prev'),
        nextArrow: $('.poplog-flow__slider-next'),
        fade: true,
        speed: 400,
        cssEase: 'linear',
        adaptiveHeight: false, // falseに変更
        infinite: true,
        dots: false,
        // variableWidthは不要なので削除
    }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $('.step-item').removeClass('active');
        $('.step-item').eq(nextSlide).addClass('active');
    });

    // step-itemクリック時の処理
    $('.step-item').on('click', function () {
        const slideIndex = $(this).index('.step-item');
        $('.poplog-flow__slider-container').slick('slickGoTo', slideIndex);
    });
});

$(document).ready(function () {
    // poplog-staff用のスライダー設定
    $('.poplog-staff__slider-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.poplog-staff__slider-prev'),
        nextArrow: $('.poplog-staff__slider-next'),
        speed: 200,
        adaptiveHeight: false,
        infinite: true,
        dots: true // ドットナビゲーションを表示
    });

    $('.poplog-faq__item-question').click(function () {
        // ボタンの状態を切り替え
        $(this).find('.poplog-faq__btn').toggleClass('is-open');

        // アコーディオンをスライドで開閉
        $(this).next('.poplog-faq__item-answer').slideToggle(300);
    });


    $('.media-flex__desc-more').on('click', function () {
        $(this).parent('.media-flex__desc').addClass('is-open');
    });


});


