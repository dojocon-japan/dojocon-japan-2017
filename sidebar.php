<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar-1" class="sidebar-1">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
