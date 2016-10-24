<?php get_header() ?>
<div class="page-cart content">
        <?php
            $cart = json_decode($_SESSION['superhuman_cart']);
        ?>
	<div class="title-page">Thông tin giỏ hàng</div>
        <form method="post" action="<?php echo home_url('/thanh-toan/')?>">
	<div class="title-cart">
		<div class="col-1">Sản phẩm (<?php echo count($cart);?>)</div>
		<div class="col-2">Số lượng</div>
		<div class="col-3">Giá</div>
	</div>
	<?php
            
            if(!empty($cart)):
                $sumPrice = 0;
                $i=1;
            foreach ($cart as $item):
		$pro_id = str_replace('sp_', '', $item);
                $getProduct = get_post($pro_id);
                $image = get_post_meta($pro_id, 'hinh_1', true);
                $title = get_the_title($pro_id);
                $price = get_post_meta($pro_id, 'gia', true);
                $sumPrice += $price;
	?>
	<div class="content-cart">
		<div class="col-1">
			<div class="image-sp-cart">
				<img src="<?php echo $image['guid']; ?>"/>
			</div>
                    <div class="name-sp"><?php echo $title;?></div>
		</div>
		<div class="col-2">
			<ul>
				<li class="btn-down">-</li>
				<li class="number" >1</li>                                
				<li class="btn-up">+</li>
			</ul>
                    <input type="hidden" class="gia_sp" value="<?php echo $price;?>">
                    <input class="num-product" type="hidden" name="cart[<?php echo $item;?>]" value="1">
		</div>
            <div class="col-3">
                <span class="gia_sp_cart" id="sp_cart_<?php echo $i;?>">
                    <?php echo number_format($price, 0, '.','.');?></span> VNĐ
                
            </div>
	</div>
	<?php	
            $i++;
            endforeach;
        endif;
		
	?>
	<div class="btnLocation">
		<div class="main-btn-cart">
			<div class="top-btn">
				<span class="left-btn">Tổng cộng : </span>
                                <span class="right-btn"><span class="tong-gia"><?php echo number_format($sumPrice, 0, '','.');?></span> VNĐ</span>
                                <input type="hidden" class=count-sp value="<?php echo count($cart);?>">
                        </div>
			<div class="bottom-btn">
                            <button type="submit" class="btnDatHang">                                
                                    <img src="<?php bloginfo('stylesheet_directory')?>/images/btnOrder.png"/>                               
                            </button>   
			</div>
		</div>
	</div>
        </form>
	<div class="bottom-Cart">
		<div class="left-bottomCart">
			<div class="title-bot">Thời gian nhận hàng</div>
			Trong nội thành TP.HCM:<br>
			- 1 đến 3 ngày nếu vận chuyển thường.<br>
			- 1 ngày nếu vận chuyển nhanh.<br>
			Các tỉnh khác:<br>
			- Từ 3 đến 7 ngày tùy vào nơi bạn ở.<br>
		</div>
		<div class="right-bottomCart">
			<div class="title-bot">Hình thức thanh toán</div>
			Thanh toán khi nhận hàng.<br>
			Các bạn ở tỉnh khác vui lòng gửi trước 50.000 VND để trả phí vận chuyển.<br>
		</div>
	</div>
</div>
<?php get_footer()?>