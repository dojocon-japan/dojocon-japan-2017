<?php get_sidebar(); ?>

<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<?php wp_nav_menu( array(
		'theme_location'  => 'footer',
		'menu_id'         => 'footer-menu',
		'container'       => 'nav',
		'container_class' => 'footer-nav',
	) ); ?>
<?php endif; ?>

<p>© <?php echo esc_html( get_theme_mod( 'copyright' ) ); ?></p>

<?php wp_footer(); ?>

</body>
</html>