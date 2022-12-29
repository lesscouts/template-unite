<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label class="screen-reader-text" for="s">Recherche:</label>
        <input value="" name="s" id="s" type="text" placeholder="<?php the_search_query(); ?>">
        
		<button type="submit" class="btn btn-primary s_btn-primary"><i class="bi bi-search"></i></button>

    </div>
</form>