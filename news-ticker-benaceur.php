<?php
/** 
Plugin Name: news ticker benaceur
Plugin URI: http://benaceur-php.com/
Description: This plugin allow you to display the latest news or latest articles in a bar with four beautiful animations...
Version: 1.1
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


load_plugin_textdomain( 'news-ticker-benaceur', false, basename( dirname( __FILE__ ) ) . '/languages/' );

add_action('admin_init', 'news_ticker_benaceur_register_options');

  add_action('admin_menu', 'menu_news_ticker_benaceur');
  function menu_news_ticker_benaceur() {
  if (function_exists('add_options_page')) {
  $plugin_page_options = add_options_page('news-ticker-benaceur', 'News-Ticker-Benaceur', 'administrator', 'news-ticker-benaceur', 'news_ticker_benaceur_page_options');
  }
}

  function news_ticker_benaceur_register_options() { 
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_enable_plug');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_for_users');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_for_visitors');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_for_role_x');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_for_user_id');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_links_admin_bar_menu');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_links_admin_bar_front');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_links_admin_bar_admin');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_dir');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_style');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_for_cat');
    register_setting('news_ticker_benaceur_group', 'news_ticker_benaceur_for_all_expt_admin');
	
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_color_back_');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_color_back_title');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_color_text_back');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_color_text_title');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_color_border');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_border_top');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_border_bottom');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_border_right');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_border_left');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_border_radius');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_opacity');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_font_family');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_font_size');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_width');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_padding_top');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_padding_bottom');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_margin_top');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_margin_bottom');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_font_weight');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_text_shadow');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_text_shadow_color');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_box_shadow');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_box_shadow_color');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_box_shadow_v');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_disable_this_font');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_padding_top_title');
    register_setting('news_ticker_benaceur_group_sty', 'news_ticker_benaceur_default');
	
	    if ($GLOBALS['pagenow'] == 'options-general.php' && $_GET['page'] == 'news-ticker-benaceur'){
		wp_enqueue_script ('jquery');
		wp_enqueue_script('farbtastic');
		wp_enqueue_script('news-ticker-benaceur-admin',plugins_url('admin/news-ticker-benaceur-admin.js',__FILE__), array('jquery'));
		wp_enqueue_style('news-ticker-benaceur-admin',plugins_url('admin/news-ticker-benaceur-admin.css',__FILE__), false, '' );
		wp_enqueue_style('farbtastic');	
	}
}

if (get_option('news_ticker_benaceur_enable_plug')):

    function wp_news_ticker_benaceur_() {  
        do_action('wp_news_ticker_benaceur');
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


        require_once ('news-ticker-benaceur-panel-page.php');
