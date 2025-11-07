<?php

/**
 * 定数 ホームURL
 *
 * @var string
 */
define('HOME_URL', esc_url(home_url('/')));

/**
 * 定数 画像ディレクトリパス
 *
 * @var string
 */
define('IMAGE_DIR', get_template_directory_uri() . '/assets/img/');
define('UPLOAD_DIR', wp_upload_dir()['baseurl']);

error_reporting(0);

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
    )
  );
}
//add_action('after_setup_theme', 'my_setup');

/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9', 'all');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9', true);

  // ★wp_head()で読み込むCSSを追加する
  wp_enqueue_style('my_style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style('my_style2', get_template_directory_uri() . '/assets/css/style2.css', array(), '1.0.0', 'all');
  if (is_page() && $post = get_post()) {
    $parent_id = wp_get_post_parent_id($post->ID); // 親ページIDを取得
    if ($parent_id && get_post($parent_id)->post_name === 'service') {
      wp_enqueue_style(
        'scrollhint',
        'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css',
        array(),
        '1.0.0',
        'all'
      );
    }
  }

  // ★wp_footer()で読み込むJsを追加する
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), false, true);
  wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array('gsap'), false, true);
  wp_enqueue_script('my_script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery', 'gsap', 'scrolltrigger'), false, true);
  if (is_page() && $post = get_post()) {
    $parent_id = wp_get_post_parent_id($post->ID); // 親ページIDを取得
    if ($parent_id && get_post($parent_id)->post_name === 'service') {
      wp_enqueue_script(
        'scrollHint',
        'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js',
        array(),
        false,
        true
      );
    }
  }
}
// ★wp_enqueue_scripts：CSSとJavaScriptの読み込みに使用するフック
//add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * 404はtopへ遷移する
 */
//add_action('template_redirect', 'is404_redirect_home');
function is404_redirect_home()
{
  if (is_404()) {
    wp_safe_redirect(HOME_URL);
    exit();
  }
}

/**
 * 画像の代替テキスト（alt属性）を取得する
 * ※代替テキストが設定されていない場合は第二引数のデフォルト文字列を返す
 *
 **/
function getImageAlt($image_id, $default_string)
{
  $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
  if (!$image_alt) {
    $image_alt = $default_string;
  }
  return $image_alt;
}

/**
 * 一覧ページのタイトル取得
 **/
function get_archive_title()
{
  global $wp_query;
  // 初期値を設定
  $title = ['en' => '', 'jp' => ''];

  if (is_category() || is_tax()) {
    // カテゴリー、タクソノミ一覧の場合
    $category = get_queried_object();
    $title['en'] = 'category';
    $title['jp'] = '「' . $category->name . '」の記事一覧';
  } elseif (is_tag()) {
    // タグ一覧の場合
    $tag = get_queried_object();
    $title['en'] = 'tag';
    $title['jp'] = '「' . $tag->name . '」の記事一覧';
  } elseif (is_search()) {
    // 検索結果の場合
    $title['en'] = 'search';
    $title['jp'] = '「' . get_search_query() . '」の検索結果';
  } elseif (is_post_type_archive('counter-media')) {
    // カスタム投稿タイプ 'counter-media' の一覧の場合
    $title['en'] = 'new posts';
    $title['jp'] = '新着記事';
  } elseif (is_post_type_archive('post')) {
    // 通常投稿の一覧の場合
    $title['en'] = 'news';
    $title['jp'] = 'ニュース';
  }
  return $title;
}

/**
 * 特定のカテゴリIDに基づいてカテゴリのリンクと名前を取得する関数
 *
 * @param int $term_id カテゴリのタームID
 * @return array|false カテゴリのリンク（現在の投稿タイプを含む）と名前を含む連想配列を返す。
 *                      カテゴリが存在しないか、エラーの場合はfalseを返す。
 */
