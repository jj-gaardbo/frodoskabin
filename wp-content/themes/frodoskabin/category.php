<?php get_header(); ?>

	<main role="main">
        <!-- section -->
        <section class="row post-content">

            <div class="wrapper">

                <div class="col-lg-12">
                    <h1>
                        <?php _e( 'Kategori: ', 'html5blank' ); single_cat_title(); ?>
                    </h1>
                </div>

            </div>

            <div class="clear"></div>

			<?php
            $category = get_category( get_query_var( 'cat' ) );
            echo get_food(is_front_page(), $category->cat_ID);
            ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
