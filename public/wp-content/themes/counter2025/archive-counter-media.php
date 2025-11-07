<?php get_header(); ?>
    <div class="p-media">
        <div class="cm-block-header cm-block-header--media">
            <ul class="cm-block-header__category">
                <?php
                $query_object = get_queried_object();
                $current_term = $query_object->slug?? '';
                $categories = get_terms(['taxonomy' => 'counter-media-category', 'hide_empty' => false]);
                foreach ($categories as $term) {
                    $class = $term->slug == $current_term? ' is-current': '';
                    echo sprintf('<li><a class="c-btn-txt %s" href="%s"><span class="js-clone">%s</span></a></li>',
                        $class,
                        get_term_link($term),
                        $term->name
                    );
                }
                ?>
            </ul>
            <div class="l-container">
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>Blog</span></li>
                </ul>
                <p class="cm-block-header__title"> (Counter Media)</p>
            </div>
        </div>
        <?php if (!is_tag() && !is_tax() && !is_search()): ?>
            <div class="p-media-pickup">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $args = [
                            'post_type' => 'counter-media',
                            'paged' => 1,
                            'posts_per_page' => 6,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'tag' => 'pickup',
                        ];
                        $wp_query = new WP_Query($args);
                        if (have_posts()) : while (have_posts()) : the_post();
                            $eyeCatch = esc_url(get_the_post_thumbnail_url());
                            $eyeCatch = $eyeCatch? $eyeCatch:
                                sprintf('%s/assets/img/480x300.webp', get_stylesheet_directory_uri());
                        ?>
                        <div class="swiper-slide">
                            <div class="c-card-media-pickup">
                                <a class="c-card-media-pickup__link" href="<?= get_the_permalink() ?>">
                                    <figure class="c-card-media-pickup__pic"><img src="<?= $eyeCatch ?>" alt="<?= get_the_title() ?>" loading="lazy"/></figure>
                                    <p class="c-card-media-pickup__title"><?= get_the_title() ?></p>
                                </a>
                            </div>
                        </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                    </div>
                </div>
                <div class="p-media-pickup__paginate"></div>
            </div>
        <?php endif; ?>
        <div class="l-container">
            <div class="p-media__wrap">
                <div class="p-media__aside">
                    <?php get_template_part('template/aside-media') ?>
                </div>
                <div class="p-media__content">
                    <section class="p-media-list">
                        <div class="p-media-list__head">
                            <h3 class="c-heading-caption">Recent Post</h3>
                        </div>
                        <div class="p-media-list__list">
                            <?php if (have_posts()): ?>
                                <?php get_template_part('template/loop-media') ?>
                            <?php endif; ?>
                        </div>
                    </section>
                </div>
            </div>
            <div class="p-media__paginate">
                <?php theme_posts_pagination(); ?>
            </div>
        </div>
        <section class="p-media-ranking">
            <div class="l-container">
                <div class="p-media-ranking__head">
                    <h3 class="c-heading-caption">Ranking</h3>
                </div>
                <div class="p-media-ranking__list">
                    <?php
                    if ( class_exists('\WordPressPopularPosts\Query') ):
                        $wpp_query = new \WordPressPopularPosts\Query([
                            'post_type' => 'counter-media',
                            'range'     => 'all',
                            'limit'     => 3,
                            'order_by'  => 'views',
                        ]);
                        $posts = $wpp_query->get_posts();
                        if ($posts):
                    ?>
                        <?php get_template_part('template/loop-media--array', null, ['wpp_query' => $wpp_query]) ?>
                    <?php endif; endif;?>
                </div>
            </div>
        </section>
        <section class="p-media-recommend">
            <div class="l-container">
                <div class="p-media-recommend__head">
                    <h3 class="c-heading-caption">Recommend</h3>
                </div>
                <div class="p-media-recommend__list">
                    <?php
                    $args = [
                        'post_type' => 'counter-media',
                        'paged' => 1,
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'tag' => 'recommend',
                    ];
                    $wp_query = new WP_Query($args);
                    if (have_posts()) :?>
                        <?php get_template_part('template/loop-media') ?>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>