function get_category_link_and_name($term_id)
{
  // タームIDを使用してカテゴリを取得
  $category = get_category($term_id);

  // カテゴリが有効かチェック
  if (!$category || is_wp_error($category)) {
    return false;
  }

  // 現在の投稿タイプを取得
  $current_post_type = get_post_type();

  // カテゴリのリンクを取得し、現在の投稿タイプをパラメータに追加
  $link = get_category_link($category->term_id);
  $link = add_query_arg('post_type', $current_post_type, $link);

  $name = $category->name;

  // リンクと名前を含む連想配列を返す
  return ['link' => $link, 'name' => $name];
}

/**
 * 特定のタグIDに基づいてタグのリンクと名前を取得する関数
 *
 * @param int $term_id タグのタームID
 * @param $post_type 投稿タイプ
 * @return array|false タグのリンク（現在の投稿タイプを含む）と名前を含む連想配列を返す。
 *                      タグが存在しないか、エラーの場合はfalseを返す。
 */
function get_tag_link_and_name($term_id, $post_type = null)
{
  // タームIDを使用してタグを取得
  $tag = get_tag($term_id);

  // タグが有効かチェック
  if (!$tag || is_wp_error($tag)) {
    return false;
  }

  if ($post_type) {
    // 引数で投稿タプが渡されている場合は無条件でセット
    $current_post_type = $post_type;
  } else {
    // URLのクエリパラメータから投稿タイプを取得
    $current_post_type = get_query_var('post_type');
    // URLパラメーターがない場合、現在の投稿から投稿タイプを取得する
    if (empty($current_post_type)) {
      $current_post_type = get_post_type();
    }
  }

  // タグのリンクを取得し、現在の投稿タイプをパラメータに追加
  $link = get_tag_link($tag->term_id);
  $link = add_query_arg('post_type', $current_post_type, $link);

  $name = $tag->name;

  // リンクと名前を含む連想配列を返す
  return ['link' => $link, 'name' => $name];
}

/**
 * 特定の投稿タイプの最新の投稿を取得する
 *
 * この関数は指定された投稿タイプの最新の投稿を取得し、それらの重要な情報を配列で返します。
 * 取得する投稿の数、投稿タイプ、除外する投稿のID、および投稿者のIDは引数で指定することができます。
 * 各投稿のデータには、投稿のURL、特色画像のURL、投稿日時、投稿日、タイトルが含まれます。
 * 必要に応じて、カスタムフィールド（例：クライアント名）、カテゴリ、タグの情報も取得できます。
 *
 * @param string $post_type 取得する投稿のタイプ。デフォルトは 'post'。
 * @param int $number_of_posts 取得する投稿の数。デフォルトは 3。
 * @param int|null $exclude_post_id 除外する投稿のID。指定すると、その投稿は結果に含まれません。デフォルトは null。
 * @param int|null $author_id 投稿者のID。指定すると、その投稿者による投稿のみを取得します。デフォルトは null。
 * @return array 投稿のデータを含む配列。各投稿データは href, image, datetime, date, title のキーを持ちます。
 */
