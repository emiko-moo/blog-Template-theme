<<?php
/*
Template Name: 確認画面
*/

// ★原因特定のために、下の4行の先頭に「//」をつけて一時的に無効化します
// if ($_SERVER["REQUEST_METHOD"] != "POST") {
//     wp_safe_redirect(home_url());
//     exit;
// }

$name = isset($_POST["my_name"]) ? sanitize_text_field($_POST["my_name"]) : '名前が届いていません';

get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <h1>お問い合わせフォーム - 確認画面</h1>
        <p>以下の内容で送信します。よろしいですか？</p>
        
        <table>
            <tr>
                <td>名前：</td>
                <td><?php echo esc_html($name); ?></td>
            </tr>
        </table>
        
        <!-- 次の送信先（完了ページなど）へのフォーム -->
        <form method="post" action="<?php echo esc_url(home_url('/thanks/')); ?>">
            <input type="hidden" name="my_name" value="<?php echo esc_attr($name); ?>">
            <input type="submit" value="送信する">
            <button type="button" onclick="history.back()">戻る</button>
        </form>

    </main>
</div>

<?php 
get_footer(); // WordPressのフッターを読み込む
?>
