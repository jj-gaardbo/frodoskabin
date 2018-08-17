<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="row post-content">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="wrapper">

                    <div class="col-lg-12">
                        <h1>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h1>
                    </div>

                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                            </a>

                        </div>
                    <?php endif; ?>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                        <?php the_content(); // Dynamic Content ?>

                    </div>

                </div>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

            </article>
            <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>
