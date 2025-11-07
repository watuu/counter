<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php

    ?>
    <div class="p-download-single">
        <div class="cm-block-header cm-block-header--download">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <h1 class="cm-block-header__ja"><?= get_the_title() ?></h1>
                    <div class="cm-block-header__desc"><?php the_content(); ?></div>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><a href="<?= home_url() ?>/download/"> Download</a></li>
                    <li><span><?= get_the_title() ?></span></li>
                </ul>
            </div>
        </div>
        <div class="l-container l-container--md">
            <div class="p-download-single__wrap">
                <aside class="p-download-single__aside">
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <?php
                        $image = get_field('download-thumbnail' . $i);
                        if (!empty($image)):
                        ?>
                            <figure><img src="<?= esc_url($image) ?>" alt=""/></figure>
                        <?php endif; ?>
                    <?php endfor; ?>
                </aside>
                <div class="p-download-single__form">
                    <div class="cm-form cm-form--download">
                        <?php
                        echo do_shortcode('[contact-form-7 id="973a6ee" title="資料ダウンロードフォーム"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-download-single__bottom">
            <div class="p-download-single__client">
                <figure class="js-clone"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/p-download-client.webp"/></figure>
            </div>
            <div class="p-download-single__media">
                <div class="l-container l-container--md">
                    <?php get_template_part('template/cm-block-media') ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>