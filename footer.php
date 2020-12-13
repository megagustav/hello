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
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>kontakt"><button type="button" class="btn btn-block btn-primary"><i class="fas fa-lg fa-phone-square"></i>Kontakt</button></a>
				</div>
			</div>
		</div>
		
		<hr>
		
		<div class="row footer px-0 px-sm-3">
			<div class="text-left mb-5 col-4 col-sm-3 px-0">
				<!--h2>Lala</h2-->
				<ul>
					<li><a href="https://instagram.com/HELLO-Die-Stiftung"><i class="fab fa-fw fa-instagram"></i>Instagram</a></li>
					<li><a href="https://www.facebook.com/HELLO-Die-Stiftung-105434947950160"><i class="fab fa-fw fa-facebook-f"></i>Facebook</a></li>
					<li><a href="mailto:hello@hello-die-stiftung.com/"><i class="far fa-fw fa-envelope"></i>E-Mail</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#newsletter"><i class="far fa-fw fa-at"></i>Newsletter</a></li>
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
<script>
//Get the button
var mybutton = document.getElementById("navtoggle");

// When the user clicks on the button, scroll to the top of the document
function toTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<?php wp_footer(); ?>


<!-- START - We recommend to place the below code in footer or bottom of your website html  -->
	<script>
	  window.REQUIRED_CODE_ERROR_MESSAGE = 'Wählen Sie bitte einen Ländervorwahl aus.';
	
	  window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "Die eingegebenen Informationen sind nicht gültig. Bitte überprüfen Sie das Feldformat und versuchen Sie es erneut.";
	
	  window.REQUIRED_ERROR_MESSAGE = "Dieses Feld darf nicht leer sein. ";
	
	  window.GENERIC_INVALID_MESSAGE = "Die eingegebenen Informationen sind nicht gültig. Bitte überprüfen Sie das Feldformat und versuchen Sie es erneut.";
	
	
	
	
	  window.translation = {
		common: {
		  selectedList: '{quantity} Liste ausgewählt',
		  selectedLists: '{quantity} Listen ausgewählt'
		}
	  };
	
	  var AUTOHIDE = Boolean(0);
	</script>
	<script src="https://browser.sentry-cdn.com/5.27.4/bundle.min.js" integrity="sha384-yUnxX3o5D7+yEEIKDXlpygg+0Q2LdyklXwZVWUjc6fohGisYvhpyQbRvNYaDGtvU" crossorigin="anonymous">
	</script>
	<script>
	  Sentry.init({
		dsn: 'https://de7dde9e67384de6a2a88a024bb35691@sentry.io/1229482',
		environment: 'production',
	  });
	</script>
	<script src="https://sibforms.com/forms/end-form/build/main.js"></script>
	
	<!-- END - We recommend to place the above code in footer or bottom of your website html  -->

	</body>
</html>
