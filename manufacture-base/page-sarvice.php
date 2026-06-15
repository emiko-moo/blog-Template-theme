<?php get_header(); ?>

<div class="page_title">
    <h1 class="title"><?php the_title(); ?></h1>
</div>

<main>
    <section class="contents">
        <h2>サービス紹介</h2>
        <div>
        <?php
        // have_rows を使用してグループをループ処理します
        if (have_rows('contents_area')) :
        while (have_rows('contents_area')) : the_row();

        // ループ内では sub_field を使って値を取得します
        $img  = get_sub_field('contents_img');
        $text = get_sub_field('contents_txt');

        // 画像の出力（Secure Custom Fieldsの返り値が「画像ID」に設定されている前提）
        if (!empty($img)) {
            echo wp_get_attachment_image($img, 'full');
        }
        
        // テキストの出力
        if (!empty($text)) {
            echo '<p>' . esc_html($text) . '</p>';
        }

    endwhile;
endif;
?>
        </div>

    </section>
</main>




<?php get_footer(); ?>