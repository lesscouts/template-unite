<?php

get_header();
?>
<h2 style="padding-bottom:50px;">Résultat de la recherche pour : "<?php the_search_query(); ?>"</h2>

<article>
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
				<p style="padding-top: 25px;">Désolé, aucun résultat de recherche n'a pu être trouvé ! <br> Esayez d'autres termes de recherche....</p>
				<?php endif; ?>
            </div>
</article>

<?php

get_footer();

?>