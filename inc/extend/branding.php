<?php 

/**
 * Add Google Fonts
 */
function add_google_fonts() {
	wp_enqueue_style( 'roboto-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@400;500;700;900&display=swap', false );
	wp_enqueue_style( 'poppins-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap', false );
	wp_enqueue_style( 'sourcesans-fonts', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap', false );
}
   
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/**
 * Image sizes
 */

add_image_size( 'jumbotron', 620, 930, true ); // Jumbotron
add_image_size( 'icons', 70, 70, true ); // Icons
add_image_size( 'card-image', 485, 640, false ); // Icons
add_image_size( 'archive-post-image', 375, 250, true ); // archive post image

// login logo
function custom_login_logo() {
	echo '<style type="text/css">h1 a { width:100% !important; background: url('.get_bloginfo('template_directory').'/dist/images/login-logo.svg) 50% 50% no-repeat !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

// Burger menu
function tutsplus_burger_menu_scripts() {     
	wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/burger-menu.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'tutsplus_burger_menu_scripts' );

function ga( $code, $hook = 'wp_body_open' ){
	add_action( $hook, function() use ($code) { ?>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', '<?php echo $code; ?>', 'auto');
	ga('set', 'anonymizeIp', true);
	ga('send', 'pageview');
	</script>
	<?php });
}