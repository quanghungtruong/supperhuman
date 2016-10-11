/*
 * Create 25/9/2016
 * Handle jquery of site
 */

var supperHuman = function() {};

/*
 * Funtion constructor
 */ 
supperHuman.prototype.constructor = function() {
    var that=this;
    jQuery('document').ready(function() {
        that.clickIconQA();
        that.ZoomLargeImage();
    })
}

/*
 * Funtion handle QA Icon
 * Slide Down or Up content when this title clicked.
 */ 
supperHuman.prototype.clickIconQA = function(){
    // Default on load page
    jQuery('.box-qa').first().addClass('qa-active');
    jQuery('.qa-active .content-box-qa').slideDown('slow');    
    // Handle after click event
    jQuery('.title-box-qa').on('click', function() {
       jQuery('.qa-active .content-box-qa').slideUp('slow'); 
       jQuery('.qa-active').removeClass('qa-active'); 
       var box = jQuery(this).parents('.box-qa');
       if(box.hasClass('qa-active') != true){
           box.addClass('qa-active'); 
           jQuery('.qa-active .content-box-qa').slideDown('slow');
       }      
    });
}

/*
 * Funtion handle single image product
 * Zoom lager image 
 */
supperHuman.prototype.ZoomLargeImage = function(){
    
    // change image after choose 
    jQuery('.main-thumb').on('click', function(){
        var img = jQuery(this).html();
        jQuery('.main-image').html(img);  
        jQuery('.main-image img').attr('id','zoom_01');  
        jQuery('#zoom_01').elevateZoom();    
    });  
    // Zoom image  
    jQuery('#zoom').elevateZoom();
}

