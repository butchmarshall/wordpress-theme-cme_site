<?php wp_footer(); ?>

	<footer><?php
		$menu_items = wp_get_nav_menu_items("footer");
	?>
		<div class="section">
			<ul class="menu">
				<?php foreach ( (array) $menu_items as $key => $menu_item ) { ?>
				<li><a target="_blank" href="<?= $menu_item->url ?>"><?= $menu_item->title ?></a></li>
				<?php } ?>
				<li id="app_authentication"></li>
			</ul>
		</div>
	</footer>
</body>
</html>