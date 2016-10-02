<?php get_header() ?>
<div class="page-video">
	<div class="content-video">
		<div class="top-video-list">
			<div class="btnVideo">
				<a href="#">Video</a>
			</div>
			<div class="title-cat">Xu hướng phát triển</div>
		</div>
		<?php
			for($i=0; $i<=6; $i++) :			
		?>
		<div class="box-video">
			<div class="left-video">
				<iframe width="530" height="300" src="https://www.youtube.com/embed/yUilfr7SMbk" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="right-video">
				<div class="title-box">
					<a href="#"> Lorem ipsum dolor sit amet.</a>
				</div>
				<div class="content-box">
					consectetur adipiscing elit. Quisque a laoreet eros. Ut eget diam id odio scelerisque ornare at non dui. Curabitur quis vulputate nunc, id mattis justo. Maecenas mollis velit vitae porttitor consectetur. Aliquam auctor, nisl vitae auctor cursus, dui tellus dignissim magna, et venenatis ante nisi non mauris
				</div>
			</div>
		</div>
			<?php
				endfor;
			?>
	</div>
	
	
</div>
<?php get_footer()?>