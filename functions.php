<?php

// load javascript files

add_action( 'wp_enqueue_scripts', 'load_js_files' );

function ajax_sendmail() {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$area = $_POST['area'];
$message = $_POST['message'];
echo 'HELLO';

wp_mail('clint@kimronemusdesign.com', 'NEW CONTACT', $message);

die();
	
}



function load_js_files() {
wp_deregister_script('jquery');
wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
wp_enqueue_script('jquery');
wp_register_script('site-script',get_stylesheet_directory_uri().'/js/site-script.js');
wp_enqueue_script('site-script'); 
wp_register_script( 'css3-mediaqueries', get_stylesheet_directory_uri() . '/js/css3-mediaqueries.js');
wp_enqueue_script('css3-mediaqueries');

wp_localize_script( 'site-script', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}

add_action('wp_ajax_nopriv_ajax_sendmail', 'ajax_sendmail');
add_action('wp_ajax_ajax_sendmail', 'ajax_sendmail');







// add case results custom post type
add_action('init', 'load_custom_posttype');

function load_custom_posttype() {
register_post_type('caseresults', array(	'label' => 'Case Results','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'taxonomies' => array('category',),'labels' => array (
  'name' => 'Case Results',
  'singular_name' => 'Case Result',
  'menu_name' => 'Case Results',
  'add_new' => 'Add Case Result',
  'add_new_item' => 'Add New Case Result',
  'edit' => 'Edit',
  'edit_item' => 'Edit Case Result',
  'new_item' => 'New Case Result',
  'view' => 'View Case Result',
  'view_item' => 'View Case Result',
  'search_items' => 'Search Case Results',
  'not_found' => 'No Case Results Found',
  'not_found_in_trash' => 'No Case Results Found in Trash',
  'parent' => 'Parent Case Result',
	),) );
}

// 

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','caseresults'); // replace cpt to your custom post type
    $query->set('post_type',$post_type);
	$query->set('orderby', 'meta_value_num');
	$query->set('meta_key','amount');
	return $query;
    }
}
