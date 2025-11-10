<section class="service-differ">
  <div class="service-differ__inner service-inner">
    <div class="service-heading">
      <h2 class="service-heading__main"><span><?php echo wp_kses_post($service_differ_title); ?></span></h2>
    </div>
    <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
      <div class="table">
        <div class="table__inner">
          <?php
          // データを取得
          $service_differ = get_query_var('service_differ');
          ?>

          <!-- 項目行のヘッダー -->
          <div class="table__group">
            <div class="table__head"></div>
            <div class="table__body">
              <ul class="table__list">
                <?php foreach ($service_differ['rows'] as $row): ?>
                  <li class="table__item"><?php echo esc_html($row); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <!-- 各会社ごとのデータ -->
          <?php foreach ($service_differ['companies'] as $company_name => $company_items): ?>
            <div class="table__group <?php echo ($company_name === 'カウンター') ? 'table__group--orange' : ''; ?>">
              <div class="table__head"><p><?php echo esc_html($company_name); ?></p></div>
              <div class="table__body">
                <ul class="table__list">
                  <?php foreach ($company_items as $item): ?>
                    <li class="table__item">
                      <span class="table__ic <?php echo esc_attr($item['icon_class']); ?>"></span>
                      <span class="table__text"><?php echo wp_kses_post($item['text']); ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
