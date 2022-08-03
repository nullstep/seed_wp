<?php if (get_value('show_nav') == 'yes'): ?>
	<div id="nav-area" class="content">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark<?php echo (get_value('nav_shadow') == 'yes') ? ' shadow' : ''; ?>" role="navigation">
			<div class="<?php get_container(); ?> px-0">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle Navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
<?php
	if (get_value('nav_logo_pos') == 'left') {
		$nav_logo = get_value('nav_logo');
		if ($nav_logo != 'none') {
			$nav_img = get_value('logo_image_' . $nav_logo);
			if ($nav_img) {
?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><img id="nav-logo" src="/uploads/<?php echo $nav_img; ?>"></a>
<?php
			}
		}
	}
	$class = (get_value('nav_group') == 'yes') ? '' : get_value('nav_align'); 
?>
				<?php wp_nav_menu([
					'theme_location' => 'primary',
					'item_spacing' => 'discard',
					'depth' => 2,
					'container' => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'nav-collapse',
					'menu_class' => 'nav navbar-nav ' . $class,
					'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
					'walker' => new WP_Bootstrap_Navwalker()
				]);
?>

<?php
	if (get_value('nav_logo_pos') == 'right') {
		$nav_logo = get_value('nav_logo');
		if ($nav_logo != 'none') {
			$nav_img = get_value('logo_image_' . $nav_logo);
			if ($nav_img) {
?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><img id="nav-logo" src="/uploads/<?php echo $nav_img; ?>"></a>
<?php
			}
		}
	}
?>
			</div>
		</nav>
	</div>
<?php endif; ?>