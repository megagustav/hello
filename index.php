<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HELLO
 */

get_header();
?>

<section class="col-md-12">
	<?php 
	// the query
	$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
	<?php if ( $wpb_all_query->have_posts() ) : ?>
 
 	<div class="row my-4">
		<div class="col">
			<a class="mb-2 mb-sm-0 col-auto btn btn-primary btn-block category-kunst" href="category/kunst" role="button"><i class="fas fa-pencil-paintbrush"></i> Kunst</a>
		</div>
		<div class="col">
			<a class="col-auto btn btn-primary btn-block category-klima" href="category/klima" role="button"><i class="fas fa-leaf"></i> Klima</a>
		</div>
		<div class="col">
			<a class="col-auto btn btn-primary btn-block category-jugend" href="category/jugend" role="button"><i class="fas fa-grin-alt"></i> Jugend</a>
		</div>
		<div class="col">
			<a class="col-auto btn btn-primary btn-block category-altenpflege" href="category/altenpflege" role="button"><i class="fas fa-heart"></i> Altenpflege</a>
		</div>
		<div class="col">
			<a class="col-auto btn btn-primary btn-block category-sport" href="category/sport" role="button"><i class="fas fa-tennis-ball"></i> Sport</a>
		</div>
 	</div>
 
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

<?php
get_sidebar();
get_footer();
