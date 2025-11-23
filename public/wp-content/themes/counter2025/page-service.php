<?php get_header(); ?>
    <?php include('template/global-menu.php'); ?>
    <div class="p-service">
        <div class="cm-block-header cm-block-header--service">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <div class="cm-block-header__glitch is-service jsGlitchTxt"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/p-service-title.webp"/></div>
                    <h1 class="cm-block-header__ja">サービス</h1>
                </div>
                <div class="cm-block-header__service">
                    <figure><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/p-service-header1.webp"/></figure>
                    <figure><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/p-service-header2.webp"/></figure>
                    <figure><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/p-service-header3.webp"/></figure>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>Service</span></li>
                </ul>
            </div>
        </div>
        <div class="l-container">
            <div class="p-service__lead">デジタルマーケティングを起点にした、オンラインでの売り上げと<br class="pc">認知獲得に向けた戦略を立案。<br class="sp">実装までを一気通貫に行います。</div>
            <div class="p-service__wrap">
                <div class="p-service-item">
                    <div class="p-service-item__head">
                        <p class="p-service-item__no">(01)</p>
                        <h2 class="p-service-item__title">Digital Marketing</h2>
                    </div>
                    <p class="p-service-item__desc">SEOコンサルティングを中心としたデジタルマーケティングサービスをご提供します。</p>
                    <ul class="p-service-item__list">
                        <?php foreach ($digital_marketing_links as $link): ?>
                            <li><a class="c-btn-round <?php echo empty($link['url']) ? 'is-disabled' : ''; ?>" href="<?php echo $link['url']; ?>"><span class="c-btn-round__txt"><span class="js-clone"><?php echo $link['name']; ?></span></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="p-service-item">
                    <div class="p-service-item__head">
                        <p class="p-service-item__no">(02)</p>
                        <h2 class="p-service-item__title">creative work</h2>
                    </div>
                    <p class="p-service-item__desc">Webサイトをはじめとした、クリエイティブ制作サービスをご提供します。</p>
                    <ul class="p-service-item__list">
                        <?php foreach ($creative_work_links as $link): ?>
                            <li><a class="c-btn-round <?php echo empty($link['url']) ? 'is-disabled' : ''; ?>" href="<?php echo $link['url']; ?>"><span class="c-btn-round__txt"><span class="js-clone"><?php echo $link['name']; ?></span></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="p-service-item">
                    <div class="p-service-item__head">
                        <p class="p-service-item__no">(03)</p>
                        <h2 class="p-service-item__title">Local media management</h2>
                    </div>
                    <p class="p-service-item__desc">越谷市を中心とした、埼玉県のローカルメディアを運営しています。</p>
                    <ul class="p-service-item__list">
                        <li><a class="c-btn-round" href="https://postcitykoshigaya.jp/" target="_blank" rel="noopener"><span class="c-btn-round__txt"><span class="js-clone">KOSHIGAYAZINE</span></span></a></li>
                        <li><a class="c-btn-round" href="https://iro-iro-blue.com/" target="_blank" rel="noopener"><span class="c-btn-round__txt"><span class="js-clone">埼玉ベース</span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="p-service__media">
            <div class="l-container l-container--md">
                <?php get_template_part('template/cm-block-media') ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>