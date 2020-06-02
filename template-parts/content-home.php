<?php

/**
 * Template part for displaying page content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HELLO
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('col-md-10 offset-md-1 col-lg-8 offset-lg-2'); ?>>

	<?php the_content(); ?>

</section>

<section class="col-md-12 mt-5">
	<div class="pl-1 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
		<h2>Unsere Projekte</h2>
	</div>
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

<section class="mt-5 pt-5 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
<hr>
	<h2>Transparenz</h2>
	<p>95 Prozent der uns anvertrauten Spendengelder werden direkt in unsere Projekte vor Ort eingesetzt — das ist unser Versprechen. Dass wir dieses Versprechen halten, belegen wir mit größtmöglicher Transparenz durch Zahlen, Daten und Fakten sowie durch regelmäßige Anwesenheit von HELLO und dem Stiftungs-Team bei Projekt-Realisierungen vor Ort.</p>
	<p><a href="/transparenz/" target="_blank">Mehr über Transparenz <i class="far fa-arrow-circle-right"></i></a></p>
</section>

<section class="mt-5 pt-5 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
<hr>
	<h2>Mitmachen</h2>
	<p>Als unabhängige Stiftung möchten wir jeden dazu bewegen, aktiv zu werden &mdash; ob Einzelperson oder Unternehmen. Deshalb schaffen wir für alle die Möglichkeit, sich für gesellschaftlichen Wandel einzusetzen und Verantwortung zu übernehmen. Schreiben Sie uns, wenn Sie ein interessantes Projekt leiten, das unseren Förderkriterien entspricht und sie nach einem verläßlichen Partner suchen. </p>
	<p><a href="/mitmachen/" target="_blank">Machen Sie mit! <i class="far fa-arrow-circle-right"></i></a></p>
</section>

<section class="mt-5 pt-5 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
<hr>
	<h2>Vierteljährlicher Newsletter</h2>
	<p>Wollen Sie über neue Projekte informiert bleiben? Haben Sie bereits ein Projekt unterstützt und möchten erfahren, sobald wir Neuigkeiten haben? Unser kostenloser Newsletter wird einmalig pro Quartal verschickt.</p>
	<form class="form-inline mt-5">
	  <label class="sr-only" for="inlineFormInputGroupUsername2">E-Mail Adresse</label>
	  <div class="input-group mb-2 mr-sm-2 col-sm-9 px-0">
		<div class="input-group-prepend">
		  <div class="input-group-text">@</div>
		</div>
		<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="E-Mail Adresse">
	  </div>
	  
	  <button type="submit" class="col-sm-2 px-0 btn btn-block btn-primary mb-2">Abonnieren</button>
	  <small id="passwordHelpBlock" class="form-text text-muted">
Ihre Daten bleiben selbstverständlich sicher und werden nicht an Dritte vergeben. Für mehr Informationen, lesen Sie bitte die <a href="https://www.sendinblue.com/gdpr/" target="_blank">Datenschutzerklärung von sendinblue</a>, unserem Newsletter-Anbieter.
</small>
	</form>
</section>