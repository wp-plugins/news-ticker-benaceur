
			<ul id="ntbne" >
			<?php if ( $lp->have_posts() ) : ?>
			<?php while ( $lp->have_posts() ) : $lp->the_post(); $do_not_duplicate[] = get_the_ID(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php
			endwhile;
		 	endif; ?>
</ul>
			</div>			
		 <script type="text/javascript">
			jQuery(document).ready(function(){
<?php  if($ntb_st == 'TickerNTB' || $ntb_st == '' ){ ?>
createTickerNTB();
<?php } else { ?>
jQuery('.news-ticker-ntb ul').innerfade({animationtype: "<?php echo $ntb_st ?>" , speed: <?php if (!empty($ntb_anim_speed)) { echo $ntb_anim_speed; } else {echo "500";} ?> , timeout: <?php if (!empty($ntb_timeout)) { echo $ntb_timeout; } else {echo "3500";} ?>});
<?php } ?>
});
function rotateTicker() {
    i == tickerItems.length && (i = 0), tickerText = tickerItems[i], c = 0, typetext(), setTimeout("rotateTicker()", <?php if (!empty($ntb_timeout_tickerntb)) { echo $ntb_timeout_tickerntb; } else {echo "5000";} ?>), i++
}
		</script>

<?php if ($dir == 'ltr' || $dir == '') { ?>	
<style>
	#ntbne {
		float: left;
		margin-left: 0;
		padding:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '0') {echo "0";} else {echo "1";} ?>px 0 <?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>px 0;
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
	}
	.news-ticker-ntb ul a:hover {
		color: #333;
		text-decoration: none!important;
	}
	.news-ticker-ntb span {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		display:block;
		float:left;
		padding:<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '0') {echo "0";} else {echo "2";} ?>px 10px 2px;
		margin-right: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:28px;
	}
	.news-ticker-ntb {
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
</style>
<?php } elseif ($dir == 'rtl') { ?>
<style>
	#ntbne {
		float: right;
		margin-right: 0;
		padding:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '0') {echo "0";} else {echo "1";} ?>px 0 <?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>px 0;
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
	}
	.news-ticker-ntb ul a:hover {
		color: #333;
		text-decoration: none!important;
	}
	.news-ticker-ntb span {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		display:block;
		float:right;
		padding:<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '0') {echo "0";} else {echo "2";} ?>px 10px 2px;
		margin-left: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:28px;
	}
	.news-ticker-ntb {
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
</style>
<?php } ?>
