<?php
/**
 * Template Name: BtoBサイト制作のテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'service-btob';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document_btob';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-btob container">
    <div class="service-btob-inner">
      <div class="service-btob-fv">
        <div class="service-btob-fv__inner service-btob-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>ウェブサイトのアクセス数、</span><br>
                <span>問い合わせ獲得でお悩みの方へ</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>ウェブサイトのアクセス数、</span><br>
                <span>問い合わせ獲得でお悩みの方へ</span>
              </p>
              <h1 class="content__heading">
                <span>BtoBサイト制作</span>
              </h1>
              <p class="content__text utils-block-hidden-mobile">BtoBマーケティングの戦略立案から施策実行まで得意とした、<br>見込み客を獲得するBtoBサイトを制作します。</p>
              <p class="content__text utils-block-hidden-pc">BtoBマーケティングの戦略立案から施策実行まで得意とした、見込み客を獲得するBtoBサイトを制作します。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-btob-btn service-btob-btn--orange" href="https://counter-digital.jp/download/<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/btob/lp_btob-site.png" alt=""></div>
        </div>
      </div>

      <section class="service-btob-problems">
        <div class="service-btob-problems__inner service-btob-inner">
          <h2 class="introduction">BtoBサイトに関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <ol class="service-btob-list service-btob-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">1</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>Webサイトのアクセス数が</span><span>伸びない</span></h3>
                  <p class="service-btob-card001__text">Webサイトのアクセス数がなかなか伸びず、うまく成果に繋げられない。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">2</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>問い合わせや資料請求が</span><span>増えない</span></h3>
                  <p class="service-btob-card001__text">Webサイトのアクセス数はあるけど、問い合わせや資料請求に繋がらない。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">3</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>SEO対策について知見がない</span></h3>
                  <p class="service-btob-card001__text">何から始めたらよいかわからず、自社でSEO対策ができない。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">4</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>効果的なBtoBサイトの</span><br><span>作り方がわからない</span></h3>
                  <p class="service-btob-card001__text">外部業者に委託したいけれど、そもそも効果が出るのかわからず、依頼に踏み切れない。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">5</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>コンテンツはあるけど</span><span>効果が出ない</span></h3>
                  <p class="service-btob-card001__text">すでに記事制作を行なっているが、うまく上位表示させられず、費用対効果が悪い。</p>
                </div>
              </section>
            </li>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">BtoBサイト制作サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-btob-cta') ?>

      <section class="service-btob-points">
        <div class="service-btob-points__inner service-btob-inner">
          <div class="service-btob-heading">
            <h2 class="service-btob-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="service-btob-heading__lead">カウンターだからこそできる<br>BtoBサイト制作の<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <ol class="service-btob-list service-btob-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">1</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>BtoBサイト制作の豊富な実績</span></h3>
                  <p class="service-btob-card001__text">上場企業を中心にWebディレクションやBtoBサイト制作の経験が豊富な制作チームが対応します。<br>クリエイティブの精度も高いBtoBサイト制作の実現が可能です。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">2</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>SEOに関する高い専門性</span></h3>
                  <p class="service-btob-card001__text">COUNTER株式会社はアルゴリズム解析のプロが創業したブランドとなります。<br>プロジェクトメンバーは、SEO領域で極めて高い専門をもつメンバーがプランニングします。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">3</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>戦略策定からリード獲得までの</span><br><span>トータル支援</span></h3>
                  <p class="service-btob-card001__text">実績豊富なコンサルタントが、コンテンツマーケティングの戦略策定から記事制作、CRO改善まで幅広く対応し、成果創出までのトータルサポートも可能です。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">4</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>Webサイトの権威性、専門性を</span><br><span>高める外部SEO対策</span></h3>
                  <p class="service-btob-card001__text">ドメイン権威性と専門性を高める、Googleガイドラインに則った外部SEO対策を行います。検索順位向上によりBtoBサイトへの集客が期待できます。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">5</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>Webサイトの評価を高める</span><br><span>内部SEO対策</span></h3>
                  <p class="service-btob-card001__text">独自のチェックリストに基づき、内部SEO対策を行いサイトの評価を高め集客効果を高めます。</p>
                </div>
              </section>
            </li>
            <li class="service-btob-list__item">
              <section class="service-btob-card001">
                <p class="service-btob-card001__label">6</p>
                <div class="service-btob-card001__inner">
                  <h3 class="service-btob-card001__heading"><span>成果を最大化する</span><br><span>コンテンツSEOを多数支援</span></h3>
                  <p class="service-btob-card001__text">自社開発の生成AIライティングツールと豊富な記事制作実績と、SEO領域で極めて高い専門性のあるメンバーが対応してプロジェクトを成功に導きます。</p>
                </div>
              </section>
            </li>
          </ol>
        </div>
      </section>

      <section class="service-btob-service">
        <div class="service-btob-service__inner service-btob-inner">
          <div class="service-btob-heading">
            <p class="service-btob-heading__sub">カウンターの</p>
            <h2 class="service-btob-heading__main"><span>BtoBサイト制作の流れ</span></h2>
            <p class="service-btob-heading__lead">カウンターのBtoBサイト制作サービス<br>大手SEOコンサルティング会社出身のコンサルタントが全体設計いたします。</p>
          </div>
          <div class="table js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__head">
                  <div class="table__block">
                    <h3 class="table__heading">戦略設計フェーズ</h3>
                    <div class="table__image table__image--001"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-04.png" alt=""></div>
                  </div>
                </div>
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ヒヤリング</p>
                      <p class="table__text">弊社のヒヤリングシートに沿って、ヒヤリングをさせていただきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">ご提案＆お見積り</p>
                      <p class="table__text">ヒヤリングとWEBサイト診断の結果をもとに、貴社に最適なご提案・お見積りをご用意いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">ご契約</p>
                      <p class="table__text">対策のご提案とお見積り内容に問題がなければご契約となります。</p>
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
                      <p class="table__label">戦略策定・サイト設計</p>
                      <p class="table__text">カウンターのディレクターがBtoBサイト制作の戦略とサイト設計をご提案いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">サイト制作</p>
                      <p class="table__text">戦略とサイト設計に基づきBtoBサイト制作を行います。</p>
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
                      <p class="table__label">保守（ご契約内容による）</p>
                      <p class="table__text">必要に応じて、サイト保守のご提案と契約を行います。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">運用（ご契約内容による）</p>
                      <p class="table__text">必要に応じて、サイト運用のご提案と契約を行います。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-btob-cta') ?>

      <section class="service-btob-differ">
        <div class="service-btob-heading">
          <h2 class="service-btob-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-btob-differ__inner service-btob-inner">
          <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table">
              <div class="table__inner">
                <div class="table__group">
                  <div class="table__head"></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">情報設計力</li>
                      <li class="table__item">デザイン力</li>
                      <li class="table__item">運用保守</li>
                      <li class="table__item">SEOスキル</li>
                      <li class="table__item">コンテンツ制作</li>
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
                        <span class="table__text">上場企業を中心にWebディレクションやBtoBサイト制作の経験が豊富な制作チームが対応</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">クリエイティブの精度も高い<br>BtoBサイト制作の実現が可能。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">保守∔集客やリード獲得の<br>運用支援も可能</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">Googleアルゴリズムを<br>熟知した専門家が対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">Googleアルゴリズムを<br>熟知した専門家が対応。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">SEOを考慮したBtoBサイト制作が可能</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>Web制作会社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
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
                        <span class="table__text">保守のみのケースが多い</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">SEOの知見がない業者もあり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">非対応の業者もあり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">サイト制作のみでSEOを考慮しない業者もあり</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>BtoBマーケティング<br>支援会社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">戦略だけで実装は対応しない業者もあり。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">戦略だけで実装は対応しない業者もあり。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">保守のみもしくは非対応</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">高い技術力を保有する業者あり。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
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

      <section class="service-btob-ceo">
        <div class="service-btob-ceo__inner service-btob-inner">
          <section class="swiper js-pickup-slider-single">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <div class="service-btob-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-btob-heading">
                    <h2 class="service-btob-heading__main"><span>SEOコンサルタントのご紹介</span></h2>
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
                <div class="service-btob-ceo__box js-scroll-anime" data-anime="fadeInUp">
                  <div class="service-btob-heading">
                    <h2 class="service-btob-heading__main"><span>WEB ディレクターのご紹介</span></h2>
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


      <?php get_template_part('template-parts/service-btob-cta') ?>

      <section class="service-btob-qa">
        <div class="service-btob-qa__inner service-btob-inner">
          <div class="service-btob-heading">
            <p class="service-btob-heading__sub">BtoBサイト制作に関する</p>
            <h2 class="service-btob-heading__main"><span>よくある質問</span></h2>
          </div>
          <ul class="list js-list-ac">
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head utils-active">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">サイト制作だけではなく、SEO戦略からの相談は可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body utils-active">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。サイト診断を行った上で最適なSEO戦略のご提案をさせていただきます。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">サイト制作後の運用や保守もお願いできますか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。運用や保守内容によって金額が異なるため別途御見積りとさせていただきます。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">BtoBサイト以外のサイト制作も可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">対応可能です。サイト以外でもLPなどコンテンツの企画から制作まで一貫してご支援が可能です。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">コンテンツの制作も相談可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text"> 対応可能です。コンテンツの企画から制作まで一貫してご支援が可能です。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">BtoBサイトの制作だけでなく自社にあった提案もしてくれますか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">サイト調査をして課題感がある場合は、ご提案する場合もございます。例えばコンテンツ制作やSEO対策などご提案可能です。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">制作期間はどのくらいかかりますか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">一般的なBtoBサイトの制作期間は4ヶ月～です。内容によって期間は変動いたします。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">CMSやサーバーの選定も可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。お客さまのご状況に応じて、最適なCMSやサーバーの選定をさせていただきます。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">システム開発もお願いできますか？?</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。開発部隊もおりますので、お客さまのご要望に沿った開発を行います。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">費用はいくらぐらいかかりますか？?</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">概算費用で350万円～です。内容によって価格は大きく変動いたしますので、詳細はお問い合わせくださいませ。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">SEO対策もしたサイト制作も出来ますか？?</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。SEO対策も含めたサイト設計、制作が可能でございます。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-btob-btn service-btob-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <div class="section contact" id="contact" data-scroll-adjust-pc="60" data-scroll-adjust-sp="30">
        <div class="service-btob-heading">
          <h2 class="service-btob-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "BtoBサイト制作";
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