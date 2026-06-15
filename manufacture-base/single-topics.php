<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="sv">
    <h1 class="title">TOPICS</h1>
</div>

<main id="main" class="contentsList_wrap">

<div class="content">
    <?php the_content(); ?>
</div>

<?php endwhile; endif; ?>

<div id="sideber">
        <?php get_sidebar(); ?>
    </div>

</main>

<?php get_footer(); ?>