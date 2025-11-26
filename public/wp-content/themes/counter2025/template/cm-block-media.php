<div class="cm-block-media">
    <div class="cm-block-media-youtube">
        <div class="cm-block-media-youtube__head">
            <h3 class="c-heading-caption">COUNTER Channel</h3>
            <div class="cm-block-media-youtube__logo">
                <a href="https://www.youtube.com/@countermarketing" target="_blank" rel="noopener">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo-youtube.svg" alt="YouTUbe"/></div>
                </a>
        </div>
        <div class="cm-block-media-youtube__slide">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    // ACFの繰り返しフィールドからスライドデータを取得
                    $slides = get_field('footer_slider', 'option');
                    $valid_slides = [];

                    // 有効なスライド（画像があるもの）を抽出
                    if ($slides && is_array($slides)) {
                        foreach ($slides as $slide) {
                            if (!empty($slide['image'])) {
                                $valid_slides[] = [
                                    'image' => $slide['image'],
                                    'url' => !empty($slide['url']) ? $slide['url'] : '#'
                                ];
                            }
                        }
                    }

                    // 有効なスライドの数
                    $slide_count = count($valid_slides);

                    // スライドが存在する場合
                    if ($slide_count > 0) :
                    // スライドが9つ未満の場合は複製して9つ以上にする
                    $slides_to_display = $valid_slides;
                    if ($slide_count < 9) {
                        $duplications_needed = ceil(9 / $slide_count);
                        for ($i = 0; $i < $duplications_needed; $i++) {
                            $slides_to_display = array_merge($slides_to_display, $valid_slides);
                        }
                    }

                    // 最低9つのスライドを表示（複製後の配列から必要な分だけ取得）
                    $slides_to_display = array_slice($slides_to_display, 0, max(9, $slide_count));

                    // スライドを表示
                    foreach ($slides_to_display as $slide) :
                    ?>
                        <figure class="swiper-slide">
                            <a href="<?php echo esc_url($slide['url']); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo esc_url($slide['image']['url']); ?>" alt="">
                            </a>
                        </figure>
                    <?php endforeach; endif; ?>
                </div>
            </div>
            <div class="cm-block-media-youtube__paginate"></div>
        </div>
    </div>
    <div class="cm-block-media-sns">
        <div class="cm-block-media-sns__wrap">
            <div class="cm-block-media-sns__logo"><svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.5727 19.0323L35.6897 5.25H32.8179L22.2969 17.2179L13.8917 5.25H4.2002L16.9083 23.3467L4.2002 37.8H7.07195L18.183 25.1622L27.0576 37.8H36.7502L23.5706 19.0323H23.5727ZM19.6383 23.5053L18.351 21.7045L8.10619 7.36575H12.5162L20.7849 18.9367L22.0722 20.7396L32.819 35.7808H28.409L19.6383 23.5053Z" fill="#FF552B"/></svg>
            </div>
            <ul class="cm-block-media-sns__list">
                <li><a href="https://x.com/webkirin" target="_blank" rel="noopener">
                        <figure class="cm-block-media-sns__profile"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/media-miyata.webp"/>
                            <figcaption>宮田</figcaption>
                        </figure></a></li>
                <li><a href="https://x.com/wed_sou" target="_blank" rel="noopener">
                        <figure class="cm-block-media-sns__profile"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/media-mori.webp"/>
                            <figcaption>森</figcaption>
                        </figure></a></li>
            </ul>
        </div>
        <ul class="cm-block-media-sns__links">
            <li><a class="c-link-arrow" href="<?= home_url() ?>/counter-media/"><span class="c-link-arrow__txt">Counter Media</span><i class="c-link-arrow__arrow">
                        <svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></a></li>
            <li><a class="c-link-external" href="https://note.com/webkirin" target="_blank" rel="noopener"><span class="c-link-external__txt">note</span><i class="c-link-external__ico">
                        <svg width="24" height="19"><use href="#ico-external"></use></svg></i></a></li>
        </ul>
    </div>
</div>