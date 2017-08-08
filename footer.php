<?php get_sidebar(); ?>

<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<?php wp_nav_menu( array(
		'theme_location'  => 'footer',
		'menu_id'         => 'footer-menu',
		'container'       => 'nav',
		'container_class' => 'footer-nav',
	) ); ?>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>