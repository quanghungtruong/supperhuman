<?php
/*
 * Template Name: Search page 
 */
?>
<?php get_header();?>
<section class="content">
        <div class="wrapper">
            <div class="left-single-game col-lg-9">   
            <?php
                global $query_string;
               
                $query_args = explode("&", $query_string);
                $search_query = array();
            
                foreach($query_args as $key => $string) {
                        $query_split = explode("=", $string);
                        $search_query[$query_split[0]] = urldecode($query_split[1]);
                } // foreach

                $search = new WP_Query($search_query);
                //print_r($search);             
            ?>
                <div class="box-category">  
                <h2 class="title"><span>Kết quả tìm kiếm : &quot;<?php echo get_search_query(); ?>&quot;<span></span></span></h2>
                    <ul class="game-flash">
                            <?php

                                while ($search->have_posts()):
                                    $search->the_post();
                                    $image_search=get_post_meta(get_the_ID(),'icon');   
                                    $show_image=game_get_image($image_search[0]['guid'],90,90);
                                    $support = get_post_meta(get_the_ID(), 'support_mobile', true);
                                    if(!$image_search)
                                    {
                                        $default_img=get_bloginfo('stylesheet_directory').'/images/search.jpg';
                                        $show_image=  game_get_image($default_img,90,90);
                                    }
                            ?>
                                <li class="col-lg-4">
                                <div class="thumb-game">
                                    <a href="<?php the_permalink()?>"><img src="<?php echo $show_image;?>" /></a>
                                </div>
                                <div class="right-game">
                                    <a href="<?php the_permalink()?>" class="title-game"><?php the_title();?></a>
                                    <div class="rate">
                                        <span class="text-note">Hỗ trợ : </span>
                                        <?php
                                        foreach ($support as $sub) {
                                            echo '<span id="icon_' . $sub . '" class="icon-support">';
                                            ?>
                                            <img title="<?php echo $sub ?>" src="<?php bloginfo('stylesheet_directory') ?>/images/<?php echo $sub ?>.png">
                                            <?php
                                            echo '</span>';
                                        }
                                        ?>
                                    </div>
                                    <div class="mobile-viewed viewed">
                                        <?php
                                        $view = get_post_meta(get_the_ID(), 'view_game', true);
                                        if ($view) {
                                            echo '<span class="text-note">Lượt chơi : </span>';
                                            echo '<span>' . $view . '</span>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </li>
                            <?php
                                     endwhile;
                                     wp_reset_postdata();

                            ?>
                    </ul>
                </div>
        </div>
    <div class="right-single-game col-lg-3">
        <?php
            dynamic_sidebar('Right');
        ?>
    </div>
</section>
<?php get_footer();?>
