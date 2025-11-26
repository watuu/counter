<?php while (have_posts()) : the_post(); ?>
    <?php
    $client = get_field('case-client');
    $eyeCatch = esc_url(get_the_post_thumbnail_url());
    $eyeCatch = $eyeCatch? $eyeCatch:
        sprintf('%s/assets/img/3x2.webp', get_stylesheet_directory_uri());
    ?>
    <div class="c-card-case">
        <div class="c-card-case__link">
            <figure class="c-card-case__pic"><img src="<?= $eyeCatch ?>" alt="<?= $client ?>" loading="lazy"/></figure>
            <h3 class="c-card-case__name"><?= $client ?></h3>
            <!--<i class="c-card-case__arrow"><svg width="40" height="40"><use href="#ico-arrow"></use></svg></i>-->
            <p class="c-card-case__desc"><?= get_the_title(); ?></p>
        </div>
    </div>
<?php endwhile; ?>
