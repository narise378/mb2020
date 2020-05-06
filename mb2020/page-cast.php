<!--
Template Name: キャスト
-->
<?php get_header();?>

<?php get_template_part('template/title_header'); ?>

<div class="container">
    <div class="breadcrumb">
        <div class="breadcrumb__home"><?php bcn_display(); ?></div>
    </div>
</div>

<section class="cast">
    <h2 class="cast__title">CAST</h2>
    <div class="container">
        <div class="cast-details wow fadeInUp" data-wow-delay="0.6s">
            <?php if(have_rows('cast_list')): ?>
                <?php $page_counter = 3; ?>
                <?php while(have_rows('cast_list')): the_row(); ?>
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

<section class="musician">
    <div class="container">
    <h2 class="musician__title">MUSICIAN</h2>
        <div class="cast-musicians">
        <?php if(have_rows('musician_list')): ?>
            <?php while(have_rows('musician_list')) : the_row(); $i++;
            if($i > 8) {
                break;
            }
            ?>
            <div class="cast-musician wow fadeInUp">
                <figure class="cast-musician__img">
                    <img src="<?php the_sub_field('musician_photo'); ?>" alt="PERFORMER">
                </figure>
                <div class="cast-musician__prag">
                    <p class="cast-musician__role"><?php the_sub_field('musician_role'); ?></p>
                    <h3 class="cast-musician__name"><?php the_sub_field('musician_name'); ?></h3>
                    <p class="cast-musician__title"><?php the_sub_field('musician_title'); ?></p>
                    <p class="cast-musician__text">
                    <?php the_sub_field('musician_profile'); ?>
                    </p>
                </div><!--ast-perfomerPrag-->
            </div><!--cast-performerItem-->
            <?php endwhile; ?>
        <?php endif; ?>
        </div><!--cast-performaers-->
    </div>
</section>

<section class="member">
    <div class="container">
        <h2 class="member__title">STAFF</h2>
        <div class="cast-members">
        <?php if(have_rows('staff_list')): ?>
            <?php while(have_rows('staff_list')) : the_row(); ?>
            <div class="cast-member">
                <div class="cast-member__role"><?php the_sub_field('staff_role'); ?></div>
                <h3 class="cast-member__name"><?php the_sub_field('staff_name'); ?></h3>
                <div class="cast-member__title"><?php the_sub_field('staff_title'); ?></div>
            </div><!--cast-memberItem-->
            <?php endwhile; ?>
        <?php endif; ?>
        </div><!--cast-members-->
    </div>
</section>

<?php get_template_part('template/schedule')?>

<?php get_footer(); ?>