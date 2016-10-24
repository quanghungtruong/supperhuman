<?php get_header() ?>
<div class="page-phat-trien">
    <div class="search-location">
        <form class="">
            <input type="text" name="q" class="input-1" placeholder="Nội dung cần tìm">
            <input type="submit" name="" class="btnSearch" value=" ">
        </form>
    </div>
    <div class="main-category">
        <div class="left-category">
            <ul>
                <li>
                    <a href="#">Học cách sử dụng</a>
                    <ul class="sub-category">
                        <li class="subActive">
                            <a href="#">Ghi nhớ</a>
                        </li>
                        <li>
                            <a href="#">Bàn tính</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">Nâng cao khả năng</a>
                    <ul class="sub-category">
                        <li>
                            <a href="#">Ghi nhớ</a>
                        </li>
                        <li>
                            <a href="#">Bàn tính</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right-dev">
            <div class="box-category">
                <div class="title-category">
                    <span class="name-cat">Nội dung thiết yếu</span>
                    <span class="date-cat">Ngày cập nhật</span>
                </div>
                <ul>
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <li>
                            <div class="left-article">
                                <span class="title-article">
                                    <a href="#">Cách ghi nhớ 1 list danh sách từ 20 trở lên trong thời gian ngắn</a>
                                </span><br>
                                <span class="author">SuperHuman</span>
                            </div>
                            <div class="right-time">
                                <?php echo date('d/m/Y'); ?>
                            </div>
                        </li>
                    <?php endfor; ?>	
                </ul>
            </div>
            <div class="box-category">
                <div class="title-category">
                    <span class="name-cat">Tin mới</span>
                    <span class="date-cat">Ngày cập nhật</span>
                </div>
                <ul>
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <li>
                            <div class="left-article">
                                <span class="title-article">
                                    <a href="#">Cách ghi nhớ 1 list danh sách từ 20 trở lên trong thời gian ngắn</a>
                                </span><br>
                                <span class="author">SuperHuman</span>
                            </div>
                            <div class="right-time">
                                <?php echo date('d/m/Y'); ?>
                            </div>
                        </li>
                    <?php endfor; ?>	
                </ul>
            </div>
            <div class="box-paginator">
                <ul>
                    <li><span>0</span></li>
                    <?php for ($i = 1; $i < 6; $i++): ?>
                        <li><a href=""><?php echo $i ?></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
get_footer()?>