<?php
/**
 * Template Name: Content Fullscreen
 *
 * @package WordPress
 * @subpackage Cme_Site
 * @since Cme Site 1.0
 */

get_header(); ?>

<div id="content">
	<div class="section">
		<?php dynamic_sidebar( 'content_fullscreen' );  ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>
