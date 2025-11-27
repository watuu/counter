<?php
/*
Template Name: page-download-thanks
*/
if (!defined('ABSPATH')) exit;

//- グローバル変数：ページ識別用ID
//- header.php内で使用  
global $page_id;
$page_id = "download-thanks";

//- ヘッダーテンプレート呼び出し
get_header();
?>
<div class="p-thanks">
    <div class="cm-block-header cm-block-header--contact">
        <div class="l-container">
            <div class="cm-block-header__title">
                <p class="cm-block-header__en">Download</p>
                <h1 class="cm-block-header__ja">資料ダウンロード</h1>
            </div>
            <ul class="cm-block-header__bc">
                <li><a href="<?= home_url() ?>/">TOP</a></li>
                <li><span>Download</span></li>
            </ul>
        </div>
    </div>
    <div class="l-container l-container--md">
        <div class="p-thanks__wrap">
            <div class="p-thanks-catch">
                <p class="p-thanks-catch__ja">
                    資料ダウンロードいただき<br class="sp">ありがとうございます。<br>自動返信メールのURLから資料を<br class="sp">ダウンロードしてください。<br>メールが届かない場合は、<br class="sp">迷惑フォルダーをご確認くださいませ。
                </p>
                <p class="p-thanks-catch__en">Thank You</p>
            </div>
            <div class="p-thanks__link">
                <a class="c-link-arrow" href="<?= home_url() ?>/download/">
                    <span class="c-link-arrow__txt">資料一覧へ戻る</span><i class="c-link-arrow__arrow"><svg width="40" height="40"><use href="#ico-arrow"></use></svg></i>
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
