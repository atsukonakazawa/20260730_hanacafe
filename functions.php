<?php

function hanacafe_enqueue_styles()
{
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap',
        [],
        null
    );

    //テーマのCSS
    wp_enqueue_style(
        'hanacafe-style',
        get_stylesheet_uri(),
        ['google-fonts'],
        '1.0.0'
    );

    // メニューページ用CSS
    if (is_page(['coffee', 'tea', 'bakery', 'chocolate'])) {
        wp_enqueue_style(
            'hanacafe-menu-page',
            get_template_directory_uri() . '/assets/css/menu.css'
        );
    }

    //ニュースページ用CSS
    if (is_page('news')) {
        wp_enqueue_style(
            'hanacafe-news-page',
            get_template_directory_uri() . '/assets/css/news.css'
        );
    }

    //ギャラリーページ用CSS
    if (is_page('gallery')) {
        wp_enqueue_style(
            'hanacafe-gallery-page',
            get_template_directory_uri() . '/assets/css/gallery.css'
        );
    }

    // JavaScript
    wp_enqueue_script(
        'hanacafe-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );

    // 問い合わせフォームの送信先(WordPressAJAX)
    wp_localize_script(
        'hanacafe-main',
        'hanacafeData',
        [
            'ajaxUrl' => admin_url('admin-ajax.php')
        ]
    );
}
add_action('wp_enqueue_scripts', 'hanacafe_enqueue_styles');


//ギャラリー画像をアイキャッチ画像に
function hanacafe_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'hanacafe_setup');


// 問い合わせフォーム
function hanacafe_handle_contact_form()
{
    // フォームからデータを取得
    $name = isset($_POST['name'])
        ? sanitize_text_field($_POST['name'])
        : '';
    $email = isset($_POST['email'])
        ? sanitize_email($_POST['email'])
        : '';
    $message = isset($_POST['message'])
        ? sanitize_textarea_field($_POST['message'])
        : '';

    // メールの送信先
    $to = 'annieff.af@gmail.com';
    // メール件名
    $subject = '【HanaCafe】お問い合わせ';
    // メール本文
    $body =
        "HanaCafeのお問い合わせフォームから送信されました。\n\n"
        . "お名前：{$name}\n"
        . "メールアドレス：{$email}\n\n"
        . "お問い合わせ内容：\n"
        . "{$message}";
    // メールヘッダー
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $email,
    ];
    // メール送信
    $sent = wp_mail(
        $to,
        $subject,
        $body,
        $headers
    );
    // 送信結果をJavaScriptに返す（成功)
    if ($sent) {
        wp_send_json_success([
            'message' => 'お問い合わせを送信しました'
        ]);
    }
    // 送信結果をJavaScriptに返す（失敗)
    else {
        wp_send_json_error([
            'message' => 'メールの送信に失敗しました'
        ]);
    }
}

add_action(
    'wp_ajax_nopriv_hanacafe_contact',
    'hanacafe_handle_contact_form'
);
