<!-- Typing -->
<div id="fsub-ntb">
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('TimeOut', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_timeout_tickerntb" value="<?php echo $ntb_timeout_tickerntb; ?>" /></div>
                   </td>
                </tr>
</table>
</br></br>
</div>
<input type='button'  id='fbt-ntb' class="button-secondary" value='<?php _e('Settings Typing', 'news-ticker-benaceur'); ?>' onclick="fsetVisibility_ntb('fsub-ntb');";>
<!-- Typing -->

<!-- Fade -->
<div id="fvsub-ntb">
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Speed', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_anim_speed_fade" value="<?php echo $ntb_anim_speed_fade; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('TimeOut', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_timeout_fade" value="<?php echo $ntb_timeout_fade; ?>" /></div>
                   </td>
                </tr>
</table>
</br></br>
</div>
<input type='button'  id='fvbt-ntb' class="button-secondary" value='<?php _e('Settings Fade', 'news-ticker-benaceur'); ?>' onclick="fvsetVisibility_ntb('fvsub-ntb');";>
<!-- Fade -->

<!-- Slide -->
<div id="sxsub-ntb">
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Speed', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_anim_speed_slide" value="<?php echo $ntb_anim_speed_slide; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('TimeOut', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_timeout_slide" value="<?php echo $ntb_timeout_slide; ?>" /></div>
                   </td>
                </tr>
</table>
</br></br>
</div>
<input type='button'  id='sxbt-ntb' class="button-secondary" value='<?php _e('Settings Slide', 'news-ticker-benaceur'); ?>' onclick="sxsetVisibility_ntb('sxsub-ntb');";>
<!-- Slide -->

</br></br>

<!-- Slide-Up-Down -->
<div id="tsub-ntb">
<table class="form-table">
					<tr>
						<td>
                   <input type="radio" name="news_ticker_benaceur_enable_jquerymin_slide_up_down" value="enable_jquery_min_sud" <?php if( $ntb_enable_jquerymin_slide_up_down == 'enable_jquery_min_sud')echo 'checked';?> >
                    <td><?php _e("Enable jquery-min (Disable if you have)",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="news_ticker_benaceur_enable_jquerymin_slide_up_down" value="disable_jquery_min_sud" <?php if( $ntb_enable_jquerymin_slide_up_down == 'disable_jquery_min_sud')echo 'checked';?> >

                   <td><?php _e("Disable jquery-min",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
<tr><td style="padding-top:0;padding-bottom:0;">------------</tr>
					<tr>
						<td>
                   <input type="radio" name="news_ticker_benaceur_disa_img_n_scrollup" value="enable_img_n_scrollup" <?php if( $ntb_disa_img_n_scrollup == 'enable_img_n_scrollup')echo 'checked';?> >
                    <td><?php _e("Enable img next/prev",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="news_ticker_benaceur_disa_img_n_scrollup" value="disable_img_n_scrollup" <?php if( $ntb_disa_img_n_scrollup == 'disable_img_n_scrollup')echo 'checked';?> >
                   <td><?php _e("Disable img next/prev",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
<tr><td style="padding-top:0;padding-bottom:0;">------------</tr>
					<tr>
						<td>
                   <input type="radio" name="news_ticker_benaceur_updown_slide_up_down" value="up_slide_u_d" <?php if( $ntb_updown_slide_up_down == 'up_slide_u_d')echo 'checked';?> >
                    <td><?php _e("Up",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="news_ticker_benaceur_updown_slide_up_down" value="down_slide_u_d" <?php if( $ntb_updown_slide_up_down == 'down_slide_u_d')echo 'checked';?> >
                   <td><?php _e("Down",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
<tr><td style="padding-top:0;padding-bottom:0;">------------</tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Pause on hover', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				
	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_pause_slide_up_down" value="1" <?php if( !empty($ntb_pause_slide_up_down)) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable autostart', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				
	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_autostart_slide_up_down" value="1" <?php if( !empty($ntb_autostart_slide_up_down)) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('TimeOut', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_timeout_slide_up_down" value="<?php echo $ntb_timeout_slide_up_down; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Speed', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_speed_slide_up_down" value="<?php echo $ntb_speed_slide_up_down; ?>" /></div>
                   </td>
                </tr>
</table>
</br></br>
</div>
<input type='button'  id='tbt-ntb' class="button-secondary" value='<?php _e('Settings Slide-Up-Down', 'news-ticker-benaceur'); ?>' onclick="tsetVisibility_ntb('tsub-ntb');";>
<!-- Slide-Up-Down -->

<!-- FadeIn -->
<div id="thsub-ntb">
<table class="form-table">
					<tr>
						<td>
                   <input type="radio" name="news_ticker_benaceur_enable_jquerymin_fadein" value="enable_jquery_min_fa" <?php if( $ntb_enable_jquerymin_fadein == 'enable_jquery_min_fa')echo 'checked';?> >
                    <td><?php _e("Enable jquery-min (Disable if you have)",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="news_ticker_benaceur_enable_jquerymin_fadein" value="disable_jquery_min_fa" <?php if( $ntb_enable_jquerymin_fadein == 'disable_jquery_min_fa')echo 'checked';?> >
						</td>
                   <td><?php _e("Disable jquery-min",'news-ticker-benaceur'); ?></td>
					</tr>
<tr><td style="padding-top:0;padding-bottom:0;">------------</tr>
					<tr>
						<td>
                   <input type="radio" name="news_ticker_benaceur_disa_img_n_fadein" value="enable_img_n_fadein" <?php if( $ntb_disa_img_n_fadein == 'enable_img_n_fadein')echo 'checked';?> >
                    <td><?php _e("Enable img next/prev",'news-ticker-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="news_ticker_benaceur_disa_img_n_fadein" value="disable_img_n_fadein" <?php if( $ntb_disa_img_n_fadein == 'disable_img_n_fadein')echo 'checked';?> >
						</td>
                   <td><?php _e("Disable img next/prev",'news-ticker-benaceur'); ?></td>
					</tr>
<tr><td style="padding-top:0;padding-bottom:0;">------------</tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('TimeOut', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_timeout_fadein" value="<?php echo $ntb_timeout_fadein; ?>" /></div>
                   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Pause on hover', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				
	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_pause_fadein" value="1" <?php if( !empty($ntb_pause_fadein)) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable autostart', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				
	                    <input type="checkbox" class="switch-input" name="news_ticker_benaceur_autostart_fadein" value="1" <?php if( !empty($ntb_autostart_fadein)) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
</table>
</br></br>
</div>
<input type='button'  id='thbt-ntb' class="button-secondary" value='<?php _e('Settings FadeIn', 'news-ticker-benaceur'); ?>' onclick="thsetVisibility_ntb('thsub-ntb');";>
<!-- FadeIn -->

<!-- Scroll-H -->
<div id="sevsub-ntb">
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Speed', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="news_ticker_benaceur_speed_scrollntb" value="<?php echo $ntb_speed_scrollntb; ?>" /></div>
                   </td>
                </tr>
</table>
</br></br>
</div>
<input type='button'  id='sevbt-ntb' class="button-secondary" value='<?php _e('Settings Scroll-H', 'news-ticker-benaceur'); ?>' onclick="sevsetVisibility_ntb('sevsub-ntb');";>
<!-- Scroll-H -->
