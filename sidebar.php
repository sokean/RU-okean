<?php
/**
 * Боковая панель, содержащая основную виджету
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpbstarter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
