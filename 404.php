<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title">404: Página não encontrada</h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p>Aparentemente o conteúdo que você tentou acessar não existe mais. Tente fazer uma busca ou acessar os links abaixo.</p>

						<?php
							get_search_form();

							the_widget( 'WP_Widget_Recent_Posts' );
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title">Categorias mais usadas</h2>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div><!-- .widget -->

						<?php

							/* translators: %1$s: smiley */
							$archive_content = '<p>' . sprintf( 'Que tal o arquivo do site por mês. %1$s', convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

							the_widget( 'WP_Widget_Tag_Cloud' );
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
