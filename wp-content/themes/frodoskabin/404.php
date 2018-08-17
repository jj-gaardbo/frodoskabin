<?php get_header(); ?>

	<main role="main">
		<!-- section -->
        <section class="row post-content">

			<!-- article -->
			<article id="post-404">

                <div class="wrapper">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1><?php _e( 'Siden blev ikke fundet', 'frodoskabin' ); ?></h1>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>
                            <a href="<?php echo home_url(); ?>"><?php _e( 'Gå til forside', 'frodoskabin' ); ?></a>
                        </h2>
                    </div>

                </div>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
