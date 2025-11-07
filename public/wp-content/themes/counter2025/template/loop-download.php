<?php while (have_posts()) : the_post(); ?>
    <?php
    $terms = get_the_terms(null, 'download-category');
    $term = $terms? $terms[0]: (object)[];
    $eyeCatch = esc_url(get_the_post_thumbnail_url());
    $eyeCatch = $eyeCatch? $eyeCatch:
        sprintf('%s/assets/img/16x9.webp', get_stylesheet_directory_uri());
    ?>
    <div class="c-card-download">
        <a class="c-card-download__link" href="<?= esc_url(get_the_permalink()) ?>">
            <p class="c-card-download__title"><?= $term->name ?></p>
            <i class="c-card-download__down"><svg width="60" height="60"><use href="#ico-down"></use></svg></i>
            <figure class="c-card-download__pic"><img src="<?= $eyeCatch ?>" alt=""/></figure>
            <h3 class="c-card-download__title2"><?= get_the_title() ?></h3>
            <p class="c-card-download__desc"><?= get_excerpt_from_article(get_the_content(), 100); ?></p>
        </a>
    </div>
<?php endwhile; ?>
