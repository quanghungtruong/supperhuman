<div class="bottom-grids">
    <div class="col-md-4 bottom-grid">
    <h3>Tin Tức</h3>
    <div class="text1-nav">
        <ul>
            <?php
            $news_post = getThePost(5, 'the_news','date','DESC');
            $i = 0;
            while ($news_post->have_posts()):
                $news_post->the_post();
                $link=  get_post_meta(get_the_ID(),'facebook_link',true);
                ?>
            <li>
                <a href="<?php echo $link;?>" title="<?php the_title()?>" target="_blank"><?php echo trim(mb_substr(get_the_title(),0,35,'UTF-8'));?>...</a>
            </li>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
    <?php
        $bottom_box=  getThePost(2,'bottom_box');
        while ($bottom_box->have_posts()):
            $bottom_box->the_post();
    ?>
    <div class="col-md-4 bottom-grid" >
        <h3><?php the_title()?></h3>  
        <div class="content-box" style="text-align:left ">
            <?php the_excerpt();?>
        </div>
        <div class="more-details" style="text-align:left;margin-top:-10px; ">
            <a style="color:#e42313; " href="<?php the_permalink()?>">Chi tiết</a>
        </div>
        
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
    <div class="clearfix"></div>
</div>