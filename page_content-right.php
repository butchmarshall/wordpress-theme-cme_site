<?php
/**
 * Template Name: Content Right
 *
 * @package WordPress
 * @subpackage Cme_Site
 * @since Cme Site 1.0
 */

get_header(); ?>

<div id="content" class="right-aligned-content">
	<div class="section">
		<div class="content-right">
			<?php dynamic_sidebar( 'info_bubbles' );  ?>
			<?php dynamic_sidebar( 'content_right' );  ?>
			<?php
				$content = apply_filters('the_content', $post->post_content); 
				echo $content;  
			?>
		</div>
		<div class="content-left">
			<?php dynamic_sidebar( 'content_left' );  ?>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>
