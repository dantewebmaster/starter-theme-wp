<?php
/**
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					'Continuar lendo <span class="screen-reader-text">"%s"</span>',
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
			
			// Inner post pagination
			wp_link_pages( array( 'before' => '<div class="page-links">Páginas: ', 'after'  => '</div>' ) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		Entry footer
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
