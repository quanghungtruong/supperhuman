/*
 *  Handle ajax site
 */ 
 var ajax = function(){};
 
 ajax.prototype.ajaxInit = function()
 {
     var ajaxThat =  this;
     jQuery('document').ready(function() {
         ajaxThat.ajaxAddCart();
     });
 }
 /*
  *  Ajax handle add Cart
  */
 ajax.prototype.ajaxAddCart = function() {
     jQuery('.btnAddCart').on('click', function(){
        var pro_id = jQuery(this).attr('id');        
            jQuery.post(
                LoadAjax.ajaxurl,
                {
                    action:'do-ajax-jobs',
                    event:'addcart',
                    product_id:pro_id                    
                },
                function(response){
                    if(response != 'done') {
                        jQuery('.c-number').html(response);
                        alert('Đã thêm vào giỏ hàng của bạn !');
                    } else {
                        alert('Sản phẩm này đã có trong giỏ hàng !');
                    }                    
                }
            );        
    });
 }
 
 
