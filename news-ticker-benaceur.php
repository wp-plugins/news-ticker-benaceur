<?php
/** 
Plugin Name: news ticker benaceur
Plugin URI: http://benaceur-php.com/
Description: This plugin allow you to display the latest news or latest articles in a bar with four beautiful animations...
Version: 2.1.5
Author: benaceur
Author URI: http://benaceur-php.com/
License: GPL2
*/

define("NEWS_TICKER_BENACEUR", "news-ticker-benaceur");

// Add settings link on plugin page
function news_ticker_benaceur_action_links($links){
	$links[] = '<a href="'.get_admin_url(null, 'options-general.php?page='.NEWS_TICKER_BENACEUR.'').'">'.__("Settings", 'news-ticker-benaceur').'</a>';
	return $links;
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'news_ticker_benaceur_action_links');
// Add settings link on plugin page


load_plugin_textdomain( 'news-ticker-benaceur', false, basename( dirname( __FILE__ ) ) . '/lang/' );

add_action('admin_init', 'news_ticker_benaceur_register_options');

  add_action('admin_menu', 'menu_news_ticker_benaceur');
  function menu_news_ticker_benaceur() {
  if (function_exists('add_options_page')) {
  $plugin_page_options = add_options_page('news-ticker-benaceur', 'News-Ticker-Benaceur', 'administrator', 'news-ticker-benaceur', 'news_ticker_benaceur_page_options');
  }
}

  function news_ticker_benaceur_register_options() { 
	
  register_setting('news_ticker_benaceur_group_op', 'news_ticker_benaceur_delete_all_options');
  
  add_option( 'news_ticker_benaceur_title_anim_pulsate', '1');
  add_option( 'news_ticker_benaceur_enable_plug', '1');
  add_option( 'news_ticker_benaceur_style', 'fadein');

  global $AllOptionsNTB;	
  $AllOptionsNTB = array(
  'news_ticker_benaceur_for_visitors',
  'news_ticker_benaceur_links_admin_bar_front',
  'news_ticker_benaceur_links_admin_bar_admin',  
  'news_ticker_benaceur_enable_plug',
  'news_ticker_benaceur_for_users',
  'news_ticker_benaceur_for_role_x',
  'news_ticker_benaceur_for_user_id',
  'news_ticker_benaceur_links_admin_bar_menu',
  'news_ticker_benaceur_dir',
  'news_ticker_benaceur_for_cat',
  'news_ticker_benaceur_for_all_expt_admin',
  'news_ticker_benaceur_title',
  'news_ticker_benaceur_num_posts',
  'news_ticker_benaceur_disable_title',
  'news_ticker_benaceur_latest_p_c',
  'news_ticker_benaceur_include_exclude_id',
  'news_ticker_benaceur_expt_txt_title',
  'news_ticker_benaceur_expt_txt_comm',
  'news_ticker_benaceur_title_anim_pulsate'
   );
  foreach($AllOptionsNTB as $optionN_NTB) {
    register_setting('news_ticker_benaceur_group', $optionN_NTB);
}	

  global $AllOptionssNTB;	
  $AllOptionssNTB = array(
  'news_ticker_benaceur_color_back_',
  'news_ticker_benaceur_color_back_title',
  'news_ticker_benaceur_color_text_back',
  'news_ticker_benaceur_color_text_title',
  'news_ticker_benaceur_color_border',
  'news_ticker_benaceur_border_top',
  'news_ticker_benaceur_border_bottom',
  'news_ticker_benaceur_border_right',
  'news_ticker_benaceur_border_left',
  'news_ticker_benaceur_border_radius',
  'news_ticker_benaceur_opacity',
  'news_ticker_benaceur_font_family',
  'news_ticker_benaceur_font_size',
  'news_ticker_benaceur_width',
  'news_ticker_benaceur_padding_top',
  'news_ticker_benaceur_padding_bottom',
  'news_ticker_benaceur_margin_top',
  'news_ticker_benaceur_margin_bottom',
  'news_ticker_benaceur_font_weight',
  'news_ticker_benaceur_text_shadow',
  'news_ticker_benaceur_text_shadow_color',
  'news_ticker_benaceur_box_shadow',
  'news_ticker_benaceur_box_shadow_color',
  'news_ticker_benaceur_box_shadow_v',
  'news_ticker_benaceur_disable_this_font',
  'news_ticker_benaceur_padding_top_title',
  'news_ticker_benaceur_default',
  'news_ticker_benaceur_height',
  'news_ticker_benaceur_a_hover',
  'news_ticker_benaceur_styles_options_p',
  'news_ticker_benaceur_cust_color_back',
  'news_ticker_benaceur_cust_color_font',
  'news_ticker_benaceur_cust_color_back_input',
  'news_ticker_benaceur_cust_color_back_msg',
  'news_ticker_benaceur_cust_color_switch_input',
  'news_ticker_benaceur_hide_icon_evol_plug',
  'news_ticker_benaceur_width_title_background'
   );
  foreach($AllOptionssNTB as $optionS_NTB ) {
    register_setting('news_ticker_benaceur_group_sty', $optionS_NTB);
}

// animation
  global $AllOptions_anim_NTB;	
  $AllOptions_anim_NTB = array(
  'news_ticker_benaceur_timeout_tickerntb',
  'news_ticker_benaceur_anim_speed_fade',
  'news_ticker_benaceur_anim_speed_slide',
  'news_ticker_benaceur_timeout_fade',
  'news_ticker_benaceur_timeout_slide',
  'news_ticker_benaceur_speed_scrollntb',
  'news_ticker_benaceur_enable_jquerymin_slide_up_down',
  'news_ticker_benaceur_enable_jquerymin_fadein',
  'news_ticker_benaceur_disa_img_n_scrollup',
  'news_ticker_benaceur_disa_img_n_fadein',
  'news_ticker_benaceur_style',
  'news_ticker_benaceur_timeout_slide_up_down',
  'news_ticker_benaceur_speed_slide_up_down',
  'news_ticker_benaceur_updown_slide_up_down',
  'news_ticker_benaceur_pause_slide_up_down',
  'news_ticker_benaceur_autostart_slide_up_down',
  'news_ticker_benaceur_timeout_fadein',
  'news_ticker_benaceur_pause_fadein',
  'news_ticker_benaceur_autostart_fadein'
   );
  foreach($AllOptions_anim_NTB as $optionN_anim_NTB) {
    register_setting('news_ticker_benaceur_group_anim', $optionN_anim_NTB);
}	
// animation
	
	    if ($GLOBALS['pagenow'] == 'options-general.php' && $_GET['page'] == 'news-ticker-benaceur'){
		wp_enqueue_script ('jquery');
		wp_enqueue_script('farbtastic');
		wp_enqueue_script('news-ticker-benaceur-admin',plugins_url('admin/news-ticker-benaceur-admin.js',__FILE__), array('jquery'));
		if (get_option('news_ticker_benaceur_styles_options_p') == 'theme_one' || get_option('news_ticker_benaceur_styles_options_p') == '' ) {
		wp_enqueue_style('news-ticker-benaceur-admin',plugins_url('admin/news-ticker-benaceur-admin-one.css',__FILE__), false, '' );
		} elseif (get_option('news_ticker_benaceur_styles_options_p') == 'theme_standard' ) {
		wp_enqueue_style('news-ticker-benaceur-admin',plugins_url('admin/news-ticker-benaceur-admin-stand.css',__FILE__), false, '' );
		}
		wp_enqueue_style('farbtastic');	
	}
}

