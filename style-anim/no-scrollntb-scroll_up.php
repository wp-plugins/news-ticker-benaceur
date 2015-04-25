
                        <?php if ($dir == 'ltr') { ?>	
						<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
						<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
						<?php } elseif ($dir == 'rtl') { ?>	
						<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
						<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
						<?php } ?>	

			<ul id="ntbne_five" >
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
	#ntbne_five {
		<?php if ($dir == 'ltr') { ?>
		direction:ltr;
		float: left;
		margin-left: 0;
        <?php } elseif ($dir == 'rtl') { ?>
		float: right;
		margin-right: 0;
		<?php } ?>
	    color:<?php echo $ntb_color_text_back; ?>;
		padding:<?php echo $ntb_padding_top; ?>px 0 <?php echo $ntb_padding_bottom; ?>px 0;
	}
	#ntbne_five li {
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
	
    #next-button-ntb {
    position:absolute;
    background-image: url(<?php echo '' . plugins_url( 'img/slide-next.png', dirname(__FILE__) ) . ''; ?>);
    background-repeat: no-repeat;
    background-position:0 55%;
    background-size: 16px 16px;
    width:28px;
    height:<?php echo $ntb_height; ?>px;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
    <?php if ($dir == 'ltr') { ?>	
    right:2px;
    <?php } elseif ($dir == 'rtl') { ?>	
    left:37px;
    <?php } ?>	
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
    height:<?php echo $ntb_height; ?>px;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
    <?php if ($dir == 'ltr') { ?>	
    right:30px;
    <?php } elseif ($dir == 'rtl') { ?>	
    left:6px;
    <?php } ?>	
}
    #prev-button-ntb:hover {
    filter: alpha(opacity=100);
    opacity: 1;
}

</style>

<?php if (!is_admin() && ($ntb_enable_jquerymin_slide_up_down == 'enable_jquery_min_sud' || $ntb_enable_jquerymin_fadein == 'enable_jquery_min_fa'))
	{ ?><script <?php echo 'src="' . plugins_url( 'js/min-ben.js', dirname(__FILE__) ) . '"'; ?>></script><?php } ?>

<script>
(function($, window, document, undefined) {
        'use strict';
        var pluginName = 'news_ticker_benaceur',
                defaults = {
                        row_height: 20,
                        max_rows: 3,
                        speed: <?php echo $ntb_speed_slide_up_down; ?>,
                        duration: 2500,
<?php if( $ntb_updown_slide_up_down == 'up_slide_u_d') { ?>
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
                row_height: <?php echo $ntb_height; ?>,
                max_rows: 1,
                duration: <?php echo $ntb_timeout_slide_up_down; ?>,
                pauseOnHover: <?php if( !empty($ntb_pause_slide_up_down)) { echo 1; } else { echo 0; } ?>,
                <?php if ($dir == 'ltr') { ?>	
				prevButton:  $('#prev-button-ntb'),
                nextButton:  $('#next-button-ntb')
				<?php } elseif ($dir == 'rtl') { ?>	
				prevButton:  $('#next-button-ntb'),
                nextButton:  $('#prev-button-ntb')
				<?php } ?>	
            });
        </script>
