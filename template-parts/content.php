<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HELLO
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<a href="/projekte"><i class="fas fa-arrow-circle-left"></i> Alle Projekte</a><h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title">', '</h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php echo get_the_date( 'M Y' ); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<a href="<?php echo get_permalink(); ?>" rel="bookmark">
		<?php hello_post_thumbnail(); ?>
	</a>

	<div class="entry-content">
	
		<!--?php
		if ( is_singular() ) :
			
		else :
			?-->
	
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
