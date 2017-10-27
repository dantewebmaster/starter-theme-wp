<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title">Nothing Found</h1>
	</header><!-- .page-header -->

	<div class="page-content">
	<?php if ( is_home() ) : ?>

		<p>Não há posts para mostrar.</p>

	<?php 
		elseif ( is_search() ) : 
	?>

		<p>Sua busca não retornou resultados. Tente pesquisar novamente usando palavras diferentes.</p>
	
	<?php
	
		get_search_form();

	else : ?>

		<p>Aparentemente o conteúdo que você tentou acessar não existe mais. Tente fazer uma busca.</p>
	
	<?php
	
		get_search_form();

	endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
