<?php
// CTAデータを配列として取得
$cta_data = get_query_var('cta_data');
$document_slug = get_query_var('document_slug');
// 各変数に値を代入
$cta_lead = $cta_data['cta_lead'];
$cta_heading = $cta_data['cta_heading'];
$cta_text = $cta_data['cta_text'];
$cta_button_1_link = $cta_data['cta_button_1_link'];
?>
<section class="service-cta">
  <div class="service-cta__inner service-inner">
    <div class="content">
      <p class="content__lead">
        <span><?php echo wp_kses_post($cta_lead); ?></span>
      </p>
      <p class="content__heading">
        <?php echo wp_kses_post($cta_heading); ?>
      </p>
      <p class="content__text">
        <?php echo wp_kses_post($cta_text); ?>
      </p>
      <div class="content__objects">
        <div class="content__object content__object--001">
          <img src="<?php echo IMAGE_DIR; ?>00_common/elm-02.png" alt="">
        </div>
        <div class="content__object content__object--002">
          <img src="<?php echo IMAGE_DIR; ?>00_common/elm-03.png" alt="">
        </div>
      </div>
      <ul class="content__list">
        <li class="content__item">
          <a
            class="service-btn service-btn--orange service-btn--white"
            href="https://counter-digital.jp/download<?php echo esc_url( $document_slug ); ?>"
          >
            無料で資料ダウンロード
          </a>
        </li>
        <li class="content__item">
          <a class="service-btn service-btn--white" href="#contact">無料で相談する</a>
        </li>
      </ul>
    </div>
  </div>
</section>
