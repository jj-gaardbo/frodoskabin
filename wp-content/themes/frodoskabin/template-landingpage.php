<?php /* Template Name: Landing Page Template */ get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="row">

        <?php echo get_fp_slider();?>

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) {
                the_post();?>

                <?php

                // check if the flexible content field has rows of data
                if( have_rows('landing_content') ):

                    // loop through the rows of data
                    while ( have_rows('landing_content') ) : the_row();

                        if( get_row_layout() == 'content_text' ): ?>
                            <!-- article -->
                            <article class="post-content row">

                                <div class="content-container <?php the_sub_field('content_visual'); ?>">

                                    <div class="container">

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                            <?php the_sub_field('content_flex'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="clear"></div>
                            </article>
                            <!-- /article -->

                        <?php endif;

                    endwhile;

                else :

                    // no layouts found

                endif;

                ?>

            <?php } // end while
        endif; // end if
        ?>

        <?php echo get_food(is_front_page());?>

    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>
