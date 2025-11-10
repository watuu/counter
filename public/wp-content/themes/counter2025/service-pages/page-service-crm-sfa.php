<?php
/**
 * Template Name: CRM・SFA運用代行のテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'crm-sfa';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document-crm';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-crm container">
    <div class="service-crm-inner">
      <div class="service-crm-fv">
        <div class="service-crm-fv__inner service-crm-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>Salesforceの利活用、</span><br>
                <span>CRM・SFAの運用でお悩み方へ</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>Salesforceの利活用、</span><br>
                <span>CRM・SFAの運用でお悩み方へ</span>
              </p>
              <h1 class="content__heading">
                <span>CRM・SFA運用代行</span>
              </h1>
              <p class="content__text utils-block-hidden-mobile">トップクラスのCRMコンサルタントが監修する<br>CRM・SFAの運用と活用強化を目的とした運用代行サービスです。</p>
              <p class="content__text utils-block-hidden-pc">トップクラスのCRMコンサルタントが監修するCRM・SFAの運用と活用強化を目的とした運用代行サービスです。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-crm-btn service-crm-btn--orange" href="https://counter-digital.jp/download/<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-crm-btn service-crm-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/<?php echo $page_id; ?>/crm-sfa.png" alt=""></div>
        </div>
      </div>

      <section class="service-crm-problems">
        <div class="service-crm-problems__inner service-crm-inner">
          <h2 class="introduction">CRM・SFAの<br class="utils-block-hidden-pc">運用と活用に関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['CRM・SFAの', 'ノウハウがない'],
              'text' => 'CRM・SFAの導入し、デジタル化・DXを進めたいが、ノウハウが少なく、比較検討や導入に踏み切れない。'
            ],
            [
              'label' => '2',
              'heading' => ['CRM・SFAの', '運用人財が乏しい'],
              'text' => '自社でCRM・SFAの運用を実施したいけれど、CRM人財が乏しく、自社での運用が難しい。'
            ],
            [
              'label' => '3',
              'heading' => ['CRM・SFAの', '構築が進まない'],
              'text' => 'CRM・SFAをさらに活用したいけれど、業務プロセスに沿った構築ができない。'
            ],
            [
              'label' => '4',
              'heading' => ['CRM・SFAを', '活用できていない'],
              'text' => '初期構築を外部業者に委託したけれど、構築後の運用まで伴走してもらえず、活用できていない。'
            ],
            [
              'label' => '5',
              'heading' => ['どの業者が良いのか', 'わからない'],
              'text' => '初期構築、伴走支援、運用代行などの様々な領域がある中で、どの業者に依頼するのが良いのかわからず依頼先を決めづらい。'
            ],
            [
              'label' => '6',
              'heading' => ['CRM・SFAの','コンサルティングを', '依頼しているが変化が見えない'],
              'text' => 'すでにCRM・SFAのコンサルティングを外部業者に依頼しているが成果が出ておらず、困っている。'
            ],
          ];
          ?>
          <ol class="service-crm-list service-crm-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-crm-list__item">
                <section class="service-crm-card001">
                  <p class="service-crm-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-crm-card001__inner">
                    <h3 class="service-crm-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-crm-card001__text"><?php echo esc_html($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">CRM・SFA運用代行サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-crm-cta') ?>

      <section class="service-crm-points">
        <div class="service-crm-points__inner service-crm-inner">
          <div class="service-crm-heading">
            <h2 class="service-crm-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="service-crm-heading__lead">カウンターだからこそできる<br>CRM・SFA伴走支援サービスの<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['CRM・SFAの運用経験豊富な', 'コンサルタントが対応'],
              'text' => 'CRM・SFAの運用経験豊富なコンサルタントが、CRM・SFA導入から実行支援までの対応します。'
            ],
            [
              'label' => '2',
              'heading' => ['活用策定から実行までの', 'トータル支援'],
              'text' => 'CRM・SFAの活用策定から実行支援までトータル支援が可能です。営業日報や商談・案件管理の活用策定、業務プロセスに沿った個別での対応も可能です。'
            ],
            [
              'label' => '3',
              'heading' => ['CRM・SFAに関する高い専門性'],
              'text' => 'COUNTER株式会社は、トップクラスのCRMコンサルタントが対応します。多くの業界、活用事例に基づいたCRM・SFAの運用支援を行います。'
            ],
            [
              'label' => '4',
              'heading' => ['投資対効果の合う', 'プランの提案'],
              'text' => 'ご提案時より、お客様の課題、予算に合わせたプランを提示いたします。逆に、費用対効果が合わない場合には、サービスをお勧めしないこともございます。'
            ],
            [
              'label' => '5',
              'heading' => ['セカンドオピニオンサービス', 'も提供'],
              'text' => '既存のCRM・SFA運用の良し悪しについて評価するサービスもご提供可能です。通常料金よりもお求めやすい価格となっておりますので、ご検討ください。'
            ],
            [
              'label' => '6',
              'heading' => ['運用・活用強化だけでなく', '構築・改修まで対応'],
              'text' => '初期設定、取引先、営業日報、案件管理、リードの構築をはじめ、レポート・ダッシュボードなどの既存機能に対する改修まで幅広くご支援が可能です。'
            ],
          ];
          ?>

          <ol class="service-crm-list service-crm-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-crm-list__item">
                <section class="service-crm-card001">
                  <p class="service-crm-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-crm-card001__inner">
                    <h3 class="service-crm-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-crm-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="service-crm-service">
        <div class="service-crm-service__inner service-crm-inner">
          <div class="service-crm-heading">
            <p class="service-crm-heading__sub">カウンターの</p>
            <h2 class="service-crm-heading__main"><span>CRM・SFA運用代行サービス</span></h2>
            <p class="service-crm-heading__lead">マーケティングの実績が豊富な担当者が運用代行を行います。</p>
          </div>
          <div class="table js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">CRM・SFA設計フェーズ</h3>
                    <div class="table__image table__image--001"><img src="<?php echo IMAGE_DIR; ?>00_common/elm-04.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ヒヤリング</p>
                      <p class="table__text">CRM・SFAでの観点から目的や現在の課題、業務プロセスなどをヒアリングさせていただきます。<br>導入検討の際は、過去のデータ構造や管理プロセス、事業要望も合わせてキャッチアップいたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">プロセス策定</p>
                      <p class="table__text">ヒアリングを受け、貴社のデータ構造や管理プロセス、CRM・SFA活用後の運用想像から、CRM・SFA導入後の営業・業務プロセスの整理と策定を行います。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">CRM・SFA設計</p>
                      <p class="table__text">ヒアリング後、プロセス策定をもとにカウンターの担当者がCRM・SFAの設計を行います。</p>
                    </li>
                  </ul>
                </div>
              </section>
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">CRM・SFA構築フェーズ</h3>
                    <div class="table__image table__image--002"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-05.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">オブジェクト構築</p>
                      <p class="table__text">CRM・SFA活用を行う上でオブジェクトの構築、項目作成を行います。<br>プロセス、効果測定の運用から必要な機能、追加実装もご提案いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">運用策定</p>
                      <p class="table__text">オブジェクトの構築後、定例MTGで運用策定支援を行います。<br>経過報告を追加構築等含め、作業はカウンター側で行います。</p>
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
                      <p class="table__text">CRM・SFAの活用を行い、定例MTGでユーザーからの課題や要望に沿って、伴走支援いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">PDCA改善</p>
                      <p class="table__text">経営戦略、営業戦略などを踏まえて、CRM・SFA活用強化の観点から今後も改善案や製品・アプリケーション導入のご提案を実施いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-crm-cta') ?>

      <section class="service-crm-differ">
        <div class="service-crm-heading">
          <h2 class="service-crm-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-crm-differ__inner service-crm-inner">
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
                        <span class="table__text">製造・小売業をはじめ、多くの業界での経験が豊富なプロが対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">営業プロセスの理解からプロセス策定まで対応。</span>
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
                  <div class="table__head"><p>大手IT<br>コンサルティング企業</p></div>
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
                        <span class="table__text">高額なケースが大半。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">高い技術力を保持する業者あり。</span>
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

      <section class="service-crm-ceo">
        <div class="service-crm-ceo__inner service-crm-inner">
          <div class="service-crm-ceo__box js-scroll-anime" data-anime="fadeInUp">
            <div class="service-crm-heading">
              <h2 class="service-crm-heading__main"><span>CRM・SFA運用代行サービス</span><br class="utils-block-hidden-pc"><span>の担当者ご紹介</span></h2>
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
      </section>

      <?php get_template_part('template-parts/service-crm-cta') ?>

      <div class="service-crm-howto service-crm-howto001">
        <div class="service-crm-howto__inner service-crm-inner">
          <div class="service-crm-heading-box">
            <p class="service-crm-heading-box__main">CRM・SFAの外部業者選定を<br class="utils-block-hidden-pc">誤ってしまうと<br><span>労働生産性の低下を引き起こす</span><br class="utils-block-hidden-pc">要因になります。</p>
            <p class="service-crm-heading-box__sub">CRM・SFAは企業基盤となる仕組みとなります。<br>そのため、導入する企業は増加傾向にありますが、<br class="utils-block-hidden-mobile">安易な選択で外部業者の選定や導入を行うと<br>運用・活用観点で課題が生じてしまいます。</p>
          </div>
          <ul class="list list--ng js-scroll-anime" data-anime="fadeInUp">
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">情報が散財していて<br>情報がすぐに見つからない</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">営業報告書資料の作成に<br class="utils-block-hidden-mobile">時間が大幅にかかってしまう</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">経営数値が大幅に変動し、<br>活動や見込み商談が<br class="utils-block-hidden-pc">見えない</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">営業プロセスと<br class="utils-block-hidden-pc">かけ離れた仕組みとなり、<br class="utils-block-hidden-pc">定着ができない<br><br class="utils-block-hidden-mobile"></p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">通常業務を進行し、<br>構築するため、稼働・定着<br>までに時間を要している</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">どのような施策や営業活動が<br class="utils-block-hidden-mobile">受注に寄与しているか<br>見えない</p>
                </div>
              </section>
            </li>
          </ul>
          <ul class="list list--ok list--before-arrow js-scroll-anime" data-anime="fadeInUp">
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">数値・データを集約し、<br>どこでも情報にアクセス</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">営業報告書資料の作成は<br>1クリックで完成</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">経営指標と進捗、着地予測までをリアルタイムで可視化</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">営業プロセスに最適な仕組みの構築と定着を実現<br><br></p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">CRM・SFAのプロが<br>構築するため、稼働・定着<br>まで最短で実現</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">受注に寄与する<br>施策・活動を定量化<br><br></p>
                </div>
              </section>
            </li>
          </ul>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__main">
              ビジネスモデルとプロセスに最適な
              <br class="utils-block-hidden-mobile"><strong>CRM・SFAを運用代行</strong>します！！</p>
          </div>
        </div>
      </div>

      <section class="service-crm-qa">
        <div class="service-crm-qa__inner service-crm-inner">
          <div class="service-crm-heading">
            <p class="service-crm-heading__sub">CRM・SFA運用代行サービスでの</p>
            <h2 class="service-crm-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          // リストデータを配列で管理
          $list_items = [
            [
              'question' => 'CRM・SFA導入前だけでなく、導入後からでも相談可能ですか？',
              'answer' => '可能です。現状と課題をお伺いした上で最適なプランをご提案させていただきます。'
            ],
            [
              'question' => 'CRM・SFA導入後の運用や保守、人財育成もお願いできますか？',
              'answer' => '可能です。運用や保守、人財育成などの内容によって金額が異なるため、別途御見積りとさせていただきます。'
            ],
            [
              'question' => 'CRM・SFAの導入前から相談も可能ですか？',
              'answer' => '対応可能です。導入前の設計から構築、運用や保守まで一貫してご支援が可能です。'
            ],
            [
              'question' => '追加の機能構築も相談可能ですか？',
              'answer' => '対応可能です。現状のリレーションを理解した上で最適な追加構築案をご提案させていただきます。'
            ],
            [
              'question' => 'Slackやメールなどのコミュニケーションツールだけでなく、定期MTGの開催もお願いできますか？',
              'answer' => '可能です。隔週または月次での定期MTGで伴走支援いたします。'
            ],
            [
              'question' => '依頼内容の対応だけでなく、自社にあった提案もしてくれますか？',
              'answer' => 'CRM・SFAの運用代行を行う上で、課題感や最適なプランがある場合はご提案する場合もございます。'
            ],
            [
              'question' => '構築期間はどのくらいかかりますか？',
              'answer' => '一般的なCRM・SFAの構築期間は4ヶ月〜6ヶ月となります。内容によって期間は変動します。'
            ],
            [
              'question' => 'CRMのライセンス設定も可能ですか？',
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
                        <a class="service-crm-btn service-crm-btn--black" href="#contact">無料で相談する</a>
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
        <div class="service-crm-heading">
          <h2 class="service-crm-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "CRM・SFA運用代行";
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