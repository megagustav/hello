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
	
	<h2 class="mt-5">Unsere Projekte</h2>
</section>

<?php get_template_part( 'template-parts/content', 'projects' ); ?>

<section class="mt-5 pt-5 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
	<hr>
	<h2>Transparenz</h2>
	<p>95 Prozent der uns anvertrauten Spendengelder werden direkt in unsere Projekte vor Ort eingesetzt — das ist unser Versprechen. Dass wir dieses Versprechen halten, belegen wir mit größtmöglicher Transparenz durch Zahlen, Daten und Fakten sowie durch regelmäßige Anwesenheit von HELLO und dem Stiftungs-Team bei Projekt-Realisierungen vor Ort.</p>
	<p><a href="transparenz" target="_blank">Mehr über Transparenz <i class="far fa-arrow-circle-right"></i></a></p>
</section>

<section class="mt-5 pt-5 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
<hr>
	<h2>Mitmachen</h2>
	<p>Als unabhängige Stiftung möchten wir jeden dazu bewegen, aktiv zu werden &mdash; ob Einzelperson oder Unternehmen. Deshalb schaffen wir für alle die Möglichkeit, sich für gesellschaftlichen Wandel einzusetzen und Verantwortung zu übernehmen. Schreiben Sie uns, wenn Sie ein interessantes Projekt leiten, das unseren Förderkriterien entspricht und sie nach einem verläßlichen Partner suchen. </p>
	<p><a href="mitmachen" target="_blank">Machen Sie mit! <i class="far fa-arrow-circle-right"></i></a></p>
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