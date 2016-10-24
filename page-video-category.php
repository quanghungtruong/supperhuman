<?php
/*
 * Template name: Video category
 * */
?>
<?php get_header() ?>
<div class="page-video video-cat">
    <?php while (have_posts()): the_post(); ?>
        <div class="content-video">        
            <div class="top-video-list">
                <div class="btnVideo">
                    <a href="<?php echo home_url('/video/'); ?>">Video</a>
                </div>
                <div class="title-cat"><?php the_title(); ?></div>
            </div>
            <?php            
            $getPost_xhpt = getPostByCategory(-1, 'video', 'xu-huong-phat-trien');
            if (!empty($getPost_xhpt)):               
                while ($getPost_xhpt->have_posts()) :
                    $getPost_xhpt->the_post();
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
        <div class="box-paginator">
            <ul>
                <li><a href="#"><<</a></li>
                <li><span>0</span></li>
                <?php for ($i = 1; $i < 6; $i++): ?>
                    <li><a href=""><?php echo $i ?></a></li>
                <?php endfor; ?>
                <li><a href="#">>></a></li>
            </ul>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>
<?php get_footer(); ?>