if (get_option('news_ticker_benaceur_enable_plug')):

    function wp_news_ticker_benaceur_() {  
        do_action('wp_news_ticker_benaceur');
       }

if(!function_exists('expt_title_text_NTB')) {
	function expt_title_text_NTB($text, $length = 0) {
		if (defined('MB_OVERLOAD_STRING')) {
		  $text = @html_entity_decode($text, ENT_QUOTES, get_option('blog_charset'));
		 	if (mb_strlen($text) > $length) {
				return htmlentities(mb_substr($text,0,$length), ENT_COMPAT, get_option('blog_charset')).'...';
		 	} else {
				return htmlentities($text, ENT_COMPAT, get_option('blog_charset'));
		 	}
		} else {
			$text = @html_entity_decode($text, ENT_QUOTES, get_option('blog_charset'));
		 	if (strlen($text) > $length) {
				return htmlentities(substr($text,0,$length), ENT_COMPAT, get_option('blog_charset')).'...';
		 	} else {
				return htmlentities($text, ENT_COMPAT, get_option('blog_charset'));
		 	}
		}
	}
}
	   
//[wp_news_ticker_benaceur_short_code]
    function shortcode_ntb_func( $atts ){
	  return wp_news_ticker_benaceur_();
   }
   add_shortcode( 'wp_news_ticker_benaceur_short_code', 'shortcode_ntb_func' );
