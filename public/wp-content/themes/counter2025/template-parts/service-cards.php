<section class="service-cards">
  <div class="service-cards__inner service-inner">
    <div class="service-heading">
      <h2 class="service-heading__main"><span><?php echo wp_kses_post($service_cards['contents_heading']); ?></span></h2>
    </div>
    <ul class="service-cards__list">
      <?php foreach ($service_cards['contents_list'] as $card): ?>
        <li class="service-cards__item">
          <h3 class="service-cards__title"><?php echo wp_kses_post($card['heading']); ?></h3>
          <div class="service-cards__image">
            <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['heading']); ?>">
          </div>
          <p class="service-cards__description"><?php echo wp_kses_post($card['description']); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
    <p class="service-cards__note"><span class="service-cards__note-mark">※</span> CMS本体のアップグレード：<br>メジャーバージョンアップでは新機能の追加や仕様変更もあるため、サイトの構成・カスタマイズの状況によりどのようにするか取り決めます。<br>メジャーバージョンの違い: 5.9 → 6.0、6.1 → 6.2 など小数点第二位以下の変更。<br>マイナーバージョンの違い: 6.1.1 → 6.2.2 など小数点第一位の変更。</p>
  </div>
</section>