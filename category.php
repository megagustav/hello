<?php
/**
 * The template for displaying categories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package HELLO
 */

get_header();
?>

	<section class="mt-5 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
		
	<h2 class="text-secondary mb-3"><span class="project_details category <?php single_cat_title(); ?>"> <?php single_cat_title(); ?>-Projekte</span></h2>
	<a href="/projekte"><button type="button" class="px-0 mb-3 btn-link btn text-left"><i class="fas fa-arrow-left"></i>Alle Projekte</button></a>
		
		<?php
	
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'category' );

		endwhile; // End of the loop.
		?>

	</section><!-- #main -->

<?php
get_sidebar();
get_footer();
