<?php get_header() ?>
<div class="header-banner">
    <h2>Sản phẩm</h2>
</div>
<div class="products-section">  
    <div class="products-grids">
          <?php
            $product_post=getThePost(12,'product','date','DESC');
            $i=0;
            while($product_post->have_posts()):
                $product_post->the_post();
                $f_image=get_post_meta(get_the_ID(),'product_image',true);
                $show_image=get_image($f_image['guid'],400,300);
           
        ?>
        <div class="col-md-4 products-grid col-xs-12">
            <div class="gallery">
                <a class="mask" href="<?php the_permalink()?>" title="<?php the_title()?>">
                    <img src="<?php echo $show_image?>" class="img-responsive zoom-img" alt="/" title="image-name">
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