<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package basestrap
 */

get_header(); ?>

 <main class="site my-5">

 	<div class="container">
 	 <div class="row">

 		 <article class="col-md-9">

 					 <?php
 					 // Avvio del Loop
 					 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 						 <div class="content-article">
 							 <div class="row">
 								 <div class="col-sm-4">
 									 <a href=<?php the_permalink(); ?>><img class="img-fluid mb-3" src=<?php the_post_thumbnail(); ?></a>
 								 </div>
 								 <div class="col-sm-8">
 									 <p>
 										 <span class="post-category">
 											 <a><?php the_category(', '); ?></a>
 										 </span>
 										 <i class="fas fa-clock"></i>
 										 <?php the_time('j M, Y') ?>
 									 </p>
 									 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 									 <p><?php the_excerpt(); ?></p>
 								 </div>
 							 </div>
 						 </div>

 					 <?php endwhile; ?>

 					 <?php endif; ?>

 				</article>

 			<?php get_sidebar(); ?>

 			</div>
 			<?php get_template_part('inc/pagination'); ?>
 		</div>

  </main>

<?php get_footer(); ?>
