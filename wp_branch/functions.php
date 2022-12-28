<?php
/**
 * scout_unite_template functions and definitions
 *
 *
 * @package scout_unite_template
 */

function register_my_menu(){
  register_nav_menus( 
	array(
	 'main-menu' => __('Menu principal' ),
	 'private-menu' => __( 'Menu Privé' ),
	 'footer-menu' => __( 'Menu Footer' ),
	 )
  );
}

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 'custom-size',
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}

function register_widget_areas() {

  register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'utilise le widget de gauche pour indiquer les coordonnées par exemple ',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'widget du milieux',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area three',
    'id'            => 'footer_area_three',
    'description'   => 'Le widget de droite peut par exemple reprendre les liens vers les réseaux sociaux',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  
    register_sidebar( array(
    'name'          => 'Home page area one',
    'id'            => 'homepage_area_one',
    'description'   => 'Widget de droite de la home page, peut être utilisé pour insérer une carte pour situer les locaux, par exemple',
    'before_widget' => '<section class="homepage-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
	    register_sidebar( array(
    'name'          => 'Home page area two',
    'id'            => 'homepage_area_two',
    'description'   => 'Widget de gauche de la home page, peut être utilisé pour les coordonnées du staff, par exemple',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

}

function sc_random_picture($folder_path = null){
 
    if( !empty($folder_path) ){ // if the folder path is not empty
        $files_array = scandir($folder_path);
        $count = count($files_array);
 
        if( $count > 2 ){ // if has files in the folder
            $minus = $count - 1;
            $random = rand(2, $minus);
            $random_file = $files_array[$random]; // random file, result will be for example: image.png
            $file_link =  get_site_url(null, $folder_path . "/" . $random_file); // file link, result will be for example: your-folder-path/image.png
            return '<a href="'.$file_link.'" target="_blank" title="'.$random_file.'"><img src="'.$file_link.'" alt="'.$random_file.'"></a>';
        }
 
        else{
            return "The folder is empty!";
        }
    }
 
    else{
        return "Please enter folder path!";
    }
 
}

add_action( 'widgets_init', 'register_widget_areas' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action( 'after_setup_theme', 'register_my_menu' );
add_action( 'pre_get_posts', function ( $q )
{
    if ($q->is_home() && $q->is_main_query()
    ) {
        $q->set( 'posts_per_page', 4);
    }
});

add_theme_support( 'post-thumbnails' );
add_theme_support('widgets' );
add_theme_support('widgets-block-editor' );
add_theme_support( 'widget-customizer' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );  
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

add_image_size('scout-thumbnail', 180,'auto', array( 'left', 'top' ));
add_image_size( 'custom-size', 220, 220,array( 'left', 'top' )  ); // Hard crop left top

?>