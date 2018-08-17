<?php /* Template Name: Menu Template */ get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="row post-content">

        <div class="wrapper">

            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
            </div>

        </div>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="wrapper">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <?php the_content(); // Dynamic Content ?>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <?php echo get_food(is_front_page()); ?>

                    </div>

                </div>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>
