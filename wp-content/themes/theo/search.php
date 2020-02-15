<?php get_header(); ?>

<!--==============================		content		================================-->

<div class="categoria_lista">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="articulo_cat">
            <h3><a href="?p=<?php the_ID(); ?>"><?php echo get_the_title($ID); ?></a></h3>
			<?php the_post_thumbnail('thumbnail'); ?>
            
            <div class="articulo">
                <?php the_excerpt(get_the_content($ID)); ?>
                <span class="leermas"><a href="?p=<?php the_ID(); ?>">Leer más >></a></span>
            </div>
        </div>
        
    <?php endwhile; ?>
</div>       
       
<?php get_sidebar(); ?>

<!--==============================footer=================================-->
<?php get_footer(); ?>