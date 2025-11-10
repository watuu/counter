<?php
/**
 * Template Name: オウンドメディアコンサルティングのテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'owned-media-consulting';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/media_consulting';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-media container">
    <div class="service-media-inner">
      <div class="service-media-fv">
        <div class="service-media-fv__inner service-media-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>オウンドメディアの戦略策定、</span><br>
                <span>コンテンツ制作でお悩みの方へ&nbsp;</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>オウンドメディアの</span><br>
                <span>戦略策定、コンテンツ制作で</span><br>
                <span>お悩みの方へ</span>
              </p>
              <h1 class="content__heading">
                <span>オウンドメディア</span>
                <span>コンサルティング</span>
              </h1>
              <p class="content__text utils-block-hidden-mobile">コンテンツマーケティングのプロが<br>伴走支援するオウンドメディアコンサルティングサービスです。</p>
              <p class="content__text utils-block-hidden-pc">コンテンツマーケティングのプロが伴走支援するオウンドメディアコンサルティングサービスです。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-media-btn service-media-btn--orange" href="https://counter-digital.jp/download<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-media-btn service-media-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/<?php echo $page_id; ?>/<?php echo $page_id; ?>.png" alt=""></div>
        </div>
      </div>

      <section class="service-media-problems">
        <div class="service-media-problems__inner service-media-inner">
          <h2 class="introduction">オウンドメディア運用に関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['オウンドメディア対策の', 'ノウハウがない'],
              'text' => '自社でオウンドメディアのSEO対策を行いたいけれど、正しいSEOのノウハウがわからず、自社で安全に進める自信がない。'
            ],
            [
              'label' => '2',
              'heading' => ['オウンドメディア対策の', '運用リソースがない'],
              'text' => 'オウンドメディアのノウハウはあるけれど、チーム人数が少なく自社で運用を行うのが難しい。'
            ],
            [
              'label' => '3',
              'heading' => ['アクセス数が増えても', 'コンバージョンが出ない'],
              'text' => 'SEO経由の流入が増えていても、ユーザーセグメントに合わせた適切な成果地点が設定できていない。'
            ],
            [
              'label' => '4',
              'heading' => ['外注費用が高い'],
              'text' => '外部業者に委託したいけれど、そもそも費用が高いため、依頼に踏み切れない。'
            ],
            [
              'label' => '5',
              'heading' => ['どの業者が良いのか', 'わからない'],
              'text' => 'SEO、広告、コンテンツ対策などの様々な領域がある中でどの業者に依頼するのが良いのかわからず依頼先を決めづらい。'
            ],
            [
              'label' => '6',
              'heading' => ['コンサルティングを', '依頼しているが成果が出ない'],
              'text' => 'すでにオウンドメディアコンサルティングを外部業者に依頼しているが成果が出ておらず、困っている。'
            ],
          ];
          ?>
          <ol class="service-media-list service-media-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-media-list__item">
                <section class="service-media-card001">
                  <p class="service-media-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-media-card001__inner">
                    <h3 class="service-media-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-media-card001__text"><?php echo esc_html($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">オウンドメディア<br class="utils-block-hidden-pc">コンサルティングで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-media-cta') ?>

      <section class="service-media-points">
        <div class="service-media-points__inner service-media-inner">
          <div class="service-media-heading">
            <h2 class="service-media-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="service-media-heading__lead">カウンターだからこそできる<br>オウンドメディアコンサルティングの<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['豊富なSEO支援実績'],
              'text' => '累計500サイトのSEO支援実績から、様々な業界のSEO戦略から実行支援までの対応が可能です。'
            ],
            [
              'label' => '2',
              'heading' => ['戦略策定から実行までの', 'トータル支援'],
              'text' => 'オウンドメディアの戦略立案から実行支援までトータル支援が可能です。SEO対策、広告運用、コンテンツ対策を個別での対応も可能です。'
            ],
            [
              'label' => '3',
              'heading' => ['SEOに関する高い専門性'],
              'text' => 'COUNTER株式会社は、検索アルゴリズム解析のプロが創業したブランドとなります。最新のアルゴリズムに則ったWebサイトの運用支援を行います。'
            ],
            [
              'label' => '4',
              'heading' => ['投資対効果の合うプランの提案'],
              'text' => 'ご提案時より、お客様の課題、予算に合わせたプランを提示いたします。逆に、費用対効果が合わない場合には、サービスをお勧めしないこともございます。'
            ],
            [
              'label' => '5',
              'heading' => ['セカンドオピニオンサービスも', '提供'],
              'text' => '既存の施策の良し悪しについて評価するサービスもご提供可能です。通常料金よりもお求めやすい価格となっておりますので、ご検討ください。'
            ],
            [
              'label' => '6',
              'heading' => ['獲得だけでなく', 'ナーチャリングまで対応'],
              'text' => 'SEO、広告運用、CRO以外のSNS運用、MA導入、ホワイトペーパー作成、メルマガ作成など幅広くご支援が可能です。'
            ],
          ];
          ?>

          <ol class="service-media-list service-media-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-media-list__item">
                <section class="service-media-card001">
                  <p class="service-media-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-media-card001__inner">
                    <h3 class="service-media-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-media-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="service-media-service">
        <div class="service-media-service__inner service-media-inner">
          <div class="service-media-heading">
            <p class="service-media-heading__sub">カウンターの</p>
            <h2 class="service-media-heading__main"><span>オウンドメディア<br class="utils-block-hidden-pc">コンサルティング</span></h2>
            <p class="service-media-heading__lead">オウンドメディア運用の実績あるコンサルタントが全体設計をいたします。</p>
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
                      <p class="table__label">ヒヤリング</p>
                      <p class="table__text">オウンドメディア課題や達成したい目標やスケジュール感などをヒアリングさせていただきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">サイト診断</p>
                      <p class="table__text">ヒアリングを受け、貴社サイトを実際に診断いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">戦略立案</p>
                      <p class="table__text">ヒアリング、サイト診断の内容を元に、弊社コンサルタントがSEO、広告、コンテンツ対策の観点から、各戦略を策定します。</p>
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
                      <p class="table__label">戦術立案</p>
                      <p class="table__text">オウンドメディア戦略に基づいて、各種調査の上、戦術を立案します。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">施策実施</p>
                      <p class="table__text">オウンドメディア戦略に基づいて、施策を実施します。作業はカウンター側で行うことも可能です。システム実装は別途費用の上、対応可能です。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-media-cta') ?>

      <section class="service-media-differ">
        <div class="service-media-heading">
          <h2 class="service-media-heading__main"><span>他社との違い</span></h2>
          <p class="service-media-heading__lead">競合他者と比較しますと、高い技術力に加え、<br>UIデザインにも強みを持つ<br class="utils-block-hidden-pc">SEOコンサルティングカンパニーです。</p>
        </div>
        <div class="service-media-differ__inner service-media-inner">
          <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table">
              <div class="table__inner">
                <div class="table__group">
                  <div class="table__head"></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">価格</li>
                      <li class="table__item">実装スピード</li>
                      <li class="table__item">SEO</li>
                      <li class="table__item">システム実装</li>
                      <li class="table__item">UI・UX</li>
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
                        <span class="table__text">他社と比べてリーズナブルな金額を設定</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">実績豊富なプロフェッショナルが迅速に対応します。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">内部、外部、コンテンツの全領域で豊富な実績があり、高い技術力を誇ります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">弊社のWebエンジニアが対応可能です。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">UIデザインに強いWebディレクターが<br>プロジェクト参画可能です。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">SEOだけでなく、総合的なデジタルマーケティングのご提案が可能です。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>中小規模の<br>SEOコンサルティング会社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">リーズナブルな金額を設定</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">企業によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">SEOの全領域の支援を行える会社は少ない。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">企業によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">UIに強い企業は少ないです。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">SEOに特化している場合が多く、総合的な提案ができる企業は少ないです。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>大手のSEO<br>コンサルティング会社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">高価な金額設置が多い。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">企業によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">SEOの全領域の支援を行える会社は少ないですが、高い技術力を有している企業が多いです。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">企業によって異なります。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">UIに強い企業は少ないです。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">総合的な提案ができる企業は少ないです。</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="service-media-ceo">
        <div class="service-media-ceo__inner service-media-inner">
          <section class="swiper js-pickup-slider-single">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <div class="service-media-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-media-heading">
                    <h2 class="service-media-heading__main"><span>SEOコンサルタントのご紹介</span></h2>
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
                <div class="service-media-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-media-heading">
                    <h2 class="service-media-heading__main"><span>WEB ディレクターのご紹介</span></h2>
                  </div>
                  <div class="content">
                    <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>03_service/btob/member-director.jpg" alt="CCO 森 正吾"></div>
                    <div class="content__body">
                      <div class="content__head">
                        <p class="content__name"><span>CCO/制作ディレクター</span><br>森 正吾</p>
                        <ul class="content__list">
                          <li class="content__item"><a href="https://x.com/wed_sou" target="_blank"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-x.svg" alt="X(旧Twiter)"></a></li>
                        </ul>
                      </div>
                      <div class="content__inner js-content__inner">
                        <p class="content__text">COUNTER株式会社 CCO/制作ディレクター。<br />
                        32歳(1992年生まれ)。WEBデザイナー・コーダーとしてキャリアスタート。株式会社antにてフロントエンドエンジニアとして上場企業や官公庁の実装を経験。その後、株式会社COOSYにジョイン。チーフマネージャーとして、上場企業を中心にWebディレクション、提案業務を担い、COUNTERへジョイン。BtoB、サービス、IR、採用、イベント系、アプリ(webview)など、幅広く経験。</p>
                        <p class="content__text js-content__text utils-active">◆ 経歴<br />
                        2017年　株式会社CLANE/デザイナー、エンジニア<br />
                        2019年　株式会社ant/エンジニア<br />
                        2022年　合同会社HUSMA/デザイナー<br />
                        2022年　株式会社COOSY/ディレクター<br />
                        2024年　COUNTER株式会社 CCO<br />
                        <br />
                        ◆ 得意領域<br />
                        ・WEBサイトのプランニング<br />
                        ・情報設計、UX、クリエイティブ、実装など各工程のディレクション</p>
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

      <?php get_template_part('template-parts/service-media-cta') ?>

      <div class="service-media-howto service-media-howto002">
        <div class="service-media-howto__inner service-media-inner">
          <div class="service-media-heading">
              <h2 class="service-media-heading__main"><span>オウンドメディア<br class="utils-block-hidden-pc">コンサルティングの料金</span></h2>
            </div>
          <div class="content js-scroll-anime" data-anime="fadeInUp">
            <div class="content__inner">
              <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>00_common/elm-01-cache.png" alt="ここに人の画像"></div>
              <div class="content__body">
                <p class="content__lead"><span>料金に関して</span></p>
                <div class="content__box">
                  <p class="content__main"><span><span><span>30</span>万円(税別)〜</span></span></p>
                  <p class="content__note">詳しい情報は<br class="utils-block-hidden-pc">お気軽に<br class="utils-block-hidden-mobile">お問い合わせください。</p>
                </div>
                <div class="content__btn"><a href="https://counter-digital.jp/download<?php echo $document_slug; ?>" class="service-media-btn service-media-btn--orange service-media-btn-arrow">価格表はこちら<span></span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <section class="service-media-qa">
        <div class="service-media-qa__inner service-media-inner">
          <div class="service-media-heading">
            <p class="service-media-heading__sub">オウンドメディアコンサルティングでの</p>
            <h2 class="service-media-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          // リストデータを配列で管理
          $list_items = [
            [
              'question' => 'オウンドメディアコンサルティングの成果が出るまでの期間はどれくらいですか？',
              'answer' => 'オウンドメディアでの成果創出は、KGI、KPI、領域難易度によって異なります。成果創出は、最短で半年から1年はかかることがあります。'
            ],
            [
              'question' => 'オウンドメディアの運用リソースがないため、運用代行だけ依頼することはできますか？',
              'answer' => '対応可能です。オウンドメディアの記事制作代行、被リンク獲得代行、ホワイトペーパー作成などのコンテンツ制作のみのサービスもご提供が可能です。'
            ],
            [
              'question' => 'オウンドメディア対策の予算が限られていますが、相談は可能ですか？',
              'answer' => '対応可能です。お客様のご予算の中で最適な戦術をご提案いたします。'
            ],
            [
              'question' => '検索順位が向上した場合のみ報酬が発生する成果報酬型でのご支援は可能ですか？',
              'answer' => '対応はしておりません。当社は毎月定額の報酬をいただきご支援をしております。'
            ],
            [
              'question' => '最低契約期間はありますか？',
              'answer' => '特に設けておりません。しかしながら、オウンドメディアで成果を創出していくためには、6ヶ月以上のご契約をおすすめいたします。'
            ],
            [
              'question' => 'オウンドメディア内製化のご支援をいただけますか？',
              'answer' => '対応可能です。オウンドメディア運用のための組織体制を整える必要がございますので、Webサイト規模、目標、期間をもとにお見積りさせていただきます。'
            ],
            [
              'question' => '自社にWebマーケティングの知見がある担当者が不在ですが、問題ないでしょうか？',
              'answer' => '問題ございません。お客様の課題や戦略について、弊社コンサルタントが丁寧に解説し、進めさせていただきます。'
            ],
            [
              'question' => '全国どの拠点からでも対応可能でしょうか？',
              'answer' => '対応可能です。ZOOMを活用したオンラインミーティングを活用し、全国各地のお客様とお取引しています。'
            ],
            [
              'question' => '生成AIを活用したSEO対策も支援可能でしょうか？',
              'answer' => '対応可能です。生成AIを活用したSEO記事制作代行サービスを提供しておりますので、キーワード戦略策定から記事制作まで支援が可能です。'
            ],
            [
              'question' => 'COUNTER社の強みはどのような点になりますか？',
              'answer' => 'COUNTERの強みは、SEOの内部、外部、コンテンツのSEO領域に強みを持ち、品質の高いデザイン、Webサイト制作ができる点が特徴です。'
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
                        <a class="service-media-btn service-media-btn--black" href="#contact">無料で相談する</a>
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
        <div class="service-media-heading">
          <h2 class="service-media-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "オウンドメディアコンサルティング";
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