<?php
/**
 * Template Name: Webサイト保守・運用代行サービスのテンプレート
 */

if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用
global $page_id;
$page_id = 'maintenance';

//- グローバル変数：資料請求URLのスラッグ
//- header.php内で使用
global $document_slug;
$document_slug = '/document-company';

// CTAセクションを表示する関数を定義
function display_service_cta() {
  global $document_slug;
  // CTAのデータを定義
  $cta_data = array(
    'cta_lead' => 'システム保守・運用経験豊富なプロのエンジニア、ITコンサルタントが対応します',
    'cta_heading' => '<span>Webサイトの保守・運用強化</span><br>でお悩みの方<br>お気軽にご相談ください!!',
    'cta_text' => '経験豊富なプロのエンジニア、<br class="utils-block-hidden-pc">ITコンサルタントが、課題に応じて、<br>貴社サイトの保守・運用をご支援します。<br>Webサイトの保守・運用代行は<br class="utils-block-hidden-pc">COUNTER(カウンター)へご相談ください。',
    'cta_button_1_link' => 'https://counter-digital.jp/download' . $document_slug . '/',
  );

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('cta_data', $cta_data);
  set_query_var('document_slug', $document_slug);
  get_template_part('template-parts/service-cta');
}

// FVセクションを表示する関数を定義
function display_service_fv() {
  global $document_slug, $page_id;
  // FVセクションのデータを定義
  $fv_data = array(
    'fv_lead' => '自社サイトの保守・運用でお悩みの方へ',
    'fv_heading' => '<span>Webサイト保守・<br>運用代行サービス</span>',
    'fv_text' => '経験豊富なWebサイト保守・運用のプロが監修する運用代行サービスです。',
    'fv_button_1_link' => 'https://counter-digital.jp/download' . $document_slug . '/',
  );

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('fv_data', $fv_data);
  set_query_var('document_slug', $document_slug);
  set_query_var('page_id', $page_id);
  // service-fv.phpを呼び出す
  get_template_part('template-parts/service-fv');
}

// お悩みセクションを表示する関数を定義
function display_service_problems() {
  $service_problems_title = 'Webサイトの<br class="utils-block-hidden-pc">保守・運用';
  $service_problems_name = 'Webサイト保守・運用代行<br class="utils-block-hidden-pc">サービス';
  // サービス内容のデータを定義
  $service_problems_list = [
    [
      'label' => '1',
      'heading' => ['Webサイトの保守を実施する', '社内リソースが足りない'],
      'text' => '自社サイトの改修を行いたいが、修正すべきポイントがわからず、かつリソースをないと、社内で実施ができない。'
    ],
    [
      'label' => '2',
      'heading' => ['WordPressの', 'セキュリティ問題が心配'],
      'text' => 'CMSにWordPressを活用しており、アップデートができておらず、セキュリティ側面で心配に感じる。'
    ],
    [
      'label' => '3',
      'heading' => ['特殊なCMSを使っており', '保守は外注に任せたい'],
      'text' => 'STUDIO等のCMSを利用しており、ノウハウがないため、自社で保守ができない。'
    ],
    [
      'label' => '4',
      'heading' => ['ミドルウェア(M/W)やOSも', '保守を依頼したい'],
      'text' => 'アプリケーションだけでなくM/WやOSなどの保守も依頼したい。'
    ],
    [
      'label' => '5',
      'heading' => ['クラウドサーバーの', '保守を依頼したい'],
      'text' => 'レンタルサーバーではなく、クラウドサービスを活用しており、自社でノウハウがないため、保守が行えない。'
    ],
    [
      'label' => '6',
      'heading' => ['サイト変更作業を', '迅速に行なって欲しい'],
      'text' => '頻繁にサイト更新を行うため、自社のビジネスニーズに合わせて更新作業を行ってくれる会社を探している。'
    ],
    [
      'label' => '7',
      'heading' => ['SEO対策も合わせて', '実施したい'],
      'text' => 'サイト保守だけでなく、タグの最適化、ドメイン強化、記事コンテンツ作成のSEO対策も合わせて実施してほしい。'
    ],
    [
      'label' => '8',
      'heading' => ['保守だけでなく', '運用支援もしてほしい'],
      'text' => 'スポット対応だけでなく、システム保守を常時行い、運用支援もしてくれるベンダーを探している。'
    ],
    [
      'label' => '9',
      'heading' => ['前の会社の対応が良くない'],
      'text' => 'すでに別会社に保守を依頼しているが、対応が悪く、運用におけるコミュニケーションの品質に満足できない。'
    ],
  ];

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('service_problems_list', $service_problems_list);
  set_query_var('service_problems_title', $service_problems_title);
  set_query_var('service_problems_name', $service_problems_name);
  // service-problems.phpを呼び出す
  get_template_part('template-parts/service-problems');
}

