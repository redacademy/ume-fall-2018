

 <h3>  

<a href="<?php echo esc_url( get_the_permalink()); ?>" class="play">
<?php echo get_the_title(); ?>
</a>
  </h3>
  <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play">
       <?php the_post_thumbnail( 'thumbnail');?>
  </a>
   <div class="author">
   <h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
   </div>
   <div class="play-button-featured">
	<?php printf( '<a href="%s" class="play"><img src="'.get_template_directory_uri().'/assets/images/play-button.png"/></a>', esc_url( get_permalink() ) ); ?>
	
	</div>

   