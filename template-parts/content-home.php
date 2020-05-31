<?php

/**
 * Template part for displaying page content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HELLO
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-10 offset-md-1 col-lg-6 offset-lg-3'); ?>>

	<?php the_content(); ?>

</article>
<section class="col-md-12">
	<?php 
	// the query
	$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
	<?php if ( $wpb_all_query->have_posts() ) : ?>
 
	<div class="row">
 
		<!-- the loop -->
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			
			<div <?php post_class('col-md-4 mb-3'); ?>>
				<a href="<?php the_permalink(); ?>">
					<div class="card mb-3">
						<div class="card-img-top">
							<?php the_post_thumbnail(); ?>
						</div>
					  <div class="card-body">
						<h5 class="card-title">
							<?php the_title(); ?>
						</h5>
						<p class="card-text">
							<small class="text-muted">
								<?php the_date( 'M Y' ); ?>
							</small>
						</p>
					  </div>
					</div>
				</a>
			</div>
			
		<?php endwhile; ?>
		<!-- end of the loop -->
 
	</div>
 
		<?php wp_reset_postdata(); ?>
 
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</section>
