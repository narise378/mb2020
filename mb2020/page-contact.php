<!--
Template Name: コンタクト
-->
<?php get_header(); ?>

<?php get_template_part('template/title_header'); ?>

<div class="container">
    <div class="breadcrumb">
        <div class="breadcrumb__home"><?php bcn_display(); ?></div>
    </div>
</div>

<section class="inquiry">
    <div class="container">
        <h2 class="inquiry__title">INQUIRY</h2>
        <div class="inquiry__wrap">
            <h4 class="inquiry__message">
                小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。
                公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
                お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
            </h4>

            <?php echo do_shortcode( '[contact-form-7 id="6" title="コンタクトフォーム 1"]' ); ?>
        </div>
    </div>
</section>

<?php get_template_part('template/schedule'); ?>

<?php get_footer(); ?>