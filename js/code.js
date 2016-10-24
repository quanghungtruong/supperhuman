/*
 * Create 25/9/2016
 * Handle jquery of site
 */

var superHuman = function() {};

/*
 * Funtion constructor
 */ 
superHuman.prototype.constructor = function() {
    var that = this;
    var ajaxSite = new ajax();
    jQuery('document').ready(function() {
        that.clickIconQA();
        that.ZoomLargeImage();
        that.FormValidate();
        that.SelectShip();
        that.MenuCatEvent();
        that.LoginEvent();
        that.MenuMobile(); 
        that.BtnUpDown();
        ajaxSite.ajaxInit();
    })
}

/*
 * Funtion handle QA Icon
 * Slide Down or Up content when this title clicked.
 */ 
superHuman.prototype.clickIconQA = function(){
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
superHuman.prototype.ZoomLargeImage = function(){
    
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

/*
 * Funtion validate form Pay Product
 */
superHuman.prototype.FormValidate = function(){
  jQuery('#PayForm').validate({
    rules: {
        firstname: "required",
        lastname: "required",  
        address: "required",      
        email: {
          required: true,
          email: true
        },
        phone: "required",
        city: "required",
        password:"required",
        confirmPass:"required",
      },
      messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",        
        email: "Please enter a valid email address",
        phone: "",
        city: "",
        address: "",
        password:"required",
        confirmPass:"required",
      } 
  });
  jQuery('#registryForm').validate({
    rules: {            
        email: {
          required: true,
          email: true
        },       
        password:"required",
        confirmPass:"required",
      },
      messages: {       
        email: "Please enter a valid email address",       
        password:"required",
        confirmPass:"required",
      } 
  });
  jQuery('#loginForm').validate({
    rules: {            
        email: {
          required: true,
          email: true
        },       
        password:"required",        
      },
      messages: {       
        email: "Please enter a valid email address",       
        password:"required",
       
      } 
  });
}

/*
 * Function handle event click select ship
 */
superHuman.prototype.SelectShip =  function(){
  jQuery('.selectShip').on('click', function(){
    jQuery('.shipActive').removeClass('shipActive');
    if(jQuery(this).hasClass('shipActive') != true) {
      jQuery(this).addClass('shipActive');
    }
  });  
}

/*
 * Function handle event hover menu category
 */
superHuman.prototype.MenuCatEvent = function(){
 // Remove parent category link tag a
 jQuery('.left-category ul li').parents('ul').prev('a').attr('href','javascript:void(0)');
 // Handle click event
 jQuery('.left-category ul>li>a').on('click', function(){  
    jQuery('.catActive ul').slideUp('normal');
    jQuery('.catActive').removeClass('catActive');

    if(jQuery(this).parents('li').hasClass('catActive') != true) {
      jQuery(this).parents('li').addClass('catActive');
      jQuery('.catActive ul').slideDown('normal');
    }

 });
} 

/*
 * Funtion handle JS Login page
 * Handle Tab
 */
superHuman.prototype.LoginEvent =  function(){
  jQuery('.btnLogin').on('click', function(){
    jQuery('.loginActive').removeClass('loginActive');
    jQuery(this).addClass('loginActive');
    jQuery('.registry-form').css('display','none');
    jQuery('.login-form').css('display','block');
  });
  jQuery('.btnRegistry').on('click', function(){
    jQuery('.loginActive').removeClass('loginActive');
    jQuery(this).addClass('loginActive');
    jQuery('.registry-form').css('display','block');
    jQuery('.login-form').css('display','none');
  });
}

/*
 * Function handle Menu on mobile
 */
superHuman.prototype.MenuMobile = function(){
  jQuery('.mobile-nav').on('click', function(){
    if(jQuery(this).hasClass('mobile-active') !=true) {
      jQuery(this).addClass('mobile-active');
      jQuery('.mobile-menu').slideDown('normal');
    } else {
      jQuery(this).removeClass('mobile-active');
      jQuery('.mobile-menu').slideUp('normal');
    }
  });
}

/*
 * Handle add more product on list cart page
 */
superHuman.prototype.BtnUpDown = function() {
     
    jQuery('.content-cart .btn-up').on('click', function(){
        var upParent = jQuery(this).parents('.col-2');
        var number = jQuery(this).prev().html();
        jQuery(this).prev().html(parseInt(number)+1);
        //
        var currentPrice = upParent.children('.gia_sp').val();
        var curNumber = jQuery(this).prev().html();    
        var getPrice = currentPrice*(parseInt(curNumber));
        upParent.next().children('.gia_sp_cart').html(getPrice.toLocaleString());        
        //
        var curSum = jQuery('.count-sp').val();  
        var sumPrice =0;
        for(var i=1; i<=curSum; i++) {
           var listPrice = jQuery('#sp_cart_'+i).html();          
           sumPrice += parseInt(listPrice.split('.').join(''));
        }
        jQuery('.tong-gia').html(sumPrice.toLocaleString());
        //          
        upParent.children('.num-product').val(curNumber);
        
    });    
    // 
    jQuery('.content-cart .btn-down').on('click', function(){        
        var number = jQuery(this).next().html();
        var upParent = jQuery(this).parents('.col-2');
        if(parseInt(number) > 1) {
            jQuery(this).next().html(parseInt(number)-1);
            //
            var currentPrice = upParent.children('.gia_sp').val();
            var curNumber = jQuery(this).next().html();    
            var getPrice = currentPrice*(parseInt(curNumber));
            upParent.next().children('.gia_sp_cart').html(getPrice.toLocaleString());
            //
            var curSum = jQuery('.count-sp').val();  
            var sumPrice =0;
            for(var i=1; i<=curSum; i++) {
               var listPrice = jQuery('#sp_cart_'+i).html();          
               sumPrice += parseInt(listPrice.split('.').join(''));
            }
            jQuery('.tong-gia').html(sumPrice.toLocaleString());
            //          
            upParent.children('.num-product').val(curNumber);
        }        
    });
       
}