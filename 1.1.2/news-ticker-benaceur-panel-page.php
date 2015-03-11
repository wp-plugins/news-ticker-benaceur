<?php

function news_ticker_benaceur_page_options() {
	
	$settings = get_settings_ntb();
		global $wp_roles;

		if ( !isset( $wp_roles ) ) {
			$wp_roles = new WP_Roles();
		}
		$roles = $wp_roles->get_names();
        $roles = array_map( 'translate_user_role', $roles );
		
        include ('news-ticker-benaceur-panel-var.php');
		?>
    <div id="wpcontent-benaceur-nab"><div id="wpcontent-benaceur-nab-top"></div>
            <h2><?php _e('News-Ticker-Benaceur', 'news-ticker-benaceur'); ?></h2>
<?php if (isset($_GET['settings-updated']) && $GLOBALS['pagenow'] == 'options-general.php' && $_GET['page'] == 'news-ticker-benaceur'){ ?>
<style>#setting-error-settings_updated {display:none;}</style>
    <div  id="message" class="updated" style="background:#B3006B;color:white;margin:20px 0 20px 0;">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>	
<div id="col-nontb">
<p><?php _e('Note: After activating the plugin Put the following line in the place (in template) where you bar to appear:', 'news-ticker-benaceur'); ?></p>
<div class="code-insert-ntb">&lt;?php if (has_action('wp_news_ticker_benaceur')) wp_news_ticker_benaceur_(); ?></div>
<p><?php _e('or put this short code (in post or page):', 'news-ticker-benaceur'); ?></p>
<div class="code-insert-ntb">[wp_news_ticker_benaceur_short_code]</div>
</br><hr>
</div>
        <h3><?php _e('Settings', 'news-ticker-benaceur'); ?></h3>
        <form id="myOptionsForm_ntb" method="post" action="options.php"  >
            <?php settings_fields( 'news_ticker_benaceur_group' ); 
				do_settings_sections( 'news_ticker_benaceur_group' );
			?>

<table class="form-table">
	<tr>
		<td>
    <div class="switch demo1">
                        <input type="checkbox"  value="1" <?php if (get_option( 'news_ticker_benaceur_enable_plug' )) echo 'checked="checked"';  ?> name="news_ticker_benaceur_enable_plug" />
                        <label></label>
	</div>
	<center><div style="margin-top:10px;" ><?php _e("Enable plugin",'news-ticker-benaceur'); ?></div></center>
		</td>
	</tr>
</table>

<center><div class="to-tr2"></div></center>
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
<tr valign="top"><td  scope="row"><?php _e('Enable Notif-Admin-Benaceur on admin bar in frontend', 'news-ticker-benaceur'); ?></td><td><label class="switch-nab"><input type="checkbox" name="news_ticker_benaceur_links_admin_bar_front" class="switch-input" value="1"<?php if( $ntb_links_admin_bar_front) { echo 'checked="checked"'; } ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><td scope="row"><?php _e('Enable Notif-Admin-Benaceur on admin bar in admin panel', 'news-ticker-benaceur'); ?></td><td><label class="switch-nab"><input type="checkbox" name="news_ticker_benaceur_links_admin_bar_admin" class="switch-input" value="1"<?php if( $ntb_links_admin_bar_admin) { echo 'checked="checked"'; } ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
</table>
</div>
</br>
<center><div class="to-tr2"></div></center>
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
<div class="styled-select">
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
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;" type="text" name="news_ticker_benaceur_for_user_id" placeholder="<?php _e( 'Enter here the user id', 'news-ticker-benaceur' ); ?>" value="<?php echo get_option('news_ticker_benaceur_for_user_id'); ?>" /></div>
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
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Choose the category (Leave blank to activate All Categories)', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;" type="text" name="news_ticker_benaceur_for_cat" placeholder="<?php _e( 'Enter here the cat id', 'news-ticker-benaceur' ); ?>" value="<?php echo get_option('news_ticker_benaceur_for_cat'); ?>" />
<div id="sub-ntb">		
<?php
  echo '<div>
<table width="80%" cellspacing="1" style="border:1px solid #999999;background:#D70081;">
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
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('The title', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;max-width:250px;" type="text" name="news_ticker_benaceur_title" value="<?php if (!empty($ntb_title)) { echo $ntb_title; } else {echo "Latest news";} ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Numbre of posts', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_num_posts" value="<?php if (!empty($ntb_num_posts)) { echo $ntb_num_posts; } else {echo "10";} ?>" /></div>
                   </td>
                </tr>
                 <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Animation', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select style="min-width:100px;text-align:center;"  name="news_ticker_benaceur_style" class="news-ticker-benaceur-color-inp">
				<option value="TickerNTB" <?php $ntb_st = get_option( 'news_ticker_benaceur_style' ); selected('TickerNTB', $ntb_st); ?>><?php _e('Ticker-NTB', 'news-ticker-benaceur'); ?></option>
				<option value="FadeNTB" <?php selected('FadeNTB', $ntb_st); ?>><?php _e('Fade-NTB', 'news-ticker-benaceur'); ?></option>
				<option value="SlideNTB" <?php selected('SlideNTB', $ntb_st); ?>><?php _e('Slide-NTB', 'news-ticker-benaceur'); ?></option>
				<option value="ScrollNTB" <?php selected('ScrollNTB', $ntb_st); ?>><?php _e('Scroll-NTB', 'news-ticker-benaceur'); ?></option></select></div>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Direction', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select style="min-width:100px;text-align:center;"  name="news_ticker_benaceur_dir" class="news-ticker-benaceur-color-inp">
				<option value="ltr" <?php $ntb_dir = get_option( 'news_ticker_benaceur_dir' ); selected('ltr', $ntb_dir); ?>><?php _e('LTR', 'news-ticker-benaceur'); ?></option>
				<option value="rtl" <?php selected('rtl', $ntb_dir); ?>><?php _e('RTL', 'news-ticker-benaceur'); ?></option>
                </tr>
            </table>
<p><?php submit_button(); ?></p>
        </form>
    <form action="options.php" method="post">
            <?php settings_fields( 'news_ticker_benaceur_group' ); 
				do_settings_sections( 'news_ticker_benaceur_group' );
			?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'news-ticker-benaceur');?>" class="button-secondary" />
    </form>
            </br><center><div class="to-tr2"></div></center></br>
<div id="news-ticker-benaceur-font">
  <form id="myOptionsForm4" method="post" action="options.php" >
            <?php settings_fields( 'news_ticker_benaceur_group_sty'); 
				do_settings_sections( 'news_ticker_benaceur_group_sty' );
			?>
	<div class="option-box">
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="news_ticker_benaceur_color_back_" id="news-ticker-benaceur-colorScheme_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_color_back)) { echo $ntb_color_back; } else {echo "#FFFFFF";} ?>"  />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-colorScheme_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Background color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>" name="news_ticker_benaceur_color_text_back" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-txtclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Text color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="news_ticker_benaceur_color_back_title" id="news-ticker-benaceur-background2clr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>"  />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-background2clr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Background color of title",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="news_ticker_benaceur_color_text_title" id="news-ticker-benaceur-TextTitleclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>"  />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-TextTitleclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Text color of title",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-borderclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_color_border)) { echo $ntb_color_border; } else {echo "#CE1031";} ?>" name="news_ticker_benaceur_color_border" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-borderclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Border color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_border_top)) { echo $ntb_border_top; } else {echo "0";} ?>" name="news_ticker_benaceur_border_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border top",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_border_bottom)) { echo $ntb_border_bottom; } else {echo "2";} ?>" name="news_ticker_benaceur_border_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border bottom",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_border_right)) { echo $ntb_border_right; } else {echo "0";} ?>" name="news_ticker_benaceur_border_right" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border right",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_border_left)) { echo $ntb_border_left; } else {echo "0";} ?>" name="news_ticker_benaceur_border_left" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border left",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_border_radius)) { echo $ntb_border_radius; } else {echo "1";} ?>" name="news_ticker_benaceur_border_radius" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border radius",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_opacity)) { echo $ntb_opacity; } else {echo "1";} ?>" name="news_ticker_benaceur_opacity" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The level of transparency 1-0.1",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_width)) { echo $ntb_width; } else {echo "100%";} ?>" name="news_ticker_benaceur_width" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Width by adding: px or %",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_padding_top)) { echo $ntb_padding_top; } elseif ($ntb_padding_top == '0') {echo "0";} else {echo "1";} ?>" name="news_ticker_benaceur_padding_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding top",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_padding_bottom)) { echo $ntb_padding_bottom; } else {echo "0";} ?>" name="news_ticker_benaceur_padding_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding bottom",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_padding_top_title)) { echo $ntb_padding_top_title; } elseif ($ntb_padding_top_title == '0') {echo "0";} else {echo "2";} ?>" name="news_ticker_benaceur_padding_top_title" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding top (Title)",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_margin_top)) { echo $ntb_margin_top; } else {echo "0";} ?>" name="news_ticker_benaceur_margin_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin top",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_margin_bottom)) { echo $ntb_margin_bottom; } else {echo "25";} ?>" name="news_ticker_benaceur_margin_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin bottom",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="news-ticker-benaceur-colwrap2">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_font_family)) { echo $ntb_font_family; } else {echo "DroidKufi_Ben, Arial";} ?>" name="news_ticker_benaceur_font_family" />
						&nbsp;&nbsp;&nbsp;&nbsp;<?php _e("Font family",'news-ticker-benaceur'); ?> /
                               <input type="checkbox"  value="enable" <?php checked('enable', get_option( 'news_ticker_benaceur_disable_this_font' )); ?> name="news_ticker_benaceur_disable_this_font" />
                        <?php _e("Disable this font: DroidKufi_Ben ",'news-ticker-benaceur'); ?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_font_size)) { echo $ntb_font_size; } else {echo "14";} ?>" name="news_ticker_benaceur_font_size" />
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
								<input type="text" id="news-ticker-benaceur-textshadowclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_text_shadow_color)) { echo $ntb_text_shadow_color; } else {echo "#000000";} ?>" name="news_ticker_benaceur_text_shadow_color" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-textshadowclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select  name="news_ticker_benaceur_box_shadow" class="news-ticker-benaceur-color-inp"><option value="0px 1px 3px" <?php selected('0px 1px 3px', $ntb_box_shadow); ?>><?php _e('yes', 'news-ticker-benaceur'); ?></option><option value="no" <?php selected('no', $ntb_box_shadow); ?>><?php _e('no', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-boxshadowclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_box_shadow_color)) { echo $ntb_box_shadow_color; } else {echo "#B5B5B5";} ?>" name="news_ticker_benaceur_box_shadow_color" />
								<div class="news-ticker-benaceur-colsel news-ticker-benaceur-boxshadowclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow color",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php if (!empty($ntb_box_shadow_v)) { echo $ntb_box_shadow_v; } else {echo "0";} ?>" name="news_ticker_benaceur_box_shadow_v" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow v",'news-ticker-benaceur'); ?> </td></div></br>
					</tr>
                    <div class="to-tr"></div>
					</br></br><p><?php submit_button(); ?></p>
				</div>	
			</form>
    <form action="options.php" method="post">
            <?php
			settings_fields( 'news_ticker_benaceur_group_sty' ); 
			do_settings_sections( 'news_ticker_benaceur_group_sty' );
			?>
      <input type="submit" value="<?php _e('Click to reset style properties plugin', 'news-ticker-benaceur');?>" class="button-secondary" />
      <input type="hidden" name="news_ticker_benaceur_style" value="style1" <?php echo get_option( 'news_ticker_benaceur_style' ) == 'style1'; ?> >
    </form>
    </div></div>
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
</style>

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

<?php
}	
