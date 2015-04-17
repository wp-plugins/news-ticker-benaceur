
				  <div class="n_t_ntb_b"><div class="n_t_ntb_b2">
	   <?php if (!$ntb_disable_title) { ?>			  
       <span class="n_t_ntb_b-name"><?php if (!empty($ntb_title)) { echo $ntb_title; } else { _e("Latest news",'news-ticker-benaceur');} ?></span>
	   <?php } ?>
        <div id="scroll-ntb">
         <div>
			      	<?php
			if($ntb_latest_p_c == 'latest_posts' || $ntb_latest_p_c == '' ){
					if ( $lp->have_posts() ) : ?>
										<?php while ( $lp->have_posts() ) : $lp->the_post(); $do_not_duplicate[] = get_the_ID(); 
												?>
<img border="0" src="<?php echo '' . plugins_url( '../img/topics.gif', __FILE__ ) . ''; ?>" width="10" height="11" <?php if ($dir == 'ltr' || $dir == '')  { ?> style="margin:0 5px 0 30px;" <?php } elseif ($dir == 'rtl') { ?> style="margin:0 30px 0 5px;" <?php } ?>><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		 <?php endwhile; endif; 
			} elseif ($ntb_latest_p_c == 'latest_comments') {
if ( count( $comments_list ) > 0 ) {
$date_format = 'j F Y';
 foreach ( $comments_list as $comment ) {
 echo ' التعليق: <a href="'.get_permalink($comment->comment_post_ID).'#comment-'.$comment->comment_ID.'">'.wp_html_excerpt( $comment->comment_content, 52 ).'</a>... في: '.date_i18n( $date_format, strtotime( $comment->comment_date ) ).' على: <a href="'.get_permalink( $comment->comment_post_ID ).'">'.get_the_title( $comment->comment_post_ID ).'</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;';
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

<?php if ($dir == 'ltr' || $dir == '') { ?>					
		<style>
	.n_t_ntb_b2 { padding-right:10px;
	 <?php if ($ntb_disable_title) {echo "padding-left: 10px;";} ?>
	}
	.n_t_ntb_b {
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
	.n_t_ntb_b .n_t_ntb_b-name {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		float:left;
		padding:<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '') {echo "2";} elseif ($ntb_padding_top_title == '0') {echo "0";} ?>px 10px 2px;
		margin-right: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
		min-width:<?php if (!empty($ntb_width_title_background)) { echo $ntb_width_title_background; } else {echo "70";} ?>px;
        line-height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
		text-align:center;
		<?php if ($ntb_title_anim_pulsate) {  ?>
        animation: pulsate 1.2s linear infinite;
		-webkit-animation: pulsate 1.2s linear infinite;
        <?php } ?>
	}
	#scroll-ntb {
		height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
	}
	#scroll-ntb div {
		padding-top:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '') {echo "1";} elseif ($ntb_padding_top == '0') {echo "0";} ?>px;
        padding-bottom:<?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>;
		margin-right: 10px;
	}
	#scroll-ntb a {
		color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>!important;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	#scroll-ntb a:hover {
		color:<?php if (!empty($ntb_a_hover)) { echo $ntb_a_hover; } else {echo "#847c7c";} ?>!important;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
		}
	#scroll-ntb {
		color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>!important;
	}
		
</style>
<?php } elseif ($dir == 'rtl') { ?>
<style>
	.n_t_ntb_b2 { padding-left:10px;
	 <?php if ($ntb_disable_title) {echo "padding-right: 10px;";} ?>
	}
	.n_t_ntb_b {
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
	.n_t_ntb_b .n_t_ntb_b-name {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		float:right;
		padding:<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '') {echo "2";} elseif ($ntb_padding_top_title == '0') {echo "0";} ?>px 10px 2px;
		margin-left: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
		min-width:<?php if (!empty($ntb_width_title_background)) { echo $ntb_width_title_background; } else {echo "70";} ?>px;
        line-height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
		text-align:center;
		<?php if ($ntb_title_anim_pulsate) {  ?>
        animation: pulsate 1.2s linear infinite;
		-webkit-animation: pulsate 1.2s linear infinite;
        <?php } ?>
	}
	#scroll-ntb {
		height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
	}
	#scroll-ntb div {
		padding-top:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '') {echo "1";} elseif ($ntb_padding_top == '0') {echo "0";} ?>px;
        padding-bottom:<?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>;
		margin-left: 10px;
	}
	#scroll-ntb a {
		color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>!important;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	#scroll-ntb a:hover {
		color:<?php if (!empty($ntb_a_hover)) { echo $ntb_a_hover; } else {echo "#847c7c";} ?>!important;
		text-decoration: none!important;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
		}
	#scroll-ntb {
		color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>!important;
	}
</style>
<?php } ?>

<script type="text/javascript">
	divScrollerNTB("scroll-ntb", "ntb-hor", <?php if (!empty($ntb_speed_scrollntb)) { echo $ntb_speed_scrollntb; } else {echo "17";} ?>, 6000);
</script>
