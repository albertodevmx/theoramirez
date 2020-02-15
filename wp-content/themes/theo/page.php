<?php get_header(); ?>

<!--==============================		content		================================-->


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


	<div id="pagina">
        <h1><?php echo get_the_title($ID); ?></h1>
        
        <div class="articulo">
	        <?php the_content(); ?>
		</div>
	</div>
    

<?php endwhile; ?>
       


<!--==============================footer=================================-->
<?php get_footer(); ?>