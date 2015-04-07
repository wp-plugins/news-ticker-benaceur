<?php 

function news_ticker_benaceur_post() {
	$ntb_st = get_option('news_ticker_benaceur_style');
	$dir = get_option( 'news_ticker_benaceur_dir' );
	include ('includes/news-ticker-benaceur-panel-var.php');
// L comments	
 global $wpdb;  
$n_p_c = $ntb_num_posts; 
if (!empty($ntb_cat)) {
if ( $ntb_include_exclude_id == 'include_id' || $ntb_include_exclude_id == '') { 	
$empty_ntb_cat = 'comment_post_ID in ('.$ntb_cat.') AND comment_approved = 1';
} elseif ( $ntb_include_exclude_id == 'exclude_id') { 
$empty_ntb_cat = 'comment_post_ID not in ('.$ntb_cat.') AND comment_approved = 1';
}
} else {
$empty_ntb_cat = 'comment_approved = 1';
}

$sql = "SELECT comment_ID, comment_date, comment_content, comment_post_ID
 FROM {$wpdb->comments} WHERE ".$empty_ntb_cat." 
 ORDER by comment_date DESC LIMIT $n_p_c";

$comments_list = $wpdb->get_results( $sql );
// L comments	
	if ($ntb_st != 'ScrollNTB') {
	?>
			 <div class="news-ticker-ntb">
		 <?php if (!$ntb_disable_title) { ?>	 
		 <span><?php if (!empty($ntb_title)) { echo $ntb_title; } else { _e("Latest news",'news-ticker-benaceur');} ?></span>
		 <?php } ?>
	<?php
	}
if ( $ntb_include_exclude_id == 'include_id' || $ntb_include_exclude_id == '') { 	
	 $lp = new WP_Query(
		array(
			'post_type' => 'post',
			'posts_per_page' => $ntb_num_posts,
			'cat' => $ntb_cat,
			'order'    => 'DESC'
				)
			); 
} elseif ( $ntb_include_exclude_id == 'exclude_id') { 
	 $lp = new WP_Query(
		array(
			'post_type' => 'post',
			'posts_per_page' => $ntb_num_posts,
			'cat' => -$ntb_cat,
			'order'    => 'DESC'
				)
			); 
}
			if ($ntb_st == 'ScrollNTB') {
			include ('style-anim/scrollntb.php');	
			} else {
			include ('style-anim/no-scrollntb.php');	
			}
}	
add_action( 'wp_news_ticker_benaceur', 'news_ticker_benaceur_post' );

if ( !get_option( 'news_ticker_benaceur_disable_this_font' ) )  { ?>
<style>
@font-face {
  font-family: 'DroidKufi_Ben';
  src: url(<?php echo '' . plugins_url( 'font/DroidKufi-Regular.eot' , __FILE__ ) . ''; ?>);
  src: url(<?php echo '' . plugins_url( 'font/DroidKufi-Regular.eot' , __FILE__ ) . ''; ?>?#iefix) format("embedded-opentype"),
       url(<?php echo '' . plugins_url( 'font/droidkufi-regular.ttf' , __FILE__ ) . ''; ?>) format("truetype");
}
</style>
<?php } 
