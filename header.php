<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HELLO
 */

?>
<!doctype html>
<html lang="de-de">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/46038f1888.js" crossorigin="anonymous"></script>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/overwrites.css">
    <link rel="stylesheet" href="https://use.typekit.net/puq5ttk.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
<?php wp_body_open(); ?>
<div id="page" class="container">
	<a class="sr-only sr-only-focusable" href="#primary"><?php esc_html_e( 'Skip to content', 'hello' ); ?></a>

	<header id="masthead" class="col-md-10 offset-md-1 col-lg-10 offset-lg-2">
		
		<div class="row justify-content-between">
			<div class="col-md-9 mr-auto">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg"
	 viewBox="0 50 785 440" class="logo-container" width="551">
						<image xlink:href="/hello_logo.svg" class="logo" src="/hello_logo.png"/>
					</svg>
				</a>
			</div>
			<div class="col-12 d-block d-sm-none text-center">
				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu(
							array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu'
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="col-md-3 p-0 m-0 pt-md-5 d-none d-sm-block">
				<nav id="site-navigation" class="main-navigation flex-column">
					<?php
						wp_nav_menu(
							array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu'
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	
	</header><!-- #masthead -->
