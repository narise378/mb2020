<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="fomat-detection" content="telephone=no">
    <title><?php bloginfo('name')?></title>

    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>" type="image/x-icon">

</head>
<body class="drawer drawer--right">
    <!-- ヘッダー -->
    <header class="header">
        <!-- スマホナビ -->
        <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
        </button>
        <nav class="drawer-nav" role="navigation">
            <ul class="drawer-menu">
              <li><a class="drawer-menu-item" href="http://localhost/mb2020_reproduction/">トップ</a></li>
              <li><a class="drawer-menu-item" href="http://localhost/mb2020_reproduction/category/news">ニュース</a></li>
              <li><a class="drawer-menu-item" href="http://localhost/mb2020_reproduction/story/">ストーリー</a></li>
              <li><a class="drawer-menu-item" href="http://localhost/mb2020_reproduction/comment-2/">コメント</a></li>
              <li><a class="drawer-menu-item" href="http://localhost/mb2020_reproduction/cast/">キャスト</a></li>
              <li><a class="drawer-menu-item" href="http://localhost/mb2020_reproduction/inquiry/">お問い合わせ</a></li>
            </ul>
        </nav><!--drawer-nav-->
        <!-- PCナビ -->
        <nav class="header__nav">
            <ul class="nav-list">
                <li class="nav-list__item"><a class="nav-list__link" href="http://localhost/mb2020_reproduction/"><p class="nav-list__link--kana">トップ</p>TOP</a></li>
                <li class="nav-list__item"><a class="nav-list__link" href="http://localhost/mb2020_reproduction/category/news"><p class="nav-list__link--kana">ニュース</p>NEWS</a></li>
                <li class="nav-list__item"><a class="nav-list__link" href="http://localhost/mb2020_reproduction/story/"><p class="nav-list__link--kana">ストーリー</p>STORY</a></li>
                <li class="nav-list__item"><a class="nav-list__link" href="http://localhost/mb2020_reproduction/comment-2/"><p class="nav-list__link--kana">著名人コメント</p>COMMENTS</a></li>
                <li class="nav-list__item"><a class="nav-list__link" href="http://localhost/mb2020_reproduction/cast/"><p class="nav-list__link--kana">キャスト</p>CAST</a></li>
                <li class="nav-list__item"><a class="nav-list__link" href="http://localhost/mb2020_reproduction/inquiry/"><p class="nav-list__link--kana">お問い合わせ</p>INQUIRY</a></li>
            </ul>
        </nav><!-- /header-nav -->
    </header>