<?php
/*
 * Template name:Q&A
 */
?>
<?php get_header() ?>
<div class="content-page">
    <div class="title-page">Câu hỏi thường gặp</div>
    <div class="content-QA">
        <?php
        for ($i = 0; $i < 5; $i++) {
            ?>
            <div class="box-qa">
                <div class="title-box-qa">
                    <div class="ack-qa">
                    Căn cứ kết quả khám nghiệm hiện trường, tử thi và các tài liệu điều tra, Công an tỉnh Quảng Ninh đã khởi tố vụ hình sự để tiến hành điều tra vụ án "Giết người, cướp tài sản"
                    </div>
                    
                </div>
                <div class="content-box-qa">
                    Sau khi nhận được thông tin của tỉnh Quảng Ninh, đoàn công tác của Bộ Công an do  Thứ trưởng Bộ Công an Lê Quý Vương làm trưởng đoàn đã xuống hiện trường chỉ đạo công tác điều tra, tiến hành khám nghiệm hiện trường, khám nghiệm tử thi và tiến hành các biện pháp điều tra xác minh.
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
get_footer()?>