<?php get_header(); ?>
<div class="page_title">
    <h1 class="title">お知らせ一覧</h1>
</div>

<main>
    <section class="news">
    <div class="news_wrap">
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    // カスタム投稿「news」の最新3件を取得する条件
    $args = array(
      'post_type'      => 'info', // カスタム投稿のプレースホルダー
      'posts_per_page' => 3,      // 表示したい件数
      'paged'          => $paged,
    );
    
    $news_query = new WP_Query($args);
    ?>

    <?php if ($news_query->have_posts()) : ?>
    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
        <dl>
            <dt><?php echo get_the_date('Y.m.d'); ?></dt>
            <dd>
            <?php
            $taxonomy = 'info'; 
            $terms = get_the_terms(get_the_ID(), $taxonomy);
            
            if (!empty($terms) && !is_wp_error($terms)) {
                echo '<span class="label">';
                foreach ($terms as $term) {
                    $term_link = get_term_link($term, $taxonomy);
                    echo '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
                }
                echo '</span>';
            }
            ?>          
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
            </dd>
        </dl>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <?php
        echo paginate_links(array(
        'total' => $news_query->max_num_pages
    ));
    ?>
    </section>


</main>

<?php get_footer(); ?>
