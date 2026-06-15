<aside>
<ul>
    <h3>カテゴリー</h3>
    <?php 
        wp_list_categories(array(
        'title_li' => '', 
        'taxonomy' => 'info' 
    )); 
    ?>
    <h3>アーカイブ</h3>
        <?php 
            wp_get_archives(array(
            'type'            => 'monthly',
            'show_post_count' => true,
            'post_type'       => 'info' 
        )); 
        ?>
    <h3>最近の投稿</h3>
    <?php
        $recent_query = new WP_Query(array(
        'post_type'      => 'info', 
        'numberposts' => 3, 
        'post_status' => 'publish' 
        ));
        if ( $recent_query->have_posts() ) :
            while ( $recent_query->have_posts() ) : $recent_query->the_post();
        ?>
            <li>
                <a href="<?php the_permalink(); ?>" title="Look <?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </li>
        <?php
            endwhile;
            wp_reset_postdata(); // 必須：メインループへの影響を防ぐ
        endif;
        ?>
</ul>
</aside>

<?php
// ウィジェットエリアの呼び出し
dynamic_sidebar( 'my-widget' );
?>