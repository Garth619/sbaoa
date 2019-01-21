<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1 class="page-title">
			</h1>

<?php $mygrants_query = new WP_Query( array( 'post_type' => 'grants','order' => 'DSC' ) ); while($mygrants_query->have_posts()) : $mygrants_query->the_post(); ?>
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>" style="width:100%;float:left;">
						
							
						
						
							<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-bantu', '305', '237', true); ?></a>
							<div style="clear:both;"></div>
						<?php the_excerpt(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '' ); ?>
						
						
					</div><hr>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
