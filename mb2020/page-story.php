<!--
Template Name: ストーリー
-->
<?php get_header(); ?>

<div class="story-bg">
    <?php if(have_rows('story_header')): ?>
        <?php while(have_rows('story_header')) : the_row(); ?>
            <section class="story-single" style="background: url(<?php the_sub_field('story_img'); ?>) center center/cover no-repeat;">
                <div class="story-single__inner wow fadeInUp" data-wow-delay="0.6s">
                    <div class="story-single__title">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/min-title.svg" alt="MEIN TITLE">
                    </div>
                    <div class="story-single__date">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/min-date.svg" alt="SCHEDULE">
                    </div>
                    <div class="breadcrumb wow fadeInUp" data-wow-delay="1s">
                            <div class="breadcrumb__story"><?php bcn_display(); ?></div>
                    </div>
                    <a href="#" class="story-single__btn wow fadeInUp" data-wow-delay="1s">
                        <button class="btn btn-md">チケット予約サイトへ</button>
                    </a>
                </div><!--story-singleInner-->
                <div class="story-header">
                    <div class="story-header__inner">
                        <h2 class="story-header__title wow fadeInUp" data-wow-delay="1s">STORY</h2>
                        <div class="story-header__wrap wow fadeInUp" data-wow-delay="1.9s"">
                            <h2 class="story-header__wrap--caption"><?php the_sub_field('story_subhead'); ?></h2>
                            <div class="story-header__wrap--prag">
                                <p>
                                    <?php the_sub_field('story_text'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if(have_rows('story_1')): ?>
    <?php while(have_rows('story_1')) : the_row(); ?>
        <section class="story-view" style="background: url(<?php the_sub_field('story_img1'); ?>) center center/cover no-repeat;">
            <div class="story-view__inner wow fadeInUp" data-wow-delay="1s">
                <p class="story-view__left">
                    <?php the_sub_field('story_text1'); ?>
                </p>
            </div>
        </section>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if(have_rows('story_2')): ?>
        <?php while(have_rows('story_2')) : the_row(); ?>
        <section class="story-view" style="background: url(<?php the_sub_field('story_img2'); ?>) center center/cover no-repeat;">
            <div class="story-view__inner wow fadeInUp" data-wow-delay="1s">
                <p class="story-view__right">
                    <?php the_sub_field('story_text2'); ?>
                </p>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if(have_rows('story_3')): ?>
        <?php while(have_rows('story_3')) : the_row(); ?>
            <section class="story-view" style="background: url(<?php the_sub_field('story_img3'); ?>) center center/cover no-repeat;">
                <div class="story-view__inner wow fadeInUp" data-wow-delay="1s">
                    <p class="story-view__left">
                        <?php the_sub_field('story_text3'); ?>
                    </p>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</div><!--story-bg-->

<?php get_template_part('template/schedule')?>

<?php get_footer(); ?>