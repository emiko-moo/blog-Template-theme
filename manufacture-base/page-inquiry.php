<?php get_header(); ?>

<div class="page_title">
    <h1 class="title"><?php the_title(); ?></h1>
</div>

<main>
    <section class="contents inquiry_wap">
        <?php echo do_shortcode('[my_contact_form]'); ?>
    </section>
</main>




<?php get_footer(); ?>