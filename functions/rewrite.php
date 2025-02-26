<?php

/* ------------------------------------ 投稿記事リライトルール ------------------------------------ */

// news
function news_post_type_link( $link, $post ){
	if ( $post->post_type === 'news' ) {
		return home_url( '/news/' . $post->ID . '/' );
	} else {
		return $link;
	}
}
add_filter( 'post_type_link', 'news_post_type_link', 1, 2 );

function news_rewrite_rules_array( $rules ) {
	$new_rewrite_rules = array( 
		'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
	);
	return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'news_rewrite_rules_array' );

/* ----------------------------------------------------------------------------------------------- */
