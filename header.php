<!DOCTYPE HTML>
<html>
    <head>
        <title><?php wp_title() ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php wp_head();?>
        
    </head>
<body>
    <div class="wrapper">
        <section class="header">
            <header>
                <div class="mobile-nav visible-xs">
                    <span class="glyphicon glyphicon-align-justify"></span>
                </div>
                <div class="mobile-menu">
                    <?php
                            $args=array(
                                'menu'=>'Main menu'
                            );
                            wp_nav_menu($args);
                    ?>
                </div>
                <div class="logo">
                    <a href="<?php echo home_url()?>">
                    <img src="<?php bloginfo('stylesheet_directory')?>/images/logo.png">
                    </a>
                </div>
                <div class="navigator">
                    <div class="desk-menu visible-lg">
                        <?php
                            $args=array(
                                'menu'=>'Main menu'
                            );
                            wp_nav_menu($args);
                            
                        ?>
                    </div>
                    <ul class="right-menu">
                        <li class="login">
                            <a href="<?php echo home_url('/dang-nhap/')?>">
                                <img src="<?php bloginfo('stylesheet_directory')?>/images/icon_user.png">
                            </a>    
                        </li>
                        <li class="cart-number">
                            <div class="cart">
                                <img src="<?php bloginfo('stylesheet_directory')?>/images/icon_cart.png">
                                <div class="c-number">
                                    <?php
                                        $product_num = $_SESSION['superhuman_cart'];
                                        if(!empty($product_num)) {
                                            echo count(json_decode($product_num));
                                        } else {
                                            echo 0;
                                        }
                                    ?>
                                </div>
                            </div>                           
                        </li>
                    </ul>
                </div>
                
            </header>
        </section>