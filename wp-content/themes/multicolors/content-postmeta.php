<?php
/*
 * Postmeta used by files archive, index, search and single.
 */
?>

<div class="postmetadata">
	<?php printf( __( 'Posted on %s', 'multicolors' ), '<a href="'. esc_url( get_permalink() ) .'">' . esc_html( get_the_date() ). '</a>' ); ?> <?php echo '|'; ?> 
	<?php printf( __( 'By %s', 'multicolors' ), sprintf( '<a href="%1$s">%2$s</a>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), esc_html( get_the_author() ) ) ); ?>
	<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
		<?php echo '|'; ?> <?php comments_popup_link( __( 'No comments', 'multicolors' ), __( '1 comment', 'multicolors' ), __( '% comments', 'multicolors' ) ); ?>
	<?php endif; ?>
</div>

