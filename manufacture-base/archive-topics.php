<?php get_header(); ?>
<div class="page_title">
    <!-- 修正：アーカイブページのタイトルを正しく出力 -->
    <h1 class="title"><?php post_type_archive_title(); ?></h1>
</div>

<main id="main" class="contentsList_wrap">
    <div>
    <?php
    // 修正：WP_Queryを使わず、WordPressが自動取得したメインループを使う
    if ( have_posts() ) :
    ?>
    <ul class="thumbnail_box">
        <?php while ( have_posts() ) : the_post(); ?>
        <li class="contents_list">
            <div class="thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt=""> 
                <?php endif; ?>
            </div>
            <div>
                <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>
    
    <?php
        // ページネーション（メインループ用なのでそのままで動きます）
        the_posts_pagination();
    
    else:
        echo 'お知らせはまだありません。';
    endif;
    ?>
    </div>
    
            
    
</main>

<?php get_footer(); ?>
