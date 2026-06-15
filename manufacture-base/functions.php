
<?php

// メニューウィジェット指定 
function register_my_menus() {
    register_nav_menus( array(
        'nav' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー',
        'show_in_nav_menus' => true,
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

// カスタム投稿 お知らせページ
function create_info_post_type() {
  register_post_type( 'info', 
      array(
          'labels' => array(
              'name'          => 'お知らせ',
              'singular_name' => 'お知らせ',
          ),
          'public'        => true,
          'has_archive'   => true,
          'menu_position' => 5, 
          'menu_icon'     => 'dashicons-info', 
          'show_in_rest'  => true, 
          'rewrite' => array( 'slug' => 'info' ), 
          'supports'      => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ) 
      )
  );
}
// カスタムタクソノミー（カテゴリー）を追加
register_taxonomy(
  'info', // カテゴリのスラッグ
  'info', // カテゴリーを追加するカスタム投稿
  array(
    'label' => 'カテゴリー',  //管理画面での表示名
    'hierarchical' => true,  //階層構造
    'public' => true,  // 管理画面に表示
    'show_in_rest' => true,  //ブロックエディターON
  )
);
add_action( 'init', 'create_info_post_type' );


// カスタム投稿 　トピックス（バナー）
function create_topics_post_type() {
  register_post_type( 'topics', 
      array(
          'labels' => array(
              'name'          => 'トピックス',
              'singular_name' => 'トピックス',
          ),
          'public'        => true,
          'has_archive'   => true,
          'menu_position' => 5, 
          'menu_icon'     => 'dashicons-info', 
          'show_in_rest'  => true, 
          'rewrite' => array( 'slug' => 'topics' ), 
          'supports'      => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ) 
      )
  );

}
add_action( 'init', 'create_topics_post_type' );



// 画像リサイズ禁止

function remove_image_generation($sizes) {
  unset($sizes['medium']); 
  unset($sizes['large']); 
  unset( $sizes['medium_large']);
	unset( $sizes['1536x1536']);
	unset( $sizes['2048x2048']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_image_generation');
add_filter('big_image_size_threshold', '__return_false'); // スケール画像（full）を停止


add_filter('use_block_editor_for_post', function($use_block_editor, $post) {
  // クラシックエディタにしたい固定ページのIDを指定（複数ある場合はカンマ区切り）
  $target_ids = array(62, 25, 116, 87); 

  if (in_array($post->ID, $target_ids)) {
      return false; // ブロックエディタを無効化
  }
  return $use_block_editor;
}, 10, 2);



