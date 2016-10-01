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
   
    
}
add_action('wp_enqueue_scripts','add_style_js');

//=========================ADD FUNTION=======================================

//=================GLOBAL FUNCTION=======================

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
    $query=new WP_Query($args);
    return $query;
}


/*
 * Lấy game theo từng mục game index và post type
 * 
 **/
function get_list_category($post_type,$num,$taxonomy,$slug,$post_not_in=null)
{
    $args=array(
        'posts_per_page'=>$num,
        'post_type'=>$post_type,        
        'post__not_in'=>array($post_not_in),
        'order by'=>'ID',
        'order'=>'DESC',
        'tax_query'=>array(
            array(
                'taxonomy'=>$taxonomy,
                'terms'=>$slug,
                'field'=>'slug'
            )
        )
        
    );
    $query=new WP_Query($args);
    return $query;
}

//===========get game offline
function get_news($num=5)
{
    $args=array(
        'posts_per_page'=>$num,
        'post_type'=>'post',       
        'orderby'=>'date',
        'order'=>'DESC'
    );
 $query=new WP_Query($args);
 return $query;
}

function show_first_news()
{
    $fist_post=  get_news(1);
    while ($fist_post->have_posts()):
        $fist_post->the_post();
        $image=  get_image_post_to_show(get_the_ID(),458,200,true);        
    ?>
        <a class="img-first-news" href="#">
        <img src="<?php echo $image;?>">
        </a>
    <a class="title-news" href="<?php the_permalink();?>"><?php the_title();?></a>
    <p><?php the_excerpt();?></p>

    <?php
    endwhile;
    wp_reset_postdata();
}
function show_other_news()
{
    $not_post=  get_news(1);
    $not_id=array(0);
    
    foreach ($not_post as $not)
    {
      $not_id[]=$not->ID;
    }
    
    $args=array(
        'posts_per_page'=>8,
        'post_type'=>'post',
        'post__not_in'=>$not_id,
        'orderby'=>'date',
        'order'=>'DESC'
    );
    $other_post=new WP_Query($args);
    //print_r($not_post);
    ?>
    <ul>
        <?php
            $i=0;
            while ($other_post->have_posts()):
            if($i>=1):                
                $other_post->the_post();
                $image=  get_image_post_to_show(get_the_ID(),100,100,true);   
        ?>
        <li class="col-lg-6 col-xs-12">
            <a class="img-other-news" href="#">
                <img src="<?php echo $image;?>">
            </a>
            <div class="content-other-news">
                <a class="title-news" href="<?php the_permalink();?>"><?php the_title();?></a>                
            </div>
        </li>  
                           
    </ul>
        <?php
           endif;
        $i++;
        endwhile;
        wp_reset_postdata();
        ?>
    <?php
}
function get_last_news($num)
{
    $posts=get_news(5);
    $not_in=array();                           
   while ($posts->have_posts()){
       $posts->the_post();
       $not_in[]=get_the_ID();       
   }
   $args=array(
       'posts_per_page'=>$num,
       'post_type'=>'post',
       'post__not_in'=>$not_in,
       'order by'=>'date',
       'order'=>'DESC'
   );
   $query=new WP_Query($args);
   return $query;
}
/*
 * Single template 
 **/

function set_cookie_post($post_id)
{
    if($_COOKIE['view_game']){
        $view=  unserialize($_COOKIE['view_game']);
    }    
    if(!in_array($post_id,$view))
    {
        $view[]=$post_id;
        ob_start();            
        setcookie('view_game',serialize($view),  time()+3600*24*30);  
        return true;
    }
    return false;
    
}



/*
 * Ham bo width va height
 **/
function remove_size_image_content($content)
{
    if(is_single())
    {
        $partern='/(width=|height=)/';
        $rep='';
        return preg_replace($partern,$rep,$content);
    }
}
//add_filter('the_content','remove_size_image_content');
