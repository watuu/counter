<?php while (have_posts()) : the_post(); ?>
    <?php
    $terms = get_the_terms(null, 'category');
    $term = $terms? $terms[0]: (object)[];
    ?>
    <div class="c-card-news">
        <a class="c-card-news__link" href="<?= esc_url(get_the_permalink()) ?>">
            <div class="c-card-news__meta">
                <p class="c-card-news__date"><?= get_the_date('Y.m.d') ?></p>
                <p class="c-card-news__category"><?= $term->name ?></p>
            </div>
            <h3 class="c-card-news__title"><?= get_the_title() ?></h3>
        </a>
    </div>
<?php endwhile; ?>
