<?php get_sidebar(); ?>

<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<?php wp_nav_menu( array(
		'theme_location'  => 'footer',
		'menu_id'         => 'footer-menu',
		'container'       => 'nav',
		'container_class' => 'footer-nav',
	) ); ?>
<?php endif; ?>

<?php if ( get_theme_mod( 'copyright' ) ) : ?>
	<p>© <?php echo esc_html( get_theme_mod( 'copyright' ) ); ?></p>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>