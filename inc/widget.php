<?php

function register_widget_position() {
    register_sidebar(
            array(
                'name' => __('Left'),
                'id' => 'left',
                'before_title' => '<h1>',
                'after_title' => '</h1>'
            )
    );
    register_sidebar(
            array(
                'name' => __('Right'),
                'id' => 'right',
                'before_title' => '<h1>',
                'after_title' => '</h1>'
            )
    );
    register_sidebar(
            array(
                'name' => __('Right Taxonomy'),
                'id' => 'right_taxonomy',
                'before_title' => '<h1>',
                'after_title' => '</h1>'
            )
    );
}

add_action('widgets_init', 'register_widget_position');

function register_widget_member() {
    register_widget('show_categories_game');
    register_widget('show_game_cung_loai');
}

add_action('widgets_init', 'register_widget_member');

//=================================================================================
class show_categories_game extends WP_Widget {

    function show_categories_game() {
        parent::__construct(false, 'Categories Game');
    }

    function widget($args, $instance) {
        extract($args);
        $title = esc_attr($instance['title']);
        $tax_slug = esc_attr($instance['tax_slug']);
        ?>
        <div class="box-bar left-menu"> 
            <?php
            $taxonomy = get_query_var('taxonomy');
            if (empty($taxonomy)) {
                $taxonomy = $tax_slug;
            }

            $tax_terms = get_terms($taxonomy);
            ?>
            <div class="category-game">
                <h2 class="title"><?php echo $title ?></h2>
                <ul>
                            <?php foreach ($tax_terms as $tax_term) { ?>                            
                        <li>
                            <a href="<?php echo get_term_link($tax_term); ?>">
                                <i class="glyphicon glyphicon-star-empty"></i>
            <?php echo $tax_term->name ?>
                            </a>
                        </li>
        <?php } ?>
                </ul>
            </div>
        </div> 
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['tax_slug'] = strip_tags($new_instance['tax_slug']);
        return $instance;
    }

    function form($instance) {
        $tax_slug = esc_attr($instance['tax_slug']);
        $title = esc_attr($instance['title']);
        ?>

        <p><label>Title categories</label></p>
        <p>
            <input width="100%" type="text" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo $title ?>" />
        </p>
        <p><label>Taxonomy slug</label></p>
        <input width="100%" type="text" id="<?php echo $this->get_field_id('tax_slug') ?>" name="<?php echo $this->get_field_name('tax_slug') ?>" value="<?php echo $tax_slug ?>" />
        <?php
    }

}

/*
 * Widget Game cung loai
 * */

class show_game_cung_loai extends WP_Widget {

    function show_game_cung_loai() {
        parent::__construct(false, 'Game cùng loại');
    }

    function widget($args, $instance) {
        if (is_single()):
            $num_post = esc_attr($instance['num_post']);
            global $posts;
            $post_type = get_query_var('post_type');
            $taxonomies = get_object_taxonomies($post_type);
            $terms = get_the_terms(get_the_ID(), $taxonomies[0]);
            foreach ($terms as $term) {
                $get_slug = $term->slug;
            }
            $relative_game = game_get_list_game_category($post_type, $num_post, $taxonomies[0], $get_slug, $posts[0]->ID);
            ?>       
            <div class="box-bar relate-game">   
                <h2 class="title">Game cùng loại</h2>
                <ul>
                    <?php
                    while ($relative_game->have_posts()) {
                        $relative_game->the_post();
                        $icon = get_post_meta(get_the_ID(), 'icon', true);
                        $image = game_get_image($icon['guid'], 70, 70, true);
                        $support = get_post_meta(get_the_ID(), 'support_mobile', true);
                        ?>
                        <li>
                            <div class="thumb-game">
                                <a href="<?php the_permalink() ?>"><img src="<?php echo $image; ?>" /></a>
                            </div>
                            <div class="right-game">
                                <a href="<?php the_permalink() ?>" class="title-game"><?php the_title(); ?></a>
                                <div class="rate">
                                    <span class="text-note">Hỗ trợ : </span>
                                    <?php
                                    foreach ($support as $sub) {
                                        echo '<span id="icon_' . $sub . '" class="icon-support">';
                                        ?>
                                        <img title="<?php echo $sub ?>" src="<?php bloginfo('stylesheet_directory') ?>/images/<?php echo $sub ?>.png">
                                        <?php
                                        echo '</span>';
                                    }
                                    ?>
                                </div>
                                <div class="mobile-viewed viewed">
                                    <?php
                                    $view = get_post_meta(get_the_ID(), 'view_game', true);
                                    if ($view) {
                                        echo '<span class="text-note">Lượt chơi : </span>';
                                        echo '<span>' . $view . '</span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </li>
                        <?php
                        wp_reset_postdata();
                    }

                    echo ' </ul></div>';
                endif;
            }

        }
        ?>