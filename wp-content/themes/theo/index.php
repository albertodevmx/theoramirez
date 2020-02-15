<?php get_header(); ?>

<!--==============================		content		================================-->

<div id="nota_principal"> 
  
  <!--============================== 		slider	   =================================-->
  
  <div id="slider_wrapper">
    <div id="slide">    
        <div id="slider">

            <?php
            $args = array(
                'cat' => '2',
                'posts_per_page' => '50'
            );
            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post();
                $image_th       = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                $image_full     = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                $image_medium   = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
            ?>
            
              <img src="<?php echo $image_full[0]; ?>" alt="" title="" />

            <?php endwhile; ?>
        </div>
    </div>
  </div>
  <!-- mislider -->


<div class="bienvenida">
  <p><b>Bienvenido</b> a mi página, ¡gracias por visitar!, en el menú  encontraras algunas imágenes del resultado de mi trabajo, esperando sean de su agrado.</p>  
</div>



  
  
</div>
<div class="clear"></div>

<!--==============================footer=================================-->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/nivoslider.js" type="text/javascript"></script>


<script type="text/javascript">
  jQuery(window).load(function() {
    jQuery('#album').nivoSlider({
      effect: 'fade',
      pauseTime: 3000, 
      directionNav: true,
      directionNavHide: false,
      prevText: 'Página Anterior', 
        nextText: 'Página Siguiente',  
      controlNav: true
    });



    jQuery('#slider').nivoSlider({
      effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
      slices: 15, // For slice animations
      boxCols: 8, // For box animations
      boxRows: 4, // For box animations
      animSpeed: 500, // Slide transition speed
      pauseTime: 3000, // How long each slide will show
      startSlide: 0, // Set starting Slide (0 index)
      directionNav: false, // Next & Prev navigation
      controlNav: false, // 1,2,3... navigation
      pauseOnHover: false, // Stop animation while hovering
      randomStart: false // Start on a random slide
    });

  });

</script>

<?php get_footer(); ?>