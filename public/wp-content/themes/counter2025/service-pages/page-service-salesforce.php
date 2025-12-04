<?php
/**
 * Template Name: Salesforce運用代行サービスのテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'salesforce';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/salesforce';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-salesforce service-instagram container">
    <div class="service-salesforce-inner">
      <div class="service-salesforce-fv">
        <div class="service-salesforce-fv__inner service-salesforce-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>Salesforceの利活用、</span><br>
                <span>CRM・SFAの運用でお悩みの方へ&nbsp;</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>Salesforceの利活用、</span><br>
                <span>CRM・SFAの運用で</span><br>
                <span>お悩みの方へ</span>
              </p>
              <h1 class="content__heading">
                <span>Salesforce</span>
                <span>運用代行サービス</span>
              </h1>
              <p class="content__text utils-block-hidden-mobile">トップクラスのSalesforceコンサルタントが監修する<br>Salesforceの運用と活用強化を目的とした運用代行サービスです。</p>
              <p class="content__text utils-block-hidden-pc">トップクラスのSalesforceコンサルタントが監修するSalesforceの運用と活用強化を目的とした運用代行サービスです。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-salesforce-btn service-salesforce-btn--orange" href="https://counter-digital.jp/download<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-salesforce-btn service-salesforce-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/<?php echo $page_id; ?>/<?php echo $page_id; ?>.png" alt=""></div>
        </div>
      </div>

      <section class="service-salesforce-problems">
        <div class="service-salesforce-problems__inner service-salesforce-inner">
          <h2 class="introduction">Salesforceの<br class="utils-block-hidden-pc">運用と活用に関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['Salesforceの', 'ノウハウがない'],
              'text' => 'Salesforceを導入し、デジタル化・DXを進めたいが、ノウハウが少なく、導入後の変化が理解しきれない。'
            ],
            [
              'label' => '2',
              'heading' => ['Salesforceの', '運用人財が乏しい'],
              'text' => '自社でSalesforceの運用を実施したいけれど、IT人財が乏しい、または退職により自社での運用が難しい。'
            ],
            [
              'label' => '3',
              'heading' => ['Salesforceの', '構築が進まない'],
              'text' => 'Salesforceをさらに活用したいけれど、業務プロセスに沿った構築ができない。'
            ],
            [
              'label' => '4',
              'heading' => ['Salesforceを', '活用できていない'],
              'text' => '初期構築を外部業者に委託したけれど、構築後の運用まで伴走してもらえず、活用できていない。'
            ],
            [
              'label' => '5',
              'heading' => ['どの業者が良いのか', 'わからない'],
              'text' => '初期構築、伴走支援、運用代行などの様々な領域がある中で、どの業者に依頼するのが良いのかわからず依頼先を決めづらい。'
            ],
            [
              'label' => '6',
              'heading' => ['Salesforceの', 'コンサルティングを', '依頼しているが変化が見えない'],
              'text' => 'すでにSalesforceを外部業者に依頼しているが成果が出ておらず、困っている。'
            ],
          ];
          ?>
          <ol class="service-salesforce-list service-salesforce-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-salesforce-list__item">
                <section class="service-salesforce-card001">
                  <p class="service-salesforce-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-salesforce-card001__inner">
                    <h3 class="service-salesforce-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-salesforce-card001__text"><?php echo esc_html($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">Salesforce運用代行サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-salesforce-cta') ?>

      <section class="service-salesforce-points">
        <div class="service-salesforce-points__inner service-salesforce-inner">
          <div class="service-salesforce-heading">
            <h2 class="service-salesforce-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="service-salesforce-heading__lead">カウンターだからこそできる<br>Salesforce運用代行サービスの<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['Salesforceの運用経験豊富な', 'コンサルタントが対応'],
              'text' => '卓越したSalesforce導入事例として選ばれたプロが、導入検討から活用支援まで対応します。'
            ],
            [
              'label' => '2',
              'heading' => ['活用策定から実行までの', 'トータル支援'],
              'text' => 'Salesforceの活用策定から実行支援までトータル支援が可能です。営業日報や商談・案件管理の活用策定、業務プロセスに沿った個別での対応も可能です。'
            ],
            [
              'label' => '3',
              'heading' => ['Salesforceに関する', '高い専門性'],
              'text' => 'COUNTERでは、Salesforce運用経験豊富なプロのコンサルタントが対応します。多くの業界、活用事例に基づいたSalesforceの運用支援を行います。'
            ],
            [
              'label' => '4',
              'heading' => ['投資対効果の合う', 'プランの提案'],
              'text' => 'ご提案時より、お客様の課題、予算に合わせたプランを提示いたします。逆に、費用対効果が合わない場合には、サービスをおすすめしないこともございます。'
            ],
            [
              'label' => '5',
              'heading' => ['Salesforce活用診断も提供'],
              'text' => '既存のSalesforce運用の良し悪しについて評価するサービスもご提供可能です。通常料金よりもお求めやすい価格となっておりますので、ご検討ください。'
            ],
            [
              'label' => '6',
              'heading' => ['運用・活用強化だけでなく、', '導入検討の相談・初期構築', 'まで対応'],
              'text' => '初期設定、取引先、取引先責任者、営業日報、商談・案件管理、リードの構築をはじめ、レポート・ダッシュボードなどの既存機能に対する改修まで幅広くご支援が可能です。'
            ],
          ];
          ?>

          <ol class="service-salesforce-list service-salesforce-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-salesforce-list__item">
                <section class="service-salesforce-card001">
                  <p class="service-salesforce-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-salesforce-card001__inner">
                    <h3 class="service-salesforce-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-salesforce-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="service-salesforce-service">
        <div class="service-salesforce-service__inner service-salesforce-inner">
          <div class="service-salesforce-heading">
            <p class="service-salesforce-heading__sub">カウンターの</p>
            <h2 class="service-salesforce-heading__main"><span>Salesforce運用代行サービス</span></h2>
            <p class="service-salesforce-heading__lead">マーケティングの実績が<br class="utils-block-hidden-pc">豊富な担当者が運用代行を行います。</p>
          </div>
          <div class="table js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">Salesforce設計フェーズ</h3>
                    <div class="table__image table__image--001"><img src="<?php echo IMAGE_DIR; ?>00_common/elm-04.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ヒヤリング</p>
                      <p class="table__text">Salesforceの特性を理解した上で目的や現在の課題、業務プロセスなどをヒアリングさせていただきます。導入検討時の既存データ構造や営業プロセス、事業概要も合わせてキャッチアップいたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">プロセス策定</p>
                      <p class="table__text">ヒアリングを受け、貴社のデータ構造や営業プロセス、Salesforce導入後の理想像から、営業・業務プロセスの整理と策定を行います。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">Salesforce要件定義</p>
                      <p class="table__text">ヒアリング、プロセス策定をもとにカウンターの担当者がSalesforceの設計を行います。</p>
                    </li>
                  </ul>
                </div>
              </section>
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">Salesforce構築フェーズ</h3>
                    <div class="table__image table__image--002"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-05.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">オブジェクト構築</p>
                      <p class="table__text">要件定義をもとにオブジェクトの構築、項目作成を行います。プロセス、効果測定の運用視点で必要な場合は追加構築をご提案いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">運用策定</p>
                      <p class="table__text">オブジェクトの構築後、定例MTGで運用策定支援を行います。運用策定で追加構築が必要な場合、作業はカウンター側で行います。</p>
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
                      <p class="table__label">伴走支援</p>
                      <p class="table__text">Salesforceの活用を行い、定例MTGでユーザーからの課題や要望に沿って、伴走支援いたします。スポットでの改修依頼はコミュニケーションツールを介して、簡単に依頼いただけます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">PDCA改善</p>
                      <p class="table__text">経営指標、営業戦略などを踏まえて、Salesforce活用強化の観点から今後の構築や改善計画、アプリケーション導入のご提案を実施いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-salesforce-cta') ?>

      <section class="service-salesforce-differ">
        <div class="service-salesforce-heading">
          <h2 class="service-salesforce-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-salesforce-differ__inner service-salesforce-inner">
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
                        <span class="table__text">製造・小売業をはじめ、多くの業界でSalesforce支援を行なっている経験が豊富なプロが対応。</span>
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

      <!-- <section class="service-salesforce-ceo">
        <div class="service-salesforce-ceo__inner service-salesforce-inner">
          <div class="service-salesforce-ceo__box js-scroll-anime" data-anime="fadeInUp">
            <div class="service-salesforce-heading">
              <h2 class="service-salesforce-heading__main"><span>Salesforce運用代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
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
        </div>
      </section> -->
      <section class="service-salesforce-ceo service-instagram-ceo">
        <div class="service-salesforce-ceo__inner service-btob-inner">
          <section class="swiper js-pickup-slider-single">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <div class="service-salesforce-ceo__box js-scroll-anime" data-anime="fadeInUp">
                <div class="service-salesforce-heading">
              <h2 class="service-salesforce-heading__main"><span>Salesforce運用代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
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
                <div class="service-salesforce-ceo__box js-scroll-anime" data-anime="fadeInUp">
                <div class="service-salesforce-heading">
              <h2 class="service-salesforce-heading__main"><span>Salesforce運用代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
            </div>
                  <div class="content">
                    <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>02_company/member-16.png" alt="石川 直樹"></div>
                    <div class="content__body">
                      <div class="content__head">
                      <p class="content__name"><span>Salesforce/Hubspotスペシャルスト</span><br>石川 直樹</p>

                        <!-- <ul class="content__list">
                          <li class="content__item"><a href="https://x.com/wed_sou" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-x.svg" alt="X(旧Twiter)"></a></li>
                        </ul> -->
                      </div>
                      <div class="content__inner js-content__inner">
                        <p class="content__text">株式会社ORIT.代表<br>
大学卒業後にオーストラリアへの留学を経て、株式会社メルカリへ入社。新事業であるメルペイの立ち上げとメルカリグループ初の営業組織立ち上げを経験。その後、株式会社セールスフォースジャパンに転職し、主にスタートアップ企業へSaelsforceを基軸とした業務全般のDX化支援を行う。Salesforce社でトップセールスとしての経験を得て、2023年11月に当社設立をし、現在はSalesforce社とHubspot社の公式パートナーとしてCRM/SFAを基軸としたDX支援事業を展開</p>
                        <p class="content__trigger js-read-more">詳しく見る</p>
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


      <?php get_template_part('template-parts/service-salesforce-cta') ?>

      <div class="service-salesforce-howto service-salesforce-howto001">
        <div class="service-salesforce-howto__inner service-salesforce-inner">
          <div class="service-salesforce-heading-box">
            <p class="service-salesforce-heading-box__main">Salesforceの外部業者選定を<br class="utils-block-hidden-pc">誤ってしまうと<br class="utils-block-hidden-mobile"><span>労働生産性の低下</span>を<br class="utils-block-hidden-pc">引き起こす要因になります。</p>
            <p class="service-salesforce-heading-box__sub">Salesforceは企業基盤となる仕組みとなります。<br class="utils-block-hidden-mobile">そのため、導入する企業は増加傾向にありますが、<br class="utils-block-hidden-mobile">安易な選択で外部業者の選定や導入を行うと<br class="utils-block-hidden-mobile">運用・活用観点で課題が生じ、<br class="utils-block-hidden-mobile">場合によっては活用できない状況にもつながります。</p>
          </div>
          <ul class="list list--ng js-scroll-anime" data-anime="fadeInUp">
            <li class="list__item">
              <section class="content">
                <p class="content__head">課題となるサイン</p>
                <div class="content__body">
                  <p class="content__text">構築された仕様が<br class="utils-block-hidden-mobile">誰もわからず、<br class="utils-block-hidden-mobile">活用できていない</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">課題となるサイン</p>
                <div class="content__body">
                  <p class="content__text">導入したものの、ユーザーに導入の変化を伝達できず、活用できていない</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">課題となるサイン</p>
                <div class="content__body">
                  <p class="content__text">初期構築は終わっているが<br class="utils-block-hidden-mobile">Salesforce人材が不足し、<br class="utils-block-hidden-mobile">推進できない</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">課題となるサイン</p>
                <div class="content__body">
                  <p class="content__text">営業プロセスと<br class="utils-block-hidden-mobile">かけ離れた仕組みになり、<br class="utils-block-hidden-mobile">定着ができない</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">課題となるサイン</p>
                <div class="content__body">
                  <p class="content__text">通常業務を並行し、構築するため、稼働・定着までに時間を要している</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">課題となるサイン</p>
                <div class="content__body">
                  <p class="content__text">どのような施策や営業活動が受注に寄与しているか<br class="utils-block-hidden-mobile">見えない</p>
                </div>
              </section>
            </li>
          </ul>
          <ul class="list list--ok list--before-arrow js-scroll-anime" data-anime="fadeInUp">
            <li class="list__item">
              <section class="content">
                <p class="content__head">対応策</p>
                <div class="content__body">
                  <p class="content__text">構築された内容を<br class="utils-block-hidden-mobile">活用診断で言語化</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">対応策</p>
                <div class="content__body">
                  <p class="content__text">活用することでのメリットを共にユーザーに説明</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">対応策</p>
                <div class="content__body">
                  <p class="content__text">初期構築内容を理解し、活用・構築プランを策定</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">対応策</p>
                <div class="content__body">
                  <p class="content__text">営業プロセスに最適な<br class="utils-block-hidden-mobile">仕組みに向けた<br class="utils-block-hidden-mobile">改修を実施</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">Salesforceのプロが<br class="utils-block-hidden-mobile">構築するため、稼働・定着まで最短で実現</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">対応策</p>
                <div class="content__body">
                  <p class="content__text">受注に寄与する<br class="utils-block-hidden-mobile">施策・活動を定量化・可視化する仕組みを構築</p>
                </div>
              </section>
            </li>
          </ul>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__sub">ビジネスモデルと<br class="utils-block-hidden-pc">プロセスに最適な</p>
            <p class="solution__main"><strong>Salesforceの運用</strong><br class="utils-block-hidden-pc">を代行します！！</p>
          </div>
        </div>
      </div>

      <section class="service-salesforce-qa">
        <div class="service-salesforce-qa__inner service-salesforce-inner">
          <div class="service-salesforce-heading">
            <p class="service-salesforce-heading__sub">Salesforce運用代行サービスでの</p>
            <h2 class="service-salesforce-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          // リストデータを配列で管理
          $list_items = [
            [
              'question' => 'Salesforce導入前だけでなく、導入後からでも相談可能ですか？',
              'answer' => '対応可能です。現状と課題をお伺いした上で最適なプランをご提案させていただきます。'
            ],
            [
              'question' => 'Salesforce導入後の運用や保守、人財育成もお願いできますか？',
              'answer' => '対応可能です。運用や保守、人財育成など、内容によって金額が異なるため、別途御見積りとさせていただきます。'
            ],
            [
              'question' => 'Salesforceをはじめ、顧客管理の導入前から相談することは可能ですか？',
              'answer' => '対応可能です。導入前の設計から構築、運用や保守まで一貫してご支援が可能です。'
            ],
            [
              'question' => '追加の機能構築も相談可能ですか？',
              'answer' => '対応可能です。現状の構築内容と目的を理解した上で、最適なプランをご提案させていただきます。'
            ],
            [
              'question' => 'Slackやメールなどのコミュニケーションだけでなく、定期MTGの開催もお願いできますか？',
              'answer' => '可能です。隔週または月次での定期MTGで伴走支援いたします。'
            ],
            [
              'question' => '依頼内容の対応だけでなく、自社にあった提案もしてくれますか？',
              'answer' => '対応可能です。Salesforceの運用代行を行う上で、課題感や最適なプランがある場合はご提案する場合もございます。'
            ],
            [
              'question' => '構築期間はどのくらいかかりますか？',
              'answer' => '一般的なSalesforceの構築期間は4ヶ月〜となります。内容によって期間は変動します。'
            ],
            [
              'question' => 'Salesforceのライセンス選定も可能ですか？',
              'answer' => '可能です。お客様のご要望に応じて、最適なライセンス構成を選定させていただきます。'
            ],
            [
              'question' => '費用はどのくらいかかりますか？',
              'answer' => '概算費用で216万円〜です。内容によって大きく変動いたしますので、詳細はお問い合わせください。'
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
                        <a class="service-salesforce-btn service-salesforce-btn--black" href="#contact">無料で相談する</a>
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
        <div class="service-salesforce-heading">
          <h2 class="service-salesforce-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "Salesforce運用代行";
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
</body>
</html>