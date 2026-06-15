<?php get_header();?>

<section>
    <div id="kv">
    <picture>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv.jpg" alt=""> </picture>
    </div>
    
</section>

<section class="contents">
        
    <div class="biz_wrap_top">
        <picture>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_sv_01.jpg" alt="">
        </picture>
        <div>
            <p class="subtit">技術で応える、ものづくり。</p>
                <p>
                    親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。弱虫やーい。と囃したからである。小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから、この次は抜かさずに飛んで見せますと答えた。（青空文庫より）
                </p>
                <button class="left_btn">
                    <a href="<?php echo esc_url(home_url('/business/')); ?>">もっと詳しく</a>
                </button>
        </div>     
    </div>
    </section>

<main>
    <section class="news stripe_bg">
    <h2>お知らせ／新着情報</h2>
    <div class="news_wrap">
    <?php
    // カスタム投稿「news」の最新3件を取得する条件
    $args = array(
      'post_type'      => 'info', // カスタム投稿のプレースホルダー
      'posts_per_page' => 3,      // 表示したい件数
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
    <button class="top">
        <a href="<?php echo esc_url(home_url('/info/')); ?>">詳しく戻る</a>
    </button>
    </section>

 

    <section class="news">
    <h2>TOPICS</h2>
    <div class="news_wrap">
    <?php
    // カスタム投稿「topics」の最新3件を取得する条件
    $args = array(
      'post_type'      => 'topics', // カスタム投稿のプレースホルダー
      'posts_per_page' => 2,      // 表示したい件数
    );
    $news_query = new WP_Query($args);
    ?>
    <?php if ($news_query->have_posts()) : ?>
    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
    <div>
        <ul class="thumbnail">
            <li>
                <a href="<?php the_permalink(); ?>"  class="top_img">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                    <img class="top_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt=""> 
                    <?php endif; ?>
                </a>
            </li>
        </ul>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
     <?php endif; ?>
    </div>
    <button class="top">
        <a href="<?php echo esc_url(home_url('/topics/')); ?>">詳しく戻る</a>
    </button>
    </section>



    <section class="stripe_bg">
        <h2>お問い合わせ</h2>
        <div class="inquiry_wap">
            <p>お気軽にお問い合わせください。専門の技術スタッフが迅速にサポートします</p>
        <button class="btn_wh">
        <a href="<?php echo esc_url(home_url('/inquiry/')); ?>">お問い合わせはこちら</a>
        </button>  
    </div>
        
    </section>
</main>





<?php get_footer();?>

