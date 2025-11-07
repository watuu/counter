<?php get_header(); ?>
    <div class="p-news">
        <div class="cm-block-header">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__en">News</p>
                    <h1 class="cm-block-header__ja">ニュース</h1>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>News</span></li>
                </ul>
            </div>
        </div>
        <div class="l-container">
            <div class="p-news__wrap">
                <div class="p-news__aside">
                    <ul class="cm-nav-aside">
                        <?php
                        $query_object = get_queried_object();
                        $current_term = $query_object->slug?? '';
                        echo sprintf('<li><a class="cm-nav-aside__link %s" href="%s">%s</a></li>',
                            $current_term? '': 'is-current',
                            home_url() . '/download/',
                            'All Post'
                        );
                        $categories = get_terms(['taxonomy' => 'category', 'hide_empty' => false]);
                        foreach ($categories as $term) {
                            $class = $term->slug == $current_term? ' is-current': '';
                            echo sprintf('<li><a class="cm-nav-aside__link %s" href="%s">%s</a></li>',
                                $class,
                                get_term_link($term),
                                $term->name
                            );
                        }
                        ?>
                    </ul>
                </div>
                <div class="p-news__list">
                    <?php if (have_posts()): ?>
                        <?php get_template_part('template/loop-post') ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="p-news__paginate">
                <?php theme_posts_pagination(); ?>
            </div>
        </div>
        <div class="p-news__media">
            <div class="l-container l-container--md">
                <?php get_template_part('template/cm-block-media') ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>