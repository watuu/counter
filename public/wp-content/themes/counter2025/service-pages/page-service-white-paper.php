<?php
/**
 * Template Name: ホワイトペーパー制作代行サービスのテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'service-white';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document-company';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="<?php echo $page_id; ?> container">
    <div class="<?php echo $page_id; ?>-inner">
      <div class="<?php echo $page_id; ?>-fv">
        <div class="<?php echo $page_id; ?>-fv__inner <?php echo $page_id; ?>-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>リード獲得とリード育成でお悩みの方へ</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>リード獲得とリード育成</span><br>
                <span>でお悩みの方へ</span>
              </p>
              <h1 class="content__heading">
                <span>ホワイトペーパー</span><span>制作/作成代行</span>
              </h1>
              <p class="content__text">リード獲得・リード育成に直結する<br class="utils-block-hidden-pc">ホワイトペーパー制作を代行します。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="<?php echo $page_id; ?>-btn <?php echo $page_id; ?>-btn--orange" href="https://counter-digital.jp/download/service_wp/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="<?php echo $page_id; ?>-btn <?php echo $page_id; ?>-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/white-paper/white-paper.png" alt=""></div>
        </div>
      </div>

      <section class="<?php echo $page_id; ?>-problems">
        <div class="<?php echo $page_id; ?>-problems__inner <?php echo $page_id; ?>-inner">
          <h2 class="introduction">ホワイトペーパー制作/作成で<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          $items = [
            [
              'label' => '1',
              'heading' => ['リード獲得が思うように', '進まない'],
              'text' => '見込み顧客が興味を持たなくホワイトペーパーが少ない。'
            ],
            [
              'label' => '2',
              'heading' => ['リードナーチャリングの', 'コンテンツが不足している'],
              'text' => 'MAツールを活用し、メルマガやシナリオを強化したいが、ホワイトペーパーが不足している。'
            ],
            [
              'label' => '3',
              'heading' => ['デジタルマーケティングを', '強化したいが、', 'コンテンツ制作に手が回らない'],
              'text' => 'マーケティング部門のリソースが少なく、ホワイトペーパーの作成を外部委託したい。'
            ],
            [
              'label' => '4',
              'heading' => ['ホワイトペーパーの', '品質を高めたい'],
              'text' => 'ホワイトペーパーの質が低いため、外部委託し、質の高いホワイトペーパーを制作したい。'
            ],
            [
              'label' => '5',
              'heading' => ['ホワイトペーパーの制作の', 'ノウハウが少ない'],
              'text' => 'ホワイトペーパーを制作したいが、ノウハウや知識不足により、注力できていない。'
            ],
            [
              'label' => '6',
              'heading' => ['ホワイトペーパーを', '制作しているものの、', '成果が見えない'],
              'text' => 'ホワイトペーパーを制作したいが、ノウハウや知識不足により、注力できていない。'
            ]
          ];
          ?>

          <ol class="<?php echo $page_id; ?>-list <?php echo $page_id; ?>-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($items as $item): ?>
              <li class="<?php echo $page_id; ?>-list__item">
                <section class="<?php echo $page_id; ?>-card001">
                  <p class="<?php echo $page_id; ?>-card001__label"><?php echo $item['label']; ?></p>
                  <div class="<?php echo $page_id; ?>-card001__inner">
                    <h3 class="<?php echo $page_id; ?>-card001__heading">
                      <?php foreach ($item['heading'] as $heading): ?>
                        <span><?php echo $heading; ?></span>
                      <?php endforeach; ?>
                    </h3>
                    <p class="<?php echo $page_id; ?>-card001__text"><?php echo $item['text']; ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">ホワイトペーパー制作/作成代行<br class="utils-block-hidden-pc">サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-white-cta') ?>

      <section class="<?php echo $page_id; ?>-points">
        <div class="<?php echo $page_id; ?>-points__inner <?php echo $page_id; ?>-inner">
          <div class="<?php echo $page_id; ?>-heading">
            <h2 class="<?php echo $page_id; ?>-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="<?php echo $page_id; ?>-heading__lead">カウンターだからこそできる<br>ホワイトペーパー制作/作成代行サービスの<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <?php
          $items = [
              [
                  'label' => '1',
                  'heading' => ['BtoB領域で経験豊富な', 'ライター&デザイナーが制作'],
                  'text' => 'BtoBマーケティング領域で経験豊富なライター&デザイナーが高品質なコンテンツを制作します。'
              ],
              [
                  'label' => '2',
                  'heading' => ['デジタルマーケティング領域', 'での実績'],
                  'text' => 'COUNTERはデジタルマーケティングに特化したブランドです。自社でのリード獲得・育成経験をもとにホワイトペーパーの効果を最大化します。'
              ],
              [
                  'label' => '3',
                  'heading' => ['企画からデザイン・ライティング', 'まで幅広く対応'],
                  'text' => 'デザインのみの発注など、お客様のご要望に合わせて、プロがコンテンツ制作を支援します。'
              ],
              [
                  'label' => '4',
                  'heading' => ['投資対効果の合う', 'プランの提案'],
                  'text' => 'ご提案時より、お客様の課題、予算に合わせたプランを提示いたします。逆に、費用対効果が合わない場合には、サービスをおすすめしないこともございます。'
              ],
              [
                  'label' => '5',
                  'heading' => ['さまざまな業種業態の事例'],
                  'text' => 'COUNTERは業種業態問わず、デジタルマーケティングの支援をおこなっています。豊富な事例をもとにホワイトペーパーの効果を最大化します。'
              ],
              [
                  'label' => '6',
                  'heading' => ['COUNTERのブランドと実績'],
                  'text' => 'COUNTERはBtoBマーケティングのプロが多く在籍しています。ホワイトペーパーの制作だけに留まらず、マーケティング施策全般のご提案が可能です。'
              ]
          ];

          ?>

          <ol class="<?php echo $page_id; ?>-list <?php echo $page_id; ?>-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($items as $item): ?>
              <li class="<?php echo $page_id; ?>-list__item">
                <section class="<?php echo $page_id; ?>-card001">
                  <p class="<?php echo $page_id; ?>-card001__label"><?php echo $item['label']; ?></p>
                  <div class="<?php echo $page_id; ?>-card001__inner">
                    <h3 class="<?php echo $page_id; ?>-card001__heading">
                      <?php foreach ($item['heading'] as $heading): ?>
                        <span><?php echo $heading; ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="<?php echo $page_id; ?>-card001__text"><?php echo $item['text']; ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>

        </div>
      </section>

      <section class="<?php echo $page_id; ?>-service">
        <div class="<?php echo $page_id; ?>-service__inner <?php echo $page_id; ?>-inner">
          <div class="<?php echo $page_id; ?>-heading">
            <p class="<?php echo $page_id; ?>-heading__sub">カウンターの</p>
            <h2 class="<?php echo $page_id; ?>-heading__main utils-block-hidden-mobile"><span>ホワイトペーパー制作/作成代行サービスの流れ</span></h2>
            <h2 class="<?php echo $page_id; ?>-heading__main utils-block-hidden-pc"><span>ホワイトペーパー制作/作成代行</span><br><span>サービスの流れ</span></h2>
            <p class="<?php echo $page_id; ?>-heading__lead">ホワイトペーパーで実績豊富な担当者が<br class="utils-block-hidden-pc">制作を行います。</p>
          </div>
          <div class="table js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">ホワイトペーパー<br>設計フェーズ</h3>
                    <div class="table__image table__image--001"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-04.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ヒヤリング</p>
                      <p class="table__text">商品やサービスを理解した上で目的や現在の課題、スケジュールなどをヒアリングさせていただきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">企画・テーマの決定</p>
                      <p class="table__text">ヒアリングを受け、ホワイトペーパーの企画、訴求内容を整理します。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">構成案の作成</p>
                      <p class="table__text">訴求内容、商品・サービス概要など、ホワイトペーパーの構成案をご提案いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">制作フェーズ</h3>
                    <div class="table__image table__image--002"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-05.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ライティング</p>
                      <p class="table__text">構成案をもとにホワイトペーパーのライティングを行います。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">デザイン制作</p>
                      <p class="table__text">ライティングの完了後、お客様の理想をもとにデザインの制作を行います。</p>
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
                      <p class="table__label">納品</p>
                      <p class="table__text">ライティング・制作が完了次第、PDFで納品いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">運用改善</p>
                      <p class="table__text">納品後の各種数値をもとにホワイトペーパー制作に関するご提案をいたします。リード獲得・育成を最大化する今後の制作計画を支援します。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-white-cta') ?>

      <section class="<?php echo $page_id; ?>-differ">
        <div class="<?php echo $page_id; ?>-heading">
          <h2 class="<?php echo $page_id; ?>-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="<?php echo $page_id; ?>-differ__inner <?php echo $page_id; ?>-inner">
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
                      <li class="table__item">運用保守</li>
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
                        <span class="table__text">MA・SFA・CRM運用領域における経験豊富なプロが対応。</span>
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
                        <span class="table__text">高い技術力を保有するプロが対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">設計から構築、運用支援まで対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">価格、対応範囲、専門性の観点で総合力が高い。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>中小ITコンサルティング企業</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
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
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">構築または保守のみのケースが多く、工数制限も存在する。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>大手ITコンサルティング企業</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">構築だけで設計は対応しない業者もあり。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">業者によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text"> 高額なケースが大半。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">高い技術力を保有する業者あり。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">構築のみまたは非対応。</span>
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

      <section class="<?php echo $page_id; ?>-ceo">
        <div class="<?php echo $page_id; ?>-ceo__inner <?php echo $page_id; ?>-inner">
          <section class="swiper js-pickup-slider-single">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <div class="<?php echo $page_id; ?>-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="<?php echo $page_id; ?>-heading">
                    <h2 class="<?php echo $page_id; ?>-heading__main"><span>ホワイトペーパー制作・作成<br class="utils-block-hidden-pc">代行サービスの担当者ご紹介</span></h2>
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
                <div class="service-white-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-white-heading">
                    <h2 class="<?php echo $page_id; ?>-heading__main"><span>ホワイトペーパー制作・作成代行サービス<br class="utils-block-hidden-pc">の担当者ご紹介</span></h2>
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


      <?php get_template_part('template-parts/service-white-cta') ?>

      <section class="<?php echo $page_id; ?>-qa">
        <div class="<?php echo $page_id; ?>-qa__inner <?php echo $page_id; ?>-inner">
          <div class="<?php echo $page_id; ?>-heading">
            <p class="<?php echo $page_id; ?>-heading__sub">ホワイトペーパー制作/作成代行<br class="utils-block-hidden-pc">サービスで</p>
            <h2 class="<?php echo $page_id; ?>-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          $list_items = [
            [
              'question' => 'ホワイトペーパーの内容から相談可能ですか？',
              'answer' => '可能です。事業や商品、サービスなどお伺いし、最適な内容をご提案いたします。',
            ],
            [
              'question' => 'デザインのみの発注も可能ですか？',
              'answer' => '対応可能です。デザインのみ、骨子とデザインなど、ご要望の内容を選択ください。',
            ],
            [
              'question' => '期間はどのくらいですか？',
              'answer' => '内容によって異なりますが、平均1ヶ月で納品させていただきます。',
            ],
            [
              'question' => '納品形式を教えてください。',
              'answer' => '基本的にPDFで納品いたしますが、ご要望に合わせて、XD、PPT、GSでの納品も可能です。',
            ],
            [
              'question' => 'ホワイトペーパー制作と合わせて、Web制作の相談も可能ですか？',
              'answer' => '可能です。サイト制作と関連することが多く、一緒にお話をいただく案件も複数ございます。',
            ],
            [
              'question' => 'ホワイトペーパー制作と合わせて、デジタルマーケティング戦略全般の修正も可能ですか？',
              'answer' => '対応可能です。取り組んでいる戦略をお伺いし、別途ご提案いたします。',
            ],
            [
              'question' => '費用はどのくらいかかりますか？',
              'answer' => '概算費用で1本あたり25万円〜です。内容によって変動いたしますので、詳細はお問い合わせください。',
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
                        <a class="service-white-btn service-white-btn--black" href="#contact">無料で相談する</a>
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
        <div class="<?php echo $page_id; ?>-heading">
          <h2 class="<?php echo $page_id; ?>-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "ホワイトペーパー制作/作成代行";
            document.querySelector('.js-fixed-cta-contact').setAttribute('href', '#contact');
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
<?php
//- フッターテンプレート呼び出し
get_footer();
?>
</body>
</html>