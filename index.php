	<?php get_header(); ?>
	//Load the first requirejs module
	<script data-main="<?php echo THEMEPATH; ?>/js/scripts/run" src="<?php echo THEMEPATH; ?>/js/scripts/vendor/requirejs/require.js"></script>
	<!-- Insert content here -->
	
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>