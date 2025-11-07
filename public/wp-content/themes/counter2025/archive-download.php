<?php get_header(); ?>
    <div class="p-download">
        <div class="cm-block-header">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__en">Download</p>
                    <h1 class="cm-block-header__ja">資料ダウンロード</h1>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>Download</span></li>
                </ul>
            </div>
        </div>
        <div class="l-container">
            <div class="p-download__wrap">
                <div class="p-download__nav">
                    <ul class="cm-nav-category">
                        <?php
                        $query_object = get_queried_object();
                        $current_term = $query_object->slug?? '';
                        echo sprintf('<li><a class="cm-nav-category__link %s" href="%s">%s</a></li>',
                            $current_term? '': 'is-current',
                            home_url() . '/download/',
                            'すべて'
                        );
                        $categories = get_terms(['taxonomy' => 'download-category', 'hide_empty' => false]);
                        foreach ($categories as $term) {
                            $class = $term->slug == $current_term? ' is-current': '';
                            echo sprintf('<li><a class="cm-nav-category__link %s" href="%s">%s</a></li>',
                                $class,
                                get_term_link($term),
                                $term->name
                            );
                        }
                        ?>
                    </ul>
                </div>
                <div class="p-download__list">
                    <?php if (have_posts()): ?>
                        <?php get_template_part('template/loop-download') ?>
                    <?php endif; ?>
                </div>
                <div class="p-download__paginate">
                    <?php theme_posts_pagination(); ?>
                </div>
            </div>
        </div>
        <div class="p-download__media">
            <div class="l-container l-container--md">
                <?php get_template_part('template/cm-block-media') ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>