<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				<?php $mymain_query = new WP_Query( array( 'post_type' => array ( 'ourfounder', 'news', 'grants','partners' ),'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>" style="width:100%;float:left;">
						
							
						
						
							<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-bantu', '305', '237', true); ?></a>
							<div style="clear:both;"></div>
						<?php the_excerpt(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '' ); ?>
						
						
					</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
			
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
