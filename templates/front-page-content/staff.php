<?php $staff = get_field( 'staff' );

if ( $staff ) : ?>

	<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page-<?php echo esc_attr( $post->post_name ); ?>">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if ( get_the_excerpt() ) : ?>
			<div class="page-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>

		<ul class="staff">
			<?php foreach ( $staff as $member ) : ?>
				<li>
					<?php if ( $member['url'] ) : ?>
						<a href="<?php echo esc_url( $member['url'] ); ?>" target="_blank">
					<?php endif ?>
						<figure>
							<?php if ( $member['avatar'] ) : ?>
								<img src="<?php echo esc_attr( $member['avatar']['sizes']['staff-avatar'] ); ?>" alt="<?php esc_attr( $member['avatar']['alt'] ); ?>">
							<?php else : ?>
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/staff-dummy.png' ) ); ?>" alt="<?php _e( 'Staff Avatar' ); ?>">
							<?php endif; ?>
						</figure>
						<p><?php echo esc_html( $member['name'] ); ?></p>
					<?php if ( $member['url'] ) : ?>
						</a>
					<?php endif ?>
				</li>
			<?php endforeach; ?>
		</ul>

	</section>

<?php endif; ?>
