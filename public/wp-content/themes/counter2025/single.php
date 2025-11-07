<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    $eyeCatch = esc_url(get_the_post_thumbnail_url());
//    $eyeCatch = $eyeCatch? $eyeCatch:
//        sprintf('%s/assets/img/3x2.webp', get_stylesheet_directory_uri());
    ?>
    <link rel='stylesheet' id='vk-blocks-build-css-css' href='https://counter-digital.jp/wp-content/plugins/vk-blocks/build/block-build.css?ver=1.102.0.1' media='all' />
    <link rel='stylesheet' id='vk-blocks-build-css-css' href='https://counter-digital.jp/wp-includes/css/dist/block-library/style.min.css?ver=6.8.3' media='all' />
    <link rel='stylesheet' id='vk-blocks-build-css-css' href='https://counter-digital.jp/wp-content/plugins/easy-table-of-contents/assets/css/screen.min.css?ver=2.0.73' media='all' />
    <div class="p-news-single">
        <div class="cm-block-header">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__en">News</p>
                    <p class="cm-block-header__ja">ニュース</p>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><a href="<?= home_url() ?>/news/">News</a></li>
                    <li><span><?= get_the_title() ?></span></li>
                </ul>
            </div>
        </div>
        <div class="l-container">
            <div class="p-news-single__wrap">
                <h1 class="p-news-single__title"><?= get_the_title() ?></h1>
                <div class="p-news-single__body cm-post">
                    <?php if ($eyeCatch): ?>
                    <figure class="cm-post-eyecatch"><img src="<?= $eyeCatch ?>"/></figure>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php
        $pages = [
            'prev' => get_previous_post(),
            'next' => get_next_post()
        ];
        ?>
        <div class="p-news-single__page">
            <?php if ($pages['next']): ?>
                <?php
                    $terms = get_the_terms($pages['next']->ID, 'category');
                    $term = $terms? $terms[0]: (object)[];
                ?>
                <div class="c-card-news c-card-news--single">
                    <a class="c-card-news__link" href="<?= esc_url(get_the_permalink($pages['next']->ID)) ?>">
                        <div class="c-card-news__meta">
                            <p class="c-card-news__date"><?= get_the_date('Y.m.d', $pages['next']->ID) ?></p>
                            <p class="c-card-news__category"><?= $term->name ?></p>
                        </div>
                        <h3 class="c-card-news__title"><?= get_the_title($pages['next']->ID) ?></h3>
                    </a>
                </div>
            <?php else: ?>
                <div class="c-card-news c-card-news--single"></div>
            <?php endif; ?>
            <?php if ($pages['prev']): ?>
                <?php
                $terms = get_the_terms($pages['prev']->ID, 'category');
                $term = $terms? $terms[0]: (object)[];
                ?>
                <div class="c-card-news c-card-news--single">
                    <a class="c-card-news__link" href="<?= esc_url(get_the_permalink($pages['prev']->ID)) ?>">
                        <div class="c-card-news__meta">
                            <p class="c-card-news__date"><?= get_the_date('Y.m.d', $pages['prev']->ID) ?></p>
                            <p class="c-card-news__category"><?= $term->name ?></p>
                        </div>
                        <h3 class="c-card-news__title"><?= get_the_title($pages['prev']->ID) ?></h3>
                    </a>
                </div>
            <?php else: ?>
            <div class="c-card-news c-card-news--single"></div>
            <?php endif; ?>
        </div>
        <div class="p-news-single__index"><a class="c-btn-txt" href="<?= home_url() ?>/news/"><span class="js-clone">News Index</span></a></div>
        <?php wp_reset_query(); ?>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>