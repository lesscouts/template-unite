 <?php
 /**
 * The template for displaying the footer
 *
 * This is the template that displays all content after the </article>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scout_unite_template
 */
 ?>
 <footer class="mt-5">
        <div class="bg-primary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">L’unité fictive Sainte-Anne est membre de <a href="https://lesscouts.be/">Les Scouts ASBL</a></p>
                    </div>
                    <div class="col-md-3">
                        <a href="https://lesscouts.be/">
                            <img src="wp-content/themes/scout_template/images/logos/logo_Federation_blanc_159x61.png" alt="Les Scouts asbl" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-3">
                         <?php dynamic_sidebar( 'footer_area_one' ); ?>
                    </div>
                    <div class="col-md-3">
                         <?php dynamic_sidebar( 'footer_area_two' ); ?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar( 'footer_area_three' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col py-3">
                    <p class="text-center text-ls-gris">
                        &copy; Les Scouts asbl -
                        <a href="https://lesscouts.be/mentions-legales/">Mentions légales</a> -
                        <a href="https://lesscouts.be/vie-privee/">Vie privée</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Ici, on inclut le Javascript de Bootstrap depuis un CDN mais tu peux tout à fait l’inclure depuis une autre source -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>