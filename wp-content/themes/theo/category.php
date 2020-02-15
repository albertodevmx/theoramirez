<?php get_header(); ?>



<!--==============================		content		================================-->

<div id="page">
    <div id="container">

    <h1>
        <?php
	//Obtiene el id de la categoría clickeada
        $cat_id     = $_GET['cat'];
	//Obtiene la categoría directa
        $category   = get_the_category();     
	//obtiene la categoría padre
        $parent     = get_cat_name($category[0]->category_parent);
        
	//Imprime la categoría
        echo $parent." > ".$category[0]->cat_name;
        ?>
    </h1>



    <?php if ($parent == 'Galerías') {  $galerias = true; ?>
    <!-- Start Advanced Gallery Html Containers -->
    <div id="gallery" class="content">
        <div id="controls" class="controls"></div>
        <div class="slideshow-container">
            <div id="loading" class="loader"></div>
            <div id="slideshow" class="slideshow"></div>
        </div>
        <div id="caption" class="caption-container"></div>
    </div>



    <div id="thumbs" class="navigation">
        <ul class="thumbs noscript">
            <?php
            $args1 = array(
                'cat' => $cat_id,
                'posts_per_page' => '50'
            );


            $my_query = new WP_Query($args1); while ($my_query->have_posts()) : $my_query->the_post();
                $image_th       = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                $image_full     = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                $image_medium   = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
            ?>
                <li>
                    <a class="thumb" href="<?php echo $image_medium[0]; ?>" title="">
                        <img src="<?php echo $image_th[0]; ?>" alt="" />
                    </a>
                    <div class="caption">

                        
                        <div class="image-title"><?php echo get_the_title($ID); ?></div>
                        <div class="image-desc"><?php echo get_the_content($ID); ?></div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>





    <?php } elseif($parent == 'Álbumes') { ?>












        <div id="thumbs2" class="navigation">
		
            <ul class="thumbs noscript">

                <?php
                $args1 = array(
                    'cat' => $cat_id,
                    'posts_per_page' => '50', 
                    'order' => 'ASC', 
                );


                $my_query = new WP_Query($args1); while ($my_query->have_posts()) : $my_query->the_post();
                    $image_th       = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                    $image_full     = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                    $image_medium   = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                ?>
                    <li>
                        <a class="thumb" href="<?php echo $image_medium[0]; ?>" title="">
                            <img src="<?php echo $image_th[0]; ?>" alt="" width="20px" height="20px" />
                        </a>
                        <div class="caption">

                            
                            <div class="image-title"><?php echo get_the_title($ID); ?></div>
                            <div class="image-desc"><?php echo get_the_content($ID); ?></div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>




        <div id="gallery" class="content">
            <div id="controls" class="controls"></div>
            <div class="slideshow-container">
                <div id="loading" class="loader"></div>
                <div id="slideshow" class="slideshow"></div>
            </div>
            
        </div>



        







    <!--
            
                <div id="album" class="album">
                    <?php
                    $args2 = array(
                        'cat' => $cat_id,
                        'posts_per_page' => '50'
                    );
                    $my_query = new WP_Query($args2); while ($my_query->have_posts()) : $my_query->the_post();
                        $image_th       = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                        $image_full     = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                        $image_medium   = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                    ?>
    
                        <img src="<?php echo $image_full[0]; ?>" />
                    
                    <?php endwhile; ?>
                </div>

    -->
   

    <?php } else { echo "Ocurrió un error, regresa luego"; } ?>
    



    <div style="clear: both;"></div>

    </div><!-- containder -->
</div>
    


<!--==============================footer=================================-->



<?php if ($galerias) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/galleriffic-2.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.opacityrollover.js"></script>
    <!-- We only want the thunbnails to display when javascript is disabled -->
    <script type="text/javascript">
      document.write('<style>.noscript { display: none; }</style>');
    </script>


