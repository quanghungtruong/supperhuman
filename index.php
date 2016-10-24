<?php get_header();?>
        <div class="content-home">
            <section class="home-video">
                <?php
                    $videoPost = getThePostByTaxonomy(1, 'video', 'video_option', 'show-homepage');
                    while ($videoPost->have_posts()){
                        $videoPost->the_post();
                        $getVideoHome = get_post_meta(get_the_ID(), 'link_video', true);                    
                        $homeVideo = str_replace('https://youtu.be', 'https://www.youtube.com/embed/', $getVideoHome);
                        ?>
                <iframe class="video-iframe" src="<?php echo $homeVideo?>" frameborder="0" allowfullscreen></iframe>
                <?php
                    }
                    wp_reset_postdata();
                ?>
                
            </section>           
            <section class="about-us">
                <div class="top-about-us">
                    <h1>Chào mừng bạn</h1><h2>đến với chúng tôi</h2> 
                </div>
                <div class="mid-about-us">
                    <p>Chúng tôi luôn cố gắng mở rộng và hỗ trợ một cách miễn phí. Qua những gì chúng tôi cung cấp quý vị sẽ nhận thấy<br> được khả năng của bản thân</p>
                </div>
                <div class="bottom-about-us">
                    <a href="<?php echo home_url('/ve-chung-toi')?>">Về chúng tôi</a>
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
                    <a href="<?php echo home_url('/phat-trien')?>">Tìm hiểu thêm</a>
                </div>
            </section>
        </div>
<?php get_footer();?>