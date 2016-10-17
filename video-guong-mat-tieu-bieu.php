<div class="content-video">
<?php
$getPost_gmtb = getPostByCategory(-1, 'video', 'guong-mat-tieu-bieu');
if (!empty($getPost_gmtb)):
    echo '<div class="title-video">Gương mặt tiêu biểu</div>';
    while ($getPost_gmtb->have_posts()) :
        $getPost_gmtb->the_post();
        $link_video = get_post_meta(get_the_ID(), 'link_video', true);
        $video = str_replace('https://youtu.be', 'https://www.youtube.com/embed/', $link_video);
        ?>
        <div class="box-video">
            <div class="left-video">
                <iframe src="<?php echo $video ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="right-video">
                <div class="title-box">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>	
                </div>
                <div class="content-box hidden-xs">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();    
endif;
?>
</div>    
<div class="bottom-video">
    <div class="text-more">Xem thêm về xu hướng phát triển</div>
</div>