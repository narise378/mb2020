<?php get_header();?>

<?php get_template_part('template/title_header'); ?>

<!--ニュースシングルページ-->
<div class="container">
    <div class="breadcrumb">
        <div class="breadcrumb__home"><?php bcn_display(); ?></div>
    </div>
</div>

<section class="news-single wow fadeInUp">
    <div class="container">
        <h2 class="news__title">NEWS</h2>
        <?php
        if ( have_posts() ) :
        while ( have_posts() ) :
        the_post();
        ?>
            <div class="news-single__img">
                <?php
                    if ( has_post_thumbnail() ) {
                    the_post_thumbnail('large');
                    } else {
                        echo 'イメージを入れてください';
                    }
                ?>
            </div>
            <div class="news-single__inner">
                <div class="news-single__head">
                    <time class="news-single__time"><?php the_time('Y/n/j')?></time>
                    <div class="news-single__title"><?php the_title(); ?></div>
                </div>
            </div>

            <div class="news-single__content">
                <div class="news-single__text">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="news-single__pagenations">
                <?php
                $prevpost = get_adjacent_post(true, '', true); //前の記事
                $nextpost = get_adjacent_post(true, '', false); //次の記事
                if($prevpost or $nextpost) {
                ?>
                <?php
                if($prevpost) {
                    echo
                    '<a href="'. get_permalink($prevpost->ID) .'" class="news-single__pagenation">
                    <div class="arrow arrow-left"></div>
                    <div class="news-single__pagenation--wrap">
                        <time class="news-single__pagenation--time">'. get_the_time('Y/n/j') .'</time>
                        <p class="news-single__pagenation--text">'. get_the_title($prevpost->ID) .'</p>
                    </div>
                    </a>';
                } else {
                    echo
                    '<a href="'. network_site_url('/') .'" class="news-single__pagenation">
                    <div class="news-single__pagenation--wrap">
                        <time class="news-single__pagenation--time">　　　　　</time>
                        <p class="news-single__pagenation--top">TOPへ戻る</p>
                    </div>
                    </a>';
                }
                ?>
                <?php
                if($nextpost) {
                    echo
                    '<a href="'. get_permalink($nextpost->ID) .'" class="news-single__pagenation">
                    <div class="news-single__pagenation--wrap">
                        <time class="news-single__pagenation--time">'. get_the_time('Y/n/j') .'</time>
                        <p class="news-single__pagenation--text">'. get_the_title($nextpost->ID) .'</p>
                    </div>
                    <div class="arrow arrow-right"></div>
                    </a>';
                } else {
                    echo
                    '<a href="'. network_site_url('/') .'" class="news-single__pagenation">
                    <div class="news-single__pagenation--wrap">
                        <time class="news-single__pagenation--time">　　　　　</time>
                        <p class="news-single__pagenation--top">TOPへ戻る</p>
                    </div>
                    </a>';
                }
                ?>
                <?php }?>
            </div>
        <?php
        endwhile;
        endif;
        ?>
    </div><!--base-inner-->
</section><!--news-->

<?php get_template_part('template/schedule')?>

<?php get_footer(); ?>