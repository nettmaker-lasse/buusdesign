<div class="introduction">
	<div class="introduction__left">
		<?php if ( get_field( '_icon' ) ) : ?>
			<?php echo wp_get_attachment_image( get_field( '_icon' ), 'icons' ); ?>
		<?php endif; ?>
		<h2><?php the_field( '_section_title' ); ?></h2>
	</div>
	<div class="introduction__right">
		<h3><?php the_field( '_title' ); ?></h3>
		<span><?php the_field( '_text' ); ?></span>
	</div>
</div>