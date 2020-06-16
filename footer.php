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
				<div class="col-md-9 pb-3 pb-md-0">
					Sie möchten uns kennenlernen und sich unverbindlich informieren?
					Wir freuen uns auf Sie!
				</div>
				<div class="col-md-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>kontakt"><button type="button" class="btn btn-block btn-primary"><i class="fas fa-lg fa-phone-square"></i> Kontakt</button></a>
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
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>projekte">Projekte</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>uber">Über</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>transparenz">Transparenz</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>mitmachen">Mitmachen</a></li>
				</ul>
			</div>
			<div class="col-4 offset-sm-2 text-right mb-5 px-0">
				<!--h2>Lala</h2-->
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>kontakt">Kontakt</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>impressum">Impressum</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>datenschutz">Datenschutz</a></li>
					<li>&copy; <?php echo date("Y") ?></li>
				</ul>
			</div>
		</div>
	
	</section>

</div><!-- #page -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

	</body>
</html>
