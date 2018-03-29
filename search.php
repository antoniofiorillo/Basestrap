<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package basestrap
 */

get_header(); ?>

<main class="site">

<div class="container">

 <div class="row">
	 <div class="container mb-5">
		 <h1 class="display-4 text-center"><?php esc_html_e('Results for: ', 'basestrap')?><?php the_search_query(); ?></h1>
		 <hr>
	 </div>




	 <article class="col-md-9 my-5">


		 <?php

		 // Avvio del Loop
		 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					 <div class="row">
						 <div class="col-sm-4">
							 <a href=<?php the_permalink(); ?>><img class="img-fluid" src=<?php the_post_thumbnail(); ?></a>
						 </div>
						 <div class="col-sm-8">
							 <p>
								 <span class="post-category">
									 <a><?php the_category(', '); ?></a>
								 </span>
								 <i class="fa fa-clock-o"></i>
								 <time><?php the_time('j M, Y') ?></time>
							 </p>
							 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							 <p><?php the_excerpt(); ?></p>
						 </div>
					 </div>

		 <?php endwhile; ?>

		 <?php else: ?>

			 <h3><?php esc_html_e('Sorry, no posts matched your criteria.', 'fiorillodesign'); ?></h3>

		 <?php endif; ?>

	 </article>

	 <?php get_sidebar(); ?>

	 </div>
	 <?php get_template_part('inc/pagination'); ?>
</main>

<?php get_footer(); ?>
