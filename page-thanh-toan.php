<?php get_header() ?>
<div class="page-thanh-toan">
	
	<form method="post" action="" id="PayForm">
		<div class="content input-form">
			<div class="title-page">Thông tin người nhận</div>
			<div class="bg-input">
				<input type="text" name="firstname" placeholder="Họ và tên đệm" class="input-2">
				<input type="tetx" name="lastname" placeholder="Tên" class="input-1">
			</div>
			<div class="bg-input">
				<input type="text" name="email" placeholder="Email" class="input-2">
				<input type="tetx" name="phone" placeholder="Điện thoại" class="input-1">
			</div>
			<div class="bg-input">
				<input type="text" name="address" placeholder="Địa chỉ" class="input-3">
			</div>
			<div class="bg-input">
				<?php
                        $tinh_thanh = array(
                            'TPHCM', 'Hà Nội', 'An Giang', 'Bà Rịa - Vũng Tàu', 'Bắc Giang', 'Bắc Kạn', 'Bạc Liêu', 'Bắc Ninh', 'Bến Tre', 'Bình Định', 'Bình Dương', 'Bình Phước', 'Bình Thuận', 'Cà Mau', 'Cần Thơ', 'Cao Bằng', 'Đà Nẵng', 'Đắk Lắk',
                            'Đắk Nông', 'Điện Biên', 'Đồng Nai', 'Đồng Tháp', 'Gia Lai', 'Hà Giang', 'Hà Nam', 'Hà Tĩnh', 'Hải Dương', 'Hải Phòng', 'Hậu Giang', 'Hòa Bình', 'Hưng Yên', 'Khánh Hòa', 'Kiên Giang', 'Kon Tum', 'Lai Châu', 'Lâm Đồng',
                            'Lạng Sơn', 'Lào Cai', 'Long An', 'Nam Định', 'Nghệ An', 'Ninh Bình', 'Ninh Thuận', 'Phú Thọ', 'Quảng Bình', 'Quảng Nam', 'Quảng Ngãi', 'Quảng Ninh', 'Quảng Trị', 'Sóc Trăng', 'Sơn La', 'Tây Ninh', 'Thái Bình', 'Thái Nguyên',
                            'Thanh Hóa', 'Thừa Thiên Huế', 'Tiền Giang', 'Trà Vinh', 'Tuyên Quang', 'Vĩnh Long', 'Vĩnh Phúc', 'Yên Bái', 'Phú Yên'
                        );
                        ?>
                    <select name = "city" class="input-2">
                        <option value="0">Tỉnh/Thành Phố</option>
                        <?php
                        for ($i = 0; $i < count($tinh_thanh); $i++) {
                            echo '<option value="' . $tinh_thanh[$i] . '">' . $tinh_thanh[$i] . '</option>';
                        }
                ?>
                    </select>
			</div>
			<div class="bg-input">
				<input type="text" name="quan" class="input-2" placeholder="Quận/Huyện">
			</div>
			<div class="bg-input">
				<input type="text" name="xa" class="input-2" placeholder="Phường, xã">
			</div>
		</div>
		<div class="ship-way">
			<div class="main-ship content">
				<div class="title-page">Hình thức nhận hàng</div>
				<div class="over-ship">
					<div class="left-ship">
						<div class="top-ship selectShip">Bạn ở nội thành phố TP.HCM</div>
						<div class="ship-option selectShip">
							<label for="ship_1">Nhận hàng tại nhà (1-4 ngày, phí vận chuyển 20.000 vnđ)</label>
							<input type="radio" name="ship" value="1" id="ship_1" class="ship-radio-option">
						</div>
						
						<div class="ship-option selectShip">
							<label for="ship_2">Nhận hàng tại nhà nhanh(1-2 ngày, phí vận chuyển 30.000 vnđ)</label>
							<input type="radio" name="ship" value="2" id="ship_2" class="ship-radio-option">
						</div>
						
					</div>
					<div class="right-ship">
						<div class="top-ship selectShip">
							<label for="ship_3">Bạn ở các vùng khác</label>
							<input type="radio" name="ship" value="0" id="ship_3" class="ship-radio-option">
						</div>
						
						<div class="another">
							Quý khách vui lòng nhấn nút HOÀN TẤT ở phía dưới (để chúng tôi nhận được thông tin đơn hàng quý khách cần mua), sau đó sẽ có nhân viên bên chúng tôi gọi điện để tư vấn cho quý khách về phương thức nhận hàng cũng như thanh toán.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content cart-info-box">
			<div class="title-page">Thông tin đơn hàng</div>
			<div class="title-cart">
				<div class="col-1">Sản phẩm (1)</div>
				<div class="col-2">Số lượng</div>
				<div class="col-3">Giá</div>
			</div>
			<div class="cart-info">
				<div class="col-1">Bìa tính khung siêu cứng</div>
				<div class="col-2">2</div>
				<div class="col-3">30.000 VNĐ</div>
			</div>
		</div>
		<div class="content">
			<div class="btnLocation">
				<div class="main-btn-cart">
					<div class="top-btn">
						<span class="left-btn">Tổng cộng : </span>
						<span class="right-btn">370 000 VNĐ</span>
					</div>
					<div class="bottom-btn">
						<button type="submit">
							<img src="<?php bloginfo('stylesheet_directory')?>/images/btnShip.png"/>
						</button>
							
						
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php get_footer()?>