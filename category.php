<?php
/**
 * The template for displaying category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package basestrap
 */

get_header(); ?>

<main class="site">

  <div class="container">
    <div class="row">

   	 <div class="container py-5">
   		 <h1 class="display-4 text-center"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h1>
   		 <hr style="height: 5px; background: #D2FF00;">
     </div>

   			 <article class="col-md-9">


   				 <?php
   				 // Avvio del Loop
   				 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   					 <div class="content-article">
   						 <div class="row">
   							 <div class="col-sm-4">
   								 <a href=<?php the_permalink(); ?>><img class="img-responsive" src=<?php the_post_thumbnail(); ?></a>
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

   				 <?php get_template_part('inc/pagination'); ?>

   				 <?php endif; ?>

         </article>

   		<?php get_sidebar(); ?>


      </div>
    </div>
  </div>
</main>



 <?php get_footer(); ?>
