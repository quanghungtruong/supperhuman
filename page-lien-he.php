<?php get_header() ?>
<?php
    while(have_posts()):
        the_post();
?>
<div class="header-banner">
    <h2>Liên hệ</h2>
</div>
<div class="content">
    <div class="contact">
        <div class="contact-map">
            <iframe src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;ll=10.803335,106.633108&amp;spn=0.010539,0.013754&amp;msid=112468350449351246339.000484c086707057ed70f&amp;iwloc=000484c08a0bd9f0ab0e3&amp;output=embed" width="100%" height="151px" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="contact_top">
            <div class="col-md-12 company-right">
                <div class="company_ad">
                    <?php the_content()?>
                </div>
            </div>	
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php
    endwhile;
    wp_reset_postdata();
?>
<?php get_footer()?>