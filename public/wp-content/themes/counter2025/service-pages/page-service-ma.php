<?php
/**
 * Template Name: MA運用代行サービスのテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'ma';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document-ma';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-ma container">
    <div class="service-ma-inner">
      <div class="service-ma-fv">
        <div class="service-ma-fv__inner service-ma-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>ハウスリストの活用、</span><br>
                <span>マーケティングの自動化、MA活用でお悩みの方へ&nbsp;</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>ハウスリストの活用、</span><br>
                <span>マーケティングの自動化、</span><br>
                <span>MA活用でお悩みの方へ</span>
              </p>
              <h1 class="content__heading">
                <span>MA運用代行サービス</span>
              </h1>
              <p class="content__text utils-block-hidden-mobile">企業に蓄積されたハウスリストを活用し、<br>MAの導入・活用を目的としたトータルサービスです。</p>
              <p class="content__text utils-block-hidden-pc">企業に蓄積されたハウスリストを活用し、MAの導入・活用を目的としたトータルサービスです。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-ma-btn service-ma-btn--orange" href="https://counter-digital.jp/download<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-ma-btn service-ma-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/<?php echo $page_id; ?>/<?php echo $page_id; ?>.png" alt=""></div>
        </div>
      </div>

      <section class="service-ma-problems">
        <div class="service-ma-problems__inner service-ma-inner">
          <h2 class="introduction">マーケティング<br class="utils-block-hidden-pc">オートメーションに関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['目的と戦略が定まらない'],
              'text' => 'MA導入の目的と戦略が定まらないため、導入に踏み切れない。'
            ],
            [
              'label' => '2',
              'heading' => ['ツール選定における', 'ノウハウがない'],
              'text' => 'MAの導入を実施したいけれど、ツール選定に不安が存在する。'
            ],
            [
              'label' => '3',
              'heading' => ['機能を十分に活用できていない'],
              'text' => 'MAを導入しているものの、機能を十分に活用できていない。'
            ],
            [
              'label' => '4',
              'heading' => ['成果の測定とプロセスを', '改善したい'],
              'text' => 'MAの効果を測定し、マーケティング施策を改善したい。'
            ],
            [
              'label' => '5',
              'heading' => ['運用や活用に詳しい', '人財がいない'],
              'text' => 'MAの運用と活用強化に向けて、外部業者を探している。'
            ],
          ];
          ?>
          <ol class="service-ma-list service-ma-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-ma-list__item">
                <section class="service-ma-card001">
                  <p class="service-ma-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-ma-card001__inner">
                    <h3 class="service-ma-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-ma-card001__text"><?php echo esc_html($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">MA運用代行サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-ma-cta') ?>

      <section class="service-ma-points">
        <div class="service-ma-points__inner service-ma-inner">
          <div class="service-ma-heading">
            <h2 class="service-ma-heading__main"><span>カウンターの5つの強み</span></h2>
            <p class="service-ma-heading__lead">カウンターだからこそできる<br>MA運用代行サービスの<br class="utils-block-hidden-pc">5つの強みをご紹介いたします。</p>
          </div>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['マーケティングに関する専門性'],
              'text' => 'MAを活用し、戦略戦術策定からシステム運用を全て担当したメンバーのみが対応します。'
            ],
            [
              'label' => '2',
              'heading' => ['戦略策定から実行までの', 'トータル支援'],
              'text' => 'コミュニケーション設計から施策実行までトータルで支援。見込み顧客と効果的なコミュニケーションを展開いたします。'
            ],
            [
              'label' => '3',
              'heading' => ['MA活用における実績'],
              'text' => 'MAを活用し、経営貢献の実績があるプロが対応します。MAに関する専門性と多角的なマーケティング実績をもとに運用代行を実現します。'
            ],
            [
              'label' => '4',
              'heading' => ['パフォーマンスの最適化'],
              'text' => 'MAツールのデータ分析や自動化の機能を活かし、成果の可視化とマーケティング施策の自動化を行います。'
            ],
            [
              'label' => '5',
              'heading' => ['MAとCRMの対応が可能'],
              'text' => 'MAの活用や運用だけでなく、基盤となるCRMの構築、改修まで幅広く対応可能です。'
            ],
          ];
          ?>

          <ol class="service-ma-list service-ma-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-ma-list__item">
                <section class="service-ma-card001">
                  <p class="service-ma-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-ma-card001__inner">
                    <h3 class="service-ma-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-ma-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="service-ma-service">
        <div class="service-ma-service__inner service-ma-inner">
          <div class="service-ma-heading">
            <p class="service-ma-heading__sub">カウンターの</p>
            <h2 class="service-ma-heading__main"><span>MA運用代行サービス</span></h2>
            <p class="service-ma-heading__lead">マーケティングの実績が<br class="utils-block-hidden-pc">豊富な担当者が運用代行を行います。</p>
          </div>
          <div class="table js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">コミュニケーション<br>設計フェーズ</h3>
                    <div class="table__image table__image--001"><img src="<?php echo IMAGE_DIR; ?>00_common/elm-04.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ヒヤリング</p>
                      <p class="table__text">MAの活用をもとに目的や課題、現状をヒアリングさせていただきます。導入検討の際はハウスリストやチャネル、事業概要をキャッチアップいたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">プロセス策定</p>
                      <p class="table__text">実現可能なマーケティング施策を選定し、ターゲットやリスト条件を設計。マーケティングのHowを実行する上でのプロセスを策定します。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">構築</p>
                      <p class="table__text">マーケティング施策の実行に向けて、設定やハウスリスト作成からコンテンツ作成支援を行います。</p>
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
                      <p class="table__label">施策実行</p>
                      <p class="table__text">プロセス策定で行ったマーケティング施策の実行を支援します。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">自動化</p>
                      <p class="table__text">施策で作成したコンテンツをもとにマーケティングプロセスの自動化をいたします。（ナーチャリング、スコアリング、シナリオ設計 etc）</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">伴走支援</p>
                      <p class="table__text">ユーザーの意見を収集し、改修や施策のブラッシュアップをご提案いたします。 etc）</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-ma-cta') ?>

      <section class="service-ma-differ">
        <div class="service-ma-heading">
          <h2 class="service-ma-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-ma-differ__inner service-ma-inner">
          <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table">
              <div class="table__inner">
                <div class="table__group">
                  <div class="table__head"></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">戦略・戦術</li>
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
                        <span class="table__text">デジタルマーケティングを中心に戦略から戦術立案、施策実行まで対応。</span>
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
                        <span class="table__text">マーケティングの実績があるプロが対応。</span>
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

      <section class="service-ma-ceo">
        <div class="service-ma-ceo__inner service-ma-inner">
          <div class="service-ma-ceo__box js-scroll-anime" data-anime="fadeInUp">
            <div class="service-ma-heading">
              <h2 class="service-ma-heading__main"><span>MA運用代行サービスの<br class="utils-block-hidden-pc">担当者ご紹介</span></h2>
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

      <?php get_template_part('template-parts/service-ma-cta') ?>

      <div class="service-ma-howto service-ma-howto001">
        <div class="service-ma-howto__inner service-ma-inner">
          <div class="service-ma-heading-box">
            <p class="service-ma-heading-box__main">マーケティング戦略が策定されずに<br class="utils-block-hidden-pc">MAを導入すると<br class="utils-block-hidden-mobile"><span>一方的な情報発信により<br class="utils-block-hidden-pc">見込み顧客の離脱を引き起こす</span><br class="utils-block-hidden-pc">要因になります</p>
            <p class="service-ma-heading-box__sub">MAは強力なツールですが、それを最大限に活かすためには、<br class="utils-block-hidden-mobile">しっかりとした戦略が必要不可欠です。<br class="utils-block-hidden-mobile">戦略が明確になっていない中でMAを活用してしまうと<br class="utils-block-hidden-mobile">一貫性がなく、一方的な情報発信となり、<br class="utils-block-hidden-mobile">結果的には顧客に対する信頼感の欠如につながります。</p>
          </div>
          <ul class="list list--ng js-scroll-anime" data-anime="fadeInUp">
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">メッセージに一貫性がない<br>情報発信を行ってしまう</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">思いつくマーケティング施策を一通り検証してみる</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">戦略がないため、マスに対しての情報発信のみ行う</p>
                </div>
              </section>
            </li>
          </ul>
          <ul class="list list--ok list--before-arrow js-scroll-anime" data-anime="fadeInUp">
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">戦略をもとに一貫性のある<br class="utils-block-hidden-mobile">情報発信を行う</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">Who・Whatをもとに可能性が高い施策から実行する</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">ターゲットに焦点を当てた<br class="utils-block-hidden-mobile">情報発信を行う</p>
                </div>
              </section>
            </li>
          </ul>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__sub">マーケティング戦略をもとにMAの活用を行いましょう。<br>COUNTERは戦略立案から施策実行までトータルで</p>
            <p class="solution__main"><strong>MA運用代行</strong>を行います！！</p>
          </div>
        </div>
      </div>

      <section class="service-ma-qa">
        <div class="service-ma-qa__inner service-ma-inner">
          <div class="service-ma-heading">
            <p class="service-ma-heading__sub">MA運用代行サービスでの</p>
            <h2 class="service-ma-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          // リストデータを配列で管理
          $list_items = [
            [
              'question' => 'MA導入前だけでなく、導入後からでも相談可能ですか？',
              'answer' => '可能です。現状と課題をお伺いした上で最適なプランをご提案させていただきます。'
            ],
            [
              'question' => 'MA導入後の運用や保守、人財育成もお願いできますか？',
              'answer' => '可能です。運用や保守、人財育成などの内容によって金額が異なるため、別途御見積りとさせていただきます。'
            ],
            [
              'question' => 'MAの導入前から相談も可能ですか？',
              'answer' => '対応可能です。導入前の設計から構築、施策実行、伴走支援まで一貫してご支援が可能です。'
            ],
            [
              'question' => '追加の機能構築も相談可能ですか？',
              'answer' => '対応可能です。現状のリレーションを理解した上で最適な追加構築案をご提案させていただきます。'
            ],
            [
              'question' => 'Slackやメールなどのコミュニケーションだけでなく、定期MTGの開催もお願いできますか？',
              'answer' => '可能です。隔週または月次での定期MTGで伴走支援いたします。'
            ],
            [
              'question' => '依頼内容の対応だけでなく、自社にあった提案もしてくれますか？',
              'answer' => 'MAの運用代行を行う上で、課題感や最適なプランがある場合はご提案する場合もございます。'
            ],
            [
              'question' => 'マーケティング施策をスポットで相談可能ですか？',
              'answer' => '可能です。内容によって金額が異なるため、都度御見積りとさせていただきます。'
            ],
            [
              'question' => 'MAツールの選定相談も可能ですか？',
              'answer' => '可能です。お客様ご要望に応じて、最適なMAツールを選定させていただきます。'
            ],
            [
              'question' => '費用はどのくらいかかりますか？',
              'answer' => '概要費用で216万円～です。内容によって大きく変動いたしますので、詳細はお問い合わせください。'
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
                        <a class="service-ma-btn service-ma-btn--black" href="#contact">無料で相談する</a>
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
        <div class="service-ma-heading">
          <h2 class="service-ma-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "MA運用代行";
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