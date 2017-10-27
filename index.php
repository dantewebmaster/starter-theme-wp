<?php
/**
 * The main template file
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
				
				<div class="row">
					<h3>Grid demo (sem flexbox)</h3>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-2">.col-2</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-3">.col-3</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-4">.col-4</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-5">.col-5</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-6">.col-6</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-7">.col-7</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-8">.col-8</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-9">.col-9</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-10">.col-10</div>
					<div class="col col-1">.col-1</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-11">.col-11</div>
					<div class="col col-1">.col-1</div>

					<div class="col col-12">.col-12</div>
				</div>

					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
