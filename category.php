<?php
get_header();
$cat_id = get_query_var('cat');
?>

<div class="header-banner">
    <h2><?php echo get_cat_name($cat_id); ?></h2>
</div>
<div class="products-section">  
    <div class="products-grids">
        <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'product',
            'category__in' => array($cat_id),
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($args);
        $i = 0;
        while ($query->have_posts()):
            $query->the_post();
            $f_image = get_post_meta(get_the_ID(), 'product_image', true);
            $show_image = get_image($f_image['guid'], 400, 300);
            ?>
            <div class="col-md-4 products-grid col-xs-12">
                <div class="gallery">
                    <a class="mask" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                        <img src="<?php echo $show_image ?>" class="img-responsive zoom-img" alt="/" title="image-name">
                    </a>
                </div>	
            </div>
    <?php
endwhile;
wp_reset_postdata();
?>
        <div class="clearfix"> </div>
    </div>
</div>

<?php get_footer(); ?>