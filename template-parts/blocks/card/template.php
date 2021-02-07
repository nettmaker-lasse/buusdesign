<div class="card">
	<div class="card__left" style="background-image:url( <?php echo get_field( '_card_image' ); ?> );">
		<?php if ( get_field( '_card_image' ) ) : ?>
			<?php echo wp_get_attachment_image( get_field( '_card_image' ), 'card-image' ); ?>
		<?php endif; ?>
	</div>
	<div class="card__right">
		<h2><?php the_field( '_card_title' ); ?></h2>
		<span><?php the_field( '_card_description' ); ?></span>
		
			

		<div class="author-box">
			<h4><?php echo get_user_meta( 1 )['first_name'][0]; ?> <?php echo get_user_meta( 1 )['last_name'][0]; ?></h4>
			<span><?php echo get_user_meta( 1 )['_positon'][0]; ?></span>
			<span><?php echo get_user_meta( 1 )['_extra_position'][0]; ?></span>
		</div>
	</div>
</div>