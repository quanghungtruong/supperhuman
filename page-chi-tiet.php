<?php get_header() ?>
<div class="page-chi-tiet">
	<div class="search-location">
		<form class="">
			<input type="text" name="q" class="input-1" placeholder="Nội dung cần tìm">
			<input type="submit" name="" class="btnSearch" value=" ">
		</form>
	</div>
	<div class="main-category">
		<div class="left-category">
			<ul>
				<li>
					<a href="#">Học cách sử dụng</a>
					<ul class="sub-category">
						<li class="subActive">
							<a href="#">Ghi nhớ</a>
						</li>
						<li>
							<a href="#">Bàn tính</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="">Nâng cao khả năng</a>
					<ul class="sub-category">
						<li>
							<a href="#">Ghi nhớ</a>
						</li>
						<li>
							<a href="#">Bàn tính</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="right-dev">
			<div class="box-category">
				
				<ul>
					<li>
							<div class="left-article">
								<span class="title-article">
									<a href="#">Cách ghi nhớ 1 list danh sách từ 20 trở lên trong thời gian ngắn</a>
								</span><br>
								<span class="author">SuperHuman</span>
								<span class="date"><?php echo date('d/m/Y');?></span>
							</div>							
					</li>
				</ul>
			</div>
			<div class="box-detail">
				<p>Mauris sapien risus, vulputate ut nunc faucibus, viverra venenatis turpis. Pellentesque et ultrices ipsum. Mauris in leo id tortor iaculis ultricies a at lectus. Nunc a finibus neque. Suspendisse efficitur facilisis magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium turpis et leo porta ornare. Mauris sit amet nulla a eros consequat gravida. Sed turpis ex, cursus non eros vitae, vestibulum sagittis tortor. Aliquam dapibus, mi sed varius lobortis, metus nisl porta neque, a vestibulum diam eros sed nibh.</p>

				<p>Morbi sed dui libero. Vivamus auctor consectetur sapien eget lobortis. Praesent ut porttitor nunc. Proin eu ante magna. Vivamus congue ultrices rutrum. Vivamus nulla erat, imperdiet vel orci sed, tristique molestie nunc. Vivamus vehicula ligula velit, sollicitudin lobortis lacus accumsan vel. Curabitur cursus bibendum enim, id consectetur est vulputate non.</p>

				<p>Etiam rutrum erat tortor, et molestie ligula lacinia interdum. Ut sollicitudin elit sit amet dui suscipit, a ornare tellus auctor. In hac habitasse platea dictumst. Sed pulvinar sem et nibh molestie, consequat mattis sem accumsan. Nullam interdum, nulla in consequat pharetra, libero turpis egestas metus, eget finibus risus neque ut nisl. Nulla consectetur pharetra sem sit amet aliquet. Fusce ornare mollis mi nec feugiat. Aenean accumsan erat at felis rutrum feugiat.</p>

				<p>Nulla tincidunt venenatis enim, nec malesuada orci pharetra ac. Nulla tempor tincidunt scelerisque. Sed aliquet mauris ut accumsan pulvinar. Sed hendrerit, urna at rhoncus sollicitudin, massa enim ullamcorper erat, eu porttitor neque ipsum et ante. Nullam hendrerit arcu odio, ac auctor urna ullamcorper eget. Fusce in metus est. Curabitur eu metus a massa ornare convallis. Curabitur sollicitudin, nunc aliquet elementum efficitur, eros est hendrerit purus, pellentesque consequat odio sem sit amet mi. Nam nulla velit, lobortis et rhoncus iaculis, blandit in nunc. Phasellus sit amet blandit massa. Integer aliquet diam non enim ullamcorper, maximus placerat leo gravida. Proin in risus a lectus tempor ultricies.</p>
			</div>
			<div class="box-share">
				<a href="">
					<img src="<?php bloginfo('stylesheet_directory')?>/images/btnShare.png" />
				</a>
			</div>
		</div>
	</div>
</div>
<?php get_footer()?>