function get_latest_posts($post_type = 'post', $number_of_posts = 3, $exclude_post_id = null, $author_id = null)
{
  $args = array(
    'numberposts' => $number_of_posts,
    'post_type' => $post_type,
    'orderby' => 'date',
    'order' => 'DESC',
    'post__not_in' => $exclude_post_id ? array($exclude_post_id) : array(), // 現在の投稿を除外
    'author' => $author_id, // 特定の投稿者の投稿のみを取得
  );

  $myposts = get_posts($args);
  $posts_data = array();

  foreach ($myposts as $post) {
    setup_postdata($post);
    $post_data = array();

    // URL
    $href = get_the_permalink($post);
    if ($href) {
      $post_data['href'] = esc_url($href);
    }

    // 画像
    $image = get_the_post_thumbnail_url($post);
    if ($image) {
      $post_data['image'] = esc_url($image);
    } else {
      $image = IMAGE_DIR . "00_common/eyecatch.svg";
      $post_data['image'] = $image;
    }

    // 日付
    $date = get_the_date('Y.n.j', $post);
    if ($date) {
      $post_data['date'] = $date;
    }
    $datetime = get_the_date('Y-m-d');
    if ($datetime) {
      $post_data['datetime'] = $datetime;
    }

    // タイトル
    $title = get_the_title($post);
    if ($title) {
      $post_data['title'] = $title;
    }

    // カスタムフィールド（例：クライアント名）
    $client = get_field('case-client', $post->ID);
    if ($client) {
      $post_data['client'] = $client;
    }

    // カテゴリー
    $category = get_single_term_from_current_post($post->ID);
    if ($category) {
      $post_data['category'] = $category;
    }

    // タグ
    $tags = get_the_tags($post->ID);
    if (!empty($tags)) {
      $post_data['tags'] = array_map(function ($tag) {
        return $tag->name;
      }, $tags);
    }

    // 配列に投稿データを追加（空でない場合のみ）
    if (!empty($post_data)) {
      $posts_data[] = $post_data;
    }
  }

  wp_reset_postdata();
  return $posts_data;
}


/**
 * カスタムフィールドからピックアップコンテンツを取得する関数
 *
 * @param int $post_id 取得対象の投稿ID
 * @return array 取得したピックアップコンテンツの情報を格納した連想配列
 */
function get_pickup_contents($post_id)
{
  $image1 = get_field('pickup-contents-image1', $post_id);
  $url1 = get_field('pickup-contents-url1', $post_id);
  $image2 = get_field('pickup-contents-image2', $post_id);
  $url2 = get_field('pickup-contents-url2', $post_id);

  // 取得した情報を連想配列として返す
  return array(
    'image1' => $image1,
    'url1' => $url1,
    'image2' => $image2,
    'url2' => $url2
  );
}

/**
 * 現在の投稿タイプに基づいて対応するタクソノミーを取得する関数
 */
function get_current_taxonomy($post_id = '')
{

  $current_post_type = '';
  if ($post_id) {
    // 引数あり
    $current_post_type = get_post_type($post_id);
  } else {
    // URLのクエリパラメータから投稿タイプを取得
    $current_post_type = get_query_var('post_type');
  }


  // デフォルトのカテゴリーを設定（通常の投稿の場合）
  $taxonomy = 'category';

  // カスタム投稿タイプに基づいてカスタムタクソノミーを設定
  switch ($current_post_type) {
    case 'counter-media': // COUNTER MEDIA のカスタム投稿タイプ
      $taxonomy = 'counter-media-category'; // ここにカスタムタクソノミーAのスラッグを設定
      break;
    case 'creative-case': // 制作実績のカスタム投稿タイプ
      $taxonomy = 'creative-case-category'; // ここにカスタムタクソノミーBのスラッグを設定
      break;
    case 'case': // お客様成功事例のカスタム投稿タイプ
      $taxonomy = 'case-category'; // ここにカスタムタクソノミーCのスラッグを設定
      break;
      // お知らせ（通常投稿）はデフォルトの 'category' を使用
  }

  return $taxonomy;
}

/**
 * 現在の投稿タイプに紐づくカテゴリーまたはタクソノミーから一つだけ項目を取得する関数
 */
function get_single_term_from_current_post($post_id = '')
{

  $post_id = ($post_id) ? $post_id : get_the_ID();

  // 現在の投稿タイプに対応するタクソノミーを取得
  $taxonomy = get_current_taxonomy($post_id);

  // 指定したタクソノミーから項目を取得
  $terms = wp_get_post_terms($post_id, $taxonomy, ['number' => 1]);

  if (!empty($terms) && !is_wp_error($terms)) {
    // 最初のタクソノミー項目を取得
    return $terms[0]->name;
  } else {
    // タームが取得できない、または登録されていない場合
    return '未分類';
  }
}




