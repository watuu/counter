<?php
/**
 * Template Name: AI記事作成代行のテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'service-ai';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document-ai';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-ai container">
    <div class="service-ai-inner">
      <div class="service-ai-fv">
        <div class="service-ai-fv__inner service-ai-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead"><span>SEOのオウンドメディアの</span><br><span>トラフィック強化でお悩みの方へ</span></p>
              <h1 class="content__heading"><span>AI-SEO記事制作</span><br><span>作成代行</span></h1>
              <p class="content__text">生成AIを活用した記事コンテンツ制作で<br />費用対効果を大幅に向上</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-ai-btn service-ai-btn--orange" href="/download/document-ai/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/ai/elm-01.png" alt=""></div>
        </div>
      </div>

      <section class="service-ai-mov">
        <!-- <div class="service-ai-mov__inner service-ai-inner">
          <div class="content js-scroll-anime" data-anime="fadeInUp">
            <div class="service-ai-heading">
              <h2 class="service-ai-heading__main"><span>動画で見るAI記事作成代行</span></h2>
            </div>
            <div class="content__iframe"><iframe width="560" height="315" src="https://www.youtube.com/embed/uQA918npfi0?si=59Rcf57smigpYB2k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          </div>
        </div> -->
      </section>

      <section class="service-ai-problems">
        <div class="service-ai-problems__inner service-ai-inner">
          <h2 class="introduction">SEOの記事制作に関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <ol class="service-ai-list service-ai-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">1</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>オウンドメディアの<br />ノウハウがない</span></h3>
                  <p class="service-ai-card001__text">オウンドメディアの運営する方法がわからず、自社で体制構築ができない。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">2</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>記事制作の<br />リソースがない</span></h3>
                  <p class="service-ai-card001__text">記事制作を自社で行いたいが、運用を担える人材が社内にいない。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">3</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>記事制作の<br />費用対効果が合わない</span></h3>
                  <p class="service-ai-card001__text">すでに記事制作を行なっているが、うまく上位表示させられず、費用対効果が悪い。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">4</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>外注費用が高い</span></h3>
                  <p class="service-ai-card001__text">記事制作にかかる外注費用が高く、コストを抑えた運用方法を検討している。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">5</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>AI記事制作に詳しい<br />外注先がない</span></h3>
                  <p class="service-ai-card001__text">SEOと生成AIに詳しい外注業者がいないため、どこに依頼すれば良いかわからない。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">6</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>コンバージョンに繋がる記事を<br />作成したい</span></h3>
                  <p class="service-ai-card001__text">制作している記事がなかなかコンバージョンせず、うまく成果に繋げられない。</p>
                </div>
              </section>
            </li>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">AI-SEO記事制作/作成代行で</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <section class="service-ai-cta">
        <div class="service-ai-cta__inner service-ai-inner">
          <div class="content">
            <p class="content__lead"><span>トップクラスのSEO</span><br class="utils-block-hidden-pc"><span>コンサルタントが対応します</span></p>
            <p class="content__heading"><span>AI-SEO記事制作/作成代行</span>なら<br>お気軽にご相談ください!!</p>
            <p class="content__text">検索エンジンのアルゴリズム解析の<br class="utils-block-hidden-pc">プロが監修する検索エンジンに評価される<br>AI記事作成が強みです。<br class="utils-block-hidden-pc">AI-SEO記事制作/作成代行は<br class="utils-block-hidden-pc">COUNTER(カウンター)へご相談ください。</p>
            <div class="content__objects">
              <div class="content__object content__object--001"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg1.webp" alt=""></div>
              <div class="content__object content__object--002"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg2.webp" alt=""></div>
            </div>
            <ul class="content__list">
              <li class="content__item"><a class="service-ai-btn service-ai-btn--orange service-ai-btn--white" href="/download/document-ai/">無料で資料ダウンロード</a></li>
              <li class="content__item"><a class="service-ai-btn service-ai-btn--white" href="#contact">無料で相談する</a></li>
            </ul>
          </div>
        </div>
      </section>

      <section class="service-ai-points">
        <div class="service-ai-points__inner service-ai-inner">
          <div class="service-ai-heading">
            <h2 class="service-ai-heading__main"><span>カウンターの6つの強み</span></h2>
            <p class="service-ai-heading__lead">カウンターだからこそできる<br>AI-SEO記事制作/作成代行の<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。</p>
          </div>
          <ol class="service-ai-list service-ai-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">1</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>SEOに関する高い専門性</span></h3>
                  <p class="service-ai-card001__text">プロジェクトメンバーは、SEO領域で極めて高い専門をもつメンバーのみが対応します。ツール提供だけではなく、編集、構成作成などの伴走支援により、プロジェクトを成功に導きます。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">2</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>戦略策定から獲得までの</span><br><span>トータル支援</span></h3>
                  <p class="service-ai-card001__text">実績豊富なコンサルタントが、コンテンツマーケティングの戦略策定から記事制作、CRO改善まで幅広く対応し、成果創出までをトータルサポートいたします。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">3</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>AI記事作成の豊富な実績</span></h3>
                  <p class="service-ai-card001__text">不動産、IT、キャリア、マーケティングなどの領域で生成AIを活用した豊富な記事制作実績を保有しております。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">4</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>円滑なコミュニケーション対応</span></h3>
                  <p class="service-ai-card001__text">経験豊富なコンテンツディレクターが、記事制作のディレクションを行います。迅速なコミュニケーションでプロジェクト目標達成を目指します。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">5</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>SEO以外の記事コンテンツも</span><br /><span>対応可能</span></h3>
                  <p class="service-ai-card001__text">SEO目的の記事コンテンツだけでなく、インタビュー記事コンテンツ、調査リソース、ホワイトペーパー、動画コンテンツ制作まで幅広くコンテンツ制作が可能です。</p>
                </div>
              </section>
            </li>
            <li class="service-ai-list__item">
              <section class="service-ai-card001">
                <p class="service-ai-card001__label">6</p>
                <div class="service-ai-card001__inner">
                  <h3 class="service-ai-card001__heading"><span>自社開発の生成AI</span><br /><span>ライティングツールを使用</span></h3>
                  <p class="service-ai-card001__text">AIシステム開発企業と業務提携をしており、自社開発の生成AIライティングツールを保有しています。これにより、ニーズの高い機能を組み込み、AI記事制作の品質向上に努めております。</p>
                </div>
              </section>
            </li>
          </ol>
        </div>
      </section>

      <section class="service-ai-service">
        <div class="service-ai-service__inner service-ai-inner">
          <div class="service-ai-heading">
            <p class="service-ai-heading__sub">カウンターの</p>
            <h2 class="service-ai-heading__main"><span>AI-SEO記事制作/作成代行</span></h2>
            <p class="service-ai-heading__lead">大手SEOコンサルティング会社出身の<br class="utils-block-hidden-pc">コンサルタントが全体設計をいたします。</p>
          </div>
          <div class="table js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table__inner">
              <section class="table__group">
                <div class="table__body">
                  <ul class="table__list">
                    <li class="table__item">
                      <p class="table__label">ヒヤリング</p>
                      <p class="table__text">・会社や事業内容<br />
                      ・ペルソナ<br />
                      ・対策ワード方向性<br />
                      ・記事制作の課題<br />
                      ・記事の編集方針<br />
                      (トンマナ、語句表記ルール)</p>
                      <p class="table__period">お問い合わせから<br />1週間以内</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">ご提案＆お見積り</p>
                      <p class="table__text">ヒアリング、診断内容をもとに弊社にて想定キーワード、獲得シミュレーション、お見積りをお渡しいたします。</p>
                      <p class="table__period">2週間以内</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">ご契約</p>
                      <p class="table__text">対策のご提案とお見積り内容に問題がなければご契約となります。</p>
                      <p class="table__period">1ヶ月程度</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">キーワード選定</p>
                      <p class="table__text">・キーワード調査/グルーピング<br />
                      ・各記事で対策するキーワードの候補リスト作成/ご提出<br />・対策キーワードの確定</p>
                      <p class="table__period">10営業日</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">記事構成書作成</p>
                      <p class="table__text">・SEO調査に基づく記事構成の作成/ご提出/フィードバック修正<br />
                      ・記事構成書のご確認(AI記事制作用の簡易的な記事構成書)</p>
                      <p class="table__period">5営業日</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">原稿執筆・編集</p>
                      <p class="table__text">・記事構成書に基づき、執筆(生成AI)<br />
                      ・初稿ご提出/フィードバック修正<br />・文字校正/校閲<br />
                      (オプション)<br />
                      ・アイキャッチ画像納品(オプション)</p>
                      <p class="table__period">5営業日</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">原稿完了（校了）</p>
                      <p class="table__text">・ご納品<br />
                      ・CMS入稿<br />
                      (オプション)</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
            <p class="table__note">※: 上記スケジュールは目安となり、<br class="utils-block-hidden-pc" />対策難度・ご確認日数・記事本数・記事の種別<br class="utils-block-hidden-pc" />(SEO記事/取材インタビュー記事/オリジナル写真撮影の有無)<br class="utils-block-hidden-pc" />などによってスケジュールは変動いたします。</p>
          </div>
        </div>
      </section>

      <section class="service-ai-cta">
        <div class="service-ai-cta__inner service-ai-inner">
          <div class="content">
            <p class="content__lead"><span>トップクラスのSEO</span><br class="utils-block-hidden-pc"><span>コンサルタントが対応します</span></p>
            <p class="content__heading"><span>AI-SEO記事制作/作成代行</span>なら<br>お気軽にご相談ください!!</p>
            <p class="content__text">検索エンジンのアルゴリズム解析の<br class="utils-block-hidden-pc">プロが監修する検索エンジンに評価される<br>AI記事作成が強みです。<br class="utils-block-hidden-pc">AI-SEO記事制作/作成代行は<br class="utils-block-hidden-pc">COUNTER(カウンター)へご相談ください。</p>
            <div class="content__objects">
              <div class="content__object content__object--001"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg1.webp" alt=""></div>
              <div class="content__object content__object--002"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg2.webp" alt=""></div>
            </div>
            <ul class="content__list">
              <li class="content__item"><a class="service-ai-btn service-ai-btn--orange service-ai-btn--white" href="/download/document-ai/">無料で資料ダウンロード</a></li>
              <li class="content__item"><a class="service-ai-btn service-ai-btn--white" href="#contact">無料で相談する</a></li>
            </ul>
          </div>
        </div>
      </section>

      <section class="service-ai-differ">
        <div class="service-ai-heading">
          <h2 class="service-ai-heading__main"><span>他社との違い</span></h2>
        </div>
        <div class="service-ai-differ__inner service-ai-inner">
          <div class="table-container js-scrollable js-scroll-anime" data-anime="fadeInUp">
            <div class="table">
              <div class="table__inner">
                <div class="table__group">
                  <div class="table__head"></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">生成スピード</li>
                      <li class="table__item">文字数制限</li>
                      <li class="table__item">SEOサポート</li>
                      <li class="table__item">見出しごとの生成</li>
                      <li class="table__item">Google規約違反</li>
                      <li class="table__item">インタビュー記事</li>
                    </ul>
                  </div>
                </div>
                <div class="table__group table__group--orange">
                  <div class="table__head"><p>当サービス</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__text">2分未満</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">あり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">あり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">あり</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>S社 -T</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__text">5分前後</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">あり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">あり</span>
                      </li>
                      <li class="table__item table__item--orange">
                        <span class="table__text">あり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>C社 -C</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__text">15分</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table__group">
                  <div class="table__head"><p>N社 -S</p></div>
                  <div class="table__body">
                    <ul class="table__list">
                      <li class="table__item">
                        <span class="table__text">10分</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">あり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                      <li class="table__item table__item--orange">
                        <span class="table__text">あり</span>
                      </li>
                      <li class="table__item">
                        <span class="table__text">なし</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="service-ai-ceo">
        <div class="service-ai-ceo__inner service-ai-inner">
          <div class="service-ai-ceo__box js-scroll-anime" data-anime="fadeInUp">
            <div class="service-ai-heading">
              <h2 class="service-ai-heading__main"><span>SEOコンサルタントのご紹介</span></h2>
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

      <section class="service-ai-cta">
        <div class="service-ai-cta__inner service-ai-inner">
          <div class="content">
            <p class="content__lead"><span>トップクラスのSEO</span><br class="utils-block-hidden-pc"><span>コンサルタントが対応します</span></p>
            <p class="content__heading"><span>AI-SEO記事制作/作成代行</span>なら<br>お気軽にご相談ください!!</p>
            <p class="content__text">検索エンジンのアルゴリズム解析の<br class="utils-block-hidden-pc">プロが監修する検索エンジンに評価される<br>AI記事作成が強みです。<br class="utils-block-hidden-pc">AI-SEO記事制作/作成代行は<br class="utils-block-hidden-pc">COUNTER(カウンター)へご相談ください。</p>
            <div class="content__objects">
              <div class="content__object content__object--001"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg1.webp" alt=""></div>
              <div class="content__object content__object--002"><img src="<?php echo IMAGE_DIR; ?>03_service/service-cta-bg2.webp" alt=""></div>
            </div>
            <ul class="content__list">
              <li class="content__item"><a class="service-ai-btn service-ai-btn--orange service-ai-btn--white" href="/download/document-ai/">無料で資料ダウンロード</a></li>
              <li class="content__item"><a class="service-ai-btn service-ai-btn--white" href="#contact">無料で相談する</a></li>
            </ul>
          </div>
        </div>
      </section>

      <!-- <div class="service-ai-howto service-ai-howto002">
        <div class="service-ai-howto__inner service-ai-inner">
          <div class="service-ai-heading-box">
            <p class="service-ai-heading-box__main">ではどのように<span>良質な被リンク</span><br class="utils-block-hidden-pc">を集めればよいのでしょうか？</p>
            <p class="service-ai-heading-box__sub">Googleが提唱している方法としては、<br class="utils-block-hidden-pc">
            <span>拡散されるような良質なコンテンツを作成し、</span><br>
            <span>それにより自然な被リンクの増加を狙う</span>というのが基本的な考え方になります。</p>
          </div>
          <div class="content js-scroll-anime" data-anime="fadeInUp">
            <div class="content__inner">
              <div class="content__image"><img src="https://placehold.jp/211x178.png" alt="ここに人の画像"></div>
              <div class="content__body">
                <p class="content__lead"><span>料金に関して</span></p>
                <div class="content__box">
                  <p class="content__main"><span><span><span>15</span>万円(税別)〜</span></span></p>
                  <p class="content__note">詳しい情報は<br class="utils-block-hidden-pc">お気軽に<br class="utils-block-hidden-mobile">お問い合わせください。</p>
                </div>
                <div class="content__btn"><a href="DUMMY" class="service-ai-btn service-ai-btn--orange service-ai-btn-arrow">価格表はこちら<span></span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <section class="service-ai-qa">
        <div class="service-ai-qa__inner service-ai-inner">
          <div class="service-ai-heading">
            <p class="service-ai-heading__sub">AI-SEO記事制作/作成代行での</p>
            <h2 class="service-ai-heading__main"><span>よくある質問</span></h2>
          </div>
          <ul class="list js-list-ac">
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head utils-active">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">記事制作だけではなく、SEO戦略からの相談は可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body utils-active">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。プロのSEOコンサルタントがお客様のWebサイトを無料診断し、お見積りいたします。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">AI記事制作で成果創出は可能でしょうか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。弊社のコンテンツマーケティングソリューションは、Webサイトのドメイン強化からコンテンツ制作まで、またCRO施策まで一気通貫してご支援ができるため、成果創出まで伴走いたします。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">対応できないジャンルはありますか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">さまざまな業種の記事制作での実績があり対応可能です。ただし、公序良俗に反するもの、法律に抵触する恐れがあるものについてはお断りさせていただきます。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">リライトも対応可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">可能です。ボリュームによってお見積りが変わりますので、是非とも無料診断をご活用ください。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">納期はどれくらいかかるのですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">対策キーワードが決まっている場合には、最短10営業日での納品が可能です。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">最低何記事から依頼が可能でしょうか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">月間5記事から承っております。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">記事の入稿は対応してもらえますか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">対応可能です。その場合入稿費用を頂戴しております。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">LPやホワイトペーパー制作も対応可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">対応可能です。コンテンツの企画から制作まで一貫してご支援が可能です。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">専門家の記事監修は可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">対応可能です。弁護士、医師、看護師、薬機法管理者、税理士、社会保険労務士、公認会計士などの国家資格保持者による監修に対応しています。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list__item">
              <div class="content">
                <div class="content__head js-content__head">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">取材記事の対応は可能ですか？</p>
                    <span class="content__trigger"></span>
                  </div>
                </div>
                <div class="content__body">
                  <div class="content__inner">
                    <span class="content__label"></span>
                    <p class="content__text">対応可能です。話者識別プログラムを活用した生成AIライティングでのサービスとなります。ご興味ございましたらお気軽にお問い合わせくださいませ。</p>
                    <div class="content__btn" style="margin-top:38px;"><a class="service-ai-btn service-ai-btn--black" href="#contact">無料で相談する</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <div class="section contact" id="contact" data-scroll-adjust-pc="60" data-scroll-adjust-sp="30">
        <div class="service-ai-heading">
          <h2 class="service-ai-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "SEO記事制作";
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
