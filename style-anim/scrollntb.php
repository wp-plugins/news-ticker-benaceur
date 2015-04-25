
				  <div class="n_t_ntb_b"><div class="n_t_ntb_b2">
	   <?php if (!$ntb_disable_title) { ?>			  
       <span class="n_t_ntb_b-name"><?php if (!empty($ntb_title)) { echo $ntb_title; } else { _e("Latest news",'news-ticker-benaceur');} ?></span>
	   <?php } ?>
        <div id="scroll-ntb">
         <div>
			      	<?php
			if($ntb_latest_p_c == 'latest_posts'){
					if ( $lp->have_posts() ) : ?>
										<?php while ( $lp->have_posts() ) : $lp->the_post(); $do_not_duplicate[] = get_the_ID(); 
												?>
<img border="0" src="<?php echo '' . plugins_url('img/topics.gif',dirname(__FILE__)) . ''; ?>" width="10" height="11" <?php if ($dir == 'ltr')  { ?> style="margin:0 5px 0 30px;" <?php } elseif ($dir == 'rtl') { ?> style="margin:0 30px 0 5px;" <?php } ?>><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		 <?php endwhile; endif; 
			} elseif ($ntb_latest_p_c == 'latest_comments') {
if ( count( $comments_list ) > 0 ) {
$date_format = 'j F Y';
 foreach ( $comments_list as $comment ) {
 echo ' التعليق: <a href="'.esc_url(get_permalink($comment->comment_post_ID)).'#comment-'.$comment->comment_ID.'">'.wp_html_excerpt( $comment->comment_content, 52 ).'</a>... في: '.date_i18n( $date_format, strtotime( $comment->comment_date ) ).' على: <a href="'.esc_url(get_permalink( $comment->comment_post_ID )).'">'.get_the_title( $comment->comment_post_ID ).'</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;';
 }
} else {
	echo '<p>';
   _e("No comments",'news-ticker-benaceur');
	echo '</p>';
}
			}	
		 ?>
         </div>
        </div>
      </div></div>
	  
<style>
	.n_t_ntb_b {
		font-family:<?php echo $ntb_font_family; ?>;
		font-size:<?php echo $ntb_font_size; ?>px;
		font-weight:<?php echo $ntb_font_weight ;?>;
		background:<?php echo $ntb_color_back; ?>;
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
    	text-shadow:<?php echo $ntb_text_shadow; ?> <?php echo $ntb_text_shadow_color; ?>;
		width:<?php echo $ntb_width; ?>;
		height:<?php echo $ntb_height; ?>px;
    	margin-top:<?php echo $ntb_margin_top; ?>px;
    	margin-bottom:<?php echo $ntb_margin_bottom; ?>px;
    	opacity:<?php echo $ntb_opacity; ?>;
		overflow:hidden;
		position:relative;	
        line-height:<?php echo $ntb_height; ?>px;
	}
	#scroll-ntb {
		height:<?php echo $ntb_height; ?>px;
	}
	#scroll-ntb a {
		color:<?php echo $ntb_color_text_back; ?>!important;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	#scroll-ntb a:hover {
		color:<?php echo $ntb_a_hover; ?>!important;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
		}
	#scroll-ntb {
		color:<?php echo $ntb_color_text_back; ?>!important;
	}
	.n_t_ntb_b .n_t_ntb_b-name {
		color:<?php echo $ntb_color_text_title; ?>;
		background-color:<?php echo $ntb_color_back_title; ?>;
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
	#scroll-ntb div {
		padding-top:<?php echo $ntb_padding_top; ?>px;
        padding-bottom:<?php echo $ntb_padding_bottom; ?>;
		<?php if ($dir == 'ltr') { ?>
		margin-right: 10px;
		<?php } elseif ($dir == 'rtl') { ?>
		margin-left: 10px;
		<?php } ?>
	}

    <?php if ($dir == 'ltr') { ?>					
	.n_t_ntb_b2 { padding-right:10px;
	 <?php if ($ntb_disable_title) {echo "padding-left: 10px;";} ?>
	}
    <?php } elseif ($dir == 'rtl') { ?>
	.n_t_ntb_b2 { padding-left:10px;
	 <?php if ($ntb_disable_title) {echo "padding-right: 10px;";} ?>
	}
<?php } ?>
</style>

<script type="text/javascript">
	divScrollerNTB("scroll-ntb", "ntb-hor", <?php echo $ntb_speed_scrollntb; ?>, 6000);
</script>
