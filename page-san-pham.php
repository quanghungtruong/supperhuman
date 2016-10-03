<?php get_header() ?>
<section class="sp-video">
     <iframe width="1200" height="622" src="https://www.youtube.com/embed/yUilfr7SMbk" frameborder="0" allowfullscreen></iframe>
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
    <?php for($i=0; $i<2; $i++) : ?>
      <div class="sp-box">
          <div class="sp-image">
          <a href="#">
            <img src="<?php bloginfo('stylesheet_directory')?>/images/bigsp.jpg">
          </a>            
          </div>
          <div class="sp-detail">
            <span class="sp-name">Khung gỗ thanh mỏng</span>
            <span class="sp-price">50 000đ</span>
          </div>
          <div class="btnAddCart">
            <img src="<?php bloginfo('stylesheet_directory')?>/images/btnAddCart.png">
          </div>
      </div>
    <?php endfor;?>  
  </div>
  <div class="sp-moi">
    <div class="sp-title">Sản phẩm mới</div>
      <div class="sp-content">
        <?php for($i=0; $i<3; $i++) : ?>
          <div class="sp-box">
              <div class="sp-image">
              <a href="#">
                <img src="<?php bloginfo('stylesheet_directory')?>/images/sp.jpg">
              </a>            
              </div>
              <div class="sp-detail">
                <span class="sp-name">Khung gỗ thanh mỏng</span>
                <span class="sp-price">50 000đ</span>
              </div>
              <div class="btnAddCart">
                <img src="<?php bloginfo('stylesheet_directory')?>/images/btnAddCartNews.png">
              </div>
          </div>
        <?php endfor;?>  
      </div>
  </div>
  <div class="view-cart">
      <a href="#">Xem giỏ hàng</a>
  </div>
</section>

<?php get_footer(); ?>