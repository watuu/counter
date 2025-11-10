<?php
/**
 * Template Name: インタビュー/取材記事制作代行サービスのテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'interview';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/interview';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-interview container">
    <div class="service-interview-inner">
      <div class="service-interview-fv">
        <div class="service-interview-fv__inner service-interview-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>インタビュー/取材記事制作でお悩みの方へ&nbsp;</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>インタビュー/取材記事制作で</span><br>
                <span>お悩みの方へ</span>
              </p>
              <h1 class="content__heading">
                <span>インタビュー/</span>
                <span>取材記事制作代行サービス</span>
              </h1>
              <p class="content__text utils-block-hidden-mobile">企業のファンを作り、成約率を高めるために<br>有効なインタビュー/取材記事制作代行サービスです。</p>
              <p class="content__text utils-block-hidden-pc">企業のファンを作り、成約率を高めるために有効なインタビュー/取材記事制作代行サービスです。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-interview-btn service-interview-btn--orange" href="https://counter-digital.jp/download<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-interview-btn service-interview-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/<?php echo $page_id; ?>/<?php echo $page_id; ?>.png" alt=""></div>
        </div>
      </div>

      <section class="service-interview-problems">
        <div class="service-interview-problems__inner service-interview-inner">
          <h2 class="introduction">インタビュー/取材記事作成の<br class="utils-block-hidden-pc">運用に関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['インタビュー記事制作の', 'ノウハウがない'],
              'text' => '自社でインタビュー記事制作を進めたいが、どこから始めれば良いのかわからず、プロジェクトが動かない。'
            ],
            [
              'label' => '2',
              'heading' => ['インタビュー記事制作人材が', '乏しい'],
              'text' => '記事制作に多くのリソースが取られるため、自社の人材の中で進めるのが難しい。'
            ],
            [
              'label' => '3',
              'heading' => ['マーケティング目標達成に', '貢献する記事が作れない'],
              'text' => 'CV（コンバージョン）創出のキーページとなるような記事コンテンツを制作したいが、企画のコツが分からない。'
            ],
            [
              'label' => '4',
              'heading' => ['専門性の高い記事制作が', 'できない'],
              'text' => 'インタビュー記事執筆に必要な専門性を備えているライターを自社でアサインできない。'
            ],
            [
              'label' => '5',
              'heading' => ['どの業者が良いのか', 'わからない'],
              'text' => '記事制作会社、編集プロダクションなどがあるが、どの業者に依頼すべきかわからず依頼先を決められない。'
            ],
            [
              'label' => '6',
              'heading' => ['インタビュー記事制作を', '依頼しているが', '品質が低い'],
              'text' => '別の会社で作る記事の品質が低いため、さらに質の高い記事制作を行いたい。'
            ],
          ];
          ?>
          <ol class="service-interview-list service-interview-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-interview-list__item">
                <section class="service-interview-card001">
                  <p class="service-interview-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-interview-card001__inner">
                    <h3 class="service-interview-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-interview-card001__text"><?php echo esc_html($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">インタビュー/取材記事制作代行<br class="utils-block-hidden-pc">サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-interview-cta') ?>

      <section class="service-interview-points">
        <div class="service-interview-points__inner service-interview-inner">
          <div class="service-interview-heading">
            <h2 class="service-interview-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="service-interview-heading__lead">カウンターだからこそできる<br>インタビュー/取材記事制作代行サービスの<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['経験豊富な', 'インタビューライターが対応'],
              'text' => '特定の領域で執筆実績が豊富なプロのライターをアサインいたします。企画、当日のインタビュー、執筆までを担当できる人材となりますので、安心してお任せください。'
            ],
            [
              'label' => '2',
              'heading' => ['原稿作成だけでなく', '撮影やCMS入稿も対応'],
              'text' => '原稿作成以外の撮影や、WordPressなどのCMSへの入稿まで対応するため、お客様側でご対応いただくのは確認作業のみとなります。'
            ],
            [
              'label' => '3',
              'heading' => ['専門チームで対応するため', '高品質が実現可能'],
              'text' => '記事コンテンツの制作進行を行うディレクター（コンサルタント）、インタビュ―ライター、カメラマンでチームを組成し、各担当者が制作を担います。'
            ],
            [
              'label' => '4',
              'heading' => ['専門知識を持った', 'ライターをアサイン'],
              'text' => '取材執筆を担当するライターネットワークは100名以上。様々な専門知識を持つライターネットワークを保有しているため、取材内容に合わせてライターをアサインします。'
            ],
            [
              'label' => '5',
              'heading' => ['SEOで上位表示できる', '記事制作も可能'],
              'text' => '業界歴7年のプロのコンサルタントがSEOで上位表示できる見出し・構成の設計を可能です。また、CVを考慮した構成、ストーリー作成も対応可能です。'
            ],
            [
              'label' => '6',
              'heading' => ['AIを活用したライティングも', 'オプション選択可能'],
              'text' => 'インタビューライターだけでなく、自社AIツールを活用したライティングプランも完備。月に10記事以上のインタビュー記事作成も社内で実施可能。'
            ],
          ];
          ?>

          <ol class="service-interview-list service-interview-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-interview-list__item">
                <section class="service-interview-card001">
                  <p class="service-interview-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-interview-card001__inner">
                    <h3 class="service-interview-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-interview-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="service-interview-service">
        <div class="service-interview-service__inner service-interview-inner">
          <div class="service-interview-heading">
            <p class="service-interview-heading__sub">カウンターの</p>
            <h2 class="service-interview-heading__main"><span>インタビュー/<br class="utils-block-hidden-pc">取材記事制作代行サービス</span></h2>
            <p class="service-interview-heading__lead">マーケティングの実績が<br class="utils-block-hidden-pc">豊富な担当者が運用代行を行います。</p>
          </div>
          <div class="table js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">戦略設計フェーズ</h3>
                    <div class="table__image table__image--001"><img src="<?php echo IMAGE_DIR; ?>00_common/elm-04.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ご提案</p>
                      <p class="table__text">Webサイトにおける目標達成のために、必要なコンテンツ案をご提案いたします。弊社のご提案内容にご納得いただける場合に、ご契約を締結させていただきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">コンテンツ企画</p>
                      <p class="table__text">お客様のビジネスについて、ヒアリングをさせていただき、インタビューコンテンツの企画を行います。</p>
                    </li>
                  </ul>
                </div>
              </section>
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">施策実施フェーズ</h3>
                    <div class="table__image table__image--002"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-05.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">質問シート作成</p>
                      <p class="table__text">コンテンツ制作を行う上で、必要な質問項目を洗い出します。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">取材準備</p>
                      <p class="table__text">インタビュアー、インタビュー/取材ライターのアサイン、また事前ミーティングの実施を行います。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">取材</p>
                      <p class="table__text">約1時間の取材を行います。当日はインタビュアー、カメラマンがお客様のオフィス、または別の撮影場所へうかがいます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">記事作成</p>
                      <p class="table__text">取材コンテンツを制作いたします。初稿納品までには7営業日をいただいております。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">納品</p>
                      <p class="table__text">編集者による校正・校閲を行った取材コンテンツを納品いたします。合計2回までの原稿修正が可能です。</p>
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
                      <p class="table__label">効果検証</p>
                      <p class="table__text">コンサルティングサービスを利用のお客様には、施策結果や分析をまとめたレポート資料を納品いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-interview-cta') ?>

      <section class="service-interview-differ">
        <div class="service-interview-heading">
          <h2 class="service-interview-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-interview-differ__inner service-interview-inner">
          <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table">
              <div class="table__inner">
                <div class="table__group">
                  <div class="table__head"></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">自社・競合分析</li>
                      <li class="table__item">CVの導線設計</li>
                      <li class="table__item">入稿後の効果検証</li>
                      <li class="table__item">ディレクション</li>
                      <li class="table__item">校正/校閲</li>
                      <li class="table__item">料金</li>
                      <li class="table__item">総合提案力</li>
                    </ul>
                  </div>
                </div>
                <div class="table__group table__group--orange">
                  <div class="table__head"><p>COUNTER（カウンター）</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">専門的な調査が可能。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">コンサルタントがUI/UXの観点から設計。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">分析ツールを活用して最適な記事制作に寄与。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">戦略的な企画設計からコンテンツ案を作成。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">専属の編集者が意図を汲み取った編集を実施。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">高品質かつ戦略的な取材記事、成果創出しやすい。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">戦略、価格、実行力の観点で総合力が高い。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>記事制作会社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">記事ライティング以外は苦手。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">記事代行のみ対応することが多い。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">納品後の効果検証はサービス対象外となる。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">専属ディレクターが伴走。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">プロの編集者が修正を担当。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">ライティングのみだと価格が安い。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>編集プロダクション</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--x"></span>
                        <span class="table__text">専門的なマーケティング地検が不足しがち。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">感覚的な要素が多い。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--x"></span>
                        <span class="table__text">専門的なマーケティング地検が不足しがち。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">専属ディレクターが伴走。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">編集のみに特化しており、精度の高い記事が可能。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">品質に特化しているため高騰する場合もある。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>自社記事制作</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">自社でできるが方法が正しいかは怪しい。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">担当者により左右される。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">担当者により左右される。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">円滑に社内進行が可能。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">担当者により左右される。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">自社で完結するため外注コストが発生しない。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
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

      <section class="service-interview-ceo">
        <div class="service-interview-ceo__inner service-interview-inner">
          <section class="swiper js-pickup-slider-single">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <div class="service-interview-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-interview-heading">
                    <h2 class="service-interview-heading__main"><span>インタビュー/<br class="utils-block-hidden-pc">取材記事制作代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
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
                <div class="service-interview-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-interview-heading">
                    <h2 class="service-interview-heading__main"><span>インタビュー/<br class="utils-block-hidden-pc">取材記事制作代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
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

      <?php get_template_part('template-parts/service-interview-cta') ?>

      <section class="service-interview-qa">
        <div class="service-interview-qa__inner service-interview-inner">
          <div class="service-interview-heading">
            <p class="service-interview-heading__sub">インタビュー/<br class="utils-block-hidden-pc">取材記事制作代行サービスでの</p>
            <h2 class="service-interview-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          // リストデータを配列で管理
          $list_items = [
            [
              'question' => 'インタビュー/取材記事制作では、どのようなコンテンツが作れるのでしょうか？',
              'answer' => 'オウンドメディア向け記事、ブランディング記事、自社サービス紹介などのコンテンツ制作が可能です。'
            ],
            [
              'question' => '記事コンテンツの企画や進行管理も依頼できるのでしょうか？',
              'answer' => '記事の目的に合わせたコンテンツ企画、進行管理も対応可能です。'
            ],
            [
              'question' => '記事のリライトもできるのでしょうか？',
              'answer' => '取材時に取得した音声や画像素材があれば取材記事を制作することができます。'
            ],
            [
              'question' => '記事の依頼から納品までの期間はどれくらいでしょうか？',
              'answer' => [
                  '・構成作成: 3～5営業日',
                  '・取材から初稿納品まで: 5～10営業日',
                  '・初稿納品から最終納品まで: 5～10営業日',
                  '※ 発注から3～4週間で原稿納品させていただきます。'
              ]
            ],
            [
              'question' => 'どうしても緊急で原稿が必要であり、短納期で対応できますでしょうか？',
              'answer' => '対応可能です。緊急対応料金プランでご提案する場合がございます。'
            ],
            [
              'question' => '遠隔地での取材対応は可能でしょうか？',
              'answer' => '原則、一都三県（東京都、神奈川県、埼玉県、千葉県）のみ対応しております。それ以外の地域の場合は、オンラインにて取材対応いたします。'
            ],
            [
              'question' => '記事コンテンツをホワイトペーパーにしてもらうこともできますか？',
              'answer' => '記事コンテンツのホワイトペーパー制作は対応可能です。'
            ],
            [
              'question' => '1記事から対応は可能でしょうか？',
              'answer' => '対応可能です。お気軽にお問い合わせください。'
            ],
            [
              'question' => '何から始めれば良いのかわからず、問題ないでしょうか？',
              'answer' => '問題ございません。弊社にて段取りを取らせていただきますので、ご安心ください。'
            ],
            [
              'question' => 'インタビュー記事以外にも、通常SEO記事の制作も対応可能でしょうか？',
              'answer' => 'もちろん、対応可能でございます。'
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
                      <?php if (is_array($item['answer'])): ?>
                        <ul class="content__list">
                        <?php foreach ($item['answer'] as $answerItem): ?>
                          <li class="content__item"><?php echo esc_html($answerItem); ?></li>
                          <?php endforeach; ?>
                        </ul>
                      <?php else: ?>
                        <p class="content__text">
                          <?php echo wp_kses_post($item['answer']); ?>
                        </p>
                      <?php endif; ?>
                      <div class="content__btn" style="margin-top:38px;">
                        <a class="service-interview-btn service-interview-btn--black" href="#contact">無料で相談する</a>
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
        <div class="service-interview-heading">
          <h2 class="service-interview-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "インタビュー/取材記事制作代行";
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
<script src="<?= get_stylesheet_directory_uri() ?>/assets2024/js/scripts.js"></script>
<script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<?php
//- フッターテンプレート呼び出し
get_footer();
?>
</body>
</html>