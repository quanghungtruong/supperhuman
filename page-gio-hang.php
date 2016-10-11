<?php get_header() ?>
<div class="page-cart content">
	<div class="title-page">Thông tin giỏ hàng</div>
	<div class="title-cart">
		<div class="col-1">Sản phẩm (1)</div>
		<div class="col-2">Số lượng</div>
		<div class="col-3">Giá</div>
	</div>
	<?php
		for($i=0;$i<4;$i++):
	?>
	<div class="content-cart">
		<div class="col-1">
			<div class="image-sp-cart">
				<img src="<?php bloginfo('stylesheet_directory')?>/images/test_thumb.png"/>
			</div>
			<div class="name-sp">Bàn tính khung siêu cứng</div>
		</div>

		<div class="col-2">
			<ul>
				<li class="btn-down">-</li>
				<li class="number">0</li>
				<li class="btn-up">+</li>
			</ul>
		</div>
		<div class="col-3">150 000 VNĐ</div>
	</div>
	<?php		
		endfor;
	?>
	<div class="btnLocation">
		<div class="main-btn-cart">
			<div class="top-btn">
				<span class="left-btn">Tổng cộng : </span>
				<span class="right-btn">370 000 VNĐ</span>
			</div>
			<div class="bottom-btn">
				<a href="#">
					<img src="<?php bloginfo('stylesheet_directory')?>/images/btnOrder.png"/>
				</a>
			</div>
		</div>
	</div>
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