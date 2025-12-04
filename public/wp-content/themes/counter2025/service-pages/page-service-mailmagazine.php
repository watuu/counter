<?php
/**
 * Template Name: メルマガ制作/配信代行サービスのテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'mailmagazine';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document-company';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-mail container">
    <div class="service-mail-inner">
      <div class="service-mail-fv">
        <div class="service-mail-fv__inner service-mail-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead">
                <span>メルマガ配信の運用と</span><br>
                <span>成果創出でお悩みの方へ&nbsp;</span>
              </p>
              <h1 class="content__heading">
                <span>メルマガ制作/配信代行</span>
              </h1>
              <p class="content__text utils-block-hidden-mobile">情報配信、リードナーチャリングに関する<br>メルマガの配信やコンテンツ制作の運用代行をいたします。</p>
              <p class="content__text utils-block-hidden-pc">情報配信、リードナーチャリングに関するメルマガの配信やコンテンツ制作の運用代行をいたします。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-mail-btn service-mail-btn--orange" href="https://counter-digital.jp/download<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-mail-btn service-mail-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/<?php echo $page_id; ?>/<?php echo $page_id; ?>.png" alt=""></div>
        </div>
      </div>

      <section class="service-mail-problems">
        <div class="service-mail-problems__inner service-mail-inner">
          <h2 class="introduction">メルマガの制作/配信について<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['メルマガの制作/配信', 'ノウハウがない'],
              'text' => 'どのような内容でメルマガを制作し、配信すればよいのかわからない。'
            ],
            [
              'label' => '2',
              'heading' => ['メルマガのデザイン性や', '品質を上げたい'],
              'text' => '見込み顧客の興味関心を高める品質の高いメルマガを作成したいが、ノウハウがない。'
            ],
            [
              'label' => '3',
              'heading' => ['顧客志向で効果的な', 'メルマガを送りたい'],
              'text' => '新商品やサービス紹介が中心となっており、顧客志向で効果的なメルマガの作成を相談したい。'
            ],
            [
              'label' => '4',
              'heading' => ['メルマガの反響を', 'もとに分析・改善を', 'したいがわからない'],
              'text' => 'メルマガの開封率・クリック率を上げたいが、着手できていない。'
            ],
            [
              'label' => '5',
              'heading' => ['メルマガの運用が難しい'],
              'text' => 'メルマガの配信を強化したいが、リソースや人材不足により、注力できていない。'
            ],
            [
              'label' => '6',
              'heading' => ['メルマガを', '配信しているものの、', '成果が見えない'],
              'text' => 'メルマガの各種数値が下がっており、改善したいものの、何をすればよいかわからない。'
            ],
          ];
          ?>
          <ol class="service-mail-list service-mail-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-mail-list__item">
                <section class="service-mail-card001">
                  <p class="service-mail-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-mail-card001__inner">
                    <h3 class="service-mail-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-mail-card001__text"><?php echo esc_html($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">メルマガ制作/配信代行サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-mail-cta') ?>

      <section class="service-mail-points">
        <div class="service-mail-points__inner service-mail-inner">
          <div class="service-mail-heading">
            <h2 class="service-mail-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="service-mail-heading__lead">カウンターだからこそできる<br>メルマガ制作/配信代行サービスの<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['ペルソナ設計'],
              'text' => 'メールマガジンを送るだけでは効果が薄く、成果に繋がりません。メールマガジンの目的やペルソナなど、戦略から設計します。'
            ],
            [
              'label' => '2',
              'heading' => ['戦略立案から実行までの', 'トータル支援'],
              'text' => 'メールマガジンの戦略立案から実行支援までトータル支援が可能です。メールマガジンの配信経験が豊富なプロが対応いたします。'
            ],
            [
              'label' => '3',
              'heading' => ['メルマガのデザイン制作'],
              'text' => 'メールマガジンはデザイン力も非常に重要です。COUNTER株式会社ではデザイン経験の豊富な担当者がコンテンツ制作を支援します。'
            ],
            [
              'label' => '4',
              'heading' => ['投資対効果の合う', 'プランの提案'],
              'text' => 'ご提案時より、お客様の課題、予算に合わせたプランを提示いたします。逆に、費用対効果が合わない場合には、サービスをおすすめしないこともございます。'
            ],
            [
              'label' => '5',
              'heading' => ['コーディング対応'],
              'text' => 'メールマガジンはHTMLコードによる改善が必要となるケースがあります。COUNTERではコーディングによるテンプレート改善も可能です。'
            ],
            [
              'label' => '6',
              'heading' => ['COUNTERのブランドと実績'],
              'text' => 'COUNTERはBtoBマーケティングのプロが多く在籍しています。メールマガジンの運用だけでに留まらず、マーケティング施策全般のご提案が可能です。'
            ],
          ];
          ?>

          <ol class="service-mail-list service-mail-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-mail-list__item">
                <section class="service-mail-card001">
                  <p class="service-mail-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-mail-card001__inner">
                    <h3 class="service-mail-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-mail-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="service-mail-service">
        <div class="service-mail-service__inner service-mail-inner">
          <div class="service-mail-heading">
            <p class="service-mail-heading__sub">カウンターの</p>
            <h2 class="service-mail-heading__main"><span>メルマガ制作/配信代行サービス</span></h2>
            <p class="service-mail-heading__lead">メールマガジンで<br class="utils-block-hidden-pc">実績豊富な担当者が運用代行を行います。</p>
          </div>
          <div class="table js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">メールマガジン<br>設計フェーズ</h3>
                    <div class="table__image table__image--001"><img src="<?php echo IMAGE_DIR; ?>00_common/elm-04.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ヒヤリング</p>
                      <p class="table__text">商品やサービスを理解した上で目的や現在の課題、スケジュールなどをヒアリングさせていただきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">メルマケティング戦略の策定</p>
                      <p class="table__text">ヒアリングを受け、ペルソナを整理し、ペルソナごとのセグメンテーションリストを作成します。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">メールマガジン制作</p>
                      <p class="table__text">ヒアリング、プロセス策定をもとにカウンターの担当者がメールマガジンの制作を行います。テンプレートのコーディングやデザイン制作も合わせて、ご提案いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">施策実行フェーズ</h3>
                    <div class="table__image table__image--002"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-05.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">メールマガジン配信</p>
                      <p class="table__text">見込み顧客リストに対して、Hubspot、Account EngagementなどのMAツールを活用し、メールマガジンの配信を代行いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">効果測定</p>
                      <p class="table__text">メルマーケティング全体に送付数、配信到達率、開封率、クリック率などの分析と効果測定を実施し、改善案をご提案いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading table__heading--mb">運用改善フェーズ</h3>
                    <div class="table__image table__image--003"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-06.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">運用プロセスの改善</p>
                      <p class="table__text">メールマガジンを配信するプロセスの自動化を図り、メールマガジンを1通送信するための業務工数削減で貢献いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">PDCA改善</p>
                      <p class="table__text">効果測定をもとにメールマガジンの課題を仮説、改善案をご提案します。成果最大化できるメールマーケティングを実現します。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-mail-cta') ?>

      <section class="service-mail-differ">
        <div class="service-mail-heading">
          <h2 class="service-mail-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-mail-differ__inner service-mail-inner">
          <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table">
              <div class="table__inner">
                <div class="table__group">
                  <div class="table__head"></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">設計</li>
                      <li class="table__item">プロセス設計</li>
                      <li class="table__item">価格</li>
                      <li class="table__item">スキル</li>
                      <li class="table__item">総合提案力</li>
                    </ul>
                  </div>
                </div>
                <div class="table__group table__group--orange">
                  <div class="table__head"><p>カウンター</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">経験豊富なプロが対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業務プロセスの理解からプロセス策定まで対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">中小ITコンサルティング企業よりも時間単価が安く、大手ITコンサルティング企業よりも低い。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">TOPクラスのコンサルタントが対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">価格、対応範囲、専門性の観点で総合力が高い。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>中小IT<br>コンサルティング企業</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">構築のみまたは非対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>大手IT<br>コンサルティング企業</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">構築だけで設計は対応しない業者もあり。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">高額なケースが大半。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">高い技術力を保有する業者あり。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="service-mail-ceo">
        <div class="service-mail-ceo__inner service-mail-inner">
          <div class="service-mail-ceo__box js-scroll-anime" data-anime="fadeInUp">
            <div class="service-mail-heading">
              <h2 class="service-mail-heading__main"><span>担当コンサルタントのご紹介</span></h2>
            </div>
            <div class="content">
              <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>03_service/ai/member-ceo.jpg" alt="代表取締役CEO 宮田 和也"></div>
              <div class="content__body">
                <div class="content__head">
                  <p class="content__name"><span>代表取締役CEO</span><br>宮田 和也</p>
                  <ul class="content__list">
                    <li class="content__item"><a href="https://twitter.com/webkirin" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-x.svg" alt="X(旧Twiter)"></a></li>
                    <li class="content__item"><a href="https://www.youtube.com/@COUNTERMARKETINGCHANNEL09" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-youtube.svg" alt="YOUTUBE"></a></li>
                    <li class="content__item"><a href="https://www.facebook.com/kazuya.miyata.589/" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-facebook.svg" alt="Facebook"></a></li>
                  </ul>
                </div>
                <div class="content__inner js-content__inner">
                  <p class="content__text">COUNTER株式会社 代表取締役/SEOコンサルタント。<br />
                  1993年生まれ。大学卒業後に外資系ITコンサルティング企業にてERP導入コンサルタントとして複数のシステム運用プロジェクトを経験。その後、CINCにてWebアナリスト、株式会社バンケッツにて不動産メディア事業責任者を経験し独立。フリーランスSEOコンサルタントを経験した後にニュートラルワークスにジョイン。mail/コンテンツマーケティング戦略を得意分野とする。</p>
                  <p class="content__text js-content__text utils-active">◆ 経歴<br />
                  2017年　日本タタ・コンサルタンシー・サービシズ株式会社/システムエンジニア(SAP Basis)<br />
                  2018年　キャップジェミニ株式会社/ITコンサルタント(SAP SD/MM)<br />
                  2019年　株式会社CINC/Webマーケティングアナリスト<br />
                  2019年　株式会社バンケッツ/事業責任者(不動産メディア事業)<br />
                  2020年　独立/Webマーケティングコンサルタント<br />
                  2022年　株式会社ニュートラルワークス/執行役員 SEOコンサルティングリード<br />
                  2024年　COUNTER株式会社 代表取締役<br />
                  <br />
                  ◆ 得意領域<br />
                  ・SEO戦略策定から実装支援(データベース・コンテンツ)<br />
                  ・コンテンツマーケティング戦略策定から実装支援</p>
                  <p class="content__trigger js-read-more">詳しく見る</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
   -->
   <section class="service-mail-ceo">
        <div class="service-mail-ceo__inner service-mail-inner">
          <section class="swiper js-pickup-slider-single">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <div class="service-mail-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-mail-heading">
                    <h2 class="service-mail-heading__main"><span>インタビュー/<br class="utils-block-hidden-pc">取材記事制作代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
                  </div>
                  <div class="content">
                    <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>03_service/ai/member-ceo.jpg" alt="代表取締役CEO 宮田 和也"></div>
                    <div class="content__body">
                      <div class="content__head">
                        <p class="content__name"><span>代表取締役CEO/デジタルマーケティングスペシャリスト</span><br>宮田 和也</p>
                        <ul class="content__list">
                          <li class="content__item"><a href="https://twitter.com/webkirin" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-x.svg" alt="X(旧Twiter)"></a></li>
                          <li class="content__item"><a href="https://www.youtube.com/@COUNTERMARKETINGCHANNEL09" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-youtube.svg" alt="YOUTUBE"></a></li>
                          <li class="content__item"><a href="https://www.facebook.com/kazuya.miyata.589/" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-facebook.svg" alt="Facebook"></a></li>
                        </ul>
                      </div>
                      <div class="content__inner js-content__inner">
                        <p class="content__text">COUNTER株式会社 代表取締役/SEOコンサルタント。<br />
                        1993年生まれ。大学卒業後に外資系ITコンサルティング企業にてERP導入コンサルタントとして複数のシステム運用プロジェクトを経験。その後、CINCにてWebアナリスト、株式会社バンケッツにて不動産メディア事業責任者を経験し独立。フリーランスSEOコンサルタントを経験した後にニュートラルワークスにジョイン。SEO/コンテンツマーケティング戦略を得意分野とする。</p>
                        <p class="content__text js-content__text utils-active">◆ 経歴<br />
                        2017年　日本タタ・コンサルタンシー・サービシズ株式会社/システムエンジニア(SAP Basis)<br />
                        2018年　キャップジェミニ株式会社/ITコンサルタント(SAP SD/MM)<br />
                        2019年　株式会社CINC/Webマーケティングアナリスト<br />
                        2019年　株式会社バンケッツ/事業責任者(不動産メディア事業)<br />
                        2020年　独立/Webマーケティングコンサルタント<br />
                        2022年　株式会社ニュートラルワークス/執行役員 SEOコンサルティングリード<br />
                        2024年　COUNTER株式会社 代表取締役<br />
                        <br />
                        ◆ 得意領域<br />
                        ・SEO戦略策定から実装支援(データベース・コンテンツ)<br />
                        ・コンテンツマーケティング戦略策定から実装支援</p>
                        <p class="content__trigger js-read-more">詳しく見る</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="service-mail-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-mail-heading">
                    <h2 class="service-mail-heading__main"><span>インタビュー/<br class="utils-block-hidden-pc">取材記事制作代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
                  </div>
                  <div class="content">
                    <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>00_common/kanazawa.png" alt="代表取締役CEO 金沢 匡史"></div>
                    <div class="content__body">
                      <div class="content__head">
                        <p class="content__name"><span>デジタルマーケティングスペシャリスト</span><br>金沢 匡史</p>
                      </div>
                      <div class="content__inner js-content__inner">
                        <p class="content__text">デジタルマーケティングスペシャリスト<br />
                        機械メーカーにて法人営業を5年ほど経験。GMOインターネットグループにてECサイトやコンテンツマーケティングの営業やディレクションに従事。その後、株式会社cloverにジョイン。マネージャーとして、さまざまな企業のサイト制作やSEOコンサルティング支援を経て、COUNTERへジョインし営業やSEOチームの総括を行っている。</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="pickup-slider__pagination"></div>
            <div class="pickup-slider__prev"></div>
            <div class="pickup-slider__next"></div>
          </section>
        </div>
      </section>


      <?php get_template_part('template-parts/service-mail-cta') ?>

      <section class="service-mail-qa">
        <div class="service-mail-qa__inner service-mail-inner">
          <div class="service-mail-heading">
            <p class="service-mail-heading__sub">メルマガ制作/配信代行サービスでの</p>
            <h2 class="service-mail-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          // リストデータを配列で管理
          $list_items = [
            [
              'question' => 'メルマガの配信で対象となるツールはありますか？',
              'answer' => 'COUNTERではHubspot、Account Engagement（旧Pardot）を推奨しております。MAツールの導入から支援を実施しており、詳しくはMA運用代行サービスをご確認ください。'
            ],
            [
              'question' => 'メルマガの運用体制を教えてください。',
              'answer' => 'お客様がご利用されているMAツールのライセンスを付与いただき、運用代行いたします。'
            ],
            [
              'question' => 'メルマガから遷移させたいサイト制作も合わせて、可能ですか？',
              'answer' => '可能です。サイト制作と関連することが多く、一緒にお話をいただく案件も複数ございます。'
            ],
            [
              'question' => 'メルマガのテンプレートだけを依頼することも可能ですか？',
              'answer' => '対応可能です。お客様とお打ち合わせの上、ご要望のテンプレートを制作いたします。'
            ],
            [
              'question' => 'メルマガのコンテンツ制作だけを依頼することは可能ですか？',
              'answer' => '可能です。COUNTERのライターやデザイナーが多数在籍しております。'
            ],
          ];
          ?>

          <ul class="list js-list-ac">
            <?php foreach ($list_items as $index => $item): ?>
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
                        <a class="service-mail-btn service-mail-btn--black" href="#contact">無料で相談する</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>

      <div class="section contact" id="contact" data-scroll-adjust-pc="60" data-scroll-adjust-sp="30">
        <div class="service-mail-heading">
          <h2 class="service-mail-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "メルマガ制作/配信代行";
            // document.querySelector('.js-fixed-cta-contact').setAttribute('href', '#contact');
          });
        </script>
      </div>
    </div>
  </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<script src="<?= home_url() ?>/wp-includes/js/jquery/jquery.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/assets2024/js/scripts.js"></script>
<script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<?php
//- フッターテンプレート呼び出し
get_footer();
?>
<script>
  new ScrollHint('.js-scrollable');
  if (document.querySelector(".js-read-more")) {
    const moreButtons = document.querySelectorAll(".js-read-more");
    moreButtons.forEach(function(button) {
      button.addEventListener("click", function() {
        const moreTarget = button.previousElementSibling;
        moreTarget.classList.remove("utils-active");
        button.classList.add("utils-active");
      });
    });
  }
  if (document.querySelector(".js-list-ac")) {
    const moreButtons = document.querySelectorAll(".js-content__head");
    moreButtons.forEach(function(button) {
      button.addEventListener("click", function() {
        const moreTarget = button.closest(".content").querySelector(".content__body");
        moreTarget.classList.toggle("utils-active");
        button.classList.toggle("utils-active");
      });
    });
  }
  (function initMailmagazineSwiper() {
    if (document.querySelector('.js-pickup-slider-single')) {
      const singleSwiper = new Swiper('.js-pickup-slider-single', {
        loop: true,
        centeredSlides: true,
        slidesPerView: 1,  // ここで1に設定
        spaceBetween: 36,
        speed: 300,
        pagination: {
          el: '.pickup-slider__pagination',
          clickable: true,
        },
        navigation: {
          prevEl: '.pickup-slider__prev',
          nextEl: '.pickup-slider__next',
        },
      });
    }
  })();
</script>
</body>
</html>