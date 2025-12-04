<?php
/**
 * Template Name: データベース型サイトSEO支援のテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'database-seo';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document-datebase-seo';

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<p></p>
<main>
  <div class="service-db container">
    <div class="service-db-inner">
      <div class="service-db-fv">
        <div class="service-db-fv__inner service-db-inner">
          <div class="content">
            <div class="content__inner">
              <p class="content__lead utils-block-hidden-mobile">
                <span>大規模データベースサイト</span><br>
                <span>の検索流入でお悩みの方へ&nbsp;</span>
              </p>
              <p class="content__lead utils-block-hidden-pc">
                <span>大規模データベースサイト</span><br>
                <span>の検索流入でお悩みの方へ</span>
              </p>
              <h1 class="content__heading">
                <span>データベース型サイト</span>
                <span>SEO支援</span>
              </h1>
              <p class="content__text utils-block-hidden-mobile">経験豊富なSEOコンサルタントが伴走支援する<br>データベース型サイトSEO支援サービスです。</p>
              <p class="content__text utils-block-hidden-pc">経験豊富なSEOコンサルタントが伴走支援するデータベース型サイトSEO支援サービスです。</p>
            </div>
            <div class="content__inner">
              <ul class="content__list">
                <li class="content__item"><a class="service-db-btn service-db-btn--orange" href="https://counter-digital.jp/download<?php echo $document_slug; ?>/">無料で資料ダウンロード</a></li>
                <li class="content__item"><a class="service-db-btn service-db-btn--black" href="#contact">無料で相談する</a></li>
              </ul>
            </div>
          </div>
          <div class="object"><img src="<?php echo IMAGE_DIR; ?>03_service/<?php echo $page_id; ?>/<?php echo $page_id; ?>.png" alt=""></div>
        </div>
      </div>

      <section class="service-db-problems">
        <div class="service-db-problems__inner service-db-inner">
          <h2 class="introduction">データベース型<br class="utils-block-hidden-pc">サイトSEOに関する<br>こんな<span>お</span><span>悩</span><span>み</span>はありませんか？</h2>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['データベースSEOの', 'ノウハウがない'],
              'text' => '自社のデータベース型サイトのSEO対策を行いたいけれど、正しい方法論がわからず困っている。'
            ],
            [
              'label' => '2',
              'heading' => ['運用リソースがない'],
              'text' => 'データベースSEOのノウハウはあるけれど、自社で運用リソースを確保できない。'
            ],
            [
              'label' => '3',
              'heading' => ['アルゴリズムアップデートで', '順位が下がった'],
              'text' => '直近のGoogleアルゴリズムアップデートにより、Webサイトの検索順位が一気に下がってしまい、原因分析や施策を実施したい。'
            ],
            [
              'label' => '4',
              'heading' => ['外注費用が高い'],
              'text' => '外部業者に委託したいけれど、そもそも費用が高いため、依頼に踏み切れない。'
            ],
            [
              'label' => '5',
              'heading' => ['すでに外注しているのに', '成果が出ない'],
              'text' => 'データベースSEOコンサルティングを外部業者に依頼しているが成果が出ておらず、困っている。'
            ],
          ];
          ?>
          <ol class="service-db-list service-db-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-db-list__item">
                <section class="service-db-card001">
                  <p class="service-db-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-db-card001__inner">
                    <h3 class="service-db-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-db-card001__text"><?php echo esc_html($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
          <div class="solution js-scroll-anime" data-anime="fadeInUp">
            <p class="solution__text solution__text--sub">COUNTER(カウンター)の<br class="utils-block-hidden-pc">データベース型サイトSEO支援で</p>
            <p class="solution__text solution__text--main"><span>全て<span>解</span><span>決</span>できます!!</span></p>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/service-db-cta') ?>

      <section class="service-db-points">
        <div class="service-db-points__inner service-db-inner">
          <div class="service-db-heading">
            <h2 class="service-db-heading__main"><span>カウンターの5つの強み</span></h2>
            <p class="service-db-heading__lead">カウンターだからこそできる<br>データベース型サイトSEO支援代行サービスの<br class="utils-block-hidden-pc">5つの強みをご紹介いたします。</p>
          </div>
          <?php
          // サービス内容のデータを配列として管理
          $service_seo_list = [
            [
              'label' => '1',
              'heading' => ['戦略策定から実行までの', 'トータル支援'],
              'text' => 'データベースSEOの戦略立案から実行支援までトータル支援が可能です。内部対策、外部対策、コンテンツ対策を個別での対応も可能です。'
            ],
            [
              'label' => '2',
              'heading' => ['SEOに関する高い専門性'],
              'text' => '最新の検索アルゴリズムに関する知見を有するコンサルタントが、データベースサイトの運用支援を行います。'
            ],
            [
              'label' => '3',
              'heading' => ['投資対効果の合うプランの提案'],
              'text' => 'ご提案時より、お客様の課題、予算に合わせたプランを提示いたします。逆に、費用対効果が合わない場合には、サービスをお勧めしないこともございます。'
            ],
            [
              'label' => '4',
              'heading' => ['セカンドオピニオンサービスも', '提供'],
              'text' => '既存のSEO施策の良し悪しについて評価するサービスもご提供可能です。通常料金よりもお求めやすい価格となっておりますので、ご検討ください。'
            ],
            [
              'label' => '5',
              'heading' => ['SEO以外の周辺サービスも提供'],
              'text' => 'SEO以外のデジタル広告運用やSNS運用、MA導入、ホワイトペーパー作成など幅広くご支援が可能です。'
            ],
          ];
          ?>

          <ol class="service-db-list service-db-list--col003 js-scroll-anime" data-anime="fadeInUp">
            <?php foreach ($service_seo_list as $service): ?>
              <li class="service-db-list__item">
                <section class="service-db-card001">
                  <p class="service-db-card001__label"><?php echo esc_html($service['label']); ?></p>
                  <div class="service-db-card001__inner">
                    <h3 class="service-db-card001__heading">
                      <?php foreach ($service['heading'] as $heading): ?>
                        <span><?php echo esc_html($heading); ?></span><br>
                      <?php endforeach; ?>
                    </h3>
                    <p class="service-db-card001__text"><?php echo wp_kses_post($service['text']); ?></p>
                  </div>
                </section>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="service-db-service">
        <div class="service-db-service__inner service-db-inner">
          <div class="service-db-heading">
            <p class="service-db-heading__sub">カウンターの</p>
            <h2 class="service-db-heading__main"><span>データベース型</span><br class="utils-block-hidden-pc"><span>サイトSEO支援代行サービス</span></h2>
            <p class="service-db-heading__lead">大手SEOコンサルティング会社出身のコンサルタントが全体設計をいたします。</p>
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
                      <p class="table__text">データベースSEOの観点から今回の目的や現在の課題など、達成したい目標やスケジュール感などをヒアリングさせていただきます。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">サイト診断</p>
                      <p class="table__text">ヒアリングを受け、貴社サイトを実際に診断いたします。業界業種や貴社サイトのコンテンツ量、被リンク数、競合サイトなどを様々な観点から診断いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">戦略の立案</p>
                      <p class="table__text">ヒアリング、サイト診断を元に弊社ディレクターがSEOの戦略を立案いたします。</p>
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
                      <p class="table__text">既存で活用できるページがない場合にはコンテンツ作成のご提案をいたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">施策実施</p>
                      <p class="table__text">戦略に基づき施策を実施します。作業は弊社側で行います。</p>
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
                      <p class="table__text">施策結果の内容をまとめたレポートをご納品いたします。</p>
                    </li>
                    <li class="table__item">
                      <p class="table__label">PDCA改善</p>
                      <p class="table__text">施策結果を踏まえKPIに応じてPDCA改善を実施いたします。</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-db-cta') ?>

      <section class="service-db-differ">
        <div class="service-db-heading">
          <h2 class="service-db-heading__main"><span>他社との違い</span></h2>
          <p class="service-db-heading__lead">競合他者と比較しますと、高い技術力に加え、<br>UIデザインにも強みを持つ<br class="utils-block-hidden-pc">SEOコンサルティングカンパニーです。</p>
        </div>
        <div class="service-db-differ__inner service-db-inner">
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

      <section class="service-db-ceo">
        <div class="service-db-ceo__inner service-db-inner">
          <div class="service-db-ceo__box js-scroll-anime" data-anime="fadeInUp">
            <div class="service-db-heading">
              <h2 class="service-db-heading__main"><span>SEOコンサルタントのご紹介</span></h2>
            </div>
            <div class="content">
              <div class="content__image"><img src="<?php echo IMAGE_DIR; ?>03_service/database-seo/sakai.png" alt="株式会社ANYCUL 代表取締役/SEOコンサルタント 酒井 元気"></div>
              <div class="content__body">
                <div class="content__head">
                  <p class="content__name"><span>SEOコンサルタント</span><br>酒井 元気</p>
                  <ul class="content__list">
                    <li class="content__item"><a href="https://x.com/genki_iii?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" rel="noopener noreferrer"><img src="<?php echo IMAGE_DIR; ?>00_common/icon-x.svg" alt="X(旧Twiter)"></a></li>
                  </ul>
                </div>
                <div class="content__inner js-content__inner">
                  <p class="content__text">SEOコンサルタント。<br />
                  現在まで国内トップクラスのコンサルタント達と数々の小規模~大規模サービスのコンサルティングに従事。現在はANYCULにて、コンテンツSEOやデータベース型大規模サイトSEOを得意とするコンサルティングチームを統括。</p>
                  <p class="content__text js-content__text utils-active">◆ 経歴<br />
                    2020年&emsp;株式会社JADE SEOコンサルタント<br />
                    2023年&emsp;株式会社ANYCUL SEOコンサルタント<br />
                    <br />
                    ◆ 得意領域<br />
                    ・SEO戦略策定から実装支援<br />
                    ・大規模データベース型メディアのSEO改善<br>
                    ・CVR・ユーザー行動解析
                  </p>
                  <p class="content__trigger js-read-more">詳しく見る</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/service-db-cta') ?>

      <div class="service-db-howto service-db-howto002">
        <div class="service-db-howto__inner service-db-inner">
          <div class="service-db-heading">
              <h2 class="service-db-heading__main"><span>データベース型サイトSEO支援の料金</span></h2>
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
                <div class="content__btn"><a href="https://counter-digital.jp/download/<?php echo $document_slug; ?>/" class="service-db-btn service-db-btn--orange service-db-btn-arrow">価格表はこちら<span></span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <section class="service-db-qa">
        <div class="service-db-qa__inner service-db-inner">
          <div class="service-db-heading">
            <p class="service-db-heading__sub">データベース型<br class="utils-block-hidden-pc">サイトSEO支援代行サービスでの</p>
            <h2 class="service-db-heading__main"><span>よくある質問</span></h2>
          </div>
          <?php
          // リストデータを配列で管理
          $list_items = [
            [
              'question' => 'データベース型SEO支援での成果が出るまでの期間はどれくらいですか？',
              'answer' => '対策ワードの競合性やドメイン評価、コンテンツ数、またサイトの改善速度によって成果が出るまでの期間は大きく変わります。<br>平均で3〜6ヶ月程度で成果が出る場合が多くあります。'
            ],
            [
              'question' => 'サイト改修までコンサルティングの中で対応できますか？',
              'answer' => '対応可能です。しかし、通常コンサルティング料金とは別見積もりで対応させていただきます。<br>弊社はWeb開発も行っていることから担当のエンジニアをアサインいたします。'
            ],
            [
              'question' => 'SEOの内部対策、外部対策、コンテンツ対策などの部分的な支援は可能ですか？',
              'answer' => '対応可能です。その場合には、個別サービスのみでお見積もりをさせていただきます。'
            ],
            [
              'question' => '検索順位が向上した場合のみ報酬が発生する成果報酬型での支援は可能ですか？',
              'answer' => '対応はしておりません。当社は毎月定額の報酬をいただきご支援をしております。'
            ],
            [
              'question' => 'ホワイトペーパー制作やMA導入などの支援も対応可能ですか？',
              'answer' => '対応可能です。ナーチャリング戦略策定からコンテンツ制作まで一貫してご支援が可能です。'
            ],
            [
              'question' => '生成AIを活用したSEO対策も支援可能でしょうか？',
              'answer' => '対応可能です。生成AIを活用したSEO記事制作代行サービスを提供しておりますので、キーワード戦略策定から記事制作まで支援が可能です。'
            ],
            [
              'question' => '全国どの拠点からでも対応可能でしょうか？',
              'answer' => '対応可能です。ZOOMを活用したオンラインミーティングを活用し、全国各地のお客様とお取引しています。'
            ],
            [
              'question' => 'データベース型SEOに関する知識がなくてもご依頼できますか？',
              'answer' => 'データベース型SEO知識がなくても問題ございません。経験豊富なSEOコンサルタントが丁寧にご提案いたしますので、ご不明点は気兼ねなくご相談ください。'
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
                        <a class="service-db-btn service-db-btn--black" href="#contact">無料で相談する</a>
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
        <div class="service-db-heading">
          <h2 class="service-db-heading__main"><span>お問い合わせ</span></h2>
        </div>
        <div class="inner-s">
          <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.contact-form__input#service').value = "データベースサイトSEO支援";
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