<script type="text/javascript">
    jQuery(document).ready(function($) {
        // We only want these styles applied when javascript is enabled
        $('div.navigation').css({'width' : '140px', 'float' : 'left', 'margin-top' : '50px'});
        $('div.content').css('display', 'block');

        // Initially set opacity on thumbs and add
        // additional styling for hover effect on thumbs
        var onMouseOutOpacity = 0.67;
        $('#thumbs ul.thumbs li').opacityrollover({
            mouseOutOpacity:   onMouseOutOpacity,
            mouseOverOpacity:  1.0,
            fadeSpeed:         'fast',
            exemptionSelector: '.selected'
        });
        
        // Initialize Advanced Galleriffic Gallery
        var gallery = $('#thumbs').galleriffic({
            delay:                     4000,
            numThumbs:                 9,
            preloadAhead:              10,
            enableTopPager:            true,
            enableBottomPager:         true,
            maxPagesToShow:            7,
            imageContainerSel:         '#slideshow',
            controlsContainerSel:      '#controls',
            captionContainerSel:       '#caption',
            loadingContainerSel:       '#loading',
            renderSSControls:          true,
            renderNavControls:         true,
            playLinkText:              'Reproducir Presentación',
            pauseLinkText:             'Pausar Presentación',
            prevLinkText:              '&lsaquo; Foto Anterior',
            nextLinkText:              'Foto Siguiente &rsaquo;',
            nextPageLinkText:          'Adelante &rsaquo;',
            prevPageLinkText:          '&lsaquo; Atras',
            enableHistory:             false,
            autoStart:                 true,
            syncTransitions:           true,
            defaultTransitionDuration: 1500,
            onSlideChange:             function(prevIndex, nextIndex) {
                // 'this' refers to the gallery, which is an extension of $('#thumbs')
                this.find('ul.thumbs').children()
                    .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                    .eq(nextIndex).fadeTo('fast', 1.0);
            },
            onPageTransitionOut:       function(callback) {
                this.fadeTo('fast', 0.0, callback);
            },
            onPageTransitionIn:        function() {
                this.fadeTo('fast', 1.0);
            }
        });
    });
</script>
<?php } else { ?>







<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/galleriffic-2s.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.opacityrollover.js"></script>
    <!-- We only want the thunbnails to display when javascript is disabled -->
    <script type="text/javascript">
      document.write('<style>.noscript { display: none; }</style>');
    </script>


<script type="text/javascript">
    jQuery(document).ready(function($) {
        // We only want these styles applied when javascript is enabled
        $('div.navigation').css({ 'width' : '700px'});
        $('div.content').css({'width' : '960px', 'display' : 'block' });

        // Initially set opacity on thumbs and add
        // additional styling for hover effect on thumbs
        var onMouseOutOpacity = 0.67;
        $('#thumbs ul.thumbs li').opacityrollover({
            mouseOutOpacity:   onMouseOutOpacity,
            mouseOverOpacity:  1.0,
            fadeSpeed:         'fast',
            exemptionSelector: '.selected'
        });
        
        // Initialize Advanced Galleriffic Gallery
        var gallery = $('#thumbs2').galleriffic({
            delay:                     4000,
            numThumbs:                 19,
            preloadAhead:              10,
            enableTopPager:            false,
            enableBottomPager:         false,
            maxPagesToShow:            1,
            imageContainerSel:         '#slideshow',
            controlsContainerSel:      '#controls',
            captionContainerSel:       '#caption',
            loadingContainerSel:       '#loading',
            renderSSControls:          true,
            renderNavControls:         true,
            playLinkText:              'Reproducir Presentación',
            pauseLinkText:             'Pausar Presentación',
            prevLinkText:              '&lsaquo; Página Anterior',
            nextLinkText:              'Página Siguiente &rsaquo;',
            nextPageLinkText:          'Adelante &rsaquo;',
            prevPageLinkText:          '&lsaquo; Atras',
            enableHistory:             false,
            autoStart:                 false,
            syncTransitions:           true,
            defaultTransitionDuration: 1500,
            onSlideChange:             function(prevIndex, nextIndex) {
                // 'this' refers to the gallery, which is an extension of $('#thumbs')
                this.find('ul.thumbs').children()
                    .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                    .eq(nextIndex).fadeTo('fast', 1.0);
            },
            onPageTransitionOut:       function(callback) {
                this.fadeTo('fast', 0.0, callback);
            },
            onPageTransitionIn:        function() {
                this.fadeTo('fast', 1.0);
            }
        });
    });
</script>
<?php } ?>
<?php get_footer(); ?>