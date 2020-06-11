<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HELLO
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-10 offset-md-1 col-lg-8 offset-lg-2'); ?>>

	<header class="row bg-light py-3">
		<div class="col-md-4">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>projekte"><button type="button" class="btn btn-muted mb-4"><i class="fas fa-arrow-circle-left"></i> Alle Projekte</button></a>
		<?php
		if ( is_singular() ) :
			the_title( '<h2>', '</h2>' );
		else :
			the_title( '<h2>', '</h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<p><i>Projektbeginn: <?php echo get_the_date( 'M Y' ); ?></i></p>
		<?php endif; ?>
		</div><!-- col-md-6 -->
		<div class="col-md-8">
			<?php hello_post_thumbnail(); ?>
		</div>
	
		
	</header><!-- .entry-header -->

	<div class="article-content mt-5">
	
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