// ポイントのデータを定義
function display_service_points() {
  $service_points_title = 'カウンターの6つの強み';
  $service_points_lead = 'カウンターだからこそできる<br>Webサイトの保守・運用代行サービスの<br class="utils-block-hidden-pc">6つの強みをご紹介いたします。';
  // サービス内容のデータを定義
  $service_points_list = [
    [
      'label' => '1',
      'heading' => ['経験豊富なエンジニア、', 'ITコンサルタントが対応'],
      'text' => '業務経験10年以上のプロのエンジニアがシステムの設計から運用まで対応いたします。本サービスには調査も豊富なエンジニアが対応いたします。'
    ],
    [
      'label' => '2',
      'heading' => ['WordPress以外のCMSでの', '保守・運用の実績'],
      'text' => '担当するエンジニアは、STUDIO等のWordPress以外のCMSでの保守・運用の経験を有するため、他のCMSシステムを活用した運用支援も対応可能です。'
    ],
    [
      'label' => '3',
      'heading' => ['インフラ構築から', 'アプリケーション調整実績まで', '実践できる', 'フルスタックエンジニアが在籍'],
      'text' => 'インフラ構築からアプリケーション調整まで対応できるフルスタックエンジニアが在籍しています。インフラ構築からアプリケーション調整まで実務経験を積んだエンジニアが対応します。'
    ],
    [
      'label' => '4',
      'heading' => ['所内にノウハウがない', '企業へのサポートも充実'],
      'text' => 'システム保守を外部へ依頼したい企業様向けに、ノウハウの提供を行い、対応いたします。'
    ],
    [
      'label' => '5',
      'heading' => ['Webサイト保守に加え、', '運用サービスも提供'],
      'text' => '自社にWebサイトの保守作業を依頼している企業のほか、運用代行サービスを提供しています。最新のWebサイト運用に合わせた運用支援も行います。'
    ],
    [
      'label' => '6',
      'heading' => ['保守だけでなく、', 'SEO支援サービスプランもあり'],
      'text' => '自社でSEOのご依頼が多く、SEO対策の一貫としてSEOの高度な技術支援を行っています。月次報告、SEO対策の内容調整、コンテンツ作成なども地域に合わせて行います。'
    ],
  ];

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('service_points_list', $service_points_list);
  set_query_var('service_points_title', $service_points_title);
  set_query_var('service_points_lead', $service_points_lead);
  // service-points.phpを呼び出す
  get_template_part('template-parts/service-points');
}

