<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HELLO
 */

?>

	<section class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-5 pt-5 mb-5 pb-5">
		
		<div class="mt-5">
			<div class="row px-0 alert alert-primary" role="alert">
				<div class="col-md-8 pb-3 pb-md-0">
					Sie möchten uns kennenlernen und sich unverbindlich informieren?
					Wir freuen uns auf Sie!
				</div>
				<div class="col-md-4">
					<a href="tel:0123456789"><button type="button" class="pl-2 btn btn-block btn-primary"><i class="float-left fas fa-3x fa-phone-square"></i> Anrufen <br><small>0123456789</small></button></a>
				</div>
			</div>
		</div>
		
		<hr>
		
		<div class="row footer px-0 px-sm-3">
			<div class="text-left mb-5 col-4 col-sm-3 px-0">
				<!--h2>Lala</h2-->
				<ul>
					<li><i class="fab fa-fw fa-instagram"></i> Instagram</li>
					<li><i class="fab fa-fw fa-facebook-f"></i> Facebook</li>
					<li><i class="far fa-fw fa-envelope"></i> E-Mail</li>
					<li><i class="far fa-fw fa-at"></i> Newsletter</li>
				</ul>
			</div>
			<div class="col-4 text-left text-center text-sm-left mb-5 col-sm-3 px-0">
				<!--h2>HELLO</h2-->
				<ul>
					<li><a href="/projekte" target="_blank">Projekte</a></li>
					<li><a href="/uber" target="_blank">Über</a></li>
					<li><a href="/transparenz" target="_blank">Transparenz</a></li>
					<li><a href="/mitmachen" target="_blank">Mitmachen</a></li>
				</ul>
			</div>
			<div class="col-4 offset-sm-2 text-right mb-5 px-0">
				<!--h2>Lala</h2-->
				<ul>
					<li>Kontakt</li>
					<li>Impressum</li>
					<li>Datenschutz</li>
					<li>&copy; <?php echo date("Y") ?></li>
				</ul>
			</div>
		</div>
	
	</section>

</div><!-- #page -->

<?php wp_footer(); ?>

	</body>
</html>
