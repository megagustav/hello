<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HELLO
 */

?>
<section id="post-<?php the_ID(); ?> projekte" <?php post_class('col-md-10 offset-md-1 col-lg-8 offset-lg-2'); ?>>
	
	<h2 class="mt-5"><a href="<?php echo esc_url( home_url( '/' ) ); ?>projekte" target="_blank">Projekte</a></h2>
</section>
<section class="col-md-12">
	<?php 
	// the query
	$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
	<?php if ( $wpb_all_query->have_posts() ) : ?>
 
 	<div class="row my-4 px-3 d-flex justify-content-between">
 		<div class="px-1 col-12 col-sm">
			<a class="px-0 mb-2 col-auto btn btn-primary btn-block nobreak category-jugend" href="<?php echo esc_url( home_url( '/' ) ); ?>category/jugend" role="button"><i class="fas fa-grin-alt"></i>Jugend</a>
		</div>
		<div class="px-1 col-12 col-sm">
			<a class="px-0 mb-2 col-auto btn btn-primary btn-block nobreak category-altenpflege" href="<?php echo esc_url( home_url( '/' ) ); ?>category/senioren" role="button"><i class="fas fa-heart"></i>Senioren</a>
		</div>
		<div class="px-1 col-12 col-sm">
			<a class="px-0 mb-2 col-auto btn btn-primary btn-block nobreak category-klima" href="<?php echo esc_url( home_url( '/' ) ); ?>category/klima" role="button"><i class="fas fa-leaf"></i>Klima</a>
		</div>
		<div class="px-1 col-12 col-sm">
			<a class="px-0 mb-2 col-auto btn btn-primary btn-block nobreak category-kunst" href="<?php echo esc_url( home_url( '/' ) ); ?>category/kunst" role="button"><i class="fas fa-pencil-paintbrush"></i>Kunst</a>
		</div>
		<div class="px-1 col-12 col-sm">
			<a class="px-0 mb-2 col-auto btn btn-primary btn-block nobreak category-sport" href="<?php echo esc_url( home_url( '/' ) ); ?>category/sport" role="button"><i class="fas fa-tennis-ball"></i>Sport</a>
		</div>
 	</div>
 
	<div class="row">
 		
		<!-- the loop -->
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			
			<div <?php post_class('col-md-4 mb-3'); ?>>
				<a href="<?php the_permalink(); ?>" style="text-decoration: none;">
					<div class="card mb-3">
						<div class="card-img-top">
							<?php the_post_thumbnail(); ?>
						</div>
					  	<div class="card-body d-flex align-items-start flex-column bd-highlight">
							<div class="mb-auto px-2 pt-2">
								<h5 class="card-title">
									<?php the_title(); ?>
								</h5>
							</div>
							<div class="px-2 pb-2 bg-white">
								<small class="text-muted">
									<p class="card-text">
										<?php
											$categories = get_the_category();
$output = '';
if($categories) {
    foreach($categories as $category) {
        $output .= '<span class="project_details category '.$category->cat_name.'"></span>';
    }
}
echo $output;
										?>
										<span class="project_details date"><?php the_date('F Y'); ?></span>
										<span class="project_details tag"><i class="fas fa-map-marker-alt"></i>
											<?php 
											
											$post_tags = get_the_tags();
											if ( $post_tags ) {
												echo $post_tags[0]->name; 
											}
											
											 ?>
										</span>
									</p>		
								</small>
							</div>
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
