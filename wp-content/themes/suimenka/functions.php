<?php

/**************************************************
CSSファイルの読み込み
 **************************************************/
function my_enqueue_styles()
{
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css', array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

// https://web-creates.com/code/wordpress-head-js-css/

/**************************************************
Worksサムネ表示
 **************************************************/
register_post_type(
  'works',
  array(
    // 'supports'に'thumbnail'を追記
    'supports' => array('title', 'editor', 'thumbnail')
  )
);

add_theme_support('post-thumbnails');