// フローのデータを定義
function display_service_flow() {
  $service_flow_title = 'Webサイト保守・運用<br class="utils-block-hidden-pc">代行サービス';
  $service_flow_lead = 'システムの保守・運用実績が<br class="utils-block-hidden-pc">豊富な担当者が運用代行を行います。';
  // サービス内容のデータを定義
  $service_flow = [
    [
      'table__heading' => '診断フェーズ',
      'image' => IMAGE_DIR . '00_common/elm-04.png',
      'image_class' => 'table__image--001',
      'items' => [
        [
          'table__label' => 'ヒアリング',
          'table__text' => 'まずはお問い合わせフォームより、お問合せをお願い致します。Zoom等で現状のお困りごとやご要望について、ヒアリングさせていただきます。また、当社のWebサイト保守・運用代行サービスについて、ご説明させていただきます。'
        ],
        [
          'table__label' => 'サイト診断',
          'table__text' => 'ヒアリングを受け、貴社サイトを実際に診断いたします。お見積り算出のため、弊社からお願いする情報をお伝えします。必要に応じて事前に秘密保持契約NDAの締結が済みはサーバー情報と各種ログインアカウント情報をお預かりする場合もございます。'
        ],
        [
          'table__label' => 'お見積りのご提案',
          'table__text' => 'サイト構造や規模などに応じて初期調査が必要となる場合がございます（初期調査費用は先払いになります）。初期調査が不要な場合はそのまま月額保守・管理費用のご提案を行います。'
        ],
      ]
    ],
    [
      'table__heading' => '保守・運用フェーズ',
      'image' => IMAGE_DIR . '03_service/backlink/elm-06.png',
      'image_class' => 'table__image--003',
      'items' => [
        [
          'table__label' => 'ご契約',
          'table__text' => '皆様様・お見積りにご同意いただけましたら、保守・運用サービスにお申し込みいただく契約書を交わします。契約更新は最短3ヶ月単位となります。また最長3ヶ月に1回、保守作業内容と料金の見積もりを行います。なお、1年単位の契約が最も多くなっております。'
        ],
        [
          'table__label' => '保守・運用の実施',
          'table__text' => '保守運用業務を開始いたします。<br>月々の管理については、メール、チャットからご依頼いただけます。'
        ]
      ]
    ],
  ];

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('service_flow', $service_flow);
  set_query_var('service_flow_title', $service_flow_title);
  set_query_var('service_flow_lead', $service_flow_lead);
  // service-flow.phpを呼び出す
  get_template_part('template-parts/service-flow');
}

// 他社との違いのデータを定義
function display_service_differ() {
  $service_differ_title = 'Webサイト保守・運用に関する<br class="utils-block-hidden-pc">他社との違い';
  // サービス内容のデータを定義
  $service_differ = [
    'rows' => [
      'サービス内容',
      '保守・運用スキル',
      '運用体制',
      'ディレクション',
      '料金',
      '総合提案力',
    ],
    'companies' => [
      'カウンター' => [
        [
          'icon_class' => 'table__ic--circle-double',
          'text' => 'インフラからアプリ保守またマーケまで幅広く対応。'
        ],
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => '業界経験20年以上のエンジニアが対応。'
        ],
        [
          'icon_class' => 'table__ic--circle-double',
          'text' => 'エンジニア、マーケターで組成されたチーム。'
        ],
        [
          'icon_class' => 'table__ic--circle-double',
          'text' => 'マーケとITに関する目標ありきの伴奏。'
        ],
        [
          'icon_class' => 'table__ic--circle-double',
          'text' => 'ROIで見ると割安。'
        ],
        [
          'icon_class' => 'table__ic--circle-double',
          'text' => 'サービス範囲、価格、実行力の観点で総合力が高い。'
        ],
      ],
      'Web制作会社' => [
        [
          'icon_class' => 'table__ic--triangle',
          'text' => 'Web制作関連の対応は可能。高度な技術調査は難しい。'
        ],
        [
          'icon_class' => 'table__ic--triangle',
          'text' => '最低限の技術理解はあるが、システムの調査は弱い。'
        ],
        [
          'icon_class' => 'table__ic--triangle',
          'text' => 'Web制作に精通したエンジニアで組成されたチーム。'
        ],
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => '専属ディレクターが伴走。'
        ],
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => '業者によって異なります。'
        ],
        [
          'icon_class' => 'table__ic--triangle',
          'text' => '業者によって異なります。'
        ],
      ],
      'システム開発会社' => [
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => 'インフラからアプリ保守まで幅広く対応。'
        ],
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => '技術力の高いエンジニアが多数在籍している。'
        ],
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => 'エンジニアで組成されたチーム。'
        ],
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => '専属ディレクターが伴走。'
        ],
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => '業者によって異なります。'
        ],
        [
          'icon_class' => 'table__ic--circle-single',
          'text' => '業者によって異なります。'
        ],
      ]
    ]
  ];

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('service_differ', $service_differ);
  set_query_var('service_differ_title', $service_differ_title);
  // service-differ.phpを呼び出す
  get_template_part('template-parts/service-differ');
}

