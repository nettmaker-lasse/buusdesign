<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buusdesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( ! is_front_page() ) : ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php buusdesign_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'buusdesign' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
