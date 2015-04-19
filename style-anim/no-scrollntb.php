                        <?php if ($dir == 'ltr' || $dir == '') { ?>	
						<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
						<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
						<?php } elseif ($dir == 'rtl') { ?>	
						<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
						<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
						<?php } ?>	

						<ul id="ntbne" >
			<?php
			if($ntb_latest_p_c == 'latest_posts' || $ntb_latest_p_c == '' ){
			if ( $lp->have_posts() ) : 
			?>
			<?php while ( $lp->have_posts() ) : $lp->the_post(); $do_not_duplicate[] = get_the_ID(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php
                if (!empty($ntb_expt_txt_title)) { 	 
				echo expt_title_text_NTB(get_the_title(), $ntb_expt_txt_title); 
                } else {
				echo expt_title_text_NTB(get_the_title(), 70); 
                }
				?>
				</a></li>
			<?php
			endwhile;
		 	endif; 
			} elseif ($ntb_latest_p_c == 'latest_comments') {
if ( count( $comments_list ) > 0 ) {
$date_format = 'j F Y';
 foreach ( $comments_list as $comment ) {
if (!empty($ntb_expt_txt_comm)) { 	 
 echo '<li><a href="'.get_permalink($comment->comment_post_ID).'#comment-'.$comment->comment_ID.'">'.wp_html_excerpt( $comment->comment_content, $ntb_expt_txt_comm ).' ...</a></li>';
} else {
 echo '<li><a href="'.get_permalink($comment->comment_post_ID).'#comment-'.$comment->comment_ID.'">'.wp_html_excerpt( $comment->comment_content, 62 ).' ...</a></li>';
}
 }
} else {
	echo '<p>';
   _e("No comments",'news-ticker-benaceur');
	echo '</p>';
}
	
			}	
			?>
</ul>
			</div>			

<?php if ($dir == 'ltr' || $dir == '') { ?>	
<style>
	#ntbne {
		<?php if ($ntb_st == 'FadeNTB' || $ntb_st == 'SlideNTB') { ?>direction:ltr;<?php } ?>	
		float: left;
		margin-left: 0;
	    color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>;
		padding:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '') {echo "1";} elseif ($ntb_padding_top == '0') {echo "0";} ?>px 0 <?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>px 0;
	}
	#ntbne li {
		list-style: none;
		margin-top:0px;
		display: block;
	}
	.news-ticker-ntb ul a {
		display:block;
		white-space:nowrap;
	    color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>;
		text-decoration: none!important;
		<?php if ($ntb_disable_title) {echo "padding-left: 10px;";} ?>
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	.news-ticker-ntb ul a:hover {
		color:<?php if (!empty($ntb_a_hover)) { echo $ntb_a_hover; } else {echo "#847c7c";} ?>;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	.news-ticker-ntb span {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		display:block;
		float:left;
		padding:<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '') {echo "2";} elseif ($ntb_padding_top_title == '0') {echo "0";} ?>px 10px 2px;
		margin-right: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
    	line-height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
		min-width:<?php if (!empty($ntb_width_title_background)) { echo $ntb_width_title_background; } else {echo "70";} ?>px;
		text-align:center;
		<?php if ($ntb_title_anim_pulsate) {  ?>
        animation: pulsate 1.2s linear infinite;
		-webkit-animation: pulsate 1.2s linear infinite;
        <?php } ?>
	}
	.news-ticker-ntb {
	font-family:<?php if (!empty($ntb_font_family)) { echo $ntb_font_family; } else {echo "DroidKufi_Ben, Arial";} ?>;
	font-size:<?php if (!empty($ntb_font_size)) { echo $ntb_font_size; } else {echo "14";} ?>px;
	font-weight:<?php echo $ntb_font_weight ;?>;
	background:<?php if (!empty($ntb_color_back)) { echo $ntb_color_back; } else {echo "#FFFFFF";}  ?>;
	border-top:<?php if (!empty($ntb_border_top)) { echo $ntb_border_top; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
	border-bottom:<?php if (!empty($ntb_border_bottom)) { echo $ntb_border_bottom; } elseif ($ntb_border_bottom == '') {echo "2";} elseif ($ntb_border_bottom == '0') {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
	border-right:<?php if (!empty($ntb_border_right)) { echo $ntb_border_right; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
	border-left:<?php if (!empty($ntb_border_left)) { echo $ntb_border_left; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } elseif ($ntb_border_radius == '') {echo "1";} elseif ($ntb_border_radius == '0') {echo "0";} ?>px;
    -moz-border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } elseif ($ntb_border_radius == '') {echo "1";} elseif ($ntb_border_radius == '0') {echo "0";} ?>px;
    -webkit-border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } elseif ($ntb_border_radius == '') {echo "1";} elseif ($ntb_border_radius == '0') {echo "0";} ?>px;
	box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } elseif ($ntb_box_shadow_v == '') {echo "1";} elseif ($ntb_box_shadow_v == '0') {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
	-moz-box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } elseif ($ntb_box_shadow_v == '') {echo "1";} elseif ($ntb_box_shadow_v == '0') {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
	-webkit-box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } elseif ($ntb_box_shadow_v == '') {echo "1";} elseif ($ntb_box_shadow_v == '0') {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
	text-shadow:<?php echo $ntb_text_shadow; ?> <?php if ($ntb_text_shadow_color) echo $ntb_text_shadow_color ; else  echo '#000000'; ?>;
	width:<?php if (!empty($ntb_width)) { echo $ntb_width; } else {echo "100%";} ?>;
	height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
	margin-top:<?php if (!empty($ntb_margin_top)) { echo $ntb_margin_top; } else {echo "0";} ?>px;
	margin-bottom:<?php if (!empty($ntb_margin_bottom)) { echo $ntb_margin_bottom; } elseif ($ntb_margin_bottom == '') {echo "25";} elseif ($ntb_margin_bottom == '0') {echo "0";} ?>px;
	opacity:<?php if (!empty($ntb_opacity)) { echo $ntb_opacity; } else {echo "1";} ?>;
	overflow:hidden;
	position:relative;	
	line-height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
	}
</style>
<?php } elseif ($dir == 'rtl') { ?>
<style>
	#ntbne {
		float: right;
		margin-right: 0;
	    color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>;
		padding:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '') {echo "1";} elseif ($ntb_padding_top == '0') {echo "0";} ?>px 0 <?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>px 0;
	}
	#ntbne li {
		list-style: none;
		margin-top:0px;
		 display: block;
	}
	.news-ticker-ntb ul a {
		display:block;
		white-space:nowrap;
	    color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>;
		text-decoration: none!important;
		<?php if ($ntb_disable_title) {echo "padding-right: 10px;";} ?>
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	.news-ticker-ntb ul a:hover {
		color:<?php if (!empty($ntb_a_hover)) { echo $ntb_a_hover; } else {echo "#847c7c";} ?>;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	.news-ticker-ntb span {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		display:block;
		float:right;
		padding:<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '') {echo "2";} elseif ($ntb_padding_top_title == '0') {echo "0";} ?>px 10px 2px;
		margin-left: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
    	line-height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
		min-width:<?php if (!empty($ntb_width_title_background)) { echo $ntb_width_title_background; } else {echo "70";} ?>px;
		text-align:center;
		<?php if ($ntb_title_anim_pulsate) {  ?>
        animation: pulsate 1.2s linear infinite;
		-webkit-animation: pulsate 1.2s linear infinite;
        <?php } ?>
	}
	.news-ticker-ntb {
	font-family:<?php if (!empty($ntb_font_family)) { echo $ntb_font_family; } else {echo "DroidKufi_Ben, Arial";} ?>;
	font-size:<?php if (!empty($ntb_font_size)) { echo $ntb_font_size; } else {echo "14";} ?>px;
	font-weight:<?php echo $ntb_font_weight ;?>;
	background:<?php if (!empty($ntb_color_back)) { echo $ntb_color_back; } else {echo "#FFFFFF";}  ?>;
	border-top:<?php if (!empty($ntb_border_top)) { echo $ntb_border_top; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
	border-bottom:<?php if (!empty($ntb_border_bottom)) { echo $ntb_border_bottom; } elseif ($ntb_border_bottom == '') {echo "2";} elseif ($ntb_border_bottom == '0') {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
	border-right:<?php if (!empty($ntb_border_right)) { echo $ntb_border_right; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
	border-left:<?php if (!empty($ntb_border_left)) { echo $ntb_border_left; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } elseif ($ntb_border_radius == '') {echo "1";} elseif ($ntb_border_radius == '0') {echo "0";} ?>px;
    -moz-border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } elseif ($ntb_border_radius == '') {echo "1";} elseif ($ntb_border_radius == '0') {echo "0";} ?>px;
    -webkit-border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } elseif ($ntb_border_radius == '') {echo "1";} elseif ($ntb_border_radius == '0') {echo "0";} ?>px;
	box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } elseif ($ntb_box_shadow_v == '') {echo "1";} elseif ($ntb_box_shadow_v == '0') {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
	-moz-box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } elseif ($ntb_box_shadow_v == '') {echo "1";} elseif ($ntb_box_shadow_v == '0') {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
	-webkit-box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } elseif ($ntb_box_shadow_v == '') {echo "1";} elseif ($ntb_box_shadow_v == '0') {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
	text-shadow:<?php echo $ntb_text_shadow; ?> <?php if ($ntb_text_shadow_color) echo $ntb_text_shadow_color ; else  echo '#000000'; ?>;
	width:<?php if (!empty($ntb_width)) { echo $ntb_width; } else {echo "100%";} ?>;
	height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
	margin-top:<?php if (!empty($ntb_margin_top)) { echo $ntb_margin_top; } else {echo "0";} ?>px;
	margin-bottom:<?php if (!empty($ntb_margin_bottom)) { echo $ntb_margin_bottom; } elseif ($ntb_margin_bottom == '') {echo "25";} elseif ($ntb_margin_bottom == '0') {echo "0";} ?>px;
	opacity:<?php if (!empty($ntb_opacity)) { echo $ntb_opacity; } else {echo "1";} ?>;
	overflow:hidden;
	position:relative;	
	line-height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
	}
</style>
<?php } ?>

<script type="text/javascript">
			jQuery(document).ready(function(){
<?php  if($ntb_st == 'TickerNTB'){ ?>
createTickerNTB();
<?php } elseif ($ntb_st == 'fadein'){ ?>
$(function () {
	$('#ntbne').newsTicker();
});
<?php } elseif ($ntb_st == 'FadeNTB') { ?>
jQuery('.news-ticker-ntb ul').innerfade({animationtype: "<?php echo $ntb_st ?>" , speed: <?php if (!empty($ntb_anim_speed_fade)) { echo $ntb_anim_speed_fade; } else {echo "500";} ?> , timeout: <?php if (!empty($ntb_timeout_fade)) { echo $ntb_timeout_fade; } else {echo "3500";} ?>});
<?php } elseif ($ntb_st == 'SlideNTB') { ?>
jQuery('.news-ticker-ntb ul').innerfade({animationtype: "<?php echo $ntb_st ?>" , speed: <?php if (!empty($ntb_anim_speed_slide)) { echo $ntb_anim_speed_slide; } else {echo "500";} ?> , timeout: <?php if (!empty($ntb_timeout_slide)) { echo $ntb_timeout_slide; } else {echo "3500";} ?>});
<?php } ?>
});
function rotateTicker() {
    i == tickerItems.length && (i = 0), tickerText = tickerItems[i], c = 0, typetext(), setTimeout("rotateTicker()", <?php if (!empty($ntb_timeout_tickerntb)) { echo $ntb_timeout_tickerntb; } else {echo "5000";} ?>), i++
}
</script>
