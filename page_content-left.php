<?php
/**
 * Template Name: Content Left
 *
 * @package WordPress
 * @subpackage Cme_Site
 * @since Cme Site 1.0
 */

get_header(); ?>

<div id="content">
	<div class="section">
		<div class="content-right">
			<?php dynamic_sidebar( 'info_bubbles' );  ?>
			<?php dynamic_sidebar( 'content_right' );  ?>
		</div>
		<div class="content-left">
			<?php dynamic_sidebar( 'content_left' );  ?>
			<?php
				$content = apply_filters('the_content', $post->post_content); 
				echo $content;  
			?>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>
