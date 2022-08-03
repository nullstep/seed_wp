		</div>
	</div>
<?php get_svg('#333', 3); ?>
	<div id="footer-area" class="content">
		<div class="<?php get_container(); ?>">
			<footer class="row">
				<?php if (is_active_sidebar('footer-top')) dynamic_sidebar('footer-top'); ?>

				<section class="col-sm-12"><?php wp_footer(); ?></section>
				<?php if (is_active_sidebar('footer-bottom')) dynamic_sidebar('footer-bottom'); ?>

			</footer>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		<?php get_js(); ?>
	</script>
</body>
</html>