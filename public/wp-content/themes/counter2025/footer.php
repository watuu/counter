    <div class="cm-block-cta">
        <div class="cm-block-cta-item">
            <a class="cm-block-cta-item__link" href="<?= home_url() ?>/download/">
                <div class="cm-block-cta-item__wrap">
                    <p class="cm-block-cta-item__en">(Download)</p>
                    <h3 class="cm-block-cta-item__title">資料請求</h3>
                    <p class="cm-block-cta-item__desc">COUNTERの会社案内や<br/>デジタルマーケティング、WEBサイト制作の<br/>お役立ち資料が無料でダウンロード頂けます。</p>
                </div>
            </a>
        </div>
        <div class="cm-block-cta-item">
            <a class="cm-block-cta-item__link" href="<?= home_url() ?>/contact/">
                <div class="cm-block-cta-item__wrap">
                    <p class="cm-block-cta-item__en">(Contact)</p>
                    <h3 class="cm-block-cta-item__title">お問い合わせ</h3>
                    <p class="cm-block-cta-item__desc">COUNTERに無料で相談したい方は、<br/>お気軽にお問い合わせください。<br/>担当者よりご連絡いたします。</p>
                </div>
            </a>
        </div>
    </div>
</main>
<aside class="l-aside">
    <ul class="l-aside-cta">
        <li><a class="c-btn-aside" href="<?= home_url() ?>/download/"><span class="c-btn-aside__txt"><span class="js-clone">資料ダウンロード</span></span><i class="c-btn-aside__arrow">
                    <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></li>
        <li><a class="c-btn-aside" href="<?= home_url() ?>/contact/"><span class="c-btn-aside__txt"><span class="js-clone">お問い合わせ</span></span><i class="c-btn-aside__arrow">
                    <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></li>
    </ul>
    <div class="l-aside-stalker">
        <div class="c-btn-stalker">
            <div class="c-btn-stalker__wrap"><i class="c-btn-stalker__dot"></i></div>
        </div>
    </div>
</aside>
<footer class="l-footer is-section-dark">
    <div class="l-container">
        <div class="l-footer__wrap">
            <div class="l-footer-top">
                <p class="l-footer-top__area"><span>SAITAMA</span><span>越谷</span></p>
                <p>ローカルから最先端をつくる。</p>
                <p class="l-footer-top__download"><a class="c-btn-txt" href="<?= home_url() ?>/download/"><span class="js-clone">DOWNLOAD</span></a></p>
            </div>
            <p class="l-footer-type js-split-text js-visible-span">Turn the mainstream <br>upside down.</p>
            <div class="l-footer-nav">
                <ul class="l-footer-nav__nav">
                    <li><a class="c-btn-footer" href="<?= home_url() ?>/company/"><span class="c-btn-footer__txt"><span class="js-clone">ABOUT US</span></span><i class="c-btn-footer__arrow">
                                <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></li>
                    <li><a class="c-btn-footer" href="<?= home_url() ?>/service/"><span class="c-btn-footer__txt"><span class="js-clone">SERVICE</span></span><i class="c-btn-footer__arrow">
                                <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></li>
                    <li><a class="c-btn-footer" href="<?= home_url() ?>/creative-case/"><span class="c-btn-footer__txt"><span class="js-clone">CASESTUDY</span></span><i class="c-btn-footer__arrow">
                                <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></li>
                    <li><a class="c-btn-footer" href="<?= home_url() ?>/case/"><span class="c-btn-footer__txt"><span class="js-clone">VOICE</span></span><i class="c-btn-footer__arrow">
                                <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></li>
                    <li><a class="c-btn-footer" href="<?= home_url() ?>/news/"><span class="c-btn-footer__txt"><span class="js-clone">NEWS</span></span><i class="c-btn-footer__arrow">
                                <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></li>
                </ul>
                <p class="l-footer-nav__contact"><a class="c-btn-footer c-btn-footer--contact" href="<?= home_url() ?>/contact/"><span class="c-btn-footer__txt"><span class="js-clone">Contact Us</span></span><i class="c-btn-footer__arrow">
                            <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></p>
            </div>
            <div class="l-footer-bottom">
                <ul class="l-footer-bottom__nav">
                    <li><a href="https://www.youtube.com/@countermarketing" target="_blank" rel="noopener">YouTube</a></li>
                    <li><a href="<?= home_url() ?>/counter-media/">COUNTER MEDIA</a></li>
                    <li><a href="https://x.com/webkirin" target="_blank" rel="noopener">X</a></li>
                </ul>
                <figure class="l-footer-bottom__pic"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/footer-pic.webp" alt=""/></figure>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="<?= get_stylesheet_directory_uri() ?>/assets/js/app.js"></script>
<svg display="none">
    <defs>
        <symbol id="ico-arrow" viewBox="0 0 40 40">
            <path d="M30.2178 1.00684L30.2178 6.01176L1.02241 6.01176L1.02241 1.00683L30.2178 1.00684Z" stroke="none"/>
            <path d="M38.9766 38.9604L33.9716 38.9604L33.9716 4.76016L38.9766 4.55162L38.9766 38.9604Z" stroke="none"/>
            <path d="M35.4049 1.00038L38.9766 4.55178L4.56776 38.9606L0.999699 35.4056L35.4049 1.00038Z" stroke="none"/>
        </symbol>
        <symbol id="ico-down" viewBox="0 0 60 60">
            <path d="M27.331 51.1844L3 26.8535L6.53899 23.3145L27.331 44.1064V2.52249L32.3677 2.51421V51.1706L27.331 51.1844ZM32.492 43.9587L53.1362 23.3145L56.6752 26.8535L36.031 47.4977L32.492 43.9587Z"/>
            <rect x="7.85999" y="53.8676" width="44" height="5"/>
        </symbol>
        <symbol id="ico-btn-menu" viewBox="0 0 60 60">
            <circle cx="30" cy="30" r="29.5" fill="#fff" stroke-width=1 stroke="#FF552B"/>
            <path fill="#FF552B" d="M22.5 22.5h6.563v6.563H22.5zM22.5 30.938h6.563v6.563H22.5zM30.938 22.5h6.563v6.563h-6.563zM30.938 30.938h6.563v6.563h-6.563z"/>
        </symbol>
        <symbol id="ico-search" viewBox="0 0 16 17">
            <path d="M11 12L15.5 16.5" />
            <circle cx="7" cy="7" r="6.5" />
        </symbol>
        <symbol id="ico-external" viewBox="0 0 24 19">
            <path d="M24 1.49609V15.9932H21.8916V3.60449L9.50293 15.9932L8 14.4951L22.4951 0L24 1.49609ZM20.3096 2.11133H8.00879V0.00292969H20.3096V2.11133Z" fill="#FF552B"/>
            <rect x="1" y="6" width="17" height="12" stroke="#FF552B" fill="transparent" stroke-width="2"/>
        </symbol>
        <symbol id="ico_arrow_r" viewBox="0 0 24 24">
        </symbol>
    </defs>
</svg>
</body>
</html>