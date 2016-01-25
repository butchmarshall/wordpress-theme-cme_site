<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Cme_Site
 * @since Cme Site 1.0
 */

get_header(); ?>

<div id="content">
	<div class="section">
		<?php
			$content = apply_filters('the_content', $post->post_content); 
			echo $content;  
		?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>
