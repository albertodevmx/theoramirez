<div id="sidebar">
	<div id="160x600_1" class="c160x600_1">
       <?php $my_query = new WP_Query('showposts=5&category_name=ads_160x600_1'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
       		
			<?php $enlace = get_post_meta($post->ID, 'enlace', true); ?>
       
			<?php if( ! empty($enlace) ) { ?>
				<a href="<?php echo $enlace; ?>" target="_blank"><img src="<?php echo get_post_meta($post->ID, 'imagenslide', true); ?>" /></a>
			<?php } else { ?>
            	<img src="<?php echo get_post_meta($post->ID, 'imagenslide', true); ?>" />
            <?php } ?>
            
       <?php endwhile; ?>
    </div>
</div>
