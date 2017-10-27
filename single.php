<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="container">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation();

			endwhile; // End of the loop.
			?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
