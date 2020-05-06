<!--
Template Name: コンフィルム
-->
<?php get_header(); ?>

<?php get_template_part('template/title_header'); ?>

<section class="inquiry">
    <div class="container">
        <h2 class="inquiry__title">INQUIRY</h2>
        <div class="inquiry__wrap">
            <h4 class="inquiry__message wow fadeInUp" data-wow-delay=".9s">
                お問い合わせありがとうございました。<br>
                メッセージは正常に送信されました。
            </h4>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <h2 class="news__title">LATEST NEWS</h2>
        <a href="http://localhost/mb2020_reproduction/category/news" class="news__btn wow fadeInUp" data-wow-delay="1.6s"">
            <button class="btn btn-sm">ニュース一覧へ</button>
        </a>

        <div class="news-items wow fadeInUp" data-wow-delay="1s">
            <?php
            global $post;
            $args = array(
                'posts_per_page' => 3,
                'orderby' => 'rand',
            );
            $myposts = get_posts($args);

            foreach($myposts as $post) {
                setup_postdata($post);
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
            } wp_reset_postdata();
            ?>
        </div><!--news-items-->

        <div class="news-items2 wow lightSpeedIn" data-wow-duration="1s">
        <?php
            global $post;
            $args = array(
                'posts_per_page' => 2,
                'orderby' => 'rand',
            );
            $myposts = get_posts($args);

            foreach($myposts as $post) {
                setup_postdata($post);
            ?>
                <a href="<?php the_permalink(); ?>" class="news-item2">
                    <figure class="news-item2__figure">
                    <?php
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail('large');
                        } else {
                            echo 'イメージを入れてください';
                        }
                    ?>
                    </figure>
                    <div class="news-item2__body">
                        <div class="news-item2__time"><?php the_time('Y/n/j')?></div>
                        <p class="news-item2__title">
                            <?php the_title(); ?>
                        </p>
                    </div>
                </a>
            <?php
            } wp_reset_postdata();
            ?>
        </div><!--news-itemSmall-->
    </div><!--container-->
</section><!--news-->

<?php get_template_part('template/schedule'); ?>

<?php get_footer(); ?>