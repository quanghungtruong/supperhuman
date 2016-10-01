<ul class="menu-mobile" style="display: none">
    <li>
        <a href="<?php echo home_url()?>">Trang chủ</a>
    </li>
    <li>
        <a href="<?php echo home_url('cong-ty')?>">Công ty</a>
    </li>
    <li>
        <a href="<?php echo home_url('san-pham')?>">Sản phẩm</a>
    </li>
    <li>
        <a href="<?php echo home_url('khach-hang')?>">Khách hàng</a>
    </li>
    <li>
        <a href="<?php echo home_url('lien-he')?>">Liên hệ</a>
    </li>
    <?php
        $getcategory= get_categories();
      
        foreach ($getcategory as $cat){
            $link_cat=get_category_link($cat->cat_ID);
            if($cat->cat_name!='Uncategorized'){
            ?>
    <li>
        <a href="<?php echo $link_cat;?>"><?php echo $cat->cat_name;?></a>
    </li>
    <?php
            }
        }
    ?>
</ul>