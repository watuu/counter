<?php
//wp_safe_redirect(home_url(), 301);
//exit();
?>

<?php get_header(); ?>
    <div class="p-404">
        <div class="cm-block-header">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__en">404 Not Found</p>
                    <h1 class="cm-block-header__ja">ページが見つかりません</h1>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>404 Not Found</span></li>
                </ul>
            </div>
        </div>
        <div class="l-container l-container--md">
            <div class="p-404__wrap">
                <div class="p-404-catch">
                    <p class="p-404-catch__ja">ローカルから最先端をつくる。</p>
                    <p class="p-404-catch__en">Turn The Mainstream<br/>Upside Down.</p>
                </div>
                <div class="p-404__link">
                    <a class="c-link-arrow" href="<?= home_url() ?>/">
                        <span class="c-link-arrow__txt">トップページへ戻る</span><i class="c-link-arrow__arrow"><svg width="40" height="40"><use href="#ico-arrow"></use></svg></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-404__media">
            <div class="l-container">
                <div class="u-border"></div>
            </div>
            <div class="l-container l-container--md">
                <?php get_template_part('template/cm-block-media') ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>