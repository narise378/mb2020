<?php get_header(); ?>

<?php get_template_part('template/title_header'); ?>

<!--ニュース一覧ページ-->
<div class="container">
    <div class="breadcrumb">
        <div class="breadcrumb__home"><?php bcn_display(); ?></div>
    </div>
</div>

<!-- ニュース -->
<section class="news">
    <div class="container">
        <h2 class="news__title">NEWS</h2>
            <div class="news-items wow fadeInUp">
                <?php
                if ( have_posts() ) :
                while ( have_posts() ) :
                the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="news-item">
                        <figure class="news-item__figure">
                        <?php
                            if ( has_post_thumbnail() ) {
                            the_post_thumbnail('large');
                            } else {
                                echo 'イメージを入れてください';
                            }
                        ?>
                        </figure>
                        <div class="news-item__body">
                            <time class="news-item__time"><?php the_time('Y/n/j')?></time>
                            <p class="news-item__title">
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </a><!--news-item-->
                <?php
                endwhile;
                endif;
                ?>
            </div><!--news-items-->
            <?php if(paginate_links()): ?>
                <!-- pagenation -->
				<div class="pagenation">
                    <?php echo
                    paginate_links(
                    array(
                    'end_size' => 0,
                    'mid_size' => 1,
                    'prev_next' => true,
                    'prev_text' => '<i class="fas fa-angle-left"></i>',
                    'next_text' => '<i class="fas fa-angle-right"></i>',
                    )
                    );
                    ?>
				</div><!-- /pagenation -->
            <?php endif; ?>
    </div><!--base-inner-->
</section><!--news-->

<?php get_template_part('template/schedule'); ?>

<?php get_footer(); ?>