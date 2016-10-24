<?php get_header() ?>
<div class="single-video single-content content-mobile">
    <div class="top-video-list">
        <div class="btnVideo">
            <a href="<?php echo home_url('/video/')?>">Video</a>
        </div>
        <div class="title-cat">
            <a href="<?php echo home_url('/xu-huong-phat-trien/')?>">Xu hướng phát triển</a>
        </div>
    </div>
    <div class="main-single-video">
        <?php
            while(have_posts()):
                the_post();
            $getVideo = get_post_meta(get_the_ID(), 'link_video', true);                    
            $singleVideo = str_replace('https://youtu.be', 'https://www.youtube.com/embed/', $getVideo);
            ?>
        <div class="main-video">
            <iframe class="video-iframe" src="<?php echo $singleVideo?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="detail-video">
            <div class="title-box"><?php the_title()?></div>
            <div class="content-detail">
                <?php the_content()?>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </div>
</div>	
<?php
get_footer()?>