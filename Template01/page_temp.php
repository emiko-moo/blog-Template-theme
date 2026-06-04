<?php
/*
Template Name: 固定テンプレート
*/
?>

<?php get_header();?>
<section>
<?php if ('have_posts') : ?>
    <?php while ( have_posts() ): the_post(); ?>
        <div class="sv"><h2><?php the_title(); ?></h2></div>
        <section class="container">
        
            <div class="contents_box">
                <?php the_content(); ?>
            </div>
            
        </section>
       
    <?php endwhile; ?>  
<?php endif; ?>
</section>


<?php get_footer();?>