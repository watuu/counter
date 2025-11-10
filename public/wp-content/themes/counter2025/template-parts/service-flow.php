<section class="service-flow">
  <div class="service-flow__inner service-inner">
    <div class="service-heading">
      <p class="service-heading__sub">カウンターの</p>
      <h2 class="service-heading__main"><span><?php echo wp_kses_post($service_flow_title); ?></span></h2>
      <p class="service-heading__lead"><?php echo wp_kses_post($service_flow_lead); ?></p>
    </div>
    <div class="table js-scroll-anime" data-anime="fadeInUp">
      <div class="table__inner">
        <?php
        // データを取得
        $service_flow = get_query_var('service_flow');
        ?>
        <?php foreach ($service_flow as $phase): ?>
          <section class="table__group">
            <div class="table__head">
              <div class="table__block">
                <h3 class="table__heading"><?php echo esc_html($phase['table__heading']); ?></h3>
                <div class="table__image <?php echo esc_attr($phase['image_class']); ?>">
                  <img src="<?php echo esc_url($phase['image']); ?>" alt="">
                </div>
              </div>
            </div>
            <div class="table__body">
              <ul class="table__list">
                <?php foreach ($phase['items'] as $item): ?>
                  <li class="table__item">
                    <p class="table__label"><?php echo esc_html($item['table__label']); ?></p>
                    <p class="table__text"><?php echo wp_kses_post($item['table__text']); ?></p>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </section>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
