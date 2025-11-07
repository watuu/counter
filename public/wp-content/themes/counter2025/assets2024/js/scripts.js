const MOBILE_BREAK_POINT = 959;
class Utils {
  // -----------------------------------------------
  // viewport切り替え（引数breakpointの幅未満はviewportを固定にする）
  // -----------------------------------------------
  static switchViewport(breakpoint, viewportWidth) {
    const viewport = document.querySelector('meta[name="viewport"]');
    const value = window.outerWidth > breakpoint ? "width=device-width,initial-scale=1,viewport-fit=cover" : "width=" + viewportWidth;
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  // -----------------------------------------------
  // 指定されたidのページの場合True返却
  // -----------------------------------------------
  static isPage(id) {
    return document.querySelector("body").getAttribute("id") === id ? true : false;
  }
  // -----------------------------------------------
  // ブラウザがIEの場合True返却
  // -----------------------------------------------
  static isIE() {
    const userAgent = window.navigator.userAgent.toLowerCase();
    if (userAgent.indexOf("msie") != -1 || userAgent.indexOf("trident") != -1) {
      return true;
    } else {
      return false;
    }
  }
  // -----------------------------------------------
  // モバイル端末なら true 、それ以外なら false を返す
  // -----------------------------------------------
  static isMobile() {
    return window.innerWidth <= MOBILE_BREAK_POINT;
  }
  // -----------------------------------------------
  // PCなら true 、それ以外なら false を返す
  // -----------------------------------------------
  static isPc() {
    return !this.isMobile();
  }
  // -----------------------------------------------
  // ブラウザの縦のサイズを取得し、セットする（iOS対策）
  // -----------------------------------------------
  static setHeightFromWindowHight(target) {
    target = document.querySelector(target);
    if (!target)
      return;
    const hSize = window.innerHeight;
    let paddingTop = 0;
    let paddingBottom = 0;
    target.style.height = hSize + paddingTop + paddingBottom + "px";
  }
  // -----------------------------------------------
  // ページ内リンクの場合Trueを返却する
  // -----------------------------------------------
  static isInPageLink(event) {
    let pageUrl = location.origin + location.pathname;
    pageUrl = pageUrl.replace(location.protocol, "");
    if (pageUrl.slice(-1) === "/") {
      pageUrl = pageUrl.slice(0, -1);
    }
    let linkHref = event.currentTarget.getAttribute("href");
    linkHref = linkHref.replace(location.protocol, "");
    let diff = linkHref.replace(pageUrl, "");
    if (diff.slice(0, 1) === "/") {
      diff = diff.slice(1);
    }
    if (diff.indexOf("#") === 0 || diff === "") {
      return true;
    } else {
      return false;
    }
  }
  // -----------------------------------------------
  // ポジション移動（スムーズスクロール）
  // -----------------------------------------------
  static movePosition(target) {
    const href = target.getAttribute("href");
    if (href.indexOf("#") < 0) {
      return true;
    }
    let targetSelector = "";
    if (href === "#") {
      targetSelector = "html";
    } else {
      const id = href.split("#");
      targetSelector = "#" + id[id.length - 1];
    }
    const targetElement = document.querySelector(targetSelector);
    if (!targetElement) {
      return false;
    }
    let scrollAdjust = parseInt(targetElement.getAttribute("data-scroll-adjust") || "0", 10);
    if (Utils.isMobile()) {
      scrollAdjust = parseInt(targetElement.getAttribute("data-scroll-adjust-sp") || scrollAdjust, 10);
    } else {
      scrollAdjust = parseInt(targetElement.getAttribute("data-scroll-adjust-pc") || scrollAdjust, 10);
    }
    const header = document.querySelector("header").clientHeight;
    console.log(header);
    const position = document.querySelector(targetSelector).getBoundingClientRect().top + window.pageYOffset - header + scrollAdjust;
    if (this.isSafari()) {
      jQuery("html, body").animate({ scrollTop: position }, "swing");
    } else {
      window.scrollTo({ top: position, behavior: "smooth" });
    }
    return false;
  }
  // -----------------------------------------------
  //iOS（iPadOSを含む）かどうかのUA判定
  // -----------------------------------------------
  static isiOS() {
    const ua = window.navigator.userAgent.toLowerCase();
    return ua.indexOf("iphone") > -1 || ua.indexOf("ipad") > -1 || ua.indexOf("macintosh") > -1 && "ontouchend" in document;
  }
  static isSafari() {
    const ua = window.navigator.userAgent.toLowerCase();
    return ua.indexOf("safari") != -1 && ua.indexOf("chrome") == -1;
  }
  // -----------------------------------------------
  // 文字列の場合はTrueを返却する
  // -----------------------------------------------
  static isString(value) {
    if (typeof value === "string" || value instanceof String) {
      return true;
    } else {
      return false;
    }
  }
}
const fadeIn = {
  set: { opacity: 0 },
  to: { opacity: 1, duration: 1.4, delay: 0, ease: "power2.easeIn" }
};
const fadeInUp = {
  set: { y: "50px", opacity: 0 },
  to: { y: "0", opacity: 1, duration: 0.3, delay: 0, ease: "power3.easeIn" }
};
const animationMap = /* @__PURE__ */ new Map();
animationMap.set("fadeIn", fadeIn);
animationMap.set("fadeInUp", fadeInUp);
function initScrollAnimation(selector, options = { once: true }) {
  const targets = document.querySelectorAll(selector);
  targets.forEach((el) => {
    const anime = Object.assign({}, animationMap.get(el.dataset.anime));
    if (!Array.isArray(anime.set)) {
      anime.set = new Array(anime.set);
    }
    anime.set.forEach((set) => {
      let target = el;
      if (set.target) {
        target = set.target;
        delete set.target;
      }
      gsap.set(target, set);
    });
    if (!Array.isArray(anime.to)) {
      anime.to = new Array(anime.to);
    }
    let st = { scrollTrigger: { trigger: el, start: "top+=150 bottom+=100" } };
    if (el.dataset.start) {
      st.scrollTrigger.start = el.dataset.start;
    }
    if (!options.once) {
      st.scrollTrigger.toggleActions = "play reset play reset";
    }
    const tl = gsap.timeline(st);
    anime.to.forEach((to, index) => {
      if (index === 0) {
        to.duration = el.dataset.duration || to.duration || 0;
        to.delay = el.dataset.delay || to.delay || 0;
      }
      let target = el;
      if (to.target) {
        target = to.target;
        delete to.target;
      }
      if (to.position || to.position === 0) {
        const position = to.position;
        delete to.position;
        tl.to(target, to, position);
        console.log(position);
      } else {
        tl.to(target, to);
      }
    });
  });
}
function preventDefaultEvent(event) {
  event.preventDefault();
}
function toggleHamburger(target, hamburgerTweenTimeline) {
  const isOpen = target.classList.toggle("is-open");
  const header = target.closest(".js-header");
  const drawer = header.querySelector(".js-drawer");
  header.classList.toggle("is-open");
  drawer.classList.toggle("is-open");
  if (isOpen) {
    hamburgerTweenTimeline.play(0);
  } else {
    hamburgerTweenTimeline.reverse();
  }
}
function createHamburgerTweenTimeline(target) {
  const line1 = target.querySelector(".hamburger__line span:nth-child(1)");
  const line2 = target.querySelector(".hamburger__line span:nth-child(2)");
  const tl = gsap.timeline({ paused: true });
  const y1 = Utils.isPc() ? 5 : 3.5;
  Utils.isPc() ? 24 : 10;
  Utils.isPc() ? 6 : 2;
  tl.to(line1, { y: y1, duration: 0.2, ease: "linear" }, 0);
  tl.to(line2, { y: y1 * -1, duration: 0.2, ease: "linear" }, 0);
  tl.to(line1, { rotate: "-45deg", duration: 0.2, ease: "power1.inOut" }, 0.2);
  tl.to(line2, { rotate: "45deg", duration: 0.2, ease: "power1.inOut" }, 0.2);
  return tl;
}
function initSwiper() {
  if (document.querySelector(".js-pickup-slider")) {
    new Swiper(".js-pickup-slider", {
      loop: true,
      centeredSlides: true,
      slidesPerView: "auto",
      spaceBetween: 36,
      speed: 800,
      pagination: {
        el: ".pickup-slider__pagination",
        clickable: true
      },
      navigation: {
        prevEl: ".pickup-slider__prev",
        nextEl: ".pickup-slider__next"
      },
      // 自動再生
      autoplay: {
        // 流れるように動かす
        delay: 3e3
      },
      breakpoints: {
        // 960px以上の場合
        960: {
          slidesPerView: "auto",
          spaceBetween: 80,
          centeredSlides: true
        }
      }
    });
  }
  let footerSlider;
  if (document.querySelector(".js-footer-slider")) {
    if (footerSlider) {
      footerSlider.destroy(true, true);
    }
    footerSlider = new Swiper(".js-footer-slider", {
      loop: true,
      slidesPerView: "auto",
      spaceBetween: 20,
      centeredSlides: true,
      speed: 1400,
      autoplay: {
        delay: 1e3,
        disableOnInteraction: false
      },
      pagination: {
        el: ".footer-feature__pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".footer-feature__next",
        prevEl: ".footer-feature__prev"
      },
      breakpoints: {
        960: {
          slidesPerView: 3,
          spaceBetween: 26
        }
      },
      on: {
        init: function() {
          this.navigation.nextEl.addEventListener("click", () => this.autoplay.stop());
          this.navigation.prevEl.addEventListener("click", () => this.autoplay.stop());
        }
      }
    });
  }
}
let scrollInterval;
function showModal() {
  const modal = document.querySelector(".js-modal");
  const scrollTop = window.scrollY;
  modal.classList.add("utils-visible");
  document.body.classList.add("utils-scroll-disabled");
  document.body.style.top = `-${scrollTop}px`;
  document.addEventListener("touchmove", preventDefaultEvent, { passive: false });
  window.scrollTo(0, scrollTop);
  scrollInterval = setInterval(() => {
    window.scrollTo(0, scrollTop);
  }, 50);
}
function hideModal(target) {
  if (scrollInterval) {
    clearInterval(scrollInterval);
  }
  target.classList.remove("utils-visible");
  document.body.style.top = "";
  document.body.classList.remove("utils-scroll-disabled");
  document.removeEventListener("touchmove", preventDefaultEvent, { passive: false });
}
function isModalPage() {
  return (Utils.isPage("single-counter-media") || document.querySelector(".js-modal-service")) && document.querySelector(".js-modal");
}
document.addEventListener("DOMContentLoaded", () => {
  Utils.switchViewport(376, 390);
  if (document.querySelector('a[href*="#"]')) {
    document.querySelectorAll('a[href*="#"]').forEach((el) => {
      if (el.closest("#ez-toc-container")) {
        return false;
      }
      el.addEventListener("click", (event) => {
        if (Utils.isInPageLink(event)) {
          event.preventDefault();
          event.stopPropagation();
          event.stopImmediatePropagation();
          Utils.movePosition(event.currentTarget);
        }
      });
    });
  }
  if (document.querySelector(".js-close-button")) {
    document.querySelectorAll(".js-close-button").forEach((button) => {
      button.addEventListener("click", () => {
        const target = button.closest(".js-close-target");
        if (target) {
          hideModal(target);
          if (button.getAttribute("data") === "once-close") {
            target.classList.add("utils-hidden");
          }
        }
      });
    });
  }
  if (document.querySelector(".js-hamburger")) {
    document.querySelectorAll(".js-hamburger").forEach((el) => {
      const hamburgerTweenTimeline = createHamburgerTweenTimeline(el);
      el.addEventListener("click", (event) => toggleHamburger(event.target, hamburgerTweenTimeline));
    });
  }
  if (document.querySelector(".js-accordion .js-accordion-button")) {
    document.querySelectorAll(".js-accordion .js-accordion-button").forEach((el) => {
      el.addEventListener("click", (event) => {
        if (event.target.tagName.toLowerCase() === "a") {
          return true;
        }
        event.preventDefault();
        event.target.classList.toggle("is-open");
        const target = event.target.querySelector(".js-accordion-target");
        jQuery(target).slideToggle(500);
        setTimeout(() => {
          ScrollTrigger.refresh();
        }, 500);
      });
    });
  }
  if (document.querySelector(".js-megamenu-link")) {
    const menuLink = document.querySelector(".js-megamenu-link");
    const megaMenu = document.querySelector(".js-megamenu");
    menuLink.addEventListener("mouseover", function() {
      megaMenu.classList.add("is-visible");
    });
    menuLink.addEventListener("mouseleave", function() {
      megaMenu.classList.remove("is-visible");
    });
  }
  if (document.querySelector(".js-scroll-anime")) {
    initScrollAnimation(".js-scroll-anime");
  }
  if (Utils.isPage("top") && document.querySelector(".js-page-top")) {
    const scrollPosition = window.scrollY || window.pageYOffset;
    const triggerElement = document.querySelector(".js-fixed-cta");
    if (scrollPosition > 100 && triggerElement) {
      triggerElement.classList.remove("move-up");
    }
    ScrollTrigger.create({ start: "top-=100 top", end: "+=100", markers: false, toggleClass: { targets: ".js-fixed-cta", className: "move-up" } });
  }
  if (document.querySelector(".js-fixed-cta")) {
    ScrollTrigger.create({ trigger: ".js-footer", start: "top bottom-=100", end: "bottom bottom-=100", markers: false, toggleClass: { targets: ".js-fixed-cta", className: "utils-hidden2" } });
    if (!Utils.isPage("top")) {
      const viewportHeight = window.innerHeight;
      ScrollTrigger.create({ start: "top-=150 center", end: `top+=${viewportHeight} center`, markers: false, toggleClass: { targets: ".js-fixed-cta", className: "utils-hidden2" } });
    }
  }
  if (isModalPage()) {
    ScrollTrigger.create({
      trigger: "body",
      start: "top+=20% center",
      markers: false,
      once: true,
      onEnter: () => {
        showModal();
      }
    });
  }
  if (document.querySelector(".js-card-more")) {
    const moreButtons = document.querySelectorAll(".js-card-more");
    moreButtons.forEach(function(button) {
      button.addEventListener("click", function() {
        const cardText = button.closest(".single-media__card").querySelector(".single-media__card-text");
        cardText.classList.remove("single-media__card-text--hidden");
        button.classList.add("utils-hidden");
      });
    });
  }
  if (document.querySelector(".js-member-item")) {
    document.querySelectorAll(".js-member-item").forEach((el) => {
      el.addEventListener("click", (event) => {
        if (event.target.querySelector(".js-modal")) {
          event.target.querySelector(".js-modal").classList.add("utils-visible");
        }
      });
    });
  }
  initSwiper();
});
window.addEventListener("load", () => {
  if (document.querySelector(".ez-toc-list.ez-toc-list-level-1")) {
    const tocList = document.querySelector(".ez-toc-list.ez-toc-list-level-1");
    if (tocList.style.display === "none") {
      document.querySelector(".ez-toc-container-direction").classList.add("toc_close");
    }
  }
});
document.addEventListener("DOMContentLoaded", function() {
  if (document.querySelector(".js-scrollable")) {
    try {
      new ScrollHint(".js-scrollable");
    } catch (error) {
      console.error("ScrollHint initialization failed:", error);
    }
  }
});
if (document.querySelector(".js-read-more")) {
  const moreButtons = document.querySelectorAll(".js-read-more");
  moreButtons.forEach(function(button) {
    button.addEventListener("click", function() {
      const moreTarget = button.previousElementSibling;
      moreTarget.classList.remove("utils-active");
      button.classList.add("utils-active");
    });
  });
}
if (document.querySelector(".js-list-ac")) {
  const moreButtons = document.querySelectorAll(".js-content__head");
  moreButtons.forEach(function(button) {
    button.addEventListener("click", function() {
      const moreTarget = button.closest(".content").querySelector(".content__body");
      moreTarget.classList.toggle("utils-active");
      button.classList.toggle("utils-active");
    });
  });
}
function initServiceSwiper() {
  if (document.querySelector(".js-pickup-slider-single")) {
    const swiper = new Swiper(".js-pickup-slider-single", {
      loop: true,
      centeredSlides: true,
      slidesPerView: 1,
      // ここで1に設定
      spaceBetween: 36,
      speed: 300,
      pagination: {
        el: ".pickup-slider__pagination",
        clickable: true
      },
      navigation: {
        prevEl: ".pickup-slider__prev",
        nextEl: ".pickup-slider__next"
      }
    });
    swiper.on("slideChange", function() {
      const moreButtons = document.querySelectorAll(".js-read-more");
      moreButtons.forEach(function(button) {
        const moreTarget = button.previousElementSibling;
        moreTarget.classList.add("utils-active");
        button.classList.remove("utils-active");
      });
    });
  }
}
document.addEventListener("DOMContentLoaded", function() {
  initServiceSwiper();
});
//# sourceMappingURL=scripts.js.map
