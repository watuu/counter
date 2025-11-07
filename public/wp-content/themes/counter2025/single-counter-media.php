<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    $eyeCatch = esc_url(get_the_post_thumbnail_url());
    $terms = get_the_terms(null, 'download-category');
    $settings = [
        'terms' => $terms,
        'term' => $terms? $terms[0]: (object)[],
        'modal' => [
            'visible' => get_field('blog-modal-visible', get_the_ID()),
            'post_id' => get_field('blog-modal', get_the_ID())[0],
        ]
    ];
    ?>
    <link rel='stylesheet' id='vk-blocks-build-css-css' href='https://counter-digital.jp/wp-content/plugins/vk-blocks/build/block-build.css?ver=1.102.0.1' media='all' />
    <link rel='stylesheet' id='vk-blocks-build-css-css' href='https://counter-digital.jp/wp-includes/css/dist/block-library/style.min.css?ver=6.8.3' media='all' />
    <link rel='stylesheet' id='vk-blocks-build-css-css' href='https://counter-digital.jp/wp-content/plugins/easy-table-of-contents/assets/css/screen.min.css?ver=2.0.73' media='all' />
    <div class="p-media p-media--single">
        <div class="cm-block-header cm-block-header--mediaSingle">
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
                    <li><a href="<?= home_url() ?>/counter-media/">Blog</a></li>
                    <li><span><?= get_the_title() ?></span></li>
                </ul>
            </div>
        </div>
        <div class="l-container">
            <div class="p-media__wrap">
                <div class="p-media__aside">
                    <?php get_template_part('template/aside-media') ?>
                </div>
                <div class="p-media__content">
                    <div class="p-media-post">
                        <div class="p-media-post__meta">
                            <p class="p-media-post__date"><?= get_the_date('Y.m.d') ?></p>
                            <p class="p-media-post__category"><?= $settings['term']->name ?></p>
                        </div>
                        <h1 class="p-media-post__title"><?= get_the_title() ?></h1>
                    </div>
                    <div class="p-media-post__body cm-post">
                        <?php if ($eyeCatch): ?>
                            <figure class="cm-post-eyecatch"><img src="<?= $eyeCatch ?>"/></figure>
                        <?php endif; ?>
                        <?php the_content(); ?>
                    </div>
                </div>
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
    <?php if ($settings['modal']['visible']): ?>
        <div class="cm-modal" id="modal-blog" aria-hidden="true">
            <div class="cm-modal__overlay" tabindex="-1" data-micromodal-close="">
                <div class="cm-modal__wrap" role="dialog" aria-modal="true">
                    <button class="cm-modal__close" aria-label="Close modal" data-micromodal-close=""><span></span><span></span></button>
                    <div class="cm-modal__container">
                        <div class="cm-modal-blog">
                            <figure class="cm-modal-blog__bnr">
                                <a href="<?= get_field('blog-modal-contents-url', $settings['modal']['post_id']) ?>">
                                    <img src="<?= get_field('blog-modal-contents-image', $settings['modal']['post_id']) ?>" alt=""/>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>