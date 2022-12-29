<?php 
/**
 * The template for displaying the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package scout_unite_template
 */

get_header(); ?>

 
<article>
        <div class="bg-primary">
            <div class="container">
                <div class="row topping-federation topping-white topping-bottom-overflow topping-right topping-large bg-topping-opacity-30">
                    <div class="col-11 offset-md-1 pb-5 mt-5">
                        <h1 class="mb-4 mt-5"><?php bloginfo( 'name' ); ?></h1>
						
                        <div class="pb-5">
                            <p>Bienvenue sur le site de l'unité "<?php bloginfo( 'name' ); ?>".<br>
                                Nous avons créé ce site dans le but de promouvoir le lien entre les staffs d’unité, les animateurs, les animés et leurs parents. <br>
								Vous y trouverez toutes les informations utiles au bon déroulement des animations, des hikes et des camps de chacune de nos sections qui accueillent vos enfants
								</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row mt-3">
                <div class="col-5 offset-md-1" style="position: relative;">
                    
					<img class="sc_img_home_fit" src="<?php echo get_theme_file_uri().'/images/illustrations/campfire.jpg'?>" style="background-color:#95C11F;padding:20px;">
                </div>
                <div class="col-6" ">
                   
				   <img class="sc_img_home_fit" src="<?php echo get_theme_file_uri().'/images/illustrations/travel.jpg'?>" style="background-color:#95C11F;padding:20px;">
				   
				   
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-10 topping-federation topping-white topping-top-overflow topping-left-overflow  mb-5">
                    <div class="above-topping">
                        <h2>Actualités</h2>
                        
                    </div>
                </div>
                
            </div>
            <div class="row mt-2 mb-5">
				<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-6">
					<div class="card mb-3 " style="height: 350px;">
						<div class="row g-0 ">
							<div class="col-md-4">
							 <div class="sc_img_thumbnails"><?php the_post_thumbnail('scout-thumbnail'); ?></div>
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<p class="small text-muted"><?php echo get_the_date('j F Y'); ?></p>
									<hr>
									<h5 class="card-title"><?php the_title(); ?></h5>
									<p class="card-text">
										<?php the_excerpt(); ?>
										<?php wp_link_pages(); ?>
										<?php /*edit_post_link(); echo'ff';*/ ?>
									</p>
								</div>
								<p class="card-text mx-3 mb-3 text-end position-absolute bottom-0 end-0">
									<a href="<?php the_permalink();?>" class="fw-bold ">Lire plus...<i class="bi-chevron-right"></i></a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php
					if ( get_next_posts_link() ) {
					  next_posts_link();
					}
				?>
				<?php
					if ( get_previous_posts_link() ) {
					  previous_posts_link();
					}
				?>
				<?php else: ?>
				<p>Aucun article trouvé !</p>
				<?php endif; ?>
            </div>
            
            <div class="row mt-5">
                <div class="col">
                    <h2>informations pratiques</h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6" >
                    
					<?php dynamic_sidebar( 'homepage_area_one' ); ?>
                    <p class="text-end">
                        <a href="#" class="fw-bold">Itinéraire <i class="bi-chevron-right"></i></a>
                    </p>
                </div>
                <div class="col-md-5 offset-md-1">
				
				<?php dynamic_sidebar( 'homepage_area_two' ); ?>
                    
                </div>
            </div>
        </div>
    </article>
<?php get_footer(); ?>