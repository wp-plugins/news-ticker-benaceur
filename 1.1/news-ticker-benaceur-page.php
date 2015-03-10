<?php 

function news_ticker_benaceur_post() {
	$ntb_st = get_option('news_ticker_benaceur_style');
	$dir = get_option( 'news_ticker_benaceur_dir' );
	include ('news-ticker-benaceur-panel-var.php');
	if ($ntb_st != 'ScrollNTB') {
	?>
			 <div class="news-ticker-ntb">
		 <span>Latest posts</span>
	<?php
	}
	 $lp = new WP_Query(
		array(
			'post_type' => 'post',
			'posts_per_page' => 5,
			'cat' => get_option('news_ticker_benaceur_for_cat')
				)
			); 
			if ($ntb_st == 'ScrollNTB') {
			include ('style-anim/scrollntb.php');	
			} else {
			include ('style-anim/no-scrollntb.php');	
			}
}	
add_action( 'wp_news_ticker_benaceur', 'news_ticker_benaceur_post' );
