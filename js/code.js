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
    })
}

/*
 * Funtion handle QA Icon
 * Slide Down or Up content when this title clicked.
 */ 
supperHuman.prototype.clickIconQA=function(){
    // Default on load page
    jQuery('.box-qa').first().addClass('qa-active');
    jQuery('.qa-active .content-box-qa').slideDown('slow');    
    // Handle after click event
    jQuery('.title-box-qa').on('click', function() {
       jQuery('.qa-active .content-box-qa').slideUp('slow'); 
       jQuery('.qa-active').removeClass('qa-active'); 
       var box=jQuery(this).parents('.box-qa');
       if(box.hasClass('qa-active')!=true){
           box.addClass('qa-active'); 
           jQuery('.qa-active .content-box-qa').slideDown('slow');
       }        
       
    });
}


