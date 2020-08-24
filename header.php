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
	<script>
	  window.FontAwesomeConfig = {
		searchPseudoElements: true
	  }
	</script>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/overwrites.css">
    <link rel="stylesheet" href="https://use.typekit.net/puq5ttk.css">

	<meta name="description" content="Als Zuhause für Ihren guten Willen bieten wir nachhaltiges Engagement — zum Nutzen von Menschen, verbessern und weiterentwickeln wollen.">
	<meta name="og:description" content="Als Zuhause für Ihren guten Willen bieten wir nachhaltiges Engagement — zum Nutzen von Menschen, verbessern und weiterentwickeln wollen.">
	<meta property="og:title" content="HELLO – Die Stiftung">
	<meta property="og:image" content="screenshot.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
<?php wp_body_open(); ?>

<div id="page" class="container">
	<a class="sr-only sr-only-focusable" href="#primary"><?php esc_html_e( 'Skip to content', 'hello' ); ?></a>

	<header id="masthead" class="mb-5">
								 
		<div class="row px-3 site-header">
			<div class="offset-lg-2 offset-md-1 col-md-7 col-lg-6 col-xl-5">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<!--img src="/hello_logo.png" class="img-fluid logo mt-5"/-->
					<img src="/hello_logo.svg" class="logo-container" alt="Monkey face" style="width: 100%; height: auto;">
					<!--svg xmlns="http://www.w3.org/2000/svg"
	 viewBox="0 50 785 310" class="logo-container" width="551">
						<image xlink:href="/hello_logo.svg" class="logo" src="/hello_logo.png"/>
					</svg-->
					<h2 class="name">Die Stiftung</h2>
				</a>
			</div>
			<div class="col-md-4">
				<nav class="navbar navbar-expand-md navbar-light">
				  <button id="navtoggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
					  <div class="collapse navbar-nav flex-column navbar-collapse" id="navbarNavAltMarkup">
						<a class="nav-item nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">HELLO</a>
						<a class="nav-item nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>projekte">Projekte</a>
						<a class="nav-item nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>transparenz">Transparenz</a>
						<a class="nav-item nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>uber">Über Uns</a>
						
						<a class="nav-item nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>mitmachen">Mitmachen</a>
						<a class="nav-item nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>kontakt">Kontakt</a>
					  </div>
		
				</nav>
			</div><!--/nav container-->
		</div>
	
	</header><!-- #masthead -->