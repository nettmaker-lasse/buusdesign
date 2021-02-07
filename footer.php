<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buusdesign
 */

?>

	<footer id="colophon" class="site-footer">
	
		<div class="main-container">

			<div class="box contact">
				
				<div class="logo">
					<?php if ( get_field( '_logo', 'options' ) ) : ?>
						<a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field( '_logo', 'options' ) ); ?></a>
					<?php endif; ?>
				</div>
				<?php if ( get_field( '_location', 'options' ) ) : ?>
					<div class="location"><?php the_field( '_location', 'options' ); ?></div>
				<?php endif; ?>

				<?php if ( get_field( '_email', 'options' ) ) : ?>
					<a class="email" title="Send me an email" href="mailto:<?php the_field( '_email', 'options' ); ?>">
						<?php the_field( '_email', 'options' ); ?>
					</a>
				<?php endif; ?>
				
				<?php if ( get_field('_phone', 'options') ) : ?>
					<a class="phone" title="Call me at <?php the_field( '_phone', 'options' ); ?>" href="tel:<?php the_field( '_phone', 'options' ); ?>"><?php the_field( '_phone', 'options' ); ?></a>
				<?php endif; ?>
			</div>

			<div class="box menu">
				<nav id="site-navigation" class="main-footer-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-footer',
							'menu_id'        => 'primary-footer-menu',
						)
					);
					?>
				</nav>
			</div>
			<div class="box social">
				<a class="instagram" title="Follow me on Instagram" href="<?php echo esc_url( get_field( '_instagram', 'options' )['url'] ); ?>" target="<?php echo esc_attr( get_field( '_instagram', 'options' )['target'] ? get_field( '_instagram', 'options' )['target'] : '_self' ); ?>"><?php echo esc_html( get_field( '_instagram', 'options' )['title'] ); ?></a>
				<a class="facebook" title="Follow me on Facebook" href="<?php echo esc_url( get_field( '_facebook', 'options' )['url'] ); ?>" target="<?php echo esc_attr( get_field( '_facebook', 'options' )['target'] ? get_field( '_facebook', 'options' )['target'] : '_self' ); ?>"><?php echo esc_html( get_field( '_facebook', 'options' )['title'] ); ?></a>
				<a class="linkedin" title="Lets connect on LinkedIn" href="<?php echo esc_url( get_field( '_linkedin', 'options' )['url'] ); ?>" target="<?php echo esc_attr( get_field( '_linkedin', 'options' )['target'] ? get_field( '_linkedin', 'options' )['target'] : '_self' ); ?>"><?php echo esc_html( get_field( '_linkedin', 'options' )['title'] ); ?></a>
				<a class="twitter" title="Follow me on Twitter" href="<?php echo esc_url( get_field( '_twitter', 'options' )['url'] ); ?>" target="<?php echo esc_attr( get_field( '_twitter', 'options' )['target'] ? get_field( '_twitter', 'options' )['target'] : '_self' ); ?>"><?php echo esc_html( get_field( '_twitter', 'options' )['title'] ); ?></a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
