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
            <?php
            $pickup_creatives = get_field('ピックアップ制作実績', 'option');
            if ($pickup_creatives):
                $args = [
                    'post_type' => 'creative-case',
                    'paged' => 1,
                    'post__in' => $pickup_creatives,
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()) : while (have_posts()) : the_post();
                    $terms = get_the_terms(null, 'creative-case-category');
                    $eyeCatch = esc_url(get_the_post_thumbnail_url());
                    $eyeCatch = $eyeCatch? $eyeCatch:
                        sprintf('%s/assets/img/16x9.webp', get_stylesheet_directory_uri());
                ?>
                <div class="c-card-creative c-card-creative--lg">
                    <a class="c-card-creative__link" href="<?= esc_url(get_the_permalink()) ?>">
                        <figure class="c-card-creative__pic"><img src="<?= $eyeCatch ?>" alt="<?= get_the_title() ?>" loading="lazy"/></figure>
                        <div class="c-card-creative__wrap">
                            <h3 class="c-card-creative__title"><?= get_the_title() ?></h3>
                            <ul class="c-card-creative__category">
                                <?php
                                foreach ($terms as $term) {
                                    echo sprintf('<li>%s</li>', $term->name);
                                }
                                ?>
                            </ul>
                            <p class="c-card-creative__excerpt"><?= get_excerpt_from_article(get_the_content(), 100); ?></p>
                            <i class="c-card-creative__arrow"><svg width="40" height="40"><use href="#ico-arrow"></use></svg></i>
                        </div>
                    </a>
                </div>
            <?php endwhile; endif;  endif; wp_reset_query(); ?>
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