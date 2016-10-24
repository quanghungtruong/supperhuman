<?php get_header() ?>
<section class="sp-video">
    <?php
    
    $videoPost = getThePostByTaxonomy(1, 'video', 'video_option', 'show-product-page');
    while ($videoPost->have_posts()) {
        $videoPost->the_post();
        $getVideo = get_post_meta(get_the_ID(), 'link_video', true);
        $productVideo = str_replace('https://youtu.be', 'https://www.youtube.com/embed/', $getVideo);
        ?>
            <iframe class="video-iframe" src="<?php echo $productVideo ?>" frameborder="0" allowfullscreen></iframe>
        <?php
    }
    wp_reset_postdata();
    ?>    
     
</section>
<section class="sp-slide">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php bloginfo('stylesheet_directory')?>/images/slide1.png" alt="">             
            </div>
            <div class="item">
              <img src="<?php bloginfo('stylesheet_directory')?>/images/slide1.png" alt="...">             
            </div>
            ...
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</section>
<section class="content sp-page">
  <div class="sp-title">Mua bàn tính</div>
  <div class="sp-content">
      
    <?php 

    $sp_ban_tinh = getThePostByTaxonomy(2, 'san_pham', 'product_option', 'mua-ban-tinh');
    while ($sp_ban_tinh->have_posts()):
        $sp_ban_tinh->the_post();
        $image = get_post_meta(get_the_ID(), 'hinh_1', true);
        $price = get_post_meta(get_the_ID(), 'gia', true);
    ?>      
      <div class="sp-box">
          <div class="sp-image">
              <a href="<?php the_permalink();?>">
                <img src="<?php echo $image['guid'];?>">
               </a>            
          </div>
          <div class="sp-detail">
              <span class="sp-name"><?php the_title();?></span>
              <span class="sp-price"><?php echo number_format($price);?> VNĐ</span>
          </div>
          <div class="btnAddCart" id="sp_<?php the_ID();?>">
            <img src="<?php bloginfo('stylesheet_directory')?>/images/btnAddCart.png">
          </div>
      </div>      
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
  </div>
  <div class="sp-moi">
    <div class="sp-title">Sản phẩm rời</div>
      <div class="sp-content">
            <?php 

            $sp_roi = getThePostByTaxonomy(2, 'san_pham', 'product_option', 'san-pham-roi');
            while ($sp_roi->have_posts()):
                $sp_roi->the_post();
                $image = get_post_meta(get_the_ID(), 'hinh_1', true);
                $price = get_post_meta(get_the_ID(), 'gia', true);
            ?>   
          <div class="sp-box">
              <div class="sp-image">
                <a href="<?php the_permalink();?>">
                    <img src="<?php echo $image['guid'];?>">
                </a>            
              </div>
              <div class="sp-detail">
                  <span class="sp-name"><?php the_title();?></span>
                  <span class="sp-price"><?php echo number_format($price);?></span>
              </div>
              <div class="btnAddCart" id="sp_<?php the_ID();?>">
                <img src="<?php bloginfo('stylesheet_directory')?>/images/btnAddCartNews.png">
              </div>
          </div>
        <?php
        endwhile;
        wp_reset_postdata();
    ?>
      </div>
    <!-- <div class="box-paginator ">
            <ul>
                <li><a href="#"><<</a></li>
                <li><span>0</span></li>
                <?php for ($i = 1; $i < 6; $i++): ?>
                    <li><a href=""><?php echo $i ?></a></li>
                <?php endfor; ?>
                <li><a href="#">>></a></li>
            </ul>
        </div>-->
  </div>
  <div class="view-cart">
      <a href="<?php echo home_url('/gio-hang/')?>">Xem giỏ hàng</a>
  </div>
</section>

<?php get_footer(); ?>