// -----------------------------------------
// フック、フィルター
// -----------------------------------------
/**
 * 投稿画面でタグをチェックリストから選択する
 **/
function re_register_post_tag_taxonomy()
{
  $tag_slug_args = get_taxonomy('post_tag');
  $tag_slug_args->hierarchical = true;
  $tag_slug_args->meta_box_cb = 'post_categories_meta_box';
  register_taxonomy('post_tag', 'post', (array) $tag_slug_args);
}
add_action('init', 're_register_post_tag_taxonomy', 1);

/**
 * 『投稿』のアーカイブページを有効にする
 **/
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; // 任意のURL
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
 * titleタグのテキスト変更
 **/
function change_title_parts($title)
{
  if (is_post_type_archive('post')) {
    $title['title'] = 'ニュース';
  } elseif (is_category()) {
    $category = get_queried_object();
    $title['title'] = $category->name . '一覧';
  } elseif (is_tag()) {
    $tag = get_queried_object();
    $title['title'] = $tag->name . '一覧';
  } elseif (is_date()) {
    $title['title'] = '記事一覧：' . get_the_date('Y年M');
  } elseif (is_search()) {
    $title['title'] = '検索結果';
  }

  return $title;
}
add_filter('document_title_parts', 'change_title_parts', 10, 1);

/**
 * 投稿一覧の最大表示数を変更する
 **/
function change_posts_per_page_for_custom_post_type($query)
{
  // 管理画面、メインクエリ以外には適用しない
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  // デフォルト投稿のモバイル
  // if (!is_admin() && wp_is_mobile() && $query->is_main_query()) {
  //   $query->set('posts_per_page', 6);  // 6件表示
  // }

  // カスタム投稿タイプ
  if (is_post_type_archive('counter-media')) {
    // 表示する投稿数を8に変更
    $query->set('posts_per_page', '8');
  }

  // カスタム投稿タイプ
  if (is_post_type_archive('creative-case')) {
    // 表示する投稿数を12に変更
    $query->set('posts_per_page', '12');
  }

  // カスタム投稿タイプ
  if (is_post_type_archive('case')) {
    // 表示する投稿数を6に変更
    $query->set('posts_per_page', '6');
  }

  // カスタム投稿タイプ
  if (is_post_type_archive('download')) {
    // モバイルデバイスでの閲覧時
    if (wp_is_mobile()) {
      // 表示する投稿数を3に変更
      $query->set('posts_per_page', '33');
    } else {
      // デスクトップまたはその他のデバイスでの閲覧時、表示する投稿数を9に変更
      $query->set('posts_per_page', '33');
    }
  }
}
add_action('pre_get_posts', 'change_posts_per_page_for_custom_post_type');

/**
 * 検索対象にカスタムフィールドも含める
 **/
function cf_search_join($join)
{
  global $wpdb;
  if (is_search()) {
    $join .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
  }
  return $join;
}
add_filter('posts_join', 'cf_search_join');

function cf_search_where($where)
{
  global $wpdb;
  if (is_search()) {
    $where = preg_replace(
      "/\(\s*" . $wpdb->posts . ".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
      "(" . $wpdb->posts . ".post_title LIKE $1) OR (" . $wpdb->postmeta . ".meta_value LIKE $1)",
      $where
    );

    // 特定のカスタムフィールドを検索対象から外す（※１）
    //		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'number')";
    //		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'zip')";
    //		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'access')";
  }
  return $where;
}
add_filter('posts_where', 'cf_search_where');

function cf_search_distinct($where)
{
  global $wpdb;
  if (is_search()) {
    return "DISTINCT";
  }
  return $where;
}
add_filter('posts_distinct', 'cf_search_distinct');


/**
 * パンくずリストカスタマイズ
 * 通常投稿の場合、一つ目の階層に「ニュース」を追加する
 **/
function my_static_breadcrumb_adder($breadcrumb_trail)
{

  if (is_post_type_archive('post') && !is_category() && !is_tax()) {
    // 通常投稿の一覧の場合 ⇒ リンクなしで追加
    $item = new bcn_breadcrumb('ニュース', null, array('post'));
  } elseif (get_post_type() === 'post' && (is_singular() || is_category() || is_tax())) { // デフォルトの投稿ページの場合
    // 通常投稿の詳細、カテゴリ一覧、タグ一覧の場合 ⇒ リンクありで追加
    $item = new bcn_breadcrumb('ニュース', null, array('post'), home_url('news/'), null, true);
  }

  // writers カスタム投稿タイプの詳細ページの場合
  if (is_singular('writers')) {
    // 「ライター／監修者一覧」をリンク付きで追加
    $item = new bcn_breadcrumb('ライター／監修者一覧', null, array('writers'), home_url('writers/'), null, true);
  }

  $stuck = array_pop($breadcrumb_trail->breadcrumbs);
  $breadcrumb_trail->breadcrumbs[] = $item;
  $breadcrumb_trail->breadcrumbs[] = $stuck;
}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');


// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

// Contact Form 7の特別なメールタグを追加
// [download-url]：ダウンロード資料のURL
add_filter('wpcf7_special_mail_tags', 'my_special_mail_tags', 10, 2);
function my_special_mail_tags($output, $name)
{
  // フォームが送信された際のユニットタグが設定されていない場合は、デフォルトの出力を返します
  if (!isset($_POST['_wpcf7_unit_tag']) || empty($_POST['_wpcf7_unit_tag'])) {
    return $output;
  }
  // フォーム送信時に設定されたユニットタグからフォームID、投稿ID、その他のIDを抽出します
  // 抽出できない場合は、デフォルトの出力を返します。
  if (!preg_match('/^wpcf7-f(\d+)-p(\d+)-o(\d+)$/', $_POST['_wpcf7_unit_tag'], $matches)) {
    return $output;
  }

  // 抽出した投稿IDを使用して投稿オブジェクトを取得します
  $post_id = (int) $matches[2];
  if (!$post = get_post($post_id)) {
    return $output; // 投稿が取得できない場合は、デフォルトの出力を返します
  }

  // CF7が使用する特定のプレフィックスを削除し、カスタムフィールド名を正規化します
  $name = preg_replace('/^wpcf7\./', '_', $name);

  // カスタムタグ名が 'download-url' に一致する場合、
  // 対応する投稿のカスタムフィールド 'download-url' の値を取得して出力します
  if ('download-url' == $name) {
    $output = get_post_meta($post->ID, 'download-url', true);
  }
  // カスタマイズされた出力を返します。
  return $output;
}

// お問い合わせフォーム（CF7）のセレクトボックスに選択不可の項目を追加する
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');
function my_wpcf7_form_elements($html)
{
  $text = '選択してください。';
  $html = str_replace('<option value="SEOコンサルティング">SEOコンサルティング</option>', '<option value="" disabled selected>' . $text . '</option><option value="SEOコンサルティング">SEOコンサルティング</option>', $html);
  return $html;
}

/**
 * Contact Form 7の送信完了後、現在のパスに応じてリダイレクト先を変更する
 *
 * - /download/ に一致する場合: /download/{投稿詳細スラッグ}/thanks/ へリダイレクト
 * - /service/backlink/ に一致する場合: /service/backlink/thanks/ へリダイレクト
 * - /service/ai/ に一致する場合: /service/ai/thanks/ へリダイレクト
 * - 上記に一致しない場合: /contact/thanks/ へリダイレクト
 */
