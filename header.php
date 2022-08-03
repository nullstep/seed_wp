<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<?php if (is_single()): ?>
	<meta name="description" content="<?php snippet(get_the_content(), 300); ?>">
	<meta property="og:title" content="<?php echo trim(wp_title('', false)); ?><?php if (wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?>">
	<meta property="og:url" content="<?php the_permalink(); ?>">
<?php
		$bg = '';
		if (has_post_thumbnail()) {
			$array = explode('/', wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnail')[0]);
			$bg = get_home_url() . '/uploads/' . end($array) . '';
		}
?>
	<meta property="og:image" content="<?php echo $bg; ?>">
<?php else: ?>
	<meta name="description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>
	<title><?php echo trim(wp_title('', false)); ?><?php if (wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
	<link href="<?php get_favicon(); ?>" rel="shortcut icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php wp_head(); ?>
	<style>
		<?php get_fonts(); ?><?php get_css(); ?>
	</style>
</head>
<body id="override" class="<?php echo get_post_field('post_name'); ?>">
<?php $order = get_order(); ?>
<?php get_template_part($order[0]); ?>
<?php get_template_part($order[1]); ?>
<?php get_template_part($order[2]); ?>
	<div id="content-area" class="content">
		<div class="<?php get_container(); ?>">