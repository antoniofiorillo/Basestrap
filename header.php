<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basestrap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
			</a>

		  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <?php
		      wp_nav_menu( array(
		        'theme_location'	=> 'primary',
		        'container'       => false,
		        'menu_class'		  => '',
		        'fallback_cb'		  => '__return_false',
		      	'items_wrap'		  => '<ul id="%1$s" class="navbar-nav ml-auto">%3$s</ul>',
		        'depth'			      => 2,
			      'walker'  	      => new b4st_walker_nav_menu()
		      ) );
		    ?>
		  </div>
		</div>
	</nav>
