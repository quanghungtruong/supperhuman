<?php get_header();?>
        <div class="content">
            <section class="home-video">
                <iframe width="1200" height="658" src="https://www.youtube.com/embed/yUilfr7SMbk" frameborder="0" allowfullscreen></iframe>
            </section>
           
            <section class="about-us">
                <div class="top-about-us">
                    <h1>Chào mừng bạn</h1><h2>đến với chúng tôi</h2> 
                </div>
                <div class="mid-about-us">
                    <p>Chúng tôi luôn cố gắng mở rộng và hỗ trợ một cách miễn phí. Qua những gì chúng tôi cung cấp quý vị sẽ nhận thấy<br> được khả năng của bản thân</p>
                </div>
                <div class="bottom-about-us">
                    <a href="<?php home_url('/about-us')?>">Về chúng tôi</a>
                </div>
            </section> 
            <section class="home-product">
                <div class="main-home-product">
                    <div class="left-home-product">
                        <img src="<?php bloginfo('stylesheet_directory')?>/images/home_product.png">
                    </div>
                    <div class="right-home-product">
                        <ul>
                            <li>-<span class="p-left">Giá thành ưu đãi nhất thị trường</span></li>
                            <li>-<span class="p-left">Linh kiện thay đổi linh hoạt và dễ dàng</span></li>
                            <li>-<span class="p-left">Đa dạng về sản phẩm và chất liệu</span></li>
                            <li>-<span class="p-left">Một món quà đầy ý nghĩa và đặc biệt</span></li>
                        </ul>
                        <div class="link-home-product">
                            <a href="">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="search-more">
                <h1>Chưa biết cách sử dụng ?</h1>
                 <div class="button-search">
                    <a href="<?php home_url('/about-us')?>">Tìm hiểu thêm</a>
                </div>
            </section>
        </div>
<?php get_footer();?>