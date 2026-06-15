<?php get_header(); ?>

<div class="page_title">
    <h1 class="title"><?php the_title(); ?></h1>
</div>

<main>
    <section class="contents">
        <h2>会社概要</h2>
        <div>
            <dl class="c-data-list">
                <dt>会社名</dt>
                <dd>⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎</dd>
                <dt>設立</dt>
                <dd>⚫︎⚫︎⚫︎⚫︎年⚫︎⚫︎月⚫︎⚫︎日</dd>
                <dt>資本金</dt>
                <dd><?php the_field('money');?></dd>
                <dt>代表者</dt>
                <dd>⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎</dd>
                <dt>役員</dt>
                <dd>
                    <?php echo nl2br(get_field('boardmember')); ?> 
                </dd>
                <dt>従業員数</dt>
                <dd>
                    <?php the_field('stuff');?>        
                </dd>
                <dt>所在地</dt>
                <dd>⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎</dd>
                <dt>マップ</dt>
                <dd>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26155.721920933902!2d138.38581759999997!3d34.9700096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1780918505654!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </dd>
        </div>

    </section>
</main>




<?php get_footer(); ?>