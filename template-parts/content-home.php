<?php

/**
 * Template part for displaying page content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HELLO
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-9'); ?>>
	<?php the_content(); ?>

</article>
