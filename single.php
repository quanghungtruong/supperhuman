<?php get_header() ?>
<?php
    while(have_posts()):
        the_post();
?>
<div class="header-banner">   
</div>

<div class="about-section">
     <h2><?php the_title();?></h2>
     <div style="margin:15px 0; ">
         <?php the_content();?>
     </div>
           
</div>
<?php get_template_part('box','bottom');?>


<?php
    endwhile;
    wp_reset_postdata();
?>
<?php get_footer()?>