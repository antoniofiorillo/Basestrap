<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basestrap
 */
?>

 <aside class="col-md-3 mt-0">

 	<div class="container">
 		<div class="row">
 		 <?php get_search_form(); ?>
 		</div>
 	</div>


  <h3 class="title-side mt-3">Ultimi articoli</h3>
  <div>
 	 <?php
 	 $args = array(
 		 'posts_per_page' => 3,
 		 'post_type' => 'post',
 		 'order' => 'DESC',
 		 'orderby' => 'date');
 	 $loop = new WP_Query($args);

 	 // Avvio del Loop
 	 if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

 		 <a href="<?php the_permalink(); ?>" class="side-text-link">
 			 <span class="side-text-link_clock">
 				 <i class="fas fa-clock"></i>
 				 <?php the_time('j M, Y') ?>
 			 </span>
 			 <div>
 				 <span class="post-category">
 						 <strong><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></strong>
 				 </span>
 			 </div>
 			 <span class="side-text-link__title animate"><?php the_title(); ?></span>
 		 </a>


 	 <?php endwhile; ?>

 	 <?php endif; ?>
  </div>
 </aside>