//[wp_news_ticker_benaceur_short_code]

  add_action('wp_head', 'wp_rest_news_ticker_benaceur');
  function wp_rest_news_ticker_benaceur() { 
  $go_ea = get_option('news_ticker_benaceur_for_all_expt_admin');
  $admin_ntb = current_user_can( 'administrator' ); 
  
	if ( ( role_cap_ntb() && all_users_ntb() && id_user_ntb() && is_user_logged_in() )  || ( visitors_ntb() && !is_user_logged_in() ) || $go_ea )
    {
if (!$go_ea || $admin_ntb) {
		include('news-ticker-benaceur-page.php');
}		
    } 
}

    function news_ticker_benaceur_scripts_() {
	$dir = get_option( 'news_ticker_benaceur_dir' );
	if ( !is_admin() ) {
			wp_enqueue_script('jquery');
		    wp_enqueue_script('jquery.anim-ntb',plugins_url('js/jquery.anim-ntb.js',__FILE__), array('jquery'));
			if ($dir == 'ltr' || $dir == ''){
			wp_register_script('jquery.ntb-l', plugins_url('js/jquery.ntb-l.js',__FILE__), '', '' );
			wp_enqueue_script('jquery.ntb-l');
			} elseif ( $dir == 'rtl') {
			wp_register_script('jquery.ntb-r', plugins_url('js/jquery.ntb-r.js',__FILE__), '', '' );
			wp_enqueue_script('jquery.ntb-r');
			}	
	}
}
    add_action('wp_enqueue_scripts', 'news_ticker_benaceur_scripts_');

endif; // news_ticker_benaceur_enable_plug	

	function get_settings_ntb( $inherit = false ) {

		$settings = array( 
			'rolexcap_ntb' => (array) get_option( 'news_ticker_benaceur_for_role_x', array() )
		);

		$settings[ 'rolexcap_ntb' ] = array_map( 'trim', array_unique( array_filter( $settings[ 'rolexcap_ntb' ] ) ) );
		
		return $settings;
		
	}

    function id_user_ntb() {

	$current_user = wp_get_current_user();
	$user_id = get_current_user_id();
	
	$iduser_ntb = explode(',', get_option('news_ticker_benaceur_for_user_id'));
	
	if(is_array($iduser_ntb)) {
		
		foreach($iduser_ntb as $user_id) {
			
			if( $current_user->ID == $user_id ) {
				
			return false;
			}
		}
	}
	
			return true;
}

    function role_cap_ntb() {

        $settings = get_settings_ntb( true );	
		$rolexcap_ntb = $settings[ 'rolexcap_ntb' ];

		if ( !empty( $rolexcap_ntb ) ) {
			if ( !is_array( $rolexcap_ntb ) ) {
				$rolexcap_ntb = array( $rolexcap_ntb );
			}

			foreach ( $rolexcap_ntb as $role ) {
			
			if ( current_user_can( $role ) ) {
				
	return false;
			}
		}
	}
	
	return true;
}

    function all_users_ntb() {
	
	$loggedin_ntb = get_option('news_ticker_benaceur_for_users');
	
	if($loggedin_ntb) {
		
		if(is_user_logged_in()) {
			
			return false;
		}
	}
	
	return true;
}

    function visitors_ntb() {
	
	$visitorsntb = get_option('news_ticker_benaceur_for_visitors');
	
	if($visitorsntb ) {
			
			return false;
	}
	
	return true;
}

// admin_bar
    add_action( 'admin_bar_menu', 'ntb_links_on_admin_bar', 10155 );
    function ntb_links_on_admin_bar($wp_admin_bar) {

        if (current_user_can( 'manage_options' ) && get_option( 'news_ticker_benaceur_links_admin_bar_front') && !is_admin() && get_option( 'news_ticker_benaceur_enable_plug')) {
if (get_option( 'news_ticker_benaceur_links_admin_bar_menu') == 'menu' || get_option( 'news_ticker_benaceur_links_admin_bar_menu') == '') {
$wp_admin_bar->add_menu( array( 'id' => 'PLB_ntb5', 'title' => __('News Ticker Benaceur'), 'href' => admin_url('/options-general.php?page=news-ticker-benaceur' ) ) );
} elseif (get_option( 'news_ticker_benaceur_links_admin_bar_menu') == 'submenu' ) { 
$wp_admin_bar->add_menu( array( 'parent' => 'appearance', 'id' => 'PLB_ntb6', 'title' => __('News Ticker Benaceur'), 'href' => admin_url('/options-general.php?page=news-ticker-benaceur' ) ) );
}
		} elseif (current_user_can( 'manage_options' ) && get_option( 'news_ticker_benaceur_links_admin_bar_admin') && is_admin() && get_option( 'news_ticker_benaceur_enable_plug'))  {
if (get_option( 'news_ticker_benaceur_links_admin_bar_menu') == 'menu' || get_option( 'news_ticker_benaceur_links_admin_bar_menu') == '') {
$wp_admin_bar->add_menu( array( 'id' => 'PLB_ntb7', 'title' => __('News Ticker Benaceur'), 'href' => admin_url('/options-general.php?page=news-ticker-benaceur' ) ) );
} elseif (get_option( 'news_ticker_benaceur_links_admin_bar_menu') == 'submenu') { 
$wp_admin_bar->add_menu( array( 'parent' => 'site-name', 'id' => 'PLB_ntb8', 'title' => __('News Ticker Benaceur'), 'href' => admin_url('/options-general.php?page=news-ticker-benaceur' ) ) );
}
		}	
}
// admin_bar

    add_action( 'admin_init', 'news_ticker_benaceur_admin_notices' );
    function news_ticker_benaceur_admin_notices() {
    $add_notice_admin = true;
	
	if ( true === $add_notice_admin ) { 
    if ( $GLOBALS['pagenow'] == 'options-general.php' && $_GET['page'] == 'news-ticker-benaceur' ) {
    include ('includes/notices-ntb.php');
    }
	                                  }
	}

        require_once ('news-ticker-benaceur-panel-page.php');

  if ( get_option( 'news_ticker_benaceur_delete_all_options') == 'delete_opt') :
  register_deactivation_hook( __FILE__, 'NTB_plugin_deactivation' );
  function NTB_plugin_deactivation() {
	
  global $AllOptionsNTB;	
  foreach($AllOptionsNTB as $optionN_NTB) {
     delete_option($optionN_NTB);
}

  global $AllOptionssNTB;	
  foreach($AllOptionssNTB as $optionS_NTB ) {
     delete_option($optionS_NTB);
}

  global $AllOptions_anim_NTB;	
  foreach($AllOptions_anim_NTB as $optionN_anim_NTB ) {
     delete_option($optionN_anim_NTB);
}
     delete_option('news_ticker_benaceur_delete_all_options');
}
  endif; // endif news_ticker_benaceur_delete_all_options
