<?php 
$args = array(
 'post_type' => 'post',
 'posts_per_page' => 5,
    'order' => 'DESC',
);
$query = new WP_query ( $args ); ?>
<?php if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<div class="row">
			<div class="col-md-6">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(700,700)); // Declare pixel size you need inside the array ?>
			</a>
		</div>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<div class="col-md-6"  id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-color:#edecec;height:653px;">
		<div class="post-content">
		<h2>
			<a  class="no" style="color:black;" id="post-<?php the_ID(); ?>" <?php post_class(); ?> href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		
    <p id="post-<?php the_ID(); ?>" <?php post_class(); ?> > <?php the_content(); ?></p>
    <!-- post details -->
    <div class ="byn" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="baliselien" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >View post</a>

    </div>
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->
    </div>
    
    </div>
		<!-- /post title -->

		<!-- post details -->
		
		
		<!-- /post details -->
		


	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
