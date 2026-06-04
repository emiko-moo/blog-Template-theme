<aside>
<ul>
    <h3>カテゴリー</h3>
    <?php wp_list_categories('title_li='); ?>
    <h3>アーカイブ</h3>
    <?php wp_get_archives('type=monthly&show_post_count=true'); ?>
    <h3>最近の投稿</h3>
    <?php
        $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 3, 
        'post_status' => 'publish' 
        ));
        foreach($recent_posts as $post){
            echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';
        }
        ?>
</ul>
</aside>

<?php
// ウィジェットエリアの呼び出し
dynamic_sidebar( 'my-widget' );
?>