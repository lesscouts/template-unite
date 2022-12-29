<?php 
/**
 * The template for displaying all errors 404
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package scout_unite_template
 */


get_header(); ?>

<article>
<div class="bg-primary">
            <div class="container">
                <div class="row topping-federation topping-white topping-bottom-overflow topping-right topping-large bg-topping-opacity-10">
                    <div class="col-11 offset-md-1 pb-5 mt-5">
                        <h1 class="mb-4 mt-5">404</h1>
                        <div class="pb-5">
                            <p>Oups, il semble que cette page n’existe plus.<br>
							Pas de panique. Nous t’invitons à utiliser le moteur de recherche (la loupe qui se trouve en haut à droite de l'écran) pour trouver ce qu’il te faut. <br>
							Si tu ne trouves pas ce que tu cherches, envoie un mail à <?php echo get_bloginfo('admin_email'); ?>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</article>
<?php get_footer(); ?>