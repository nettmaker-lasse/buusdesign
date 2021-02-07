<div class="featured-posts-header">
	<?php if ( get_field( '_post_icon' ) ) : ?>
		<?php echo wp_get_attachment_image( get_field( '_post_icon' ), 'icons' ); ?>
	<?php endif; ?>
	<?php if ( get_field( '_title' ) ) : ?> 	
		<h2><?php the_field( '_title' ); ?></h2>
	<?php endif; ?>
</div>

<div class="featured-posts">

	<?php $featured_posts = get_field( '_pick_posts' ); ?>

	<?php // var_dump(get_field( '_pick_posts' )); ?>

		<?php if( $featured_posts ) : ?>
			<?php foreach( $featured_posts as $featured_post ) : ?>

				<div class="post">
					
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_post->ID ), 'single-post-thumbnail' ); ?>
					<a class="image" href="<?php echo esc_url( get_permalink( $featured_post->ID ) ); ?>"><div class="post__image" style="background-image: url('<?php echo $image[0]; ?>')"></div></a>
					
					<div class="post__content">
						<h3 class="post__title"><a href="<?php echo esc_url( get_permalink( $featured_post->ID ) ); ?>"><?php echo esc_html( get_the_title( $featured_post->ID ) ); ?></a></h3>
						<span class="post__excerpt"><?php echo get_the_excerpt( $featured_post->ID ); ?></span>

						<div class="post__read-more">
							<a href="<?php echo esc_url( get_permalink( $featured_post->ID ) ); ?>">Read more</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>
		<?php endif; ?>

</div>