<?php
/**
 * Template Name: TikTok広告運用代行サービスのテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'tiktok';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document-company';

// CTAセクションを表示する関数を定義
function display_service_tiktok_cta() {
  ?>
  <section class="service-tiktok-cta">
    <div class="service-tiktok-cta__inner service-tiktok-inner">
      <div class="content">
        <p class="content__lead"><span>実績豊富な広告運用のプロが対応します</span></p>
        <p class="content__heading"><span>TikTok広告の運用強化</span><br>でお悩みの方<br>お気軽にご相談ください!!</p>
        <p class="content__text">実績豊富な運用担当者が、<br class="utils-block-hidden-pc">課題に応じて、<br class="utils-block-hidden-pc">TikTok広告の運用を支援します。<br>TikTok広告の運用代行は<br class="utils-block-hidden-pc">COUNTER(カウンター)へご相談ください。</p>
        <div class="content__objects">
          <div class="content__object content__object--001"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-02.png" alt=""></div>
          <div class="content__object content__object--002"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-03.png" alt=""></div>
        </div>
        <ul class="content__list">
          <li class="content__item"><a class="service-tiktok-btn service-tiktok-btn--orange service-tiktok-btn--white" href="https://counter-digital.jp/download/document-company/">無料で資料ダウンロード</a></li>
          <li class="content__item"><a class="service-tiktok-btn service-tiktok-btn--white" href="#contact">無料で相談する</a></li>
        </ul>
      </div>
    </div>
  </section>
  <?php
}

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-tiktok container">
    <div class="service-tiktok-inner">
      <div class="service-tiktok-fv">
        <div class="service-tiktok-fv__inner service-tiktok-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>TikTok広告の運用でお悩みの方へ</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>TikTok広告の運用で</span><br>
                <span>お悩みの方へ</span>
              </p>
              <h1 class="content__heading">
                <span>TikTok広告</span>
                <span>運用代行サービス</span>
              </h1>
              <p class="content__text">TikTok広告の運用経験豊富なコンサルタントが監修するサービスです。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-tiktok-btn service-tiktok-btn--orange" href="https://counter-digital.jp/download<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-tiktok-btn service-tiktok-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/<?php echo $page_id; ?>/<?php echo $page_id; ?>.png" alt=""></div>
        </div>
      </div>

      <section class="service-tiktok-problems">
        <div class="service-tiktok-problems__inner service-tiktok-inner">
          <h2 class="introduction">TikTok広告運用<br class="utils-block-hidden-pc">に関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['TikTok広告に関する', 'ノウハウがない'],
              'text' => '広告の運用方法がわからず、設定方法や運用中の改善ポイントがわからず、自社で進められない状態になっている。'
            ],
            [
              'label' => '2',
              'heading' => ['TikTok広告の', '運用計画が立てられない'],
              'text' => 'TikTok広告の商材別CPA単価がわからず、費用対効果がある運用計画を立てたい。'
            ],
            [
              'label' => '3',
              'heading' => ['外部に依頼しているけど', '成果が出ない'],
              'text' => 'すでに代理店に委託しているけれど、成果も出ておらず、改善案も少ないため、変更したい。'
            ],
            [
              'label' => '4',
              'heading' => ['広告運用を自社で行いたいが', '施策の効果性がわからない'],
              'text' => '自社で運用する上で、施策の方向性を考えてくれるアドバイザーのような方が欲しい。'
            ],
            [
              'label' => '5',
              'heading' => ['広告のリソースが', '社内にない'],
              'text' => 'TikTok広告の運用ノウハウはあるけれど、出稿管理運用改善を行える人材が社内にいない。'
            ],
            [
              'label' => '6',
              'heading' => ['広告運用とCROを', '同時に行いたい'],
              'text' => 'TikTok広告の運用改善に加え、CVR改善を行える企業を探している。'
            ],
          ];
          ?>
          <ol class="service-tiktok-list service-tiktok-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-tiktok-list__item">
                <section class="service-tiktok-card001">
                  <p class="service-tiktok-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-tiktok-card001__inner">
                    <h3 class="service-tiktok-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-tiktok-card001__text"><?php echo esc_html($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">TikTok広告運用代行サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php display_service_tiktok_cta(); ?>

      <section class="service-tiktok-points">
        <div class="service-tiktok-points__inner service-tiktok-inner">
          <div class="service-tiktok-heading">
            <h2 class="service-tiktok-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="service-tiktok-heading__lead">カウンターだからこそできる<br>TikTok広告運用代行サービスの<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['TikTok広告の豊富な', '実績のあるプロが担当'],
              'text' => '効果改善率95%のプロの運用担当者がご支援いたします。再現性の高い広告施策をご提案いたします。'
            ],
            [
              'label' => '2',
              'heading' => ['プランニングから実行支援まで', 'トータル支援'],
              'text' => 'TikTok広告の広告計画から入稿作業、調整業務などを一気通貫でサポートいたします。'
            ],
            [
              'label' => '3',
              'heading' => ['TikTok広告に関する', '高い専門性'],
              'text' => 'TikTok広告のアルゴリズムを理解したプロの運用担当者がお客様の商材に合わせて運用いたします。インスタグラムのアップデート情報も随時ご共有いたします。'
            ],
            [
              'label' => '4',
              'heading' => ['投資対効果の合う', 'プランの提案'],
              'text' => '広告出稿・調整業務だけでなく、広告成果目標をもとに必要なご予算を算出し、出稿プランもお作りします。毎月のレポーティングの中でKPIをモニタリングし、成果創出に向けた伴奏支援を行います。'
            ],
            [
              'label' => '5',
              'heading' => ['ノウハウの移転も得意とした', 'インハウス支援も可能'],
              'text' => '自社でTikTok広告運用を行いたい企業様向けにインハウス支援のサービスも行っております。インハウス運用までのロードマップを策定し、伴走支援を行います。'
            ],
            [
              'label' => '6',
              'heading' => ['TikTok広告運用', '以外にもCROや', 'ホワイトペーパー制作もできる'],
              'text' => 'TikTok広告運用だけでなく、CVR改善(CRO)やホワイトペーパー制作などの領域も対応可能です。'
            ],
          ];
          ?>

          <ol class="service-tiktok-list service-tiktok-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-tiktok-list__item">
                <section class="service-tiktok-card001">
                  <p class="service-tiktok-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-tiktok-card001__inner">
                    <h3 class="service-tiktok-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-tiktok-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="service-tiktok-service">
        <div class="service-tiktok-service__inner service-tiktok-inner">
          <div class="service-tiktok-heading">
            <p class="service-tiktok-heading__sub">カウンターの</p>
            <h2 class="service-tiktok-heading__main"><span>TikTok広告運用<br class="utils-block-hidden-pc">代行サービス</span></h2>
            <p class="service-tiktok-heading__lead">実績豊富な担当者が運用代行を行います。</p>
          </div>
          <div class="table js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">ご提案フェーズ</h3>
                    <div class="table__image table__image--001"><img src="<?php echo IMAGE_DIR; ?>00_common/elm-04.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">お問い合わせ</p>
                      <p class="table__text">お客様が抱えている課題をCOUNTERのサービスが解決できる可能性がございます。お気軽にお問い合わせください。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">ヒアリング</p>
                      <p class="table__text">TikTok広告に関する課題感やスケジュール等をCOUNTERの担当営業からヒアリングさせていただきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">ご提案とお見積り</p>
                      <p class="table__text">ヒアリング内容をもとにCOUNTERの担当営業よりご提案を行い、お見積書を作成いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">ご契約</p>
                      <p class="table__text">ご提案内容にご満足いただけましたら、ご契約書を締結いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">戦略策定フェーズ</h3>
                    <div class="table__image table__image--002"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-05.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">戦略策定</p>
                      <p class="table__text">COUNTERのコンサルタントがTikTok広告の戦略策定を行います。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">準備</p>
                      <p class="table__text">TikTok広告アカウント情報をご共有いただき、キャンペーン設定を行います。</p>
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
                      <p class="table__label">運用開始・施策実行</p>
                      <p class="table__text">TikTok広告の戦略をもとに運用を行い、各種施策を進めてまいります。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">効果検証・改善</p>
                      <p class="table__text">施策結果をまとめた効果レポートをCOUNTERのコンサルタントより納品いたします。施策結果を踏まえKPIに応じて、PDCAを回します。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php display_service_tiktok_cta(); ?>

      <section class="service-tiktok-differ">
        <div class="service-tiktok-heading">
          <h2 class="service-tiktok-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-tiktok-differ__inner service-tiktok-inner">
          <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table">
              <div class="table__inner">
                <div class="table__group">
                  <div class="table__head"></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">広告運用者スキル</li>
                      <li class="table__item">運用スタイル</li>
                      <li class="table__item">コミュニケーション<br>スタイル</li>
                      <li class="table__item">最低契約期間</li>
                      <li class="table__item">広告アカウントの開示</li>
                      <li class="table__item">クリエイティブ改善</li>
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
                        <span class="table__text">効果改善率95%を超えるプロのコンサルタントが担当</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">チーム対応件数に上限を設け、他社にない入稿スピードと高いデリバリー品質を実現。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">チャット・電話可能<br>基本30分以内に返信</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">3ヶ月〜</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">あり。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">プロダクト、ユーザー起点でのクリエイティブ改善提案が可能。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">認知、獲得広告だけでなく、クリエイティブ制作まで高品質なご提案が可能。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>A社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">企業によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">社内での取り決めがないケースが多い。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">チャットのみ。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">6ヶ月〜</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--x"></span>
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">クリエイティブ改善は社内でナレッジ化できていないことが大半。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">媒体運用に特化している場合が多く、総合的な提案ができる企業は少ないです。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>B社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">企業によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">社内での取り決めがないケースが多い。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">チャットのみ</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">6ヶ月〜</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">あり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">クリエイティブ改善は社内でナレッジ化できていないことが大半。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">媒体運用に特化している場合が多く、総合的な提案ができる企業は少ないです。</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="service-tiktok-ceo">
        <div class="service-tiktok-ceo__inner service-tiktok-inner">
          <section class="swiper js-pickup-slider-single">
            <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                <div class="service-tiktok-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-tiktok-heading">
                    <h2 class="service-tiktok-heading__main"><span>TikTok広告運用代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
                  </div>
                  <div class="content">
                    <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>00_common/kaneda.jpg" alt="金田 修平"></div>
                    <div class="content__body">
                      <div class="content__head">
                        <p class="content__name"><span>マーケター</span><br>金田 修平</p>
                        <ul class="content__list">
                          <li class="content__item"><a href="https://x.com/kaneshu23" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-x.svg" alt="X(旧Twiter)"></a></li>
                        </ul>
                      </div>
                      <div class="content__inner js-content__inner">
                        <p class="content__text">マーケター<br />
                        東京大学卒業後、金融機関に1年間在籍した後は一貫して広告運用を中心としたデジタルマーケティング支援業に従事。<br>
                        戦略思考・マーケティング思考に基づいた独自の広告運用手法を追求し、フレームワークを確立。<br>
                        再現性の高い広告効果を創り出し、継続的なマーケティング効果を生み出す組織構築を強みとする。</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="service-tiktok-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-tiktok-heading">
                    <h2 class="service-tiktok-heading__main"><span>TikTok広告運用代行<br class="utils-block-hidden-pc">サービスの担当者ご紹介</span></h2>
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
            </ul>
            <div class="pickup-slider__pagination"></div>
            <div class="pickup-slider__prev"></div>
            <div class="pickup-slider__next"></div>
          </section>
        </div>
      </section>

      <?php display_service_tiktok_cta(); ?>

      <section class="service-tiktok-qa">
        <div class="service-tiktok-qa__inner service-tiktok-inner">
          <div class="service-tiktok-heading">
            <p class="service-tiktok-heading__sub">TikTok広告運用代行サービスでの</p>
            <h2 class="service-tiktok-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          // リストデータを配列で管理
          $list_items = [
            [
              'question' => '成果創出にかかる期間はどれくらいですか？',
              'answer' => '初期の1〜2ヶ月は媒体での学習を行わせることもあり、3ヶ月ごろから成果が出やすくなることが多くあります。'
            ],
            [
              'question' => 'TikTok広告を運用するために必要な準備はどのようなものがありますか？',
              'answer' => 'TikTokアカウントの開設、広告用クリエイティブの準備が必要となります。'
            ],
            [
              'question' => '自社で作成したクリエイティブを使用できますか？',
              'answer' => '可能です。ご要望がございましたら、お知らせください。'
            ],
            [
              'question' => '広告の最適化費用額はありますか？',
              'answer' => 'ございますが、ご都合に応じた調整が可能ですのでご相談ください。'
            ],
            [
              'question' => '依頼後、何日後に配信できますか？',
              'answer' => 'ご契約後、アカウント設定完了期間を考慮し、最短1週間を想定しております。'
            ],
            [
              'question' => '広告運用を依頼した場合に、レポートや改善案などの提案はありますか？',
              'answer' => 'ございます。毎月定例会を実施し、改善報告を実施いたします。'
            ],
            [
              'question' => '最低契約期間はありますか？',
              'answer' => 'ございますが、ご都合に応じた調整が可能ですのでご相談ください。'
            ],
            [
              'question' => '広告予算が少ないですが、大丈夫でしょうか？',
              'answer' => '最適な効果を出すために、予算が不足するケースがございます。まずは内容をヒアリングさせていただき、最適な予算をご伝えいたします。'
            ],
            [
              'question' => '全国どの拠点でも対応可能でしょうか？',
              'answer' => '可能です。オンラインミーティングツールを活用し、定例会も実施させていただきます。'
            ],
            [
              'question' => '広告管理画面の開示は可能でしょうか？',
              'answer' => '可能です。いつでも管理画面を確認できる状態にさせていただきます。'
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
                        <a class="service-tiktok-btn service-tiktok-btn--black" href="#contact">無料で相談する</a>
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
        <div class="service-tiktok-heading">
          <h2 class="service-tiktok-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "TikTok広告運用代行";
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