function my_wpcf7_redirect()
{
?>
  <script type="text/javascript">
    document.addEventListener('wpcf7mailsent', function(event) {
      var currentPath = window.location.pathname;

      // デフォルトのリダイレクトURL
      var redirectUrl = window.location.origin + '/contact/thanks/';

      // パスに応じてリダイレクト先を変更
      if (currentPath.startsWith('/download/')) {
        // /download/{カスタム投稿詳細スラッグ}/thanks へリダイレクト
        redirectUrl = currentPath + 'thanks/';
      } else if (currentPath.includes('/service/backlink/')) {
        redirectUrl = window.location.origin + '/service/backlink/thanks/';
      } else if (currentPath.includes('/service/ai/')) {
        redirectUrl = window.location.origin + '/service/ai/thanks/';
      } else if (currentPath.includes('/service/btob-website/')) {
        redirectUrl = window.location.origin + '/service/btob-website/thanks/';
      } else if (currentPath.includes('/service/seo-consulting/')) {
        redirectUrl = window.location.origin + '/service/seo-consulting/thanks/';
      } else if (currentPath.includes('/service/crm-sfa/')) {
        redirectUrl = window.location.origin + '/service/crm-sfa/thanks/';
      } else if (currentPath.includes('/service/owned-media-consulting/')) {
        redirectUrl = window.location.origin + '/service/owned-media-consulting/thanks/';
      } else if (currentPath.includes('/service/database-seo/')) {
        redirectUrl = window.location.origin + '/service/database-seo/thanks/';
      } else if (currentPath.includes('/service/ma/')) {
        redirectUrl = window.location.origin + '/service/ma/thanks/';
      } else if (currentPath.includes('/service/ownedmedia/')) {
        redirectUrl = window.location.origin + '/service/ownedmedia/thanks/';
      } else if (currentPath.includes('/poplog/')) {
        redirectUrl = window.location.origin + '/poplog/thanks/';
      } else if (currentPath.includes('/service/hubspot/')) {
        redirectUrl = window.location.origin + '/service/hubspot/thanks/';
      } else if (currentPath.includes('/service/interview/')) {
        redirectUrl = window.location.origin + '/service/interview/thanks/';
      } else if (currentPath.includes('/service/white-paper/')) {
        redirectUrl = window.location.origin + '/service/white-paper/thanks/';
      } else if (currentPath.includes('/service/facebook/')) {
        redirectUrl = window.location.origin + '/service/facebook/thanks/';
      } else if (currentPath.includes('/service/tiktok/')) {
        redirectUrl = window.location.origin + '/service/tiktok/thanks/';
      } else if (currentPath.includes('/service/instagram/')) {
        redirectUrl = window.location.origin + '/service/instagram/thanks/';
      } else if (currentPath.includes('/service/maintenance/')) {
        redirectUrl = window.location.origin + '/service/maintenance/thanks/';
      }
      // リダイレクトを実行
      window.location.href = redirectUrl;
    }, false);
  </script>
  <?php
}
//add_action('wp_footer', 'my_wpcf7_redirect');

/**
 * ダウンロード完了ページのカスタムURLとテンプレートの設定
 *
 * '/download/{スラッグ}/thanks' のURLにアクセスした際に、
 * カスタムテンプレート 'page-download-thanks.php' を表示するように設定する
 * ※downloadはカスタム投稿のため、通常は/download/{スラッグ}/thanks/のURLでは表示できない
 *
 * 1. カスタムURLリライトルールを追加してURLパターンをクエリに変換します。
 * 2. カスタムクエリ変数 'download_thanks' を追加します。
 * 3. 'download_thanks' クエリ変数が設定された場合に、特定のテンプレートを読み込みます。
 */
// カスタムリライトルールを追加
function custom_rewrite_rules()
{
  add_rewrite_rule('^download/([^/]+)/thanks/?$', 'index.php?post_type=download&name=$matches[1]&download_thanks=1', 'top');
}
add_action('init', 'custom_rewrite_rules');

// クエリ変数を追加
function add_query_vars($vars)
{
  $vars[] = 'download_thanks';
  return $vars;
}
add_filter('query_vars', 'add_query_vars');

