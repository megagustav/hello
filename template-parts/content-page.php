<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HELLO
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-9'); ?>>

	<!--?php hello_post_thumbnail(); ?-->
	
	
	<h2><?php the_title(); ?></h2>
	
	
	<?php
	the_content();

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hello' ),
			'after'  => '</div>',
		)
	);
	?>
	

</article><!-- #post-<?php the_ID(); ?> -->
