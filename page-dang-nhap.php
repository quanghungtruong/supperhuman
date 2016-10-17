<?php get_header() ?>
<div class="page-login content">
	<div class="top-login">
		<div class="btnLogin loginActive">Đăng nhập</div>
		<div class="btnRegistry">Đăng ký</div>
	</div>
	<div class="main-login registry-form" >
		<form method="post" action="" id="registryForm">
			<div>Email:</div>
			<div class="input-login">
				<input type="text" name="email">
			</div>
			<div>Mật khẩu:</div>
			<div class="input-login">
				<input type="password" name="password">
			</div>
			<div>Nhập lại mật khẩu:</div>
			<div class="input-login">
				<input type="password" name="confirmPass">
			</div>
			<div class="input-login">
				<input type="submit" name="" class="btnSubmit" value="Tạo tài khoản">
			</div>
		</form>
	</div>
	<div class="main-login login-form">
		<form method="post" action="" id="loginFrom">
			<div>Email:</div>
			<div class="input-login">
				<input type="text" name="email">
			</div>
			<div>Mật khẩu:</div>
			<div class="input-login">
				<input type="password" name="password">
			</div>			
			<div class="input-login">
				<input type="submit" name="" class="btnSubmit" value="Đăng nhập">
			</div>
		</form>
	</div>
</div>
<?php get_footer()?>