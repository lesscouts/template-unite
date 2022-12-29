<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package scout_unite_template
 */

get_header(); ?>
<article>
<?php if (have_posts()) : while (have_posts()):the_post(); ?>
<div class="bg-ls-vert-base bg-topping-federation  topping-white bg-topping-opacity-10" >
            <div class="container">
                <div class="row topping-federation topping-white topping-bottom-overflow topping-right topping-large">
                    <div class="col-11 offset-md-1 pb-5 mt-5">
                        <h1 class="mb-4 mt-5"><?php the_title(); ?></h1>
                        <div class="pb-5">
                            <p>Publié le <?php echo get_the_date('j F Y'); ?> par <?php echo get_the_author() ?>. </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row mt-5">
                <div class="col-md-12 topping-federation topping-white topping-middle topping-left-outside topping-large  mb-5">
                    <div class="above-topping">
                       

                       

                          <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-2 mb-5">
                <div class="col-md-12">
                </div>
            </div>
            
        </div>
		<?php endwhile; else :?>
			<p>Aucun article à afficher !</p>
		<?php endif; ?>
		</article>
<?php get_footer(); ?>