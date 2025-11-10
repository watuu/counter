<section class="service-points">
  <div class="service-points__inner">
    <div class="service-heading">
      <h2 class="service-heading__main"><span><?php echo esc_html($service_points_title); ?></span></h2>
      <p class="service-heading__lead">
        <?php echo wp_kses_post($service_points_lead); ?>
      </p>
    </div>
    <?php
    // サービス内容のデータを配列として取得
    $service_points_list = get_query_var('service_points_list');
    ?>
    <ol class="service-list service-list--col003 js-scroll-anime" data-anime="fadeInUp">
      <?php foreach ($service_points_list as $service): ?>
        <li class="service-list__item">
          <section class="service-card001">
            <p class="service-card001__label"><?php echo esc_html($service['label']); ?></p>
            <div class="service-card001__inner">
              <h3 class="service-card001__heading">
                <?php foreach ($service['heading'] as $heading): ?>
                  <span><?php echo esc_html($heading); ?></span><br>
                <?php endforeach; ?>
              </h3>
              <p class="service-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
            </div>
          </section>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