// 担当者のデータを定義
function display_service_manager() {
  $ceo_data = [
    [
      'role' => 'CCO/制作ディレクター',
      'name' => '森 正吾',
      'image' => IMAGE_DIR . '00_common/mori.png',
      'bio' => 'COUNTER株式会社 CCO/制作ディレクター。<br />32歳(1992年生まれ)。WEBデザイナー・コーダーとしてキャリアスタート。株式会社antにてフロントエンドエンジニアとして上場企業や官公庁の実装を経験。その後、株式会社COOSYにジョイン。チーフマネージャーとして、上場企業を中心にWebディレクション、提案業務を担い、COUNTERへジョイン。BtoB、サービス、IR、採用、イベント系、アプリ(webview)など、幅広く経験。',
      'social_links' => [
        [
          'platform' => 'X(旧Twitter)',
          'url' => 'https://x.com/wed_sou',
          'icon' => IMAGE_DIR . '00_common/icon-x.svg'
        ]
      ],
      'heading' => 'WEB ディレクターのご紹介',
      'details' => '◆ 経歴<br />
        2017年　株式会社CLANE/デザイナー、エンジニア<br />
        2019年　株式会社ant/エンジニア<br />
        2022年　合同会社HUSMA/デザイナー<br />
        2022年　株式会社COOSY/ディレクター<br />
        2024年　COUNTER株式会社 CCO<br />
        <br />
        ◆ 得意領域<br />
        ・WEBサイトのプランニング<br />
        ・情報設計、UX、クリエイティブ、実装など各工程のディレクション',
    ],
    [
      'role' => 'エンジニア',
      'name' => '児玉 慶一',
      'image' => IMAGE_DIR . '00_common/kodama.jpg',
      'bio' => '1999年2月生まれ。東京都小平市出身。大学へ現役進学後数ヶ月で通信キャリアの営業代理店を経験。営業商材をもとに100名規模の学生団体を構築。個人事業主として2018年〜2020年2月まで活動したのち、2020年4月に広告営業事業を営む株式会社TOYを創業。同時期にITの可能性を感じプログラミングを始め、現在はITエンジニアとして活動中。2021年にLeograph株式会社に参画し、AI研究開発やWebアプリ開発などを手掛ける。 「Don’t repeat yourself（重複作業をなくそう）」「Garbage in, Garbage out（無意味なデータは、無意味な結果をもたらす）」をモットーにエンジニア業務をこなす。',
      'social_links' => [
        [
          'platform' => 'X(旧Twitter)',
          'url' => 'https://x.com/KAY_ZUCK_X',
          'icon' => IMAGE_DIR . '00_common/icon-x.svg'
        ],
      ],
      'heading' => 'エンジニアのご紹介',
    ],
    [
      'role' => 'リードエンジニア',
      'name' => '渡辺 武士',
      'image' => IMAGE_DIR . '00_common/watanabe.jpg',
      'bio' => '大学卒業後、モバイルコンテンツプロバイダーの経験を経て、コンシューマ向けサービスの企画、開発、運用の経験を積む。その後、自社 / 受託問わず、様々な業態(B to B / B to B to C)のWeb系システムの設計・開発・運用に従事。前々職のスマートシェア株式会社では、SNSマーケティングプラットフォームサービスの開発・運営に従事し、大手モバイルキャリア向けPOSシステムの大規模BI連携サービスの開発チームリーダーを務め、その後、同システムの保守運用に従事。',
      'heading' => 'リードエンジニアのご紹介',
    ],
  ];

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('ceo_data', $ceo_data);

  // service-manager.phpを呼び出す
  get_template_part('template-parts/service-manager');
}

// 料金に関するデータを定義
function display_service_price() {
  global $document_slug;
  // 料金に関するデータを定義
  $price_data = array(
    'price_heading' => 'Webサイト保守・運用<br class="utils-block-hidden-pc">代行サービスの料金',
    'price_amount' => '3',
    'price_button_link' => 'https://counter-digital.jp/download' . $document_slug . '/',
    'price_button_text' => '価格表はこちら'
  );

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('price_data', $price_data);
  set_query_var('document_slug', $document_slug);
  // service-price.phpを呼び出す
  get_template_part('template-parts/service-price');
}

