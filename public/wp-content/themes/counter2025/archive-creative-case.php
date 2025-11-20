<?php get_header(); ?>
    <div class="p-creative">
        <div class="cm-block-header">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__en">Casestudy</p>
                    <h1 class="cm-block-header__ja">制作実績一覧</h1>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>Casestudy</span></li>
                </ul>
            </div>
        </div>
        <div class="p-creative__pickup">
            <div class="c-card-creative c-card-creative--lg"><a class="c-card-creative__link" href="<?= home_url() ?>/single-creative/">
                    <figure class="c-card-creative__pic"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/16x9.webp" alt=""/></figure>
                    <div class="c-card-creative__wrap">
                        <h3 class="c-card-creative__title">世界へボカン様 BtoBコーポレートサイト</h3>
                        <ul class="c-card-creative__category">
                            <li>世界へボカン様</li>
                            <li>BtoBサービスサイト</li>
                        </ul>
                        <p class="c-card-creative__excerpt">世界へボカン株式会社様のロゴデザイン、サイトリニューアル、撮影をCOUNTERで制作しました。「日本の魅力を世界へ届ける。」を体現するデザイン、そしてSEOに強いページを作らせていただきました。</p><i class="c-card-creative__arrow">
                            <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i>
                    </div></a></div>

            <div class="l-container">
                <div class="p-creative__list">
                    <?php if (have_posts()): ?>
                        <?php get_template_part('template/loop-creative-case') ?>
                    <?php endif; ?>
                </div>
                <div class="p-creative__paginate">
                    <?php theme_posts_pagination(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>