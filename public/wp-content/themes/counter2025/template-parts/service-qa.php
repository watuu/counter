<section class="service-qa">
  <div class="service-qa__inner service-inner">
    <div class="service-heading">
      <p class="service-heading__sub">Webサイト保守・運用代行サービスでの</p>
      <h2 class="service-heading__main"><span>よくある質問</span></h2>
    </div>
    <ul class="list js-list-ac">
      <?php foreach ($qa_data as $index => $item): ?>
        <li class="list__item">
          <div class="content">
            <div class="content__head js-content__head <?php echo $index === 0 ? 'utils-active' : ''; ?>">
              <div class="content__inner">
                <span class="content__label"></span>
                <p class="content__text"><?php echo esc_html($item['question']); ?></p>
                <span class="content__trigger"></span>
              </div>
            </div>
            <div class="content__body <?php echo $index === 0 ? 'utils-active' : ''; ?>">
              <div class="content__inner">
                <span class="content__label"></span>
                <p class="content__text"><?php echo wp_kses_post($item['answer']); ?></p>
                <div class="content__btn" style="margin-top:38px;">
                  <a class="service-btn service-btn--black" href="#contact">無料で相談する</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
