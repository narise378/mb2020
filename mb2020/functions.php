<?php
/**
* テーマのセットアップ
**/
function my_setup()
{
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support(
'html5',
array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');


/**
* CSSとJavaScriptの読み込み
*/
function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Sawarabi+Mincho', array(), 'all');
wp_enqueue_style('google-font-style', 'https://use.typekit.net/vpa5oxc.css', array(), 'all');

wp_enqueue_style('my', get_template_directory_uri() . '/assets/sass/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true);

wp_enqueue_style( 'my-drawer-style', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css', array(), '3.2.1' );
wp_enqueue_script( 'my-scroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js', array( 'jquery' ), '5.1.3', true );
wp_enqueue_script( 'my-drawer-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js', array( 'my-scroll-js' ), '3.2.1', true );
}
add_action('wp_enqueue_scripts', 'my_script_init');


function wow_script_init()
{
wp_enqueue_style('wow', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all');
wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wow_script_init');


/**
* メニューの登録
*/
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
)
);
}
add_action('init', 'my_menu_init');

/**
*管理画面にACF Proのオプションページを有効化
*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
	'page_title' 	=> '共通設定ページ',
	'menu_title'	=> '共通設定',
	'menu_slug' 	=> 'theme-general-settings',
	'capability'	=> 'edit_posts',
	'redirect'		=> false
	));

}

/**
 * お問い合わせページ移行設定
 */
add_action( 'wp_footer', 'add_confilm_page' );
function add_confilm_page() {
echo <<< EOD
    <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://localhost/mb2020_reproduction/confilm/';
    }, false );
    </script>
    EOD;
}