<?php
add_action('admin_notices', 'NTB_notice');

function NTB_notice() {

if ( current_user_can( 'administrator' ) )
{

	global $current_user;
	$user_id = $current_user->ID;
    $nden_n = ntb_25_04_15_en_ntb;
	
	if ( ! get_user_meta($user_id, 'NTB_notice_ignore_n') ) {
		    ?>
			<div class="updated" id="<?php echo $nden_n;  ?>" style="margin-top:40px;"><p>
			<span class="hov-mib-en" onmouseup="setcookie('<?php echo $nden_n;  ?>',1)" style="color:#009999;"><strong><?php _e('Hide', 'news-ticker-benaceur'); ?> &nbsp;</strong></span>
			<?php _e('After this update Click on ctl+F5 to purge the browser cache ( For those who have installed the previous version(s) only )', 'news-ticker-benaceur'); ?>
			</p></div>
			
<style>.hov-mib-en:hover {cursor:pointer;}</style>			
			
<script type="text/javascript">
function CheckCookieNab(<?php echo $nden_n;  ?>){
 if (cookie(<?php echo $nden_n;  ?>)){
  document.getElementById(<?php echo $nden_n;  ?>).style.display='none';
 }
}

function setcookie(<?php echo $nden_n;  ?>,days){
 document.cookie=<?php echo $nden_n;  ?>+'=true;expires='+(new Date(new Date().getTime()+(1000*60*60*24*30*12)).toGMTString())+';path=/'; //one years
 document.getElementById(<?php echo $nden_n;  ?>).style.display='none';
}

function cookie(<?php echo $nden_n;  ?>){
 var re=new RegExp(<?php echo $nden_n;  ?>+'[^;]+','i');
 if (document.cookie.match(re)){
  return document.cookie.match(re)[0].split("=")[1];
 }
 return null;
}

 CheckCookieNab('<?php echo $nden_n;  ?>');
</script>

<?php
}
}	
}
?>
