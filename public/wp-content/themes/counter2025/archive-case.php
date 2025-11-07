<?php get_header(); ?>
    <div class="p-case">
        <div class="cm-block-header">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__en">Case</p>
                    <h1 class="cm-block-header__ja">お客様成功事例</h1>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>Case</span></li>
                </ul>
            </div>
        </div>
        <div class="l-container">
            <div class="p-case__list">
                <?php if (have_posts()): ?>
                    <?php get_template_part('template/loop-case') ?>
                <?php endif; ?>
            </div>
            <div class="p-case__paginate">
                <?php theme_posts_pagination(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>