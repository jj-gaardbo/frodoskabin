<?php
function get_food($is_front_page, $cat_id = null){
    ob_start();

    $args = array(
        'post_status' => 'publish',
        'post_type' => 'food-cpt',
        'posts_per_page' => -1,
        'orderby' => 'title'
    );

    if($cat_id != null){
        $args['cat'] = array($cat_id);
    }

    if($is_front_page){
        $args['posts_per_page'] = 4;
        $args['orderby'] = 'date';
    }

    $query = new WP_Query($args);

    if($query->have_posts()) : ?>

        <section class="food-items">

                <?php
                if($is_front_page):?>

                    <div class="wrapper">

                        <h2>Nyeste</h2>

                        <div class="clear"></div>

                    </div>

                <?php endif; ?>

                <div class="wrapper">

                    <?php while($query->have_posts()) : $query->the_post(); ?>

                        <div class="food-item col-xs-12 col-sm-12 col-md-3 col-lg-3">

                            <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                            ?>

                            <img src="<?php echo $thumb_url[0]; ?>" alt="<?php echo wp_get_attachment_caption($thumb_id);?>"/>

                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                            <div class="clear"></div>

                        </div>

                    <?php endwhile; ?>

                </div>

            <div class="clear"></div>

        </section>

    <?php endif;

    return ob_get_clean();

}
?>