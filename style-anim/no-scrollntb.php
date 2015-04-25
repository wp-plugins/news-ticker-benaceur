                        <?php if ($dir == 'ltr') { ?>	
						<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
						<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
						<?php } elseif ($dir == 'rtl') { ?>	
						<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
						<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
						<?php } ?>	

						<ul id="ntbne" >
			<?php
			if($ntb_latest_p_c == 'latest_posts'){
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
 echo '<li><a href="'.esc_url(get_permalink($comment->comment_post_ID)).'#comment-'.$comment->comment_ID.'">'.wp_html_excerpt( $comment->comment_content, $ntb_expt_txt_comm ).' ...</a></li>';
} else {
 echo '<li><a href="'.esc_url(get_permalink($comment->comment_post_ID)).'#comment-'.$comment->comment_ID.'">'.wp_html_excerpt( $comment->comment_content, 62 ).' ...</a></li>';
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

<style>
	#ntbne {
		<?php if ($dir == 'ltr') { ?>
		<?php if ($ntb_st == 'FadeNTB' || $ntb_st == 'SlideNTB') { ?>direction:ltr;<?php } ?>	
		float: left;
		margin-left: 0;
		<?php } elseif ($dir == 'rtl') { ?>
		float: right;
		margin-right: 0;
		<?php } ?>
	    color:<?php echo $ntb_color_text_back; ?>;
		padding:<?php echo $ntb_padding_top; ?>px 0 <?php echo $ntb_padding_bottom; ?>px 0;
	}
	#ntbne li {
		list-style: none;
		margin-top:0px;
		display: block;
	}
	.news-ticker-ntb ul a {
		display:block;
		white-space:nowrap;
	    color:<?php echo $ntb_color_text_back; ?>;
		text-decoration: none!important;
		<?php if ($dir == 'ltr') { 
		 if ($ntb_disable_title) {echo "padding-left: 10px;";}
		 } elseif ($dir == 'rtl') { 
		 if ($ntb_disable_title) {echo "padding-right: 10px;";}
		 } ?>
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	.news-ticker-ntb ul a:hover {
		color:<?php echo $ntb_a_hover; ?>;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	.news-ticker-ntb span {
		color:<?php echo $ntb_color_text_title; ?>;
		background-color:<?php echo $ntb_color_back_title; ?>;
		display:block;
		<?php if ($dir == 'ltr') { ?>
		float:left;
		margin-right: 10px;
		<?php } elseif ($dir == 'rtl') { ?>
		float:right;
		margin-left: 10px;
		<?php } ?>
		padding:<?php echo $ntb_padding_top_title; ?>px 10px 2px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:<?php echo $ntb_height; ?>px;
		min-width:<?php echo $ntb_width_title_background; ?>px;
		text-align:center;
		<?php if ($ntb_title_anim_pulsate) {  ?>
        animation: pulsate 1.2s linear infinite;
		-webkit-animation: pulsate 1.2s linear infinite;
        <?php } ?>
    	line-height:<?php echo $ntb_line_height_title; ?>px;
	    border:<?php echo $ntb_border_title; ?>px solid <?php echo $ntb_color_border_title; ?>;
	    box-sizing:border-box;
        -moz-box-sizing:border-box;
        -webkit-box-sizing:border-box;
	}
	.news-ticker-ntb {
	font-family:<?php echo $ntb_font_family; ?>;
	font-size:<?php echo $ntb_font_size; ?>px;
	font-weight:<?php echo $ntb_font_weight ;?>;
	background:<?php echo $ntb_color_back;  ?>;
	border-top:<?php echo $ntb_border_top; ?>px solid <?php echo $ntb_color_border; ?>;
	border-bottom:<?php echo $ntb_border_bottom; ?>px solid <?php echo $ntb_color_border; ?>;
	border-right:<?php echo $ntb_border_right; ?>px solid <?php echo $ntb_color_border; ?>;
	border-left:<?php echo $ntb_border_left; ?>px solid <?php echo $ntb_color_border; ?>;
    border-radius:<?php echo $ntb_border_radius; ?>px;
    -moz-border-radius:<?php echo $ntb_border_radius; ?>px;
    -webkit-border-radius:<?php echo $ntb_border_radius; ?>px;
	box-shadow:<?php echo $ntb_box_shadow; ?> <?php echo $ntb_box_shadow_v; ?>px <?php echo $ntb_box_shadow_color; ?>;
	-moz-box-shadow:<?php echo $ntb_box_shadow; ?> <?php echo $ntb_box_shadow_v; ?>px <?php echo $ntb_box_shadow_color; ?>;
	-webkit-box-shadow:<?php echo $ntb_box_shadow; ?> <?php echo $ntb_box_shadow_v; ?>px <?php echo $ntb_box_shadow_color; ?>;
	text-shadow:<?php echo $ntb_text_shadow; ?> <?php echo $ntb_text_shadow_color ; ?>;
	width:<?php echo $ntb_width; ?>;
	height:<?php echo $ntb_height; ?>px;
	margin-top:<?php echo $ntb_margin_top; ?>px;
	margin-bottom:<?php echo $ntb_margin_bottom; ?>px;
	opacity:<?php echo $ntb_opacity; ?>;
	overflow:hidden;
	position:relative;	
	line-height:<?php echo $ntb_height; ?>px;
	}
</style>

<script type="text/javascript">
			jQuery(document).ready(function(){
<?php  if($ntb_st == 'TickerNTB'){ ?>
createTickerNTB();
<?php } elseif ($ntb_st == 'fadein'){ ?>
$(function () {
	$('#ntbne').newsTicker();
});
<?php } elseif ($ntb_st == 'FadeNTB') { ?>
jQuery('.news-ticker-ntb ul').innerfade({animationtype: "<?php echo $ntb_st ?>" , speed: <?php echo $ntb_anim_speed_fade; ?> , timeout: <?php echo $ntb_timeout_fade; ?>});
<?php } elseif ($ntb_st == 'SlideNTB') { ?>
jQuery('.news-ticker-ntb ul').innerfade({animationtype: "<?php echo $ntb_st ?>" , speed: <?php echo $ntb_anim_speed_slide; ?> , timeout: <?php echo $ntb_timeout_slide; ?>});
<?php } ?>
});
function rotateTicker() {
    i == tickerItems.length && (i = 0), tickerText = tickerItems[i], c = 0, typetext(), setTimeout("rotateTicker()", <?php echo $ntb_timeout_tickerntb; ?>), i++
}
</script>
