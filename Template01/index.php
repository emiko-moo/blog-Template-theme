<?php get_header();?>


<section>
    <div id="kv">
        <picture>
            <img  class="kv_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/kv_img01.jpg">
        </picture>
    </div>
</section>

<section class="container">
    <div id="main">
        <?php if ( have_posts() ): ?>
        <ul class="thumbnail_box">
            <?php while ( have_posts() ): the_post(); ?>
                <div>
                    <ul>
                        <div class="thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt=""> 
                            <?php endif; ?>
                            <div>
                                <h3><?php the_title();?></h3>
                                <?php
                                $content = get_the_content();
                                $content = strip_tags( $content ); // HTMLタグを除去
                                if ( mb_strlen( $content, 'UTF-8' ) > 10 ) {
                                    $content = mb_substr( $content, 0, 10, 'UTF-8' ) . '…';
                                }
                                echo '<p>' . esc_html( $content ) . '</p>';
                                ?>
                                <a href="<?php the_permalink(); ?>"  class="">続きを見る</a>
                            </div>    
                        </div>
                    </ul>
                </div>
            <?php endwhile; ?>
         </ul>
         <?php endif; ?>
    </div>
    <div id="sideber">
        <?php get_sidebar(); ?>
    </div>
</section>





<?php get_footer();?>

