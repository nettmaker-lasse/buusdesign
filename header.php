<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buusdesign
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EXGNB89P54"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-EXGNB89P54');
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'buusdesign' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-container">
			<div class="site-branding">
				<div class="logo">
					<?php if ( get_field( '_logo', 'options' ) ) : ?>
						<a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field( '_logo', 'options' ) ); ?></a>
					<?php endif; ?>
				</div>
			</div><!-- .site-branding -->
			<nav id="primary-menu">
				<div id="main-menu-toggle" href="#" class="expand">
					<span class="expand">&#9776;</span>
					<span class="collapse">&#10005;</span>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-header',
						'menu_id'         => 'main-menu',
						'menu_class'      => 'nav top-nav cf',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
					)
				);
				?>
			</nav>
		</div>
		<?php if ( is_page() ) : ?>
			<div class="jumbotron">
				<div class="content">
					<?php if ( is_page_template() ) : ?>
						<h1><?php the_title(); ?></h1>
					<?php else : ?>
						<h1><?php echo get_option( 'blogdescription' ); ?></h1>
					<?php endif; ?>
					<span><?php the_field( '_description', 'options' ); ?></span>
					<?php if ( !empty( get_field( '_link', 'options' ) ) ) : ?>
						<a class="link" href="<?php echo esc_url( get_field( '_link', 'options' )['url'] ); ?>" target="<?php echo esc_attr( get_field( '_link', 'options' )['target'] ? get_field( '_link', 'options' )['target'] : '_self' ); ?>"><?php echo esc_html( get_field( '_link', 'options' )['title'] ); ?></a>
					<?php endif; ?>
				</div>
				<div class="image">
					<?php if ( is_front_page() ) : ?>
						<?php if ( get_field( '_image', 'options' ) ) : ?>
							<?php echo wp_get_attachment_image( get_field( '_image', 'options' ), 'jumbotron' ); ?>
						<?php endif; ?>
					<?php else : ?>
						<?php echo get_the_post_thumbnail(); ?>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</header><!-- #masthead -->
