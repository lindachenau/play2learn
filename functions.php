<?php 

if ( ! function_exists ( 'play2learn_setup') ) :

    function play2learn_setup() {
        // let WordPress handle the Titles tags
        add_theme_support( 'title-tag' );
    }
endif;
add_action( 'after_setup_theme', 'play2learn_setup' );

/* ---- Register Menus ---- */

function register_play2learn_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' )
        )
    );
}
add_action( 'init', 'register_play2learn_menus' );

/* ---- Add Stylesheets ---- */

function play2learn_scripts() {
    
    // Enqueue Main Stylesheet
    wp_enqueue_style( 'play2learn_styles', get_stylesheet_uri(), array(), '0.94', 'all');
}
add_action( 'wp_enqueue_scripts', 'play2learn_scripts' );

/* ---- Register Widget Areas ---- */

function play2learn_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'play2learn' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets added here will appear in the blog page using the blog template.', 'play2learn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
		'name'          => __( 'Social Sidebar', 'play2learn' ),
		'id'            => 'social-sidebar',
		'description'   => __( 'Add social share widgets here to appear in the header section in all pages.', 'play2learn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>'
    ) );    

    register_sidebar( array(
		'name'          => __( 'Search Sidebar', 'play2learn' ),
		'id'            => 'search-sidebar',
		'description'   => __( 'Add a search box here to appear in the header section in all pages.', 'play2learn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>'
	) );    
}
add_action( 'widgets_init', 'play2learn_widgets_init' );


