<footer class="footer">
	<div class="footer-inner">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<?php wp_nav_menu( array(
				'theme_location'  => 'footer',
				'menu_id'         => 'footer-menu',
				'container'       => 'nav',
				'container_class' => 'footer-nav',
			) ); ?>
		<?php endif; ?>

		<?php if ( get_theme_mod( 'copyright' ) ) : ?>
			<p class="copyright">© <?php echo esc_html( get_theme_mod( 'copyright' ) ); ?></p>
		<?php endif; ?>

	</div>
</footer>

</div><!-- #site-container -->

<?php wp_footer(); ?>

</body>
</html>
