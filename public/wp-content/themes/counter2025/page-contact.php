<?php get_header(); ?>
    <div class="p-contact">
        <div class="cm-block-header cm-block-header--contact">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__en">Contact</p>
                    <h1 class="cm-block-header__ja">お問い合わせ</h1>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>Contact</span></li>
                </ul>
            </div>
        </div>
        <div class="l-container">
            <div class="p-contact__wrap">
                <div class="cm-form">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>