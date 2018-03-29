<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package basestrap
 */

get_header(); ?>

<main class="site my-5">

 <div class="container">
	 <div class="row">
		 <main class="col-md-9" role="main">

			 <?php

			 if (have_posts()) : while(have_posts()) : the_post(); ?>

			 <article>
				 <div class="content-article">
					 <span class="post-category">
						 <a><strong><?php the_category(', '); ?></strong></a>
					 </span>
					 <h1 class="display-5"><?php the_title(); ?></h1>
					 <div class="row">
						 <div class="col-md-6">
							 <div class="author">
								 <?php echo get_avatar( '', 50 ); ?>
								 <p class="my-2">
									 By
									 <a href="page-rez.php">
										 <strong><?php the_author(); ?></strong>
									 </a>
									 -
									 <i class="fas fa-clock"></i>
									 <time><?php the_time('j M, Y') ?></time>
								 </p>
							 </div>
						 </div>
						 <div class="col-md-6"></div>
					 </div>
					 <div class="container-image-single">
						 <img class="img-res" alt="" src=<?php the_post_thumbnail(); ?>
					 </div>
					 <div class="content-inside">
						 <p><?php the_content(); ?></p>
					 </div>
				 </div>

				 <div id="comments">
					 <?php comments_template(); ?>
				 </div>
			 </article>
		 </main>

		 <?php endwhile; ?>
		 <?php endif; ?>

		 <?php get_sidebar(); ?>


	 </div><!-- /.row -->

 </div><!-- /.container -->

</main>

<?php get_footer(); ?>