// サービス内容に関するデータを定義
function display_service_cards() {
  // サービス内容に関するデータを定義
  $service_cards = array(
    'contents_heading' => 'Webサイト保守・運用<br class="utils-block-hidden-pc">代行サービスの内容',
    'contents_list' => [
      [
        'heading' => '初期調査・現状把握',
        'description' => '運営中のWordPressサイトの構成やサーバーの状況などを把握するための初期調査を行います。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_1.svg',
      ],
      [
        'heading' => '検証環境の作成',
        'description' => '本番環境作業前の検証・安全確認のために、検証環境を構築します。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_2.svg',
      ],
      [
        'heading' => 'サーバー移行不要',
        'description' => '現在ご利用中のサーバーのまま管理が可能です。弊社が管理するサーバーに移行する必要はありません。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_3.svg',
      ],
      [
        'heading' => 'セキュリティ強化',
        'description' => '保守開始までにセキュリティ関係のプラグインやバックアップ体制の検討を行いご提案、適宜実施します。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_4.svg',
      ],
      [
        'heading' => 'CMS本体のアップグレード',
        'description' => 'セキュリティ対策のためにCMS本体の最新安定バージョンへの継続的なメジャーアップグレード、マイナーアップグレードを行います。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_5.svg',
      ],
      [
        'heading' => 'プラグインのアップデート',
        'description' => 'セキュリティや機能の保全のために、プラグインの最新安定バージョンへの継続的なアップデートを行います。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_6.svg',
      ],
      [
        'heading' => 'セキュリティケア',
        'description' => 'サーバー自体や包括的なウェブサイトのセキュリティリスク対策の情報を収集し、適宜ご提案します。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_7.svg',
      ],
      [
        'heading' => '定期バックアップ',
        'description' => 'ウェブサイト全体、記事データ、データベースなどのバックアップ体制を構築し、万が一の事態に備えます。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_8.svg',
      ],
      [
        'heading' => '改ざん検知',
        'description' => '改ざん検知システムを組み込み、改ざんがあった場合は復旧作業を行います。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_9.svg',
      ],
      [
        'heading' => '月次レポートの提出',
        'description' => 'アクセスログの管理やアクセスレポートの作成が可能です。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_10.svg',
      ],
      [
        'heading' => '有事の際の復旧',
        'description' => '上記の各種対策に基づいて、迅速な復旧作業を行います。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_11.svg',
      ],
      [
        'heading' => 'サポート',
        'description' => 'メール、電話、Chatwork、Slackなどのコミュニケーションツールにてサポートを行います。',
        'image' => IMAGE_DIR . '00_common/icon/service-card-icon_12.svg',
      ],
    ],
  );

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('service_cards', $service_cards);

  // service-cards.phpを呼び出す
  get_template_part('template-parts/service-cards');
}

