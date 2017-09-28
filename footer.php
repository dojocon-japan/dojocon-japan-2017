<?php get_sidebar(); ?>

<?php if ( is_home() || is_front_page() ) : ?>
	<?php dojoconjapan2017_foundation(); ?>
<?php endif; ?>


<footer class="footer">
	<ul class="share-links">
		<li class="fb"><?php echo do_shortcode( '[share_link sns="fb"]Facebook<br><small>で</small><br>シェア[/share_link]' ); ?></li>
		<li class="tw"><?php echo do_shortcode( '[share_link sns="tw" hashtags="DojoConJP" via="DojoConJapan"]Twitter<br><small>で</small><br>シェア[/share_link]' ); ?></li>
		<?php if ( wp_is_mobile() ) : ?>
			<li class="line"><?php echo do_shortcode( '[share_link sns="line"]LINE<br><small>で</small><br>シェア[/share_link]' ); ?></li>
		<?php endif; ?>
	</ul>

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

<div class="loading js-loading">
	<div class="text">
		<p>
			<span class="fuma yellow"></span>
			<span class="fuma blue"></span>
			<span class="fuma red"></span>
			<span class="fuma green"></span>
			<span class="fuma magenta"></span>
		</p>
		<p>Loading...</p>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
