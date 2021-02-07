<?php 

/**
 * ACF OPTIONS PAGE
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


// block example

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a introduction block.
        acf_register_block_type(array(
            'name'              => 'Intro',
            'title'             => __('Introduction'),
            'description'       => __('A custom introduction block.'),
            'render_template'   => 'template-parts/blocks/introduction/template.php',
            'category'          => 'formatting',
            'icon'              => 'text',
            'keywords'          => array( 'introduction', 'about' ),
		));
		
		// register a card block.
        acf_register_block_type(array(
            'name'              => 'Card',
            'title'             => __('Card'),
            'description'       => __('A custom card block.'),
            'render_template'   => 'template-parts/blocks/card/template.php',
            'category'          => 'formatting',
            'icon'              => 'text',
            'keywords'          => array( 'card', 'statement' ),
		));
		
		// register a featured post block.
        acf_register_block_type(array(
            'name'              => 'Featured Post',
            'title'             => __('Featured Post'),
            'description'       => __('A custom featured post block.'),
            'render_template'   => 'template-parts/blocks/featured/template.php',
            'category'          => 'formatting',
            'icon'              => 'text',
            'keywords'          => array( 'featured', 'post' ),
        ));
    }
}

