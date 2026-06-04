
<?php

// メニューウィジェット指定 
function register_my_menus() {
    register_nav_menus( array(
        'nav' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー',
    ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

// アイチャッチ画像設定
add_theme_support('post-thumbnails')

?>

<?php
// ウィジェットエリアの登録
add_action( 'widgets_init', function(){
  register_sidebar( array(
    'name' => 'ウィジェットエリアの名前',
    'id' => 'my-widget',
    'description' => 'ウィジェットエリアの説明',
    'before_widget' => '<div id="%1$s" class="my-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="my-widget-title">',
    'after_title' => '</h3>',
  ) );
} );