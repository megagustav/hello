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

	<section class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mb-5 pb-5">
		
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
		
		<div class="row footer">
			<div class="col-sm-2 d-none d-sm-block text-left mb-5 col-3">
				<!--h2>HELLO</h2-->
				<ul>
					<li><a href="/projekte" target="_blank">Projekte</a></li>
					<li><a href="/uber" target="_blank">Über</a></li>
					<li><a href="/transparenz" target="_blank">Transparenz</a></li>
					<li><a href="/mitmachen" target="_blank">Mitmachen</a></li>
				</ul>
			</div>
			<div class="col-sm-4 text-left mr-auto mb-5 col-auto">
				<!--h2>Lala</h2-->
				<ul>
					<li><i class="fab fa-fw fa-instagram-square"></i> Instagram</li>
					<li><i class="fab fa-fw fa-facebook-square"></i> Facebook</li>
					<li><i class="fas fa-fw fa-envelope-square"></i> E-mail an uns</li>
				</ul>
			</div>
			<div class="col-auto offset-md-3 text-right mb-5">
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
