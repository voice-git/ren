<?php
// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

//投稿タイプ保管用
$my_archives_post_type = 'post';
//Where書き換え
add_filter( 'getarchives_where', 'my_getarchives_where', 10, 2 );
function my_getarchives_where( $where, $r ) {
global $my_archives_post_type;
if ( !array_key_exists( 'post_type', $r ) ) {
return $where;
}
$target = $r['post_type'];
$new_where = str_replace( "'post'", "'{$target}'", $where );
$my_archives_post_type = $target;
return $new_where;
}
//出力URL書き換え(末尾にpost_typeくっつけるだけ)
add_filter( 'get_archives_link', 'my_get_archives_link' );
function my_get_archives_link( $link_html ) {
global $my_archives_post_type;
if ( '' != $my_archives_post_type ) {
$link_html = preg_replace( "/\&lt;a\shref\=\'([^\"]+)\'\&gt;/", "&lt;a href='$1&amp;post_type={$my_archives_post_type}'&gt;", $link_html );
}
return $link_html;
}

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //任意のスラッグ名
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//本体の更新通知を非表示
add_filter("pre_site_transient_update_core", "__return_null");
//プラグインの更新通知を非表示
add_filter("pre_site_transient_update_plugins", "__return_null");
//テーマの更新通知を非表示
add_filter("pre_site_transient_update_themes", "__return_null");

?>