// テンプレートのリダイレクトをカスタマイズ
function custom_template_redirect()
{
  global $wp_query;

  // ダウンロードサンクスページがリクエストされた場合
  if (isset($wp_query->query_vars['download_thanks'])) {
    // page-download-thanks.php テンプレートを読み込む
    $template = get_template_directory() . '/page-download-thanks.php';

    // テンプレートが存在する場合に読み込む
    if (file_exists($template)) {
      include($template);
      exit();
    }
  }
}
add_action('template_redirect', 'custom_template_redirect');

/**
 * ACF カスタム条件ルールを追加
 *
 * このコードは、親ページが「サービス」（スラッグ：'service'）である子ページのみに
 * ACFフィールドグループを表示するカスタム条件を追加します。
 *
 * 概要:
 * 1. 新しい条件タイプ「親ページ」をACFに追加します。
 * 2. 現在のページが親ページ「サービス」（スラッグ：'service'）の子ページであるかを判定し、
 *    条件を満たす場合にACFフィールドグループを表示します。
 */
function my_acf_location_rules_types($choices)
{
  $choices['Other']['parent_page'] = '親ページ';
  return $choices;
}
add_filter('acf/location/rule_types', 'my_acf_location_rules_types');

// カスタム条件に「サービスに等しい」を追加
function my_acf_location_rule_values_parent_page($choices)
{
  $choices['service'] = 'サービス';
  return $choices;
}
add_filter('acf/location/rule_values/parent_page', 'my_acf_location_rule_values_parent_page');

function my_acf_location_rule_match_parent_page($match, $rule, $options)
{
  // 現在の投稿IDの親ページIDを取得
  $parent_id = wp_get_post_parent_id($options['post_id']);
  // 親ページのスラッグを取得し、「service」と一致するかを確認
  if ($parent_id && get_post_field('post_name', $parent_id) === 'service') {
    $match = ($rule['operator'] === '==') ? true : false;
  } else {
    $match = ($rule['operator'] === '!=') ? true : false;
  }

  return $match;
}
add_filter('acf/location/rule_match/parent_page', 'my_acf_location_rule_match_parent_page', 10, 3);


/**
 * /service 配下の子ページでのみ表示されるモーダルバナーを追加
 *
 * このコードは、固定ページであり、親ページが /service の子ページである場合にのみモーダルバナーを表示します。
 * 「blog-modal-visible」フィールドが有効で、画像とURLのフィールドが設定されている場合にモーダルが表示されます。
 *
 * 概要:
 * 1. /service 配下の子ページであるかを判定します。
 * 2. カスタムフィールド「blog-modal-visible」と「blog-modal」からデータを取得します。
 * 3. 画像URLとリンク先URLが設定されている場合に、モーダルのHTMLを出力します。
 */
function add_service_child_page_modal()
{

  // 固定ページかつ親ページが /service の場合のみ実行
  if (is_page() && wp_get_post_parent_id(get_the_ID()) == get_page_by_path('service')->ID) {

    // カスタム投稿に設定されたカスタムフィールド取得
    $blog_modal_visible = get_field('blog-modal-visible', get_the_ID());
    $post_id = get_field('blog-modal', get_the_ID())[0];
    $image = esc_url(get_field('blog-modal-contents-image', $post_id));
    $url = esc_url(get_field('blog-modal-contents-url', $post_id));

    if ($blog_modal_visible && $image && $url) {
  ?>
      <div class="modal js-modal js-modal-service js-close-button js-close-target">
        <button class="modal__close"></button>
        <a class="modal__banner utils-aspect-fix-image" href="<?php echo $url; ?>">
          <img src="<?php echo $image; ?>" alt="" decoding="async">
        </a>
      </div>
<?php
    }
  }
}
add_action('wp_footer', 'add_service_child_page_modal');
