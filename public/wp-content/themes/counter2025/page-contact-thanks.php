<?php
/*
Template Name: page-contact-thanks
*/
if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用  
global $page_id;
$page_id = "contact-thanks";

//- ヘッダーテンプレート呼び出し
get_header();
?>
<div class="p-thanks">
    <div class="cm-block-header cm-block-header--contact">
        <div class="l-container">
            <div class="cm-block-header__title">
                <p class="cm-block-header__en">Contact</p>
                <h1 class="cm-block-header__ja">お問い合わせ</h1>
            </div>
            <ul class="cm-block-header__bc">
                <li><a href="<?= home_url() ?>/">TOP</a></li>
                <li><span>Contact</span></li>
            </ul>
        </div>
    </div>
    <div class="l-container l-container--md">
        <div class="p-thanks__wrap">
            <div class="p-thanks-catch">
                <p class="p-thanks-catch__ja">お問い合わせありがとうございます。<br/>数日以内に担当者からご連絡いたします。</p>
                <p class="p-thanks-catch__en">Thank You</p>
            </div>
            <div class="p-thanks__link">
                <a class="c-link-arrow" href="<?= home_url() ?>/">
                    <span class="c-link-arrow__txt">トップページへ戻る</span><i class="c-link-arrow__arrow"><svg width="40" height="40"><use href="#ico-arrow"></use></svg></i>
                </a>
            </div>
        </div>
    </div>
</div>
    <style>
        .l-header {
            display: none !important;
        }
    </style>
<?php
//- フッターテンプレート呼び出し
get_footer();
?>