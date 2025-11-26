<div class="p-media-aside-block">
    <div class="p-media-aside-block__head">
        <h3 class="c-heading-caption">Pick Up</h3>
    </div>
    <ul class="p-media-aside-block__pickup">
        <li>
            <a class="pickup__banner" href="https://www.youtube.com/@countermarketing" target="_blank" alt="" decoding="async"><img src="http://counter-digital.jp/wp-content/uploads/2025/05/img_youtube_01.png" alt="" decoding="async"></a>
        </li>
        <?php $pickup = get_pickup_contents(126); ?>
        <?php if ($pickup['image1'] && $pickup['url1']): ?>
            <li><a class="pickup__banner" href="<?php echo $pickup['url1']; ?>"><img src="<?php echo $pickup['image1']; ?>" alt="" decoding="async"></a></li>
        <?php endif; ?>
        <?php if ($pickup['image2'] && $pickup['url2']): ?>
            <li><a class="pickup__banner" href="<?php echo $pickup['url2']; ?>"><img src="<?php echo $pickup['image2']; ?>" alt="" decoding="async"></a></li>
        <?php endif; ?>
    </ul>
    <div class="p-media-aside-block__search">
        <div class="c-form-search c-form-search--aside">
            <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                <input type="hidden" name="post_type" value="counter-media" />
                <div class="c-form-search__keyword">
                    <input type="text" name="s" <?php echo get_search_query(); ?>/>
                </div>
                <button class="c-form-search__btn">
                    <svg width="16" height="17"><use href="#ico-search"></use></svg>
                </button>
            </form>
        </div>
    </div>
</div>
<div class="p-media-aside-block">
    <div class="p-media-aside-block__head">
        <h3 class="c-heading-caption">Category</h3>
    </div>
    <ul class="p-media-aside-block__category">
        <?php
        $query_object = get_queried_object();
        $current_term = $query_object->slug?? '';
        $categories = get_terms(['taxonomy' => 'counter-media-category', 'hide_empty' => false]);
        foreach ($categories as $term) {
            $class = $term->slug == $current_term? ' is-current': '';
            echo sprintf('<li><a class="%s" href="%s">%s</a></li>',
                $class,
                get_term_link($term),
                $term->name
            );
        }
        ?>
    </ul>
</div>
<div class="p-media-aside-block">
    <div class="p-media-aside-block__head">
        <h3 class="c-heading-caption">Tags</h3>
    </div>
    <ul class="p-media-aside-block__tag">
        <?php
        $tags = get_tags(['hide_empty' => 0]);
        foreach ($tags as $tag) {
            $class = $tag->slug == $current_term? ' is-current': '';
            echo sprintf('<li><a class="%s" href="%s">#%s</a></li>',
                $class,
                add_query_arg(
                    'post_type',
                    'counter-media',
                    get_term_link($tag)
                ),
                $tag->name
            );
        }
        ?>
    </ul>
</div>