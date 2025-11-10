<section class="service-manager">
  <div class="service-manager__inner service-inner">
    <?php if (count($ceo_data) > 1): ?>
      <section class="swiper js-pickup-slider-single">
        <ul class="swiper-wrapper">
          <?php foreach ($ceo_data as $ceo): ?>
            <li class="swiper-slide">
              <div class="service-manager__box js-scroll-anime" data-anime="fadeInUp">
                <div class="service-heading">
                  <h2 class="service-heading__main"><span><?php echo esc_html($ceo['heading']); ?></span></h2>
                </div>
                <div class="content">
                  <div class="content__image">
                    <img src="<?php echo esc_url($ceo['image']); ?>" alt="<?php echo esc_attr($ceo['name']); ?>">
                  </div>
                  <div class="content__body">
                    <div class="content__head">
                      <p class="content__name">
                        <span><?php echo esc_html($ceo['role']); ?></span><br>
                        <?php echo esc_html($ceo['name']); ?>
                      </p>
                      <ul class="content__list">
                        <?php foreach ($ceo['social_links'] as $link): ?>
                          <li class="content__item">
                            <a href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener noreferrer">
                              <img src="<?php echo esc_url($link['icon']); ?>" alt="<?php echo esc_attr($link['platform']); ?>">
                            </a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                    <div class="content__inner js-content__inner">
                      <p class="content__text"><?php echo wp_kses_post($ceo['bio']); ?></p>
                      <?php if (!empty($ceo['details'])): ?>
                        <p class="content__text js-content__text utils-active">
                          <?php echo wp_kses_post($ceo['details']); ?>
                        </p>
                        <p class="content__trigger js-read-more">詳しく見る</p>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="pickup-slider__pagination"></div>
        <div class="pickup-slider__prev"></div>
        <div class="pickup-slider__next"></div>
      </section>
    <?php else: ?>
      <?php foreach ($ceo_data as $ceo): ?>
        <div class="service-manager__box js-scroll-anime" data-anime="fadeInUp">
          <div class="service-heading">
            <h2 class="service-heading__main"><span><?php echo esc_html($ceo['heading']); ?></span></h2>
          </div>
          <div class="content">
            <div class="content__image"><img src="<?php echo esc_url($ceo['image']); ?>" alt="<?php echo esc_attr($ceo['name']); ?>"></div>
            <div class="content__body">
              <div class="content__head">
                <p class="content__name"><span><?php echo esc_html($ceo['role']); ?></span><br><?php echo esc_html($ceo['name']); ?></p>
                <ul class="content__list">
                  <?php foreach ($ceo['social_links'] as $link): ?>
                    <li class="content__item"><a href="<?php echo esc_url($link['url']); ?>" target="_blank"><img src="<?php echo esc_url($link['icon']); ?>" alt="<?php echo esc_attr($link['platform']); ?>"></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="content__inner js-content__inner">
                <p class="content__text"><?php echo wp_kses_post($ceo['bio']); ?></p>
                <?php if (!empty($ceo['details'])): ?>
                  <p class="content__text js-content__text utils-active">
                    <?php echo wp_kses_post($ceo['details']); ?>
                  </p>
                  <p class="content__trigger js-read-more">詳しく見る</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>
