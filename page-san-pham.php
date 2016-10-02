<?php get_header() ?>
<section class="sp-video">
     <iframe width="1200" height="622" src="https://www.youtube.com/embed/yUilfr7SMbk" frameborder="0" allowfullscreen></iframe>
</section>
<section class="sp-slide">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">  

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php bloginfo('stylesheet_directory')?>/images/slide1.png" alt="">             
            </div>
            <div class="item">
              <img src="<?php bloginfo('stylesheet_directory')?>/images/slide1.png" alt="...">             
            </div>
            ...
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</section>
<?php get_footer(); ?>