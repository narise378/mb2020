<!--
Template Name: トップページ
-->
<?php get_header(); ?>

<section class="topview">
    <div class="topview__inner">
        <div class="topview__title wow fadeInUp" data-wow-delay="1s">
            <img class="topview__title--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/main-title.svg" alt="MEIN TITLE">
        </div>
        <div class="topview__desc wow fadeInUp" data-wow-delay="1.6s">
            <div class="topview__date">
                <img class="topview__date--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/main-date.svg" alt="SCHEDULE">
            </div>
            <div class="topview__subtitle">
                <p class="topview__subtitle--text">小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！</p>
                <br>
                <p class="topview__subtitle--text">アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
            </div>
        </div><!--topview-wrap-->
    </div>
    <a href="#" class="topview__btn wow fadeInUp" data-wow-delay="1.9s">
        <button class="btn btn-lg">予約はこちら</button>
    </a>
</section><!--topview-->

<!-- イントロダクション -->
<section class="intro">
    <div class="container">
        <div class="intro__wrap">
            <h2 class="intro__title">INTRODUCTION</h2>
            <p class="intro__head wow fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">なぜ今「マハーバーラタ」なのか？</p>

            <div class="intro__desc wow fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                <div class="intro__text">
                    「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？
                    <br>
                    それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。
                    <br>
                    平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
                </div>
                <div class="intro__text">
                    現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。
                    <br>
                    神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。
                    <br>
                    非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
                </div>
            </div>
        </div><!--intro-wrap-->
        <?php if( get_field('youtube_url') ): ?>
            <div class="intro__youtube">
                <?php echo $embed_code = wp_oembed_get( get_field('youtube_url') );?>
            </div>
        <?php endif; ?>
    </div><!--container-->
</section><!--intro-->

<!-- ニュース -->
<section class="news">
    <div class="container">
        <h2 class="news__title">NEWS</h2>
        <a href="http://localhost/mb2020_reproduction/category/news" class="news__btn wow fadeInUp" data-wow-delay="1.6s"">
            <button class="btn btn-sm">ニュース一覧へ</button>
        </a>

        <div class="news-items wow fadeInUp" data-wow-delay="1s">
            <?php
            global $post;
            $args = array('posts_per_page' => 3);
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

<?php
$page_id = get_page_by_path('story');
$page_id = $page_id->ID;
?>
<?php if(have_rows('story_header', $page_id)): ?>
    <?php while(have_rows('story_header', $page_id)): the_row(); ?>
        <section class="story" style="background: url(<?php the_sub_field('story_img'); ?>) center center/cover no-repeat;">
            <div class="container">
                <h2 class="story__title">STORY</h2>
                <div class="story__paragraph wow fadeInUp" data-wow-delay="1s">
                    <p class="story__header">
                        <?php the_sub_field('story_text'); ?>
                    </p>
                </div>
                <a href="http://localhost/mb2020_reproduction/story/" class="story__btn" data-wow-delay="1.3s">
                    <button class="btn btn-sm">もっと詳しく</button>
                </a>
            </div><!--container-->
        </section><!--story-->
    <?php endwhile; ?>
<?php endif; ?>

<section class="comments">
    <div class="container">
        <h2 class="comments__title">COMMENTS</h2>
        <h3 class="comments__text">舞台関係者のみならず各界著名人からコメントが届いています！</h3>
        <div class="comments__inner">
            <div class="comments__body wow fadeInUp" data-wow-delay="1s">
                <h4 class="comments__head">京都佛立ミュージアム館長 <span>長松清潤</span></h4>
                <p class="comments__prag">
                    「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                    まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
                </p>
            </div>
            <a href="http://localhost/mb2020_reproduction/comment-2/" class="comments__btn wow bounce" data-wow-delay="1.3s" data-wow-iteration="3">
                <button class="btn btn-sm">もっと見る</button>
            </a>
        </div>
    </div><!--container-->
</section>

<section class="cast">
    <h2 class="cast__title">CAST</h2>
    <div class="container">
        <div class="cast-details wow fadeInUp" data-wow-delay="1.3s">
            <?php
            $page_id = get_page_by_path('cast');
            $page_id = $page_id->ID;
            ?>
            <?php if(have_rows('cast_list', $page_id)): ?>
                <?php $page_counter = 3; ?>
                <?php while(have_rows('cast_list', $page_id)): the_row(); ?>
                <?php $page_counter--; ?>
                    <div class="cast-detail">
                        <div class="cast-detail__img">
                            <img src="<?php the_sub_field('cast_photo'); ?>" alt="CAST">
                        </div>
                        <div class="cast-detail__data">
                            <p class="cast-detail__role"><?php the_sub_field('cast_role'); ?></p>
                            <h3 class="cast-detail__name"><?php the_sub_field('cast_name'); ?></h3>
                            <p class="cast-detail__title"><?php the_sub_field('cast_title'); ?></p>
                        </div>
                        <div class="cast__prag">
                            <p class="cast__text">
                            <?php the_sub_field('cast_profile'); ?>
                            </p>
                        </div>
                    </div><!--cast-detail-->
                <?php if($page_counter === 0) break; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!--cast-details-->
        <a href="http://localhost/mb2020_reproduction/cast/" class="cast__btn" data-wow-delay="1.3s">
            <button class="btn2 cast-btn">もっと見る</button>
        </a>
    </div>
</section>

<?php get_template_part('template/schedule')?>

<?php get_footer(); ?>