<div class="product-section">
    <h3>Sản phẩm nổi bật</h3>
    <div class="product-grids">
        <?php
            $feature_post=getThePostByTaxonomy(2,'product','option','show-homepage');
            $i=0;
            while($feature_post->have_posts()):
                $feature_post->the_post();
                $f_image=get_post_meta(get_the_ID(),'product_image',true);
                $show_image=get_image($f_image['guid'],270,230);
           
        ?>
        <div class="col-md-3 product-grid">
            <a href="<?php the_permalink()?>" class="mask">
                <img src="<?php echo $show_image;?>" class="img-responsive zoom-img" alt="">
            </a>
        </div>
        <div class="col-md-3 product-grid1">
            <h4><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
            <p><?php the_excerpt();?></p>
            <a href="<?php the_permalink()?>" class="button1">chi tiết...</a>
        </div>
        <?php
             $i++;
             if($i%2==0){
                 echo '<div class="clearfix" style="margin-top:10px"></div>';
             }
             endwhile;
             wp_reset_postdata();
        ?>
        
    </div>
</div>