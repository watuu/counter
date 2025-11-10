<section class="service-problems">
  <div class="service-problems__inner service-inner">
    <h2 class="introduction">
      <?php echo wp_kses_post($service_problems_title); ?>に関する<br>
      こんな<span>お</span><span>悩</span><span>み</span>はありませんか？
    </h2>
    <?php
    // サービス内容のデータを配列として取得
    $service_problems_list = get_query_var('service_problems_list');
    ?>
    <ol class="service-list service-list--col003 js-scroll-anime" data-anime="fadeInUp">
      <?php foreach ($service_problems_list as $service): ?>
        <li class="service-list__item">
          <section class="service-card001">
            <p class="service-card001__label">
              <?php echo esc_html($service['label']); ?>
            </p>
            <div class="service-card001__inner">
              <h3 class="service-card001__heading">
                <?php foreach ($service['heading'] as $heading): ?>
                  <span><?php echo esc_html($heading); ?></span><br>
                <?php endforeach; ?>
              </h3>
              <p class="service-card001__text"><?php echo esc_html($service['text']); ?></p>
            </div>
          </section>
        </li>
      <?php endforeach; ?>
    </ol>
    <div class="solution js-scroll-anime" data-anime="fadeInUp">
      <p class="solution__text solution__text--sub">
        COUNTER(カウンター)の<br class="utils-block-hidden-pc"><?php echo wp_kses_post($service_problems_name); ?>で
      </p>
      <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
    </div>
  </div>
</section>