
                        <?php if ($dir == 'ltr' || $dir == '') { ?>	
						<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
						<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
						<?php } elseif ($dir == 'rtl') { ?>	
						<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
						<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
						<?php } ?>	

			<ul id="ntbne_five" >
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
	#ntbne_five {
		direction:ltr;
		float: left;
		margin-left: 0;
	    color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>;
		padding:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '') {echo "1";} elseif ($ntb_padding_top == '0') {echo "0";} ?>px 0 <?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>px 0;
	}
	#ntbne_five li {
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
<?php if( $ntb_disa_img_n_scrollup == 'enable_img_n_scrollup' || $ntb_disa_img_n_scrollup == '') { ?>
    #next-button-ntb {
    position:absolute;
    background-image: url(<?php echo '' . plugins_url( 'img/slide-next.png', dirname(__FILE__) ) . ''; ?>);
    background-repeat: no-repeat;
    background-position:0 55%;
    background-size: 16px 16px;
    width:28px;
    height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
    right:6px;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
    }
    #next-button-ntb:hover {
    filter: alpha(opacity=100);
    opacity: 1;
}
    #prev-button-ntb {
    position:absolute;
    background-image: url(<?php echo '' . plugins_url( 'img/slide-prev.png', dirname(__FILE__) ) . ''; ?>);
    background-repeat: no-repeat;
    background-position:0 55%;
    background-size: 16px 16px;
    width:28px;
    height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
    right:40px;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
    }
    #prev-button-ntb:hover {
    filter: alpha(opacity=100);
    opacity: 1;
}
<?php } ?>
</style>
<?php } elseif ($dir == 'rtl') { ?>
<style>
	#ntbne_five {
		float: right;
		margin-right: 0;
	    color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>;
		padding:<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '') {echo "1";} elseif ($ntb_padding_top == '0') {echo "0";} ?>px 0 <?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>px 0;
	}
	#ntbne_five li {
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
<?php if( $ntb_disa_img_n_scrollup == 'enable_img_n_scrollup' || $ntb_disa_img_n_scrollup == '') { ?>
    #next-button-ntb {
    position:absolute;
    background-image: url(<?php echo '' . plugins_url( 'img/slide-next.png', dirname(__FILE__) ) . ''; ?>);
    background-repeat: no-repeat;
    background-position:0 55%;
    background-size: 16px 16px;
    width:28px;
    height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
    left:37px;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
}
    #next-button-ntb:hover {
    filter: alpha(opacity=100);
    opacity: 1;
}
    #prev-button-ntb {
    position:absolute;
    background-image: url(<?php echo '' . plugins_url( 'img/slide-prev.png', dirname(__FILE__) ) . ''; ?>);
    background-repeat: no-repeat;
    background-position:0 55%;
    background-size: 16px 16px;
    width:28px;
    height:<?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>px;
    left:6px;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
}
    #prev-button-ntb:hover {
    filter: alpha(opacity=100);
    opacity: 1;
}
<?php } ?>

</style>
<?php } ?>

<?php if (!is_admin() && ($ntb_enable_jquerymin_slide_up_down == 'enable_jquery_min_sud' || $ntb_enable_jquerymin_slide_up_down == '' || $ntb_enable_jquerymin_fadein == 'enable_jquery_min_fa' || $ntb_enable_jquerymin_fadein == '' ))
	{ ?><script <?php echo 'src="' . plugins_url( 'js/min-ben.js', dirname(__FILE__) ) . '"'; ?>></script><?php } ?>

