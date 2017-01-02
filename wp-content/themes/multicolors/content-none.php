<?php
/*
 * Nothing found used by files 404, archive, index and search.
 */
?>

<?php if ( is_search() || is_404() ) : ?>
	<h1 class="page-title"><?php _e( 'Nothing Found', 'multicolors' ); ?></h1>
	<p><?php _e('Sorry, no posts matched your criteria.', 'multicolors'); ?></p>
	<?php get_search_form(); ?>
<?php else : ?>
	<h1 class="page-title"><?php _e( 'Nothing Found', 'multicolors' ); ?></h1>
	<p><?php _e('Sorry, no posts matched your criteria.', 'multicolors'); ?></p>
<?php endif; ?>

