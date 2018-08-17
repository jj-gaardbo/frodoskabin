<?php get_header(); ?>

<?php $dep = get_field('landing_dep');?>

	<main role="main">
		<!-- section -->
        <section class="row post-content contact-section">

            <div class="container">

                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>
                </div>

            </div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="container">

                    <?php
                    $hasThumbnail = has_post_thumbnail();
                    if ( $hasThumbnail ) : // Check if Thumbnail exists ?>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                            </a>

                        </div>
                    <?php endif; ?>

                    <?php if ( $hasThumbnail ) : ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <?php else: ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php endif; ?>

                        <?php the_content(); // Dynamic Content ?>

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
