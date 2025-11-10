<div class="service-price">
  <div class="service-price__inner service-inner">
    <div class="service-heading">
      <h2 class="service-heading__main"><span><?php echo wp_kses_post($price_data['price_heading']); ?></span></h2>
    </div>
    <div class="content js-scroll-anime" data-anime="fadeInUp">
      <div class="content__inner">
        <div class="content__image">
          <img src="<?php echo IMAGE_DIR; ?>00_common/elm-01-cache.png" alt="ここに人の画像">
        </div>
        <div class="content__body">
          <p class="content__lead">
            <span>料金に関して</span>
          </p>
          <div class="content__box">
            <p class="content__main">
              <strong class="content__main-strong"><?php echo esc_html($price_data['price_amount']); ?></strong>
              万円(税別)〜
            </p>
            <p class="content__note">詳しい情報は<br class="utils-block-hidden-pc">お気軽に<br class="utils-block-hidden-mobile">お問い合わせください。</p>
          </div>
          <div class="content__btn">
            <a href="<?php echo esc_url($price_data['price_button_link']); ?>" class="service-btn service-btn--orange service-btn-arrow">
              価格表はこちら
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
