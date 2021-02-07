<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buusdesign
 */

?>
<div class="archive-wrapper">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php buusdesign_post_thumbnail(); ?>
		</header>

		<div class="entry-content">

			<?php if ( is_singular() ) : ?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php else : ?>
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<?php endif; ?>

			<?php if ( 'post' === get_post_type() ) : ?>
				
			<?php endif; ?>

			<?php the_excerpt(); ?>

		</div>

		<footer class="entry-footer">
			<a href="<?php echo get_permalink(); ?>">Read more</a>
		</footer>
	</article>
</div>