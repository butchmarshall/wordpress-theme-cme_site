<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	
	<?php if (get_theme_mod( 'cme_site_logo' )) { ?>
	<style>
		#header .header-logo {
			background-image: url('<?= get_theme_mod( 'cme_site_logo' ) ?>');
		}
	</style>
	<?php } ?>
</head>

<body data-spy="scroll" data-target=".scrollspy" <?php body_class(); ?>>
	<div id="header">
		<div class="top-bar"></div>
		<div class="section">
			<span class="header-logo"></span>
			<?php
				$menu_items = wp_get_nav_menu_items("header");
			?>
			<ul class="menu">
				<?php foreach ( (array) $menu_items as $key => $menu_item ) { ?>
				<li><a target="_blank" href="<?= $menu_item->url ?>"><?= $menu_item->title ?></a></li>
				<?php } ?>
				<?php dynamic_sidebar( 'header_links' );  ?>
			</ul>
		</div>
		<div class="section">
			<h1>Pediatric IBD Imaging</h1>
			<span class="social-media-icons">
				<a target="_blank" href="http://www.facebook.com/pages/Department-of-Radiology-CME-University-of-Ottawa/166441483465844" class="icon icon-fb" title="Facebook"></a>
				<a target="_blank" href="http://twitter.com/ottawaradcme" class="icon icon-twitter" title="Twitter"></a>
				<a target="_blank" href="#" class="icon icon-linkedin" title="LinkedIn"></a>
			</span>
		</div>
	</div>
	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'primary-menu',
			 ) );
		?>
	</nav><!-- .main-navigation -->
