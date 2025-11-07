<?php
foreach ($args['wpp_query']->get_posts() as $post) :
    $wp_post = get_post($post->id);
    setup_postdata($wp_post);
    $terms = get_the_terms($post->id, 'counter-media-category');
    $eyeCatch = esc_url(get_the_post_thumbnail_url($post->id));
    $eyeCatch = $eyeCatch? $eyeCatch:
        sprintf('%s/assets/img/480x300.webp', get_stylesheet_directory_uri());
    ?>
    <div class="c-card-media">
        <a class="c-card-media__link" href="<?= esc_url(get_the_permalink($post->id)) ?>">
            <p class="c-card-media__date"><?= get_the_date('Y.m.d', $post->id) ?></p>
            <figure class="c-card-media__pic"><img src="<?= $eyeCatch ?>" alt="<?= get_the_title() ?>" loading="lazy"/></figure>
            <div class="c-card-media__wrap">
                <h3 class="c-card-media__title"><?= get_the_title($post->id) ?></h3>
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
<?php
endforeach;
wp_reset_postdata();
?>