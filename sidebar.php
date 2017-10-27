<?php
/**
 * The sidebar containing the main widget area
 */

if ( ! is_active_sidebar( 'sidebar-main' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar-main">
	<?php dynamic_sidebar( 'sidebar-main' ); ?>
</aside><!-- #secondary -->
