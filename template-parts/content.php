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

	<header>
	<div class="card mb-3 single">
			<div class="card-img-top fullsize">
				<a href="/projekte"><button type="button" class="back-btn btn-light btn text-left"><i class="fas fa-arrow-left"></i> Alle Projekte</button></a>
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="card-body d-flex p-0 pt-4 align-items-start flex-column bd-highlight">
				<div class="mb-auto p-0 bg-white">
					<h2 class="card-title">
						<?php the_title(); ?>
					</h2>
				</div>
				<div class="p-0 bg-white">
					<small class="text-muted">
						<p class="card-text">
							<?php
								$categories = get_the_category();
	$output = '';
	if($categories) {
	foreach($categories as $category) {
	$output .= '<span class="project_details category '.$category->cat_name.'">'.' '.$category->cat_name.'</span>';
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
		
	</header><!-- .entry-header -->
	
	<hr class="mt-5">

	<div class="article-content mt-5">
	
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
