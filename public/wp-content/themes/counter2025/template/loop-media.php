<?php while (have_posts()) : the_post(); ?>
    <?php
    // $terms = get_the_tags();
    $class = $args['class']?? '';
    $terms = get_the_terms(null, 'counter-media-category');
    $eyeCatch = esc_url(get_the_post_thumbnail_url());
    $eyeCatch = $eyeCatch? $eyeCatch:
        sprintf('%s/assets/img/480x300.webp', get_stylesheet_directory_uri());
    ?>
    <div class="c-card-media <?= $class ?>">
        <a class="c-card-media__link" href="<?= esc_url(get_the_permalink()) ?>">
            <p class="c-card-media__date"><?= get_the_date('Y.m.d') ?></p>
            <figure class="c-card-media__pic"><img src="<?= $eyeCatch ?>" alt="<?= get_the_title() ?>" loading="lazy"/></figure>
            <div class="c-card-media__wrap">
                <h3 class="c-card-media__title"><?= get_the_title() ?></h3>
                <ul class="c-card-media__category">
                    <?php
                    foreach ($terms as $term) {
                        echo sprintf('<li>%s</li>', $term->name);
                    }
                    ?>
                </ul>
            </div>
        </a>
    </div>
<?php endwhile; ?>
