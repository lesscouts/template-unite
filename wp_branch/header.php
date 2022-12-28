<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <article>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scout_unite_template
 */
?>

<!DOCTYPE html>
<html lang="fr-BE">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo( 'name' ); ?>  <?php echo single_post_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="wp-content/themes/scout_template/style.css" rel="stylesheet">-->
	<link href="<?php echo get_theme_file_uri('style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row bg-ls-vert-fonce">
                <div class="col">
				
                    <div class="m-2">
                        <a href="https://lesscouts.be/" target="_blank" title="Aller sur le site de la fédération Les Scouts">
                            <i class="bi-chevron-left"></i> Les Scouts asbl
                        </a>
						
                    </div>
					        
                </div>
            </div>
            <div class="row">
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light float-r">
				<div class="container">
					<a class="navbar-brand" href="<?php echo get_site_url() ?>">
						<img src="<?php echo get_theme_file_uri().'/images/logos/logo_Federation_couleur_baseline_562x236.png'?>" alt="Logo Les Scouts asbl" width="281" height="118">
					</a>

<?php if( has_custom_logo() ):  ?>
        <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id, array(100,'auto') );
            $custom_logo_url = $custom_logo_data[0];
        ?>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
           title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
           rel="home">

            <img src="<?php echo esc_url( $custom_logo_url ); ?>" width="<?php echo $custom_logo_data[1]; ?>" height="<?php echo $custom_logo_data[2]; ?> 
                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

        </a>
    <?php else: ?>
        <div class="site-name"><?php bloginfo( 'name' ); ?>-logo</div>
    <?php endif; ?>


					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Basculer le menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="menu-principal">
						<?php
						wp_nav_menu(
						  array(
							'theme_location' => 'main-menu',
							'menu_class' => 'scout-unite-main-menu',
						 )
						);
						?>
					</div>
				</div>
            </nav>

			
                
            </div>
        </div>
    </header>