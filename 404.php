<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package HELLO
 */

get_header();
?>

	<main id="primary">

		<section class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			<h2 class="text-danger">Fehler 404<br>
				Die Seite konnte nicht gefunden werden</h2>
			<p>Das kann schon mal vorkommen. Wahrscheinlich ertappen Sie uns gerade bei Wartungsarbeiten. Falls dieser Fehler erneut auftritt, informieren Sie uns doch bitte unter <a href="<?php echo esc_url( home_url( '/' ) ); ?>kontakt" target="_blank">Kontakt</a>.</p>
			<hr>
			<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank">zur Startseite <i class="fas fa-arrow-right"></i></a></h2>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();