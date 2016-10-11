<?php get_header() ?>
<div class="content">
	<div class="title-name-sp">
		Bàn tính gỗ siêu cứng
	</div>
	<div class="main-sp">
		<div class="left-image">	
			<div class="thumb-image">
				<?php
					for($i=0;$i<4;$i++):
				?>
				<div class="main-thumb">
					<img src="<?php bloginfo('stylesheet_directory')?>/images/test_thumb.png"/>
				</div>
				<?php
					endfor;
				?>
				<div class="main-thumb">
					<img  src="<?php bloginfo('stylesheet_directory')?>/images/image3.png"/>
				</div>
			</div>
			<div class="main-image">
			<img id="zoom" src="<?php bloginfo('stylesheet_directory')?>/images/test_thumb.png" />
			</div>
		</div>
		<div class="right-detail">
			<div class="content-sp-detail">
				<div><span>Kích thước (D x R x C): </span>32x11x3.8 cm (gồm 15 cột)</div>
				<div><span>Xuất xứ:</span> Việt Nam</div> 
				<div><span>Bảo hành:</span> 12 tháng</div>
				<div><span>Trọng lượng:</span></div>  
				<div class="content-detail">
					Ưu điểm:<br>
						- Vật liệu bao phủ có xuất xứ từ Việt Nam, có thể chống chịu mài mòn tốt, chịu được sức nóng và ánh sáng mặt trời bình thường liên tục 3 năm.<br>
						- Có thể tháo lấp lại các thanh phía trong bàn tính.<br>
						- Khung chịu được lực tác động tương đối tốt.<br>
					Nhươc điểm:<br>
						- Chất liệu làm cho sản phẩm có trọng lượng tương đối nặng.<br>
						- Khung trông khá thô.<br>
				</div>	

			</div>
			<div class="price-sp-detail">15 000 VND</div>
		</div>
		<div class="clear"></div>
		<div class="bottom-detail">
			<div class="btnIntroduce">
				<a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/images/btnIntroduce.png" /></a>
			</div>
			<div class="btnAddCartDetail">
				<a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/images/btnAddCartDetail.png" /></a>
			</div>
		</div>
		<div class="btnViewCart">
			<a href="">Xem giỏ hàng</a>
		</div>
	</div>
</div>
<?php get_footer()?>