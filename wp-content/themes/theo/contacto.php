<?php get_header(); ?>

        <div class="container_12">
          <div class="grid_12 pagina">
          
          

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         

    <div class="contenido_pagina">
    <?php the_content(); ?>
    </div><!-- .entry-content -->
    
    
    <div style="clear:both;"></div>
    </div><!-- #post-## -->



<?php endwhile; ?>

       
       
       
       
          </div>
          <div class="clear"></div>
        </div>

 
    </section> 
  </div>   


<?php get_footer(); ?>
