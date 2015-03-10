
				  <div class="n_t_ntb_b"><div class="n_t_ntb_b2">
       <span class="n_t_ntb_b-name">Latest posts</span>
        <div id="scroll-ntb">
         <div>
			      	<?php if ( $lp->have_posts() ) : ?>
										<?php while ( $lp->have_posts() ) : $lp->the_post(); $do_not_duplicate[] = get_the_ID(); 
												?>
<img border="0" src="<?php echo '' . plugins_url( '../img/topics.gif', __FILE__ ) . ''; ?>" width="10" height="11" <?php if ($dir == 'ltr' || $dir == '')  { ?> style="margin:0 5px 0 30px;" <?php } elseif ($dir == 'rtl') { ?> style="margin:0 30px 0 5px;" <?php } ?>><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		 <?php endwhile; endif; ?>
         </div>
        </div>
      </div></div>
      <script type="text/javascript">
						divScrollerNTB("scroll-ntb", "ntb-hor", 17, 6000);
		 			</script>

<?php if ($dir == 'ltr' || $dir == '') { ?>					
		<style>
<?php if ( !get_option( 'news_ticker_benaceur_disable_this_font' ) )  { ?>
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( '../font/droidkufi-regular.eot', __FILE__ ) . '); '; ?>
}
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( '../font/droidkufi-regular.ttf', __FILE__ ) . '); '; ?>
}
<?php } ?>
	.n_t_ntb_b2 { padding-right:10px; }
	.n_t_ntb_b {
		font-family:<?php if (!empty($ntb_font_family)) { echo $ntb_font_family; } else {echo "DroidKufi_Ben, Arial";} ?>;
		font-size:<?php if (!empty($ntb_font_size)) { echo $ntb_font_size; } else {echo "14";} ?>px;
		font-weight:<?php echo $ntb_font_weight ;?>;
		background:<?php if (!empty($ntb_color_back)) { echo $ntb_color_back; } else {echo "#FFFFFF";}  ?>;
	    border-top:<?php if (!empty($ntb_border_top)) { echo $ntb_border_top; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    	border-bottom:<?php if (!empty($ntb_border_bottom)) { echo $ntb_border_bottom; } else {echo "2";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    	border-right:<?php if (!empty($ntb_border_right)) { echo $ntb_border_right; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    	border-left:<?php if (!empty($ntb_border_left)) { echo $ntb_border_left; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    	border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } else {echo "1";} ?>px;
    	-moz-border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } else {echo "1";} ?>px;
    	-webkit-border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } else {echo "1";} ?>px;
    	box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } else {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
    	-moz-box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } else {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
    	-webkit-box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } else {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
    	text-shadow:<?php echo $ntb_text_shadow; ?> <?php if ($ntb_text_shadow_color) echo $ntb_text_shadow_color ; else  echo '#000000'; ?>;
		width:<?php if (!empty($ntb_width)) { echo $ntb_width; } else {echo "100%";} ?>;
		height:28px;
    	margin-top:<?php if (!empty($ntb_margin_top)) { echo $ntb_margin_top; } else {echo "0";} ?>px;
    	margin-bottom:<?php if (!empty($ntb_margin_bottom)) { echo $ntb_margin_bottom; } else {echo "25";} ?>px;
    	opacity:<?php if (!empty($ntb_opacity)) { echo $ntb_opacity; } else {echo "1";} ?>;
		overflow:hidden;
		position:relative;	
		}
	.n_t_ntb_b .n_t_ntb_b-name {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		float:left;
		padding:<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '0') {echo "0";} else {echo "2";} ?>px 10px 2px;
		margin-right: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:28px;
	}
	#scroll-ntb {
		height: 30px;
	}
	#scroll-ntb div {
		padding-top:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '0') {echo "0";} else {echo "1";} ?>px;
        padding-bottom:<?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>;
		margin-right: 10px;
	}
	#scroll-ntb a {
		color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>!important;
		text-decoration: none!important;
	}
	#scroll-ntb a:hover {
		color: #444!important;
		text-decoration: none!important;
		}
		
		
</style>
<?php } elseif ($dir == 'rtl') { ?>
<style>
<?php if ( !get_option( 'news_ticker_benaceur_disable_this_font' ) )  { ?>
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( '../font/droidkufi-regular.eot', __FILE__ ) . '); '; ?>
}
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( '../font/droidkufi-regular.ttf', __FILE__ ) . '); '; ?>
}
<?php } ?>
	.n_t_ntb_b2 { padding-left:10px; }
	.n_t_ntb_b {
		font-family:<?php if (!empty($ntb_font_family)) { echo $ntb_font_family; } else {echo "DroidKufi_Ben, Arial";} ?>;
		font-size:<?php if (!empty($ntb_font_size)) { echo $ntb_font_size; } else {echo "14";} ?>px;
		font-weight:<?php echo $ntb_font_weight ;?>;
		background:<?php if (!empty($ntb_color_back)) { echo $ntb_color_back; } else {echo "#FFFFFF";}  ?>;
	    border-top:<?php if (!empty($ntb_border_top)) { echo $ntb_border_top; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    	border-bottom:<?php if (!empty($ntb_border_bottom)) { echo $ntb_border_bottom; } else {echo "2";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    	border-right:<?php if (!empty($ntb_border_right)) { echo $ntb_border_right; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    	border-left:<?php if (!empty($ntb_border_left)) { echo $ntb_border_left; } else {echo "0";} ?>px solid <?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>;
    	border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } else {echo "1";} ?>px;
    	-moz-border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } else {echo "1";} ?>px;
    	-webkit-border-radius:<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } else {echo "1";} ?>px;
    	box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } else {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
    	-moz-box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } else {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
    	-webkit-box-shadow:<?php echo $ntb_box_shadow; ?> <?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } else {echo "0";} ?>px <?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>;
    	text-shadow:<?php echo $ntb_text_shadow; ?> <?php if ($ntb_text_shadow_color) echo $ntb_text_shadow_color ; else  echo '#000000'; ?>;
		width:<?php if (!empty($ntb_width)) { echo $ntb_width; } else {echo "100%";} ?>;
		height:28px;
    	margin-top:<?php if (!empty($ntb_margin_top)) { echo $ntb_margin_top; } else {echo "0";} ?>px;
    	margin-bottom:<?php if (!empty($ntb_margin_bottom)) { echo $ntb_margin_bottom; } else {echo "25";} ?>px;
    	opacity:<?php if (!empty($ntb_opacity)) { echo $ntb_opacity; } else {echo "1";} ?>;
		overflow:hidden;
		position:relative;	
		}
	.n_t_ntb_b .n_t_ntb_b-name {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		float:right;
		padding:<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '0') {echo "0";} else {echo "2";} ?>px 10px 2px;
		margin-left: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:28px;
	}
	#scroll-ntb {
		height: 30px;
	}
	#scroll-ntb div {
		padding-top:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '0') {echo "0";} else {echo "1";} ?>px;
        padding-bottom:<?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>;
		margin-left: 10px;
	}
	#scroll-ntb a {
		color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>!important;
		text-decoration: none!important;
	}
	#scroll-ntb a:hover {
		color: #444!important;
		text-decoration: none!important;
		}
</style>
<?php } ?>