// よくある質問のデータを定義
function display_service_qa() {
  $qa_data = [
    [
      'question' => 'Webサーバー、ドメイン、SSLの契約・更新管理をお願いすることができますか？',
      'answer' => 'はい、サーバーの種類にもよりますが、当社でサーバー・ドメイン・SSLの契約・更新代行・支払い代行をまとめてご提供させていただくことも可能です。ケースによりますので、まずはご相談ください。'
    ],
    [
      'question' => '他社が作成したWebサイトでも保守をしていただけますか？',
      'answer' => 'はい、基本的には問題なくお引き受けできますが、稀に当社では対応できないレベルでセキュリティの問題があるケースがあります。そのため、お引き受け前にWebサーバー中の問題を拝見させていただきます。'
    ],
    [
      'question' => 'サーバーは自社で用意したものでも保守をしていただけますか？',
      'answer' => 'はい、基本的には問題ありません。当社ではWebサーバーはクラウド環境にて契約いただくことを推奨しておりますが、サーバーベースや環境設定のセキュリティの問題がある場合にはサーバーの移管をご提案させていただくケースもございます。'
    ],
    [
      'question' => 'Webサイトのデータが最初に作成してくれた制作会社のサーバーにありますが、管理できますか？',
      'answer' => '他の制作会社様との契約内容が変わりますが、可能な場合もございますし、実際にどのようなサーバースペースをご契約されているかによって判断が異なります。別の制作会社様からご承諾頂ければ別の個別契約名義などのサーバーに移行することもできます。'
    ],
    [
      'question' => '時間がないので打ち合わせとか不要です。とにかく見積書をください。',
      'answer' => '大変申し訳ありませんが、保守の内容対象となるWebサイト、CMS、ミドルウェア、OS、サーバーの状況、必要水準などに変わる部分がありますので、当社にはお打ち合わせを事前に行っていただいております。まずはどうして保守・管理を任せたいとお考えなのかを考慮するためご相談いただきますと幸いです。'
    ],
    [
      'question' => '何から始めればいいのかわからない、問題なくしますか？',
      'answer' => '問題ございません。弊社にて取り扱わせていただきますので、ご安心ください。'
    ],
    [
      'question' => '全国どの拠点からでも対応可能でしょうか？',
      'answer' => '対応可能です。ZOOMを活用したオンラインミーティングを活用し、全国各地のお客様とお取り引きしています。'
    ],
    [
      'question' => 'SEO対策以外にもWebマーケティングの支援を依頼できますでしょうか？',
      'answer' => '可能です。弊社はSEO対策の部門、外部部門、コンテンツ対策だけでなく、Web広告運用、ホワイトペーパー制作などのご提案が可能です。'
    ],
  ];

  // 変数をセットしてテンプレートを呼び出す
  set_query_var('qa_data', $qa_data);

  // service-qa.phpを呼び出す
  get_template_part('template-parts/service-qa');
}

//- ヘッダーテンプレート呼び出し
get_header();
?>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style.css" rel="stylesheet"/>
<link href="<?= get_stylesheet_directory_uri() ?>/assets2024/css/style2.css" rel="stylesheet"/>
<link href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css" rel="stylesheet"/>
<main>
  <!-- 共通スタイルの上書き -->
  <style>
    @media screen and (min-width: 960px) {
      .service-fv .object {
          transform: translateY(-50%);
          top: 48%;
          right: 10%;
          max-width: 550px;
          width: 36%;
      }
    }
    @media screen and (max-width: 959px) {
      .service-fv .content__heading {
        font-size: clamp(16px, 6.2vw, 24px);
        margin-top: 16px;
        span {
          line-height: 2.5;
          padding: 7px 8px;
        }
      }
      .service-fv .object {
          top: 40px;
          right: 12px;
          width: 33vw;
          z-index: 1;
      }
    }
  </style>
  <div class="service-container">
    <div class="service-inner">
      <?php display_service_fv();  // FVセクションを表示 ?>
      <?php display_service_problems();  // お悩みセクションを表示 ?>
      <?php display_service_cta();  // CTAセクションを表示 ?>
      <?php display_service_points();  // ポイントセクションを表示 ?>
      <?php display_service_flow();  // フローセクションを表示 ?>
      <?php display_service_cta();  // CTAセクションを表示 ?>
      <?php display_service_differ();  // 他社との違いセクションを表示 ?>
      <?php display_service_manager();  // 担当者セクションを表示 ?>
      <?php display_service_cta();  // CTAセクションを表示 ?>
      <?php display_service_cards();  // サービス内容セクションを表示 ?>
      <?php display_service_price();  // 料金セクションを表示 ?>
      <?php display_service_qa();  // よくある質問セクションを表示 ?>
    </div>
    <section class="section contact" id="contact" data-scroll-adjust-pc="60" data-scroll-adjust-sp="30">
      <div class="service-heading">
        <h2 class="service-heading__main">
          <span>お問い合わせ</span>
        </h2>
      </div>
      <div class="inner-s">
        <?php echo do_shortcode('[contact-form-7 id="f80290b" title="お問い合わせフォーム"]'); ?>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          document.querySelector('.contact-form__input#service').value = "Webサイト保守・運用代行";
          // document.querySelector('.js-fixed-cta-contact').setAttribute('href', '#contact');
        });
      </script>
    </section>
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