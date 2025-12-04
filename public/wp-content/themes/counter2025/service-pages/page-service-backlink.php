<?php
/**
 * Template Name: 被リンク獲得運用代行のテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'service-backlink';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document_backlink';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-backlink container">
    <div class="service-backlink-inner">
      <div class="service-backlink-fv">
        <div class="service-backlink-fv__inner service-backlink-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile"><span>ウェブサイトの権威性、</span><br><span>専門性を高めるリンク獲得でお悩みの方へ</span></p>
              <p class="content__lead utils-block-hidden-pc"><span>ホワイトハットな</span><br><span>リンクビルディングでお悩みの方へ</span></p>
              <h1 class="content__heading"><span>被リンク</span><br><span>獲得運用代行</span></h1>
              <p class="content__text utils-block-hidden-mobile">ドメインの権威性と専門性を担保した、ターゲットリンク設定により、<br>高品質なリンク獲得を目的としたホワイトハットリンク獲得サービスです。</p>
              <p class="content__text utils-block-hidden-pc">外部リンクを販売するようなブラックハットと言われる悪質なSEO対策ではありません。Googleの提唱するホワイトハット（クリーン）なSEO外部対策を支援するサービスです。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-backlink-btn service-backlink-btn--orange" href="https://counter-digital.jp/download/document_backlink/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-01.png" alt=""></div>
        </div>
      </div>

      <section class="service-backlink-mov">
        <div class="service-backlink-mov__inner service-backlink-inner">
          <div class="content js-scroll-anime" data-anime="fadeInUp">
            <div class="service-backlink-heading">
              <h2 class="service-backlink-heading__main"><span>動画で見る被リンク代行サービス</span></h2>
            </div>
            <div class="content__iframe"><iframe width="560" height="315" src="https://www.youtube.com/embed/L_Ahuixo4PI?si=-YnL96ifd3uF9G2X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
          </div>
        </div>
      </section>

      <section class="service-backlink-problems">
        <div class="service-backlink-problems__inner service-backlink-inner">
          <h2 class="introduction">SEOの外部対策に関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <ol class="service-backlink-list service-backlink-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">1</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>外部対策のノウハウがない</span></h3>
                  <p class="service-backlink-card001__text">自社サイトのドメイン評価や専門性を高める上で、正しい運用ノウハウがない。</p>
                </div>
              </section>
            </li>
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">2</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>外部対策の運用リソースがない</span></h3>
                  <p class="service-backlink-card001__text">自社で外部対策を実施したいけれど、人数が少なく自社での運用が難しい。</p>
                </div>
              </section>
            </li>
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">3</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>ブラックハットが不安</span></h3>
                  <p class="service-backlink-card001__text">「被リンク獲得 = ブラックハット」のイメージが強く、ペナルティリスクが怖い</p>
                </div>
              </section>
            </li>
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">4</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>外注費用が高い</span></h3>
                  <p class="service-backlink-card001__text">外部業者に委託したいけれど、そもそも費用が高いため、依頼に踏み切れない。</p>
                </div>
              </section>
            </li>
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">5</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>外部対策に詳しい外注先がない</span></h3>
                  <p class="service-backlink-card001__text">外部対策を行っている業者は増えているが、SEOを熟知した運用に思えない。</p>
                </div>
              </section>
            </li>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">被リンク獲得運用代行サービスで</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <section class="service-backlink-cta">
        <div class="service-backlink-cta__inner service-backlink-inner">
          <div class="content">
            <p class="content__lead utils-block-hidden-mobile"><span>トップクラスのSEOコンサルタントが対応します</span></p>
            <p class="content__lead utils-block-hidden-pc"><span>トップクラスのSEO</span><br><span>コンサルタントが対応します</span></p>
            <p class="content__heading"><span>被リンク獲得運用代行サービス</span>なら<br>お気軽にご相談ください!!</p>
            <p class="content__text">検索エンジンのアルゴリズム解析の<br class="utils-block-hidden-pc">プロが監修する「リンク獲得」が強みです。<br>被リンク獲得運用代行は<br class="utils-block-hidden-pc">COUNTER(カウンター)へご相談ください。</p>
            <div class="content__objects">
              <div class="content__object content__object--001"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg1.webp" alt=""></div>
              <div class="content__object content__object--002"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg2.webp" alt=""></div>
            </div>
            <ul class="content__list">
              <li class="content__item"><a class="service-backlink-btn service-backlink-btn--orange service-backlink-btn--white" href="https://counter-digital.jp/download/document_backlink/">無料で資料ダウンロード</a></li>
              <li class="content__item"><a class="service-backlink-btn service-backlink-btn--white" href="#contact">無料で相談する</a></li>
            </ul>
          </div>
        </div>
      </section>

      <section class="service-backlink-points">
        <div class="service-backlink-points__inner service-backlink-inner">
          <div class="service-backlink-heading">
            <h2 class="service-backlink-heading__main"><span>カウンターの5つの強み</span></h2>
            <p class="service-backlink-heading__lead">カウンターだからこそできる<br>被リンク獲得運用代行サービスの<br class="utils-block-hidden-pc">５つの強みをご紹介いたします。</p>
          </div>
          <ol class="service-backlink-list service-backlink-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">1</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>ホワイトハットなリンク獲得手法</span></h3>
                  <p class="service-backlink-card001__text">Googleガイドラインに則ったホワイトハットな被リンク獲得を徹底し、ドメイン権威性と専門性を高める良質なリンク獲得目指します。</p>
                </div>
              </section>
            </li>
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">2</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>戦略策定から獲得までの</span><br><span>トータル支援</span></h3>
                  <p class="service-backlink-card001__text">被リンク獲得の戦略策定からリンク獲得作業までトータル支援。リンク獲得にまつわる全業務を行うため、お客様には確認作業だけお願いいたします。</p>
                </div>
              </section>
            </li>
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">3</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>SEOに関する高い専門性</span></h3>
                  <p class="service-backlink-card001__text">COUNTER株式会社はアルゴリズム解析のプロが創業したブランドとなります。SEOに関する高い専門性から最適なリンク獲得を目指します。</p>
                </div>
              </section>
            </li>
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">4</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>円滑なコミュニケーション対応</span></h3>
                  <p class="service-backlink-card001__text">リンク獲得に特化した専門スタッフによるチームを社内で組成しています。迅速なレスポンス対応から、リンク営業に関する高い獲得率を保持しています。</p>
                </div>
              </section>
            </li>
            <li class="service-backlink-list__item">
              <section class="service-backlink-card001">
                <p class="service-backlink-card001__label">5</p>
                <div class="service-backlink-card001__inner">
                  <h3 class="service-backlink-card001__heading"><span>リンク獲得周辺業務も対応可能</span></h3>
                  <p class="service-backlink-card001__text">リンク獲得営業だけにとどまらず、自然リンク獲得のためのコンテンツ提案、制作支援。また、大規模データベースサイトの場合にはビジネスプロセス改善までご提案することもあります。</p>
                </div>
              </section>
            </li>
          </ol>
        </div>
      </section>

      <section class="service-backlink-service">
        <div class="service-backlink-service__inner service-backlink-inner">
          <div class="service-backlink-heading">
            <p class="service-backlink-heading__sub">カウンターの</p>
            <h2 class="service-backlink-heading__main"><span>被リンク獲得運用代行サービス</span></h2>
            <p class="service-backlink-heading__lead">大手SEOコンサルティング会社出身の<br class="utils-block-hidden-pc">コンサルタントが全体設計をいたします。</p>
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
                      <p class="table__text">現在の課題などや今回の目的など、課題感や想定スケジュール等をヒヤリングをさせていただきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">サイト診断</p>
                      <p class="table__text">カウンターのディレクターが、貴社のWEBサイトを診断いたします。様々な観点から診断することで、具体的な戦略を立てていきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">戦略の立案</p>
                      <p class="table__text">カウンターのディレクターが被リンク運用代行サービスの戦略をご提案いたします。</p>
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
                      <p class="table__label">コンテンツ作成</p>
                      <p class="table__text">コンテンツ作成のご提案をいたします。活用できるページがWEBサイト上にある場合にはそれらを活用いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">施策実施</p>
                      <p class="table__text">戦略に基づき施策を実施していきます。作業はCOUNTERが行います。</p>
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
                      <p class="table__text">施策結果の内容をまとめたレポートをカウンターからご納品いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">PDCA改善</p>
                      <p class="table__text">施策の結果を踏まえKPIに応じて、PDCA改善を実施いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <section class="service-backlink-cta">
        <div class="service-backlink-cta__inner service-backlink-inner">
          <div class="content">
            <p class="content__lead utils-block-hidden-mobile"><span>トップクラスのSEOコンサルタントが対応します</span></p>
            <p class="content__lead utils-block-hidden-pc"><span>トップクラスのSEO</span><br><span>コンサルタントが対応します</span></p>
            <p class="content__heading"><span>被リンク獲得運用代行サービス</span>なら<br>お気軽にご相談ください!!</p>
            <p class="content__text">検索エンジンのアルゴリズム解析の<br class="utils-block-hidden-pc">プロが監修する「リンク獲得」が強みです。<br>被リンク獲得運用代行は<br class="utils-block-hidden-pc">COUNTER(カウンター)へご相談ください。</p>
            <div class="content__objects">
              <div class="content__object content__object--001"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg1.webp" alt=""></div>
              <div class="content__object content__object--002"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg2.webp" alt=""></div>
            </div>
            <ul class="content__list">
              <li class="content__item"><a class="service-backlink-btn service-backlink-btn--orange service-backlink-btn--white" href="https://counter-digital.jp/download/document_backlink/">無料で資料ダウンロード</a></li>
              <li class="content__item"><a class="service-backlink-btn service-backlink-btn--white" href="#contact">無料で相談する</a></li>
            </ul>
          </div>
        </div>
      </section>

      <section class="service-backlink-differ">
        <div class="service-backlink-heading">
          <h2 class="service-backlink-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-backlink-differ__inner service-backlink-inner">
          <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table">
              <div class="table__inner">
                <div class="table__group">
                  <div class="table__head"></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">SEOカテゴリー</li>
                      <li class="table__item">価格</li>
                      <li class="table__item">対応範囲</li>
                      <li class="table__item">SEOスキル</li>
                      <li class="table__item">リンク専門性</li>
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
                        <span class="table__text">ホワイトハットSEO</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">ブラックハット業者より高く、<br>大手SEO会社よりも低い。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">戦略策定から実装まで対応。</span>
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
                        <span class="table__text">価格、実装力、専門性の観点で総合力が高い。</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>ブラックハットサービスを<br>提供するSEO会社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-double"></span>
                        <span class="table__text">ホワイトハットSEO</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">高額なケースが大半</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">戦略だけで実装は対応しない。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">高い技術力を保有する<br>業者あり。</span>
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
                  <div class="table__head"><p>大手SEO<br>コンサルティング会社</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__ic table__ic--x"></span>
                        <span class="table__text">ブラックハットSEO</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">高額なケースが大半</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--triangle"></span>
                        <span class="table__text">戦略だけで実装は対応しない。</span>
                      </li>
                      <li class="table__item">
                        <span class="table__ic table__ic--circle-single"></span>
                        <span class="table__text">高い技術力を保有する<br>業者あり。</span>
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
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="service-backlink-ceo">
        <div class="service-backlink-ceo__inner service-backlink-inner">
          <div class="service-backlink-ceo__box js-scroll-anime" data-anime="fadeInUp">
            <div class="service-backlink-heading">
              <h2 class="service-backlink-heading__main"><span>SEOコンサルタントのご紹介</span></h2>
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

      <section class="service-backlink-cta">
        <div class="service-backlink-cta__inner service-backlink-inner">
          <div class="content">
            <p class="content__lead utils-block-hidden-mobile"><span>トップクラスのSEOコンサルタントが対応します</span></p>
            <p class="content__lead utils-block-hidden-pc"><span>トップクラスのSEO</span><br><span>コンサルタントが対応します</span></p>
            <p class="content__heading"><span>被リンク獲得運用代行サービス</span>なら<br>お気軽にご相談ください!!</p>
            <p class="content__text">検索エンジンのアルゴリズム解析の<br class="utils-block-hidden-pc">プロが監修する「リンク獲得」が強みです。<br>被リンク獲得運用代行は<br class="utils-block-hidden-pc">COUNTER(カウンター)へご相談ください。</p>
            <div class="content__objects">
              <div class="content__object content__object--001"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg1.webp" alt=""></div>
              <div class="content__object content__object--002"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg2.webp" alt=""></div>
            </div>
            <ul class="content__list">
              <li class="content__item"><a class="service-backlink-btn service-backlink-btn--orange service-backlink-btn--white" href="https://counter-digital.jp/download/document_backlink/">無料で資料ダウンロード</a></li>
              <li class="content__item"><a class="service-backlink-btn service-backlink-btn--white" href="#contact">無料で相談する</a></li>
            </ul>
          </div>
        </div>
      </section>

      <div class="service-backlink-howto service-backlink-howto001">
        <div class="service-backlink-howto__inner service-backlink-inner">
          <div class="service-backlink-heading-box">
            <p class="service-backlink-heading-box__main">逆にブラックSEOを取り入れてしまうと<br><span>メディアの評価を大幅に下げてしまう</span><br class="utils-block-hidden-pc">要因になります。</p>
            <p class="service-backlink-heading-box__sub">近年検索エンジンは<br class="utils-block-hidden-pc">ブラックハットな手法に対して<br>
            <span>厳しいペナルティを課す</span>ようになっています。<br><br class="utils-block-hidden-pc">
            被リンクとSEOは強い関係がありますが、<br>
            安易な方法に手を出してしまうと<br class="utils-block-hidden-pc">ペナルティを受けてしまい、<br>
            <span>ビジネスへの損害も甚大</span>なものになります。</p>
          </div>
          <ul class="list list--ng js-scroll-anime" data-anime="fadeInUp">
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">自社サイトと<br>関連性の低い被リンク</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">金品授受による<br>被リンク獲得(ペイドリンク)</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">相互リンクページによる<br>被リンク獲得</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">権威性の低いドメインからの<br class="utils-hidden-mobile">被リンク獲得<br><br></p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">大量のWebサイト同士の<br>被リンク獲得(リンクファーム)</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">NG</p>
                <div class="content__body">
                  <p class="content__text">政府系リンクだけの設置<br><br><br></p>
                </div>
              </section>
            </li>
          </ul>
          <ul class="list list--ok list--before-arrow js-scroll-anime" data-anime="fadeInUp">
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">自社サイトと<br>関連性の高い被リンク</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">適切な方法で<br>被リンク獲得</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">自然な形で<br>被リンクを設置</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">権威性の高い<br>ドメインからの被リンク獲得</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">リンクファームは<br>実施しない</p>
                </div>
              </section>
            </li>
            <li class="list__item">
              <section class="content">
                <p class="content__head">OK</p>
                <div class="content__body">
                  <p class="content__text">お客様のWebサイトに合う<br>リンクリストを作成</p>
                </div>
              </section>
            </li>
          </ul>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__sub">悪質なサービスを利用せず<br>
            ホワイトハットの<br class="utils-block-hidden-pc">獲得代行を利用しましょう。<br>
            <span>COUNTER</span>は貴社の<br class="utils-block-hidden-pc">ドメインに貢献できる</p>
            <p class="solution__main">
            <span>良</span>
            <span>質</span>
            <span>な</span>
            <span>被</span>
            <span>リ</span>
            <span>ン</span>
            <span>ク</span>
            だけを<br class="utils-block-hidden-pc"><strong>獲得</strong>します！！</p>
          </div>
        </div>
      </div>

      <div class="service-backlink-howto service-backlink-howto002">
        <div class="service-backlink-howto__inner service-backlink-inner">
          <div class="service-backlink-heading-box">
            <p class="service-backlink-heading-box__main">ではどのように<span>良質な被リンク</span>を<br class="utils-block-hidden-pc">集めればよいのでしょうか?</p>
            <p class="service-backlink-heading-box__sub">Googleが提唱している方法としては、<br class="utils-block-hidden-pc"><span>読者に評価される良質なコンテンツを作成し、<br>
            自然な被リンクの増加を狙う</span><br class="utils-block-hidden-pc">というのが基本的な考え方になります。</p>
          </div>
          <div class="content js-scroll-anime" data-anime="fadeInUp">
            <div class="content__inner">
              <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>03_service/backlink/elm-01-cache.png" alt="ここに人の画像"></div>
              <div class="content__body">
                <p class="content__lead"><span>料金に関して</span></p>
                <div class="content__box">
                  <p class="content__main"><span><span><span>15</span>万円(税別)〜</span></span></p>
                  <p class="content__note">詳しい情報は<br class="utils-block-hidden-pc">お気軽に<br class="utils-block-hidden-mobile">お問い合わせください。</p>
                </div>
                <div class="content__btn"><a href="https://counter-digital.jp/download/document_backlink/" class="service-backlink-btn service-backlink-btn--orange service-backlink-btn-arrow">価格表はこちら<span></span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="service-backlink-qa">
        <div class="service-backlink-qa__inner service-backlink-inner">
          <div class="service-backlink-heading">
            <p class="service-backlink-heading__sub">被リンク運用代行サービスでの</p>
            <h2 class="service-backlink-heading__main"><span>よくある質問</span></h2>
          </div>
          <ul class="list js-list-ac">
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head utils-active">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">全ての領域のサイトでご支援可能でしょうか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body utils-active">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。ただしすでにDRが高い(60以上)サイトやYMYL領域は効果が出にくいサイトが存在します。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">リンク購入は行なっていますか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">行なっていません。リンク購入はGoogleのガイドライン違反となりますので実施いたしません。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">ペナルティリスクはありますか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">当サービスはGoogleが推奨するホワイトハットな手法で被リンク獲得を行うためペナルティリスクはございません。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">お打ち合わせの中で具体的な戦術についての提案がありますか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text"> 提案は可能です。お客様のWebサイトのカテゴリーを考慮した被リンク獲得戦術をご提案いたします。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">被リンク獲得で検索順位向上は可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">検索順位の上位表示を保証するサービスではございません。<br>しかし、ドメイン評価を高め、サイト全体の評価を高めることは可能です。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">低品質なリンク設置がされそうで心配です</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">客様のサイトテーマに合わせた良質なリンク設置を行います。また、事前にターゲットリンクリストをご共有の上獲得及び設置いたしますのでご安心ください。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">外部対策以外のSEO施策の提案は可能でしょうか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。サイト診断を行った上で被リンク獲得が最適な戦術でない場合には、別の施策をご提案させていただくことがございます。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">LPやホワイトペーパー制作も対応可能ですか?</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">対応可能です。コンテンツの企画から制作まで一貫してご支援が可能です。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-backlink-btn service-backlink-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <div class="section contact" id="contact" data-scroll-adjust-pc="60" data-scroll-adjust-sp="30">
        <div class="service-backlink-heading">
          <h2 class="service-backlink-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "SEO外部対策";
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