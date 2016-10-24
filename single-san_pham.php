<?php get_header() ?>
<div class="content">
    <?php
    while (have_posts()):
        the_post();
        $kich_thuoc = get_post_meta(get_the_ID(), 'kich_thuoc', true);
        $xuat_xu = get_post_meta(get_the_ID(), 'xuat_xu', true);
        $trong_luong = get_post_meta(get_the_ID(), 'trong_luong', true);
        $bao_hanh = get_post_meta(get_the_ID(), 'bao_hanh', true);
        $uu_diem = get_post_meta(get_the_ID(), 'uu_diem', true);
        $nhuoc_diem = get_post_meta(get_the_ID(), 'nhuoc_diem', true);
        $price = get_post_meta(get_the_ID(), 'gia', true);
        $images = array();
        for ($i = 1; $i < 5; $i++) {
            $hinh = get_post_meta(get_the_ID(), 'hinh_' . $i, true);
            if (!empty($hinh)) {
                $images[] = $hinh['guid'];
            }
        }
        ?>    
        <div class="title-name-sp">
            <?php the_title();?>
        </div>
        <div class="main-sp">
            <div class="left-image">	
                <div class="thumb-image">
                    <?php
                        foreach ($images as $img):
                        ?>
                        <div class="main-thumb">
                            <img src="<?php echo $img?>"/>
                        </div>
                        <?php
                    endforeach;
                    ?>
                    
                </div>
                <div class="main-image">
                    <img id="zoom" src="<?php echo $images[0];?>" />
                </div>
            </div>
            <div class="right-detail">
                <div class="content-sp-detail">
                    <div><span>Kích thước (D x R x C): </span><?php echo $kich_thuoc;?></div>
                    <div><span>Xuất xứ:</span> <?php echo $xuat_xu;?></div> 
                    <div><span>Bảo hành:</span> <?php echo $bao_hanh;?></div>
                    <div><span>Trọng lượng:</span> <?php echo $trong_luong;?></div>  
                    <div class="content-detail">
                        Ưu điểm:<br>
                        <?php echo $uu_diem;?>
                        Nhươc điểm:<br>
                        <?php echo $nhuoc_diem;?>
                    </div>
                    <div class="content-sp-m"><?php the_content();?></div>

                </div>
                <div class="price-sp-detail"><?php echo number_format($price)?> VNĐ</div>
            </div>
            <div class="clear"></div>
            <div class="bottom-detail">
                <div class="btnIntroduce">
                    <a href="#"><img src="<?php bloginfo('stylesheet_directory') ?>/images/btnIntroduce.png" /></a>
                </div>
                <div class="btnAddCartDetail btnAddCart" id="sp_<?php the_ID();?>">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/btnAddCartDetail.png" />
                </div>
            </div>
            <div class="btnViewCart">
                <a href="<?php echo home_url('/gio-hang')?>">Xem giỏ hàng</a>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>
<?php
get_footer()?>