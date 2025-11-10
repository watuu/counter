<?php
// FVデータを配列として取得
$fv_data = get_query_var('fv_data');
$document_slug = get_query_var('document_slug');
$page_id = get_query_var('page_id');
// 各変数に値を代入
$fv_lead = $fv_data['fv_lead'];
$fv_heading = $fv_data['fv_heading'];
$fv_text = $fv_data['fv_text'];
$fv_image = IMAGE_DIR . '03_service/' . $page_id . '/' . $page_id . '.png';
?>
<section class="service-fv">
  <div class="service-fv__inner service-inner">
    <div class="content">
      <div class="content__inner">
        <p class="content__lead"><?php echo esc_html( $fv_lead ); ?></p>
        <h1 class="content__heading"><?php echo $fv_heading; ?></h1>
        <p class="content__text"><?php echo $fv_text; ?></p>
      </div>
      <div class="content__inner">
        <ul class="content__list">
          <li class="content__item"><a class="service-btn service-btn--orange" href="https://counter-digital.jp/download<?php echo esc_url( $document_slug ); ?>">無料で資料ダウンロード</a></li>
          <li class="content__item"><a class="service-btn service-btn--black" href="#contact">無料で相談する</a></li>
        </ul>
      </div>
    </div>
    <div class="object">
      <img src="<?php echo esc_url( $fv_image ); ?>" alt="">
    </div>
  </div>
</section>
