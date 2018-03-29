<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package basestrap
 */

get_header(); ?>

<main class="site d-flex align-items-center">

	<div class="container">
    <div class="col-lg-12">
			<h1 class="text-center"><?php esc_html_e('Error 404!', 'basestrap') ?></h1>
      <h2 class="text-center"><?php esc_html_e('Oops! That page can%1$st be found.', 'basestrap') ?></h2>
    </div>
  </div>

</main>

<?php get_footer();