<script>
(function($, window, document, undefined) {
        'use strict';
        var pluginName = 'news_ticker_benaceur',
                defaults = {
                        row_height: 20,
                        max_rows: 3,
                        speed: <?php if (!empty($ntb_speed_slide_up_down)) { echo $ntb_speed_slide_up_down; } else {echo "450";} ?>,
                        duration: 2500,
<?php if( $ntb_updown_slide_up_down == 'up_slide_u_d' || $ntb_updown_slide_up_down == '') { ?>
                        direction: 'up',
<?php } elseif( $ntb_updown_slide_up_down == 'down_slide_u_d') { ?>
                        direction: 'down',
<?php } ?>
                        autostart: <?php if( !empty($ntb_autostart_slide_up_down)) { echo 0; } else { echo 1; } ?>,
                        pauseOnHover: 1,
                        nextButton: null,
                        prevButton: null,
                        startButton: null,
                        stopButton: null,
                        hasMoved: function() {},
                        movingUp: function() {},
                        movingDown: function() {},
                        start: function() {},
                        stop: function() {},
                        pause: function() {},
                        unpause: function() {}
                };

        function Plugin(element, options) {
                this.element = element;
                this.$el = $(element);
                this.options = $.extend({}, defaults, options);
                this._defaults = defaults;
                this._name = pluginName;
                this.moveInterval;
                this.state = 0;
                this.paused = 0;
                this.moving = 0;
                if (this.$el.is('ul')) {
                        this.init();
                }
        }

        Plugin.prototype = {
                init: function() {
                        this.$el.height(this.options.row_height * this.options.max_rows)
                                .css({overflow : 'hidden'});

                        this.checkSpeed();

                        if(this.options.nextButton && typeof(this.options.nextButton[0]) !== 'undefined')
                                this.options.nextButton.click(function(e) {
                                        this.moveNext();
                                        this.resetInterval();
                                }.bind(this));
                        if(this.options.prevButton && typeof(this.options.prevButton[0]) !== 'undefined')
                                this.options.prevButton.click(function(e) {
                                        this.movePrev();
                                        this.resetInterval();
                                }.bind(this));
                        if(this.options.stopButton && typeof(this.options.stopButton[0]) !== 'undefined')
                                this.options.stopButton.click(function(e) {
                                        this.stop()
                                }.bind(this));
                        if(this.options.startButton && typeof(this.options.startButton[0]) !== 'undefined')
                                this.options.startButton.click(function(e) {
                                        this.start()
                                }.bind(this));
                        
                        if(this.options.pauseOnHover) {
                                this.$el.hover(function() {
                                        if (this.state)
                                                this.pause();
                                }.bind(this), function() {
                                        if (this.state)
                                                this.unpause();
                                }.bind(this));
                        }

                        if(this.options.autostart)
                                this.start();
                },

                start: function() {
                        if (!this.state) {
                                this.state = 1;
                                this.resetInterval();
                                this.options.start();
                        }
                },

                stop: function() {
                        if (this.state) {
                                clearInterval(this.moveInterval);
                                this.state = 0;
                                this.options.stop();
                        }
                },

                resetInterval: function() {
                        if (this.state) {
                                clearInterval(this.moveInterval);
                                this.moveInterval = setInterval(function() {this.move()}.bind(this), this.options.duration);
                        }
                },

                move: function() {
                         if (!this.paused) this.moveNext();
                },

                moveNext: function() {
                        if (this.options.direction === 'down')
                                this.moveDown();
                        else if (this.options.direction === 'up')
                                this.moveUp();
                },

                movePrev: function() {
                        if (this.options.direction === 'down')
                                this.moveUp();
                        else if (this.options.direction === 'up')
                                this.moveDown();
                },

                pause: function() {
                        if (!this.paused) this.paused = 1;
                        this.options.pause();
                },

                unpause: function() {
                        if (this.paused) this.paused = 0;
                        this.options.unpause();
                },

                moveDown: function() {
                        if (!this.moving) {
                                this.moving = 1;
                                this.options.movingDown();
                                this.$el.children('li:last').detach().prependTo(this.$el).css('marginTop', '-' + this.options.row_height + 'px')
                                        .animate({marginTop: '0px'}, this.options.speed, function(){
                                                this.moving = 0;
                                                this.options.hasMoved();
                                        }.bind(this));
                        }
                },

                moveUp: function() {
                        if (!this.moving) {
                                this.moving = 1;
                                this.options.movingUp();
                                var element = this.$el.children('li:first');
                                element.animate({marginTop: '-' + this.options.row_height + 'px'}, this.options.speed,
                                        function(){
                                                element.detach().css('marginTop', '0').appendTo(this.$el);
                                                this.moving = 0;
                                                this.options.hasMoved();
                                        }.bind(this));
                        }
                },

                updateOption: function(option, value) {
                        if (typeof(this.options[option]) !== 'undefined'){
                                this.options[option] = value;
                                if (option == 'duration' || option == 'speed'){
                                    this.checkSpeed();
                                    this.resetInterval();
                                }
                        }
                },

                getState: function() {
                        if (paused) return 2 // 2 = paused
                        else return this.state;// 0 = stopped, 1 = started
                },

                checkSpeed: function() {
                        if (this.options.duration < (this.options.speed + 25))
                                this.options.speed = this.options.duration - 25;
                },

                destroy: function() {
                        this._destroy(); // or this.delete; depends on jQuery version
                }
        };

        $.fn[pluginName] = function(option) {
                var args = arguments;
                
                return this.each(function() {
                        var $this = $(this),
                                data = $.data(this, 'plugin_' + pluginName),
                                options = typeof option === 'object' && option;
                        if (!data) {
                                $this.data('plugin_' + pluginName, (data = new Plugin(this, options)));
                        }
                        // if first argument is a string, call silimarly named function
                        if (typeof option === 'string') {
                                data[option].apply(data, Array.prototype.slice.call(args, 1));
                        }
                });
        };
})(jQuery, window, document);

//two
	
    		$('a[href*=#]').click(function(e) {
			    var href = $.attr(this, 'href');
			    if (href != "#") {
				    $('html, body').animate({
				        scrollTop: $(href).offset().top - 81
				    }, 500);
				}
				else {
					$('html, body').animate({
				        scrollTop: 0
				    }, 500);
				}
			    return false;
			});

    		$(window).load(function(){
	            $('code.language-javascript').mCustomScrollbar();
	        });
            var ntbne_five = $('#ntbne_five').news_ticker_benaceur({
                row_height: <?php if (!empty($ntb_height)) { echo $ntb_height; } else {echo "34";} ?>,
                max_rows: 1,
                duration: <?php if (!empty($ntb_timeout_slide_up_down)) { echo $ntb_timeout_slide_up_down; } else {echo "4000";} ?>,
                pauseOnHover: <?php if( !empty($ntb_pause_slide_up_down)) { echo 1; } else { echo 0; } ?>,
                <?php if ($dir == 'ltr' || $dir == '') { ?>	
				prevButton:  $('#prev-button-ntb'),
                nextButton:  $('#next-button-ntb')
				<?php } elseif ($dir == 'rtl') { ?>	
				prevButton:  $('#next-button-ntb'),
                nextButton:  $('#prev-button-ntb')
				<?php } ?>	
            });
        </script>
