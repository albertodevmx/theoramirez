<?php get_header(); ?>

<!--==============================		content		================================-->


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="entrada_sola">
        <h1><?php echo get_the_title($ID); ?></h1>
        
        <div class="articulo">
	        <?php the_content(); ?>
		</div>
        
<div style="clear: both; display block;"></div>
        <div class="sugerencias">
            <b>Te recomendamos seguir Leyendo</b>
            	<ul>
					<li>Noticia Siguiente: <?php next_post_link('<strong>%link</strong>'); ?></li>
                    <li>Noticia Anterior: <?php previous_post_link('<strong>%link</strong>'); ?></li>
				</ul>
		</div>        
        
        
        
        
		<div id="468x60_1" class="c468x60_1">
		<?php $my_query = new WP_Query('showposts=5&category_name=ads_468x60_1'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
       		
			<?php $enlace = get_post_meta($post->ID, 'enlace', true); ?>
       
			<?php if( ! empty($enlace) ) { ?>
				<a href="<?php echo $enlace; ?>" target="_blank"><img src="<?php echo get_post_meta($post->ID, 'imagenslide', true); ?>" /></a>
			<?php } else { ?>
            	<img src="<?php echo get_post_meta($post->ID, 'imagenslide', true); ?>" />
            <?php } ?>
            
       <?php endwhile; ?>
		</div>
    
    
        
        <div id="fb-root"></div>
		<script src="http://connect.facebook.net/es_ES/all.js#appId=123282127724030&amp;xfbml=1"></script>
        <fb:like href="" send="false" layout="button_count" width="710" show_faces="false" font="trebuchet ms"></fb:like>     


		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script>
        <fb:comments href=<?php $dominio="http://zonaoriente.com.mx"; echo $dominio.$_SERVER['REQUEST_URI']; ?> num_posts="10" width="710"></fb:comments>

	</div>

<?php endwhile; ?>
       
<?php get_sidebar(); ?>


<!--==============================footer=================================-->
<?php get_footer(); ?>
