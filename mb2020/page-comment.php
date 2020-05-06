<!--
Template Name: 著名人コメント
-->
<?php get_header(); ?>

<?php get_template_part('template/title_header'); ?>

<div class="container">
    <div class="breadcrumb">
        <div class="breadcrumb__home"><?php bcn_display(); ?></div>
    </div>
</div>

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
            <a href="http://localhost/mb2020_reproduction/comment-2/" class="comments__btn">
                <button class="btn btn-sm">もっと見る</button>
            </a>
        </div>
    </div><!--container-->
</section>

<section class="comments">
    <div class="container">
        <div class="comments-items">
        <?php if(have_rows('comments')): ?>
            <?php while(have_rows('comments')) : the_row(); $i++;
            if($i > 12) {
                break;
            }
            ?>
                <div class="comments-item">
                    <div class="comments-item__inner">
                        <h3 class="comments-item__name"><?php the_sub_field('comment_name'); ?></h3>
                        <p class="comments-item__role"><?php the_sub_field('comment_title'); ?></p>
                    </div>
                    <div class="comments-item__text">
                        <p><?php the_sub_field('comment_text'); ?></p>
                    </div>
                </div><!--comments-item-->
            <?php endwhile; ?>
        <?php endif; ?>
        </div><!--comments-items-->
    </div><!--container-->
</section><!--comments-->

<?php get_template_part('template/schedule'); ?>

<?php get_footer(); ?>