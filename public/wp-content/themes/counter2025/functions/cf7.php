<?php

// -------------------------------------------------------
//    CF7の設定
// -------------------------------------------------------

/**
 * 送信ボタン書き換え
 *
 */
add_filter('wpcf7_form_elements', function($content) {
    $custom_button = '<button class="c-btn-form"><span class="c-btn-form__txt">送信する</span><i class="c-btn-form__arrow"><svg width="40" height="40"><use href="#ico-arrow"></use></svg></i></button>';

    if (function_exists('wpcf7_get_current_contact_form')) {
        $form = wpcf7_get_current_contact_form();
        $form_id = $form ? (int) $form->id() : 0;
    } else {
        $form_id = 0;
    }
    if ($form_id === 400) {
        $custom_button = '
        <button class="c-btn-download">
            <span class="c-btn-download__txt">
                <span class="c-btn-download__title">資料をダウンロードする</span>
                <span class="c-btn-download__desc">送信することで、プライバシーポリシーに同意したものとします。</span>
            </span>
            <i class="c-btn-download__down">
                <svg width="60" height="60"><use href="#ico-down"></use></svg>
            </i>
        </button>';
    }
    $content = preg_replace(
        '/<input[^>]*type="submit"[^>]*>/i',
        $custom_button,
        $content
    );

    return $content;
});

