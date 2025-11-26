<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    $eyeCatch = esc_url(get_the_post_thumbnail_url());
    $client = get_field('case-client');
    $page = [
        '詳細情報' => get_field('実績情報_詳細情報'),
        'URL' => get_field('実績情報_url'),
    ];
//    $eyeCatch = $eyeCatch? $eyeCatch:
//        sprintf('%s/assets/img/3x2.webp', get_stylesheet_directory_uri());
    ?>
    <div class="p-creative-single">
        <div class="cm-block-header cm-block-header--work">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__client"><?= $client ?></p>
                    <h1 class="cm-block-header__ja"><?= get_the_title() ?></h1>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><a href="<?= home_url() ?>/creative-case/">Casestudy</a></li>
                    <li><span><?= get_the_title() ?></span></li>
                </ul>
            </div>
        </div>
        <div class="p-creative-single__wrap">
            <div class="l-container">
                <div class="p-creative-single__body">
                    <div class="cm-post cm-post--creative">
                        <?php the_content(); ?>
                    </div>
                    <?php if ($page['詳細情報']): ?>
                        <div class="p-creative-single__info">
                            <div class="cm-post-info">
                                <dl class="cm-post-info__data">
                                    <?php foreach ($page['詳細情報'] as $info): ?>
                                        <dt><?= $info['項目'] ?></dt>
                                        <dd><?= nl2br($info['詳細']) ?></dd>
                                    <?php endforeach; ?>
                                </dl>
                                <?php if ($page['URL']): ?>
                                    <p class="cm-post-info__link"><a class="c-link-arrow" href="<?= $page['URL'] ?>" target="_blank" rel="noopener"><span class="c-link-arrow__txt">Launch Site</span><i class="c-link-arrow__arrow"><svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php
            $pages = [
                'prev' => get_previous_post(),
                'next' => get_next_post()
            ];
            ?>
            <div class="p-creative-single__aside">
                <?php if ($pages['next']): ?>
                <?php endif; ?>
                <div class="p-creative-single__asidePrev"><a class="c-btn-page" href="<?= esc_url(get_the_permalink($pages['next']->ID)) ?>"><span class="c-btn-page__txt">Prev</span></a></div>
                <?php if ($pages['prev']): ?>
                <div class="p-creative-single__asideNext"><a class="c-btn-page" href="<?= esc_url(get_the_permalink($pages['prev']->ID)) ?>"><span class="c-btn-page__txt">Next</span></a></div>
                <?php endif; ?>
            </div>
        </div>
        <?php
        $pages = [
            'prev' => get_previous_post(),
            'next' => get_next_post()
        ];
        ?>
        <div class="l-container">
            <div class="p-creative-single__page">
                <?php if ($pages['next']): ?>
                    <?php
                    $terms = get_the_terms($pages['next']->ID, 'creative-case-category');
                    $eyeCatch = esc_url(get_the_post_thumbnail_url($pages['next']->ID));
                    $eyeCatch = $eyeCatch? $eyeCatch:
                        sprintf('%s/assets/img/16x9.webp', get_stylesheet_directory_uri());
                    ?>
                    <div class="c-card-creative c-card-creative--single">
                        <a class="c-card-creative__link" href="<?= esc_url(get_the_permalink($pages['next']->ID)) ?>">
                            <figure class="c-card-creative__pic"><img src="<?= $eyeCatch ?>" alt=""/></figure>
                            <div class="c-card-creative__wrap">
                                <h3 class="c-card-creative__title"><?= get_the_title($pages['next']->ID) ?></h3>
                                <ul class="c-card-creative__category">
                                    <?php
                                    foreach ($terms as $term) {
                                        echo sprintf('<li>%s</li>', $term->name);
                                    }
                                    ?>
                                </ul>
                            </div>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="c-card-creative c-card-creative--single"></div>
                <?php endif; ?>
                <?php if ($pages['prev']): ?>
                    <?php
                    $terms = get_the_terms($pages['prev']->ID, 'creative-case-category');
                    $eyeCatch = esc_url(get_the_post_thumbnail_url($pages['prev']->ID));
                    $eyeCatch = $eyeCatch? $eyeCatch:
                        sprintf('%s/assets/img/16x9.webp', get_stylesheet_directory_uri());
                    ?>
                    <div class="c-card-creative c-card-creative--single">
                        <a class="c-card-creative__link" href="<?= esc_url(get_the_permalink($pages['prev']->ID)) ?>">
                            <figure class="c-card-creative__pic"><img src="<?= $eyeCatch ?>" alt=""/></figure>
                            <div class="c-card-creative__wrap">
                                <h3 class="c-card-creative__title"><?= get_the_title($pages['prev']->ID) ?></h3>
                                <ul class="c-card-creative__category">
                                    <?php
                                    foreach ($terms as $term) {
                                        echo sprintf('<li>%s</li>', $term->name);
                                    }
                                    ?>
                                </ul>
                            </div>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="c-card-creative c-card-creative--single"></div>
                <?php endif; ?>
            </div>
            <div class="p-creative-single__index"><a class="c-btn-txt" href="<?= home_url() ?>/creative-case/"><span class="js-clone">Casestudy Index</span></a></div>
            <?php wp_reset_query(); ?>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>