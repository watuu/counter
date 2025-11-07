<?php while (have_posts()) : the_post(); ?>
    <?php
    $client = get_field('case-client');
    $terms = get_the_terms(null, 'creative-case-category');
    $eyeCatch = esc_url(get_the_post_thumbnail_url());
    $eyeCatch = $eyeCatch? $eyeCatch:
        sprintf('%s/assets/img/16x9.webp', get_stylesheet_directory_uri());
    ?>
    <div class="c-card-creative">
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
            </div>
        </a>
    </div>
<?php endwhile; ?>
