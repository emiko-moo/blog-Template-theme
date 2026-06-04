<?php get_header();?>
<section>
<?php if ('have_posts') : ?>
    <?php while ( have_posts() ): the_post(); ?>
        <div class="sv"><h2><?php the_title(); ?></h2></div>
        <section class="container">
        
            <div class="contents_box">
                
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('Y年m月d日'); ?></time><?php the_content(); ?>
            </div>
            
            <div id="sideber"><?php get_sidebar(); ?></div>
        </section>
       
    <?php endwhile; ?>  
<?php endif; ?>
</section>


<?php get_footer();?>