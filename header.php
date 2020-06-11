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

	<header id="masthead" class="col-md-11 col-lg-10">
								 
		<div class="row">
			<div class="pl-md-5 offset-lg-2 offset-md-1 col-md-7 col-lg-6">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="/hello_logo.png" class="img-fluid logo mt-5"/>
					<!--svg xmlns="http://www.w3.org/2000/svg"
	 viewBox="0 50 785 440" class="logo-container" width="551">
						<image xlink:href="/hello_logo.svg" class="logo" src="/hello_logo.png"/>
					</svg-->
				</a>
			</div>
			<div class="col-md-4 py-md-5">
				<nav class="navbar float-right justify-content-end navbar-expand-md navbar-light">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
					  <div class="collapse navbar-nav flex-column navbar-collapse" id="navbarNavAltMarkup">
						<a class="nav-item nav-link" href="/">HELLO</a>
						<a class="nav-item nav-link" href="/projekte">Projekte</a>
						<a class="nav-item nav-link" href="/transparenz">Transparenz</a>
						<a class="nav-item nav-link" href="/uber">Über Uns</a>
						
						<a class="nav-item nav-link" href="/mitmachen">Mitmachen</a>
						<a class="nav-item nav-link" href="/kontakt">Kontakt</a>
					  </div>
		
				</nav>
			</div><!--/nav container-->
		</div>
	
	</header><!-- #masthead -->
