<?php get_header() ?>
<div class="page-contact">
    <div class="top-contact">
        Nếu bạn còn thắc mắc cần giải đáp, hay muốn hợp tác hoặc đóng góp ý kiến, hãy liên hệ với chúng tôi qua: (không dùng để đặt hàng)
    </div>
    <div class="contact-form content">
        <div class="title-page">Liên hệ chúng tôi</div>
        <div class="form-lien-he">
            <form>
                <div class="bg-input">
                    <input type="text" name="nameContact" class="input-1" placeholder="Họ tên:">
                    <input type="text" name="emailContact" class="input-1" placeholder="Email:">
                    <input type="text" name="phoneContact" class="input-1" placeholder="Điện thoại:">
                </div>
                <div class="bg-text">
                    <textarea class="main-contact" rows="10" cols=""></textarea>
                </div>
                <div class="btnContact">
                    <input type="submit" value="" name="">
                </div>
            </form>
        </div>
    </div>
    <div class="content bottom-contact">
        <div class="title-page">Liên hệ qua phương tiện khác</div>
        <ul>
            <li class="face-contact">
                <a href="http://facebook.com">
                    <img src="<?php bloginfo('stylesheet_directory')?>/images/faceContact.png">
                   <span>http://facebook.com/datthanh92</span> 
                </a>
            </li>
            <li class="mail-contact">
                <a href="datthanh92@gmail.com">
                    <img src="<?php bloginfo('stylesheet_directory')?>/images/mailContact.png">
                    <span>datthanh92@gmail.com</span>
                </a>
            </li> 
        </ul>
    </div>
</div>
<?php get_footer()?>