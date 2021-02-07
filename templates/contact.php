<?php /* Template name: Contact */ ?>

<?php get_header(); ?>

<main id="primary" class="site-main contact">

	<div class="entry-content">

		<div class="contact-form">
			<div class="contact-form__left">
				<h2>You can use my contact form to get in touch with me</h2>
			</div>
			<div class="contact-form__right">
			<?php echo do_shortcode( '[ninja_form id=1]' ); ?>
			</div>
		</div>

		<?php the_content(); ?>
	</div>

</main>

<?php get_footer(); ?>
