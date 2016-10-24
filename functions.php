<?php
include (TEMPLATEPATH . '/inc/widget.php' );
include (TEMPLATEPATH . '/inc/BFI_Thumb.php' );

//==================DEFAULT FUNCTION=============================
function setup_theme_hung()
{
    add_theme_support( 'menus',true );
    add_theme_support('post-formats',array('aside','image','quote','link','status'));
    add_theme_support( 'post-thumbnails' );
    add_theme_support('widgets');
    add_theme_support('editor-style');
    add_theme_support('custom-header');
    $defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $defaults );
}
add_action('after_setup_theme','setup_theme_hung');

function  add_style_js()
{    
    wp_enqueue_style('bootstrapmin-css',  get_template_directory_uri().'/bootstrap/css/bootstrap.css','',true);
    wp_enqueue_style('template-css',  get_template_directory_uri().'/css/style.css','',true);
    wp_enqueue_style('camera-css',  get_template_directory_uri().'/css/template.css','',true);
    
    
   
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',  get_template_directory_uri().'/bootstrap/js/bootstrap.min.js','',true,true);
    wp_enqueue_script('common-js',  get_template_directory_uri().'/js/code.js','',true,true);
    wp_enqueue_script('jqzoom-js',  get_template_directory_uri().'/js/jquery.elevatezoom.js','',true,true);
    wp_enqueue_script('validate-js',  get_template_directory_uri().'/js/jquery.validate.js','',true,true);
    
}
add_action('wp_enqueue_scripts','add_style_js');

//=========================ADD FUNTION=======================================


/*
 * Get image by bfi thumb
 **/
function get_image($url,$width,$height,$crop=false)
{
    $parame=array('width'=>$width,'height'=>$height,'crop'=>$crop);
    if($url)
    {
         $image=  bfi_thumb($url,$parame);
         return $image;
    }
    return false;  
}
//===Get image in post news
function get_first_image($post_id) {
    $post = get_post($post_id);
    if(!$post) {
        return '';
    }
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    return $matches[1][0];
}
if (is_admin()) {
    add_action('wp_ajax_nopriv_do-ajax-jobs', 'handleAjax');
    add_action('wp_ajax_do-ajax-jobs', 'handleAjax');
}
function initAjaxValues() {  
    wp_enqueue_script('do-ajax-jobs', get_template_directory_uri() . '/js/ajax.js', array('jquery'), null, true);
    wp_localize_script('do-ajax-jobs', 'LoadAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'site_url' => site_url(),
        'theme_url' => get_bloginfo('stylesheet_directory')        
    ));
}
add_action('wp_enqueue_scripts', 'initAjaxValues');

function handleAjax() {
    switch ($_REQUEST['event']) {
        case "addcart":
                $product_id = $_REQUEST['product_id'];
                $cart = handleAddCart($product_id);
                echo $cart;
            break;
    }
    exit;
}
/*========================================================================*/
/*
 * Get normal post
 **/
function getThePost($num=3,$post_type,$otherby='date',$order='DESC')
{
    $args=array(
        'posts_per_page'=>$num,
        'post_type'=>$post_type,        
        'orderby'=>$otherby,
        'order'=>$order        
    );
    $query=new WP_Query($args);
    return $query;
}

/*
 * Get custompost by taxonomy option
 **/
function getThePostByTaxonomy($num,$post_type,$taxonomy,$term)
{
    $args=array(
        'posts_per_page'=>$num,
        'post_type'=>$post_type,
        'tax_query'=>array(
            array(
                'taxonomy'=>$taxonomy,
                'field'=>'slug',
                'terms'=>$term
            )
        ),
        'orderby'=>'date',
        'order'=>'DESC'
    );
    $query = new WP_Query($args);
    return $query;
}

/*
 * Get post by category
 */
function getPostByCategory($num, $post_type, $cat, $orderby = 'date', $order = 'DESC')
{
    $args = array(
        'posts_per_page' => $num,
        'post_type' => $post_type,
        'category_name' => $cat,
        'orderby' => $orderby,
        'order' => $order
    );
    $query = new WP_Query($args);
    return $query;
}

/*
 * Handle add product into cart 
 * 
 **/
function startSession()
{
    if(!session_id()) {
        session_start();
    }
}
add_action('init', 'startSession');

function handleAddCart($pro_id){    
    if($pro_id && !isset($_SESSION['superhuman_cart'])) {
        $cart = array($pro_id);
        $_SESSION['superhuman_cart'] = json_encode($cart);
    } else {
        $cart = json_decode($_SESSION['superhuman_cart']);
        if($pro_id && !in_array($pro_id, $cart)) {
            $cart[] = $pro_id;
            $_SESSION['superhuman_cart'] = json_encode($cart);
        } else {
            return 'done';
        }
    }   
    return count(json_decode($_SESSION['superhuman_cart']));
}



