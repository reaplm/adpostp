<?php
/**
 * AdPost Custom Theme
 *
 */
 /**
 *Register bootstrap and custom scripts
 */
 
function adpost_enqueue_scripts(){
	//register a script like this for a theme
	wp_enqueue_script('tether-js', get_template_directory_uri().'/assets/js/tether-1.3.3/dist/js/tether.min.js', array(),'1.3.3',true);
	wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/js/jquery/jquery-3.2.1.min.js', array(), '3.2.1', true);
	wp_enqueue_script('jquery-validate-js', get_template_directory_uri().'/assets/js/jquery/jquery.validate.js', array(),'1.0.0', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap/js/bootstrap.min.js', array(), '4.0', true);
	wp_enqueue_script('adpost-js', get_template_directory_uri().'/assets/js/script.js', array(),'1.0.0', true);
}
add_action('wp_enqueue_scripts', 'adpost_enqueue_scripts');

function adpost_enqueue_style() {
	wp_enqueue_style( 'custom-styles', get_template_directory_uri(). '/assets/css/custom-styles.css' );
}
add_action( 'login_enqueue_scripts', 'adpost_enqueue_style' );
/**
*Redirect to home page after login
*
*/
function login_redirect_page(){
	return '/wordpress/home/';
}
add_filter('login_redirect', 'login_redirect_page');
/**
*Add node to admin bar
*
*/
function add_post_node($wp_admin_bar){

	$args = array(
		'id' 	=> 'postAd',
		'title' => 'Post Ad',
		'href' 	=> '/wordpress/wp-admin/post-new.php',
		'parent' => 'top-secondary'
	);
	$wp_admin_bar -> add_node($args);
}
add_action('admin_bar_menu', 'add_post_node', 999);
/**
 * Remove WP logo and comments from the Toolbar.
 *
 * @param WP_Admin_Bar $wp_admin_bar WP_Admin Bar instance.
 */
function remove_toolbar_nodes( $wp_admin_bar ) {
    // Remove nodes from admin bar.
    $wp_admin_bar->remove_menu( 'wp-logo' );  
    $wp_admin_bar->remove_node( 'new-content' );
	$wp_admin_bar->remove_node('updates');    
	$wp_admin_bar->remove_node('comments');
	$wp_admin_bar->remove_node('customize');
}
add_action( 'admin_bar_menu', 'remove_toolbar_nodes', 999 );

function change_wpadminbar_colors(){
	$change_wpadminbar_colors = '<style type="text/css">
		#wpadminbar{background-color:#666;}
		#wpadminbar ab-top-menu li, #wpadminbar .ab-item{ color:#666;}
		</style>';
	echo $change_wpadminbar_colors;
}
/* wp-admin area */
/*if ( is_admin() ) {
	add_action( 'admin_head', 'change_adminbar_colors' );
}*/
/* websites */
if ( !is_admin() ) {
	add_action( 'wp_head', 'change_wpadminbar_colors' );
}
// always show admin bar
function pjw_login_adminbar( $wp_admin_bar) {
	if ( !is_user_logged_in() )
	$wp_admin_bar->add_menu( 
		array( 
			'title' => __( 'Log In' ), 
			'href' => wp_login_url(),
			'parent' => 'top-secondary') 
		);
}
add_action( 'admin_bar_menu', 'pjw_login_adminbar' );
add_filter( 'show_admin_bar', '__return_true' , 1000 );

?>