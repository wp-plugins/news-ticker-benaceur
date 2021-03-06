<?php

function news_ticker_benaceur_page_options() {
	
	$settings = get_settings_ntb();
		global $wp_roles;

		if ( !isset( $wp_roles ) ) {
			$wp_roles = new WP_Roles();
		}
		$roles = $wp_roles->get_names();
        $roles = array_map( 'translate_user_role', $roles );
		
        include ('includes/news-ticker-benaceur-panel-var.php');
		?>
    <div id="wpcontent-benaceur-ntb"><div id="wpcontent-benaceur-nab-top"></div>
            <h2><?php _e('News-Ticker-Benaceur', 'news-ticker-benaceur'); ?></h2>
<?php if (isset($_GET['settings-updated']) && $GLOBALS['pagenow'] == 'options-general.php' && $_GET['page'] == 'news-ticker-benaceur'){ ?>
<style>#setting-error-settings_updated {display:none;}</style>
		<?php if ($ntb_styles_options_p == 'theme_one' || $ntb_styles_options_p == '' ) { ?>
		<div  id="message" class="updated" style="background:#AC302D;color:<?php echo $ntb_cust_color_font; ?>;margin:20px 0 20px 0;">
		<?php } elseif ($ntb_styles_options_p == 'theme_custom' ) { ?>
		<div  id="message" class="updated" style="background:<?php echo $ntb_cust_color_back_msg; ?>;color:<?php echo $ntb_cust_color_font; ?>;margin:20px 0 20px 0;">
		<?php } elseif ($ntb_styles_options_p == 'theme_standard' ) { ?>
		<div  id="message" class="updated" style="background:;color:;margin:20px;">
		<?php } ?>
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>	
<div id="col-nontb">
<p><?php _e('Note: After activating the plugin Put the following line in the place (in template) where you bar to appear:', 'news-ticker-benaceur'); ?></p>
<span class="code-insert-ntb">&lt;?php if (has_action('wp_news_ticker_benaceur')) wp_news_ticker_benaceur_(); ?></span>
<p><?php _e('or put this short code (in post or page):', 'news-ticker-benaceur'); ?></p>
<span class="code-insert-ntb">[wp_news_ticker_benaceur_short_code]</span>
</br></br><hr>
</div>
        <h3><?php _e('Settings', 'news-ticker-benaceur'); ?></h3>
        <form id="myOptionsForm4" name="myOptionsForm4" method="post" action="options.php"  >
            <?php settings_fields( 'news_ticker_benaceur_group' ); 
				do_settings_sections( 'news_ticker_benaceur_group' );
			?>

<table class="form-table">
	<tr>
		<td>
    <div class="switch demo1">
                        <input type="checkbox"  value="1" <?php if ($ntb_enable_plug) echo 'checked="checked"';  ?> name="news_ticker_benaceur_enable_plug" />
                        <label></label>
	</div>
	<center><div style="margin-top:10px;" ><?php _e("Enable plugin",'news-ticker-benaceur'); ?></div></center>
		</td>
	</tr>
</table>
<table class="form-table44">
	
					<tr>
						<td>
                   <input type="radio" name="news_ticker_benaceur_latest_p_c" value="latest_posts" <?php if( $ntb_latest_p_c == 'latest_posts')echo 'checked';?> >
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("Latest posts",'news-ticker-benaceur'); ?></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="news_ticker_benaceur_latest_p_c" value="latest_comments" <?php if( $ntb_latest_p_c == 'latest_comments')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("Latest comments",'news-ticker-benaceur'); ?></td></div>
					</tr></br>
</table></br>

<div class="to-tr2"></div>
</br>
<div id="news-ticker-benaceur-font">
<table>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select style="min-width:110px;text-align:center;"  name="news_ticker_benaceur_links_admin_bar_menu" class="news-ticker-benaceur-color-inp"><option value="menu" <?php selected('menu', get_option( 'news_ticker_benaceur_links_admin_bar_menu' )); ?>><?php _e('Menu', 'news-ticker-benaceur'); ?></option><option value="submenu" <?php selected('submenu', get_option( 'news_ticker_benaceur_links_admin_bar_menu' )); ?>><?php _e('Submenu', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
					</tr>
<tr valign="top"><td  scope="row"><?php _e('Enable News Ticker Benaceur on admin bar in frontend', 'news-ticker-benaceur'); ?></td><td><label class="switch-nab"><input type="checkbox" name="news_ticker_benaceur_links_admin_bar_front" class="switch-input" value="1"<?php if( $ntb_links_admin_bar_front) { echo 'checked="checked"'; } ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><td scope="row"><?php _e('Enable News Ticker Benaceur on admin bar in admin panel', 'news-ticker-benaceur'); ?></td><td><label class="switch-nab"><input type="checkbox" name="news_ticker_benaceur_links_admin_bar_admin" class="switch-input" value="1"<?php if( $ntb_links_admin_bar_admin) { echo 'checked="checked"'; } ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
</table>
</div>
</br>
<div class="to-tr2"></div>
			<table class="form-table">
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Hide for visitors', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_for_visitors" value="1" <?php if( get_option('news_ticker_benaceur_for_visitors')) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Hide for all users', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_for_users" value="1" <?php if( get_option('news_ticker_benaceur_for_users')) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
				<tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Hide for this group(s) (You can select more than one group)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="checkbox">				
<div class="styled-select-ntb">
<select name="news_ticker_benaceur_for_role_x[]" id="news_ticker_benaceur_for_role_x"  size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_attr( $role ); ?>" select="select"><?php _e('Remove Selection', 'news-ticker-benaceur'); ?></option>

						    	<?php
									$rolexcap_ntb = $settings[ 'rolexcap_ntb' ];

									foreach ( $roles as $role => $name ) {
								?>
<option value="<?php echo esc_attr( $role ); ?>"<?php selected( in_array( $role, $rolexcap_ntb ) ); ?>><?php echo esc_html( $name ); ?></option>
								<?php
									}
								?>
</select>
</div></div>
                    </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Hide for this user id', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;" type="text" name="news_ticker_benaceur_for_user_id" placeholder="<?php _e( 'Enter here the user id', 'news-ticker-benaceur' ); ?>" value="<?php echo get_option('news_ticker_benaceur_for_user_id'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Hide for all except administrator', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_for_all_expt_admin" value="1" <?php if( get_option('news_ticker_benaceur_for_all_expt_admin')) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
				</table>
<div style="margin-bottom:-45px;" class="to-tr2"></div>
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('category id (Latest posts)</br>post id (Latest comments)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;" type="text" name="news_ticker_benaceur_for_cat" placeholder="<?php _e( 'Leave blank to activate All', 'news-ticker-benaceur' ); ?>" value="<?php echo get_option('news_ticker_benaceur_for_cat'); ?>" />
<div id="sub-ntb">		
<?php
  echo '<div>
<table width="80%" cellspacing="1" style="border:1px solid #999999;background:#A4A4A4;">
	<tr>
		<td align="center" width="80%" style="border-left:1px solid #999999;"><b>name cat</b></td>
		<td align="center" width="20%"><b>id cat</b></td>
	</tr>
</table>  </div>';
$category_ids = get_all_category_ids();
foreach($category_ids as $cat_id) {
  $cat_name = get_cat_name($cat_id);
  echo '<div>
<table width="80%" cellspacing="1" style="border:1px solid #999999;">
	<tr>
		<td align="center" width="80%" style="border-left:1px solid #999999;">' . $cat_name .'</td>
		<td align="center" width="20%">'. $cat_id . '</td>
	</tr>
</table>  </div>';
}
?>
</br></br>
</div>
<input type='button'  id='bt-ntb' class="button-secondary" value='<?php _e('Display all cat', 'news-ticker-benaceur'); ?>' onclick="setVisibility_ntb('sub-ntb');";>
					</div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
					<tr>
						<td>
                   <input type="radio" name="news_ticker_benaceur_include_exclude_id" value="include_id" <?php if( $ntb_include_exclude_id == 'include_id') echo 'checked';?> >
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("Include cat id/post id",'news-ticker-benaceur'); ?></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="news_ticker_benaceur_include_exclude_id" value="exclude_id" <?php if( $ntb_include_exclude_id == 'exclude_id')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("Exclude cat id/post id",'news-ticker-benaceur'); ?></td></div>
					</tr></br>
</table>
<div class="to-tr2"></div>
              <table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('The title', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:250px;" type="text" name="news_ticker_benaceur_title" value="<?php if (!empty($ntb_title)) { echo $ntb_title; } else {_e("Latest news",'news-ticker-benaceur');} ?>" /></div>
                   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable Title', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_disable_title" value="1" <?php if( $ntb_disable_title) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Title animation pulsate', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input"  name="news_ticker_benaceur_title_anim_pulsate" value="1" <?php  if( !empty($ntb_title_anim_pulsate) ) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Numbre of posts', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_num_posts" value="<?php echo $ntb_num_posts; ?>" /></div>
                   </td>
                </tr>
              </table>
              <table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Direction', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select style="min-width:100px;text-align:center;"  name="news_ticker_benaceur_dir" class="news-ticker-benaceur-color-inp">
				<option value="ltr" <?php selected('ltr', $ntb_dir); ?>><?php _e('LTR', 'news-ticker-benaceur'); ?></option>
				<option value="rtl" <?php selected('rtl', $ntb_dir); ?>><?php _e('RTL', 'news-ticker-benaceur'); ?></option></select>
                </tr>
            </table>
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Number of letters of Title', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_expt_txt_title" value="<?php echo $ntb_expt_txt_title; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Number of letters of Comments', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_expt_txt_comm" value="<?php echo $ntb_expt_txt_comm; ?>" /></div>
                   </td>
                </tr>
</table>
					<p><?php submit_button(); ?></p>
        </form>
		
    <form action="options.php" method="post">
            <?php settings_fields( 'news_ticker_benaceur_group' ); ?>
	  <input type="hidden"  name="ntb_group_reset" value="1" <?php if(empty($ntb_group_reset) ) { echo 'checked="checked"'; } ?>/>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'news-ticker-benaceur');?>" class="button-secondary" />
    </form>
</br>
<center><div class="to-tr3"></div></center>
<!--form: NTBForm2-->
<form name="NTBForm2" method="post" action="options.php" >
            <?php settings_fields( 'news_ticker_benaceur_group_anim'); 
				do_settings_sections( 'news_ticker_benaceur_group_anim' );
			?>
<table class="form-table">
                 <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Animation', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select onchange='this.form.submit()' id="dropdown" style="min-width:100px;text-align:center;"  name="news_ticker_benaceur_style" class="news-ticker-benaceur-color-inp">
				<option value="fadein" <?php selected('fadein', $ntb_st); ?>><?php _e('FadeIn', 'news-ticker-benaceur'); ?></option>
				<option value="TickerNTB" <?php selected('TickerNTB', $ntb_st); ?>><?php _e('Typing', 'news-ticker-benaceur'); ?></option>
				<option value="FadeNTB" <?php selected('FadeNTB', $ntb_st); ?>><?php _e('Fade', 'news-ticker-benaceur'); ?></option>
				<option value="SlideNTB" <?php selected('SlideNTB', $ntb_st); ?>><?php _e('Slide', 'news-ticker-benaceur'); ?></option>
				<option value="Scroll_Up_NTB" <?php selected('Scroll_Up_NTB', $ntb_st); ?>><?php _e('Slide-Up-Down', 'news-ticker-benaceur'); ?></option>
				<option value="ScrollNTB" <?php selected('ScrollNTB', $ntb_st); ?>><?php _e('Scroll-H', 'news-ticker-benaceur'); ?></option></select></div>
                </tr>
</table>
      <?php include ('includes/option-anim.php'); ?>
</form>
<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'news-ticker-benaceur'); ?>" onclick="javascript:sender()" /></p>
<!--form: NTBForm2-->
    <form action="options.php" method="post">
            <?php settings_fields( 'news_ticker_benaceur_group_anim' ); ?>
	  <input type="hidden"  name="ntb_group_anim_reset" value="1" <?php if(empty($ntb_group_anim_reset) ) { echo 'checked="checked"'; } ?>/>
      <input type="submit" value="<?php _e('Click to reset Properties animations', 'news-ticker-benaceur');?>" class="button-secondary" />
    </form>
</br><center><div class="to-tr3"></div></center></br>
<div id="news-ticker-benaceur-font">
  <form id="myOptionsForm4" method="post" action="options.php" >
            <?php settings_fields( 'news_ticker_benaceur_group_sty'); 
				do_settings_sections( 'news_ticker_benaceur_group_sty' );
			?>
	<div class="option-box">
<label><b><font face="Arial" size="4"><?php _e('Settings of style', 'news-ticker-benaceur');?>:</font></b></label></br></br>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="news_ticker_benaceur_color_back_" id="news-ticker-benaceur-colorScheme_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_color_back; ?>"  />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-colorScheme_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Background color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_color_text_back; ?>" name="news_ticker_benaceur_color_text_back" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-txtclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Text color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="news_ticker_benaceur_color_back_title" id="news-ticker-benaceur-background2clr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_color_back_title; ?>"  />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-background2clr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Background color of title",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="news_ticker_benaceur_color_text_title" id="news-ticker-benaceur-TextTitleclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_color_text_title; ?>"  />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-TextTitleclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Text color of title (if animation pulsate is disabled)",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-borderclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_color_border; ?>" name="news_ticker_benaceur_color_border" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-borderclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Border color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-borderclr-title_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_color_border_title; ?>" name="news_ticker_benaceur_color_border_title" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-borderclr-title_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Border color (Title)",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-hoverclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_a_hover; ?>" name="news_ticker_benaceur_a_hover" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-hoverclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Hover color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_border_title; ?>" name="news_ticker_benaceur_border_title" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border (Title)",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_border_top; ?>" name="news_ticker_benaceur_border_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border top",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_border_bottom; ?>" name="news_ticker_benaceur_border_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border bottom",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_border_right; ?>" name="news_ticker_benaceur_border_right" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border right",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_border_left; ?>" name="news_ticker_benaceur_border_left" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border left",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_border_radius; ?>" name="news_ticker_benaceur_border_radius" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border radius",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_opacity; ?>" name="news_ticker_benaceur_opacity" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The level of transparency 1-0.1",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_width; ?>" name="news_ticker_benaceur_width" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Width by adding: px or %",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_height; ?>" name="news_ticker_benaceur_height" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Height",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_line_height_title; ?>" name="news_ticker_benaceur_line_height_title" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("line height (Title)",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_width_title_background; ?>" name="news_ticker_benaceur_width_title_background" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Width of title background",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_padding_top; ?>" name="news_ticker_benaceur_padding_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding top",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_padding_bottom; ?>" name="news_ticker_benaceur_padding_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding bottom",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_padding_top_title; ?>" name="news_ticker_benaceur_padding_top_title" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding top (Title)",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_margin_top; ?>" name="news_ticker_benaceur_margin_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin top",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_margin_bottom; ?>" name="news_ticker_benaceur_margin_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin bottom",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="news-ticker-benaceur-colwrap2">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_font_family; ?>" name="news_ticker_benaceur_font_family" />
						&nbsp;&nbsp;&nbsp;&nbsp;<?php _e("Font family",'news-ticker-benaceur'); ?> /
                               <input type="checkbox"  value="enable" <?php checked('enable', get_option( 'news_ticker_benaceur_disable_this_font' )); ?> name="news_ticker_benaceur_disable_this_font" />
                        <?php _e("Disable this font: DroidKufi_Ben ",'news-ticker-benaceur'); ?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_font_size; ?>" name="news_ticker_benaceur_font_size" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font size",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select  name="news_ticker_benaceur_font_weight" class="news-ticker-benaceur-color-inp"><option value="normal" <?php selected('normal', $ntb_font_weight); ?>><?php _e('Normal', 'news-ticker-benaceur'); ?></option><option value="bold" <?php selected('bold', $ntb_font_weight); ?>><?php _e('Bold', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font weight",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select  name="news_ticker_benaceur_text_shadow" class="news-ticker-benaceur-color-inp"><option value="no" <?php selected('no', $ntb_text_shadow); ?>><?php _e('no', 'news-ticker-benaceur'); ?></option><option value="5px 5px 5px" <?php selected('5px 5px 5px', $ntb_text_shadow); ?>><?php _e('yes', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-textshadowclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_text_shadow_color; ?>" name="news_ticker_benaceur_text_shadow_color" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-textshadowclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select  name="news_ticker_benaceur_box_shadow" class="news-ticker-benaceur-color-inp"><option value="no" <?php selected('no', $ntb_box_shadow); ?>><?php _e('no', 'news-ticker-benaceur'); ?></option><option value="0px 1px 3px" <?php selected('0px 1px 3px', $ntb_box_shadow); ?>><?php _e('yes', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-boxshadowclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_box_shadow_color; ?>" name="news_ticker_benaceur_box_shadow_color" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-boxshadowclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo $ntb_box_shadow_v; ?>" name="news_ticker_benaceur_box_shadow_v" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow v",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
</br><div class="to-tr2"></div></br>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3">
						<select id="NTBshowelemselect" style="min-width:137px;text-align:center;"  name="news_ticker_benaceur_styles_options_p" class="news-ticker-benaceur-color-inp">
						<option value="theme_one" <?php selected('theme_one', $ntb_styles_options_p); ?>><?php _e('Orange Theme', 'news-ticker-benaceur'); ?></option>
						<option value="theme_custom" <?php selected('theme_custom', $ntb_styles_options_p); ?>><?php _e('Custom Theme', 'news-ticker-benaceur'); ?></option>
						<option value="theme_standard" <?php selected('theme_standard', $ntb_styles_options_p); ?>><?php _e('Standard theme', 'news-ticker-benaceur'); ?></option>
						</select></div>
						</div></div>
						</td>
						<div class="colwrap-display">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><?php _e("Styles options page",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					      <?php  require ('includes/news-ticker-benaceur-styles-p-options.php'); ?>
</br><div class="to-tr2"></div></br>
                <tr>  
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_hide_icon_evol_plug" value="1" <?php if( $ntb_hide_icon_evol_plug) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       &nbsp;&nbsp;&nbsp; <td style="font-size: 13px;font-weight:normal;"><?php _e('Hide the plugin rating icon', 'news-ticker-benaceur'); ?></td>
				   </td>
                </tr>

					</br><p><?php submit_button(); ?></p>
				</div>	
			</form>
    <form action="options.php" method="post">
            <?php settings_fields( 'news_ticker_benaceur_group_sty' ); ?>
	  <input type="hidden"  name="ntb_group_sty_reset" value="1" <?php if(empty($ntb_group_sty_reset) ) { echo 'checked="checked"'; } ?>/>
      <input type="submit" value="<?php _e('Click to reset style properties plugin', 'news-ticker-benaceur');?>" class="button-secondary" />
    </form>
</br><div class="to-tr"></div>
    <form action="options.php" method="post">
            <?php
			settings_fields( 'news_ticker_benaceur_group_op' ); 
			do_settings_sections( 'news_ticker_benaceur_group_op' );
			?>
<table style="margin-top:20px;" >
	
					<tr>
						<td>
                   <input type="radio" name="news_ticker_benaceur_delete_all_options" value="delete_opt" <?php if( $ntb_delete_all_options == 'delete_opt')echo 'checked';?> >
                    <td><?php _e("Remove all settings and data of the plugin from database when the plugin is disabled",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="news_ticker_benaceur_delete_all_options" value="no_delete_opt" <?php if( $ntb_delete_all_options == 'no_delete_opt')echo 'checked';?> >
						</td>
                   <td><?php _e("Do not delete",'news-ticker-benaceur'); ?></td>
					</tr>
</table>
					<p><?php submit_button(); ?></p>
    </form>
</br>
    <form action="options.php" method="post">
            <?php settings_fields( 'news_ticker_benaceur_all_reset' ); 
			?>
	  <input type="hidden"  name="ntb_all_reset" value="1" <?php if(empty($ntb_all_reset) ) { echo 'checked="checked"'; } ?>/>
      <input type="submit" value="<?php _e('Reset all settings', 'news-ticker-benaceur');?>" class="button-secondary" />
    </form>
</br>
    </div></div>
<?php if(empty($ntb_hide_icon_evol_plug)) {?>
<div class="hov-button-primary-sub"><div class="button button-primary"><a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/news-ticker-benaceur?filter=5"><?php _e('Do not forget to rate the plugin', 'news-ticker-benaceur');?></a></div></div>
<?php } ?>
	<a href="#top"><div id="to-top"></div></a>
	
<style type="text/css">
#to-top {
  height:60px;
  width:60px;
  <?php if ( is_rtl() ) { ?>
  background: url(<?php echo '' . plugins_url( 'admin/top-r.png', __FILE__ ) . ''; ?>) no-repeat ;
  float:left;
  margin-left:100px;
  <?php } else { ?>
  background: url(<?php echo '' . plugins_url( 'admin/top-l.png', __FILE__ ) . ''; ?>) no-repeat ;
  float:right;
  margin-right:60px;
  <?php } ?>
  }
#NTBshowdiv{display:none;}
.hidden-selected-fadein{display:none;}
</style>

	  <?php if ($GLOBALS['pagenow'] == 'options-general.php' && $_GET['page'] == 'news-ticker-benaceur') { 
        	if (get_option('news_ticker_benaceur_styles_options_p') == 'theme_one') { 
	        include ('admin/news-ticker-benaceur-admin-one.php'); 
	        } elseif (get_option('news_ticker_benaceur_styles_options_p') == 'theme_custom' ) {
		    include ('admin/news-ticker-benaceur-admin-custom.php');
	        } elseif (get_option('news_ticker_benaceur_styles_options_p') == 'theme_standard' ) {
		    include ('admin/news-ticker-benaceur-admin-stand.php');
		}
		?>

<script language="JavaScript">
function setVisibility_ntb(id) {
if(document.getElementById('bt-ntb').value=='<?php _e('Hide this list', 'news-ticker-benaceur'); ?>'){
document.getElementById('bt-ntb').value = '<?php _e('Display all cat', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt-ntb').value = '<?php _e('Hide this list', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function tsetVisibility_ntb(id) {
if(document.getElementById('tbt-ntb').value=='<?php _e('Hide Slide-Up-Down', 'news-ticker-benaceur'); ?>'){
document.getElementById('tbt-ntb').value = '<?php _e('Settings Slide-Up-Down', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('tbt-ntb').value = '<?php _e('Hide Slide-Up-Down', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function thsetVisibility_ntb(id) {
if(document.getElementById('thbt-ntb').value=='<?php _e('Hide FadeIn', 'news-ticker-benaceur'); ?>'){
document.getElementById('thbt-ntb').value = '<?php _e('Settings FadeIn', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('thbt-ntb').value = '<?php _e('Hide FadeIn', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function fsetVisibility_ntb(id) {
if(document.getElementById('fbt-ntb').value=='<?php _e('Hide Typing', 'news-ticker-benaceur'); ?>'){
document.getElementById('fbt-ntb').value = '<?php _e('Settings Typing', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('fbt-ntb').value = '<?php _e('Hide Typing', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function fvsetVisibility_ntb(id) {
if(document.getElementById('fvbt-ntb').value=='<?php _e('Hide Fade', 'news-ticker-benaceur'); ?>'){
document.getElementById('fvbt-ntb').value = '<?php _e('Settings Fade', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('fvbt-ntb').value = '<?php _e('Hide Fade', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function sxsetVisibility_ntb(id) {
if(document.getElementById('sxbt-ntb').value=='<?php _e('Hide Slide', 'news-ticker-benaceur'); ?>'){
document.getElementById('sxbt-ntb').value = '<?php _e('Settings Slide', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('sxbt-ntb').value = '<?php _e('Hide Slide', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function sevsetVisibility_ntb(id) {
if(document.getElementById('sevbt-ntb').value=='<?php _e('Hide Scroll-H', 'news-ticker-benaceur'); ?>'){
document.getElementById('sevbt-ntb').value = '<?php _e('Settings Scroll-H', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('sevbt-ntb').value = '<?php _e('Hide Scroll-H', 'news-ticker-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script>
var elem = document.getElementById("NTBshowelemselect");
elem.onchange = function(){
    var hiddenDiv = document.getElementById("NTBshowdiv");
    hiddenDiv.style.display = (this.value != "theme_custom") ? "none":"block";
};
</script>

<script type="text/javascript">
function sender() {
    document.forms["NTBForm2"].submit();
	return true;
}
</script>

<?php
        }

}	
