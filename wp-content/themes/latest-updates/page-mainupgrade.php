<?php
/**
 * Template Name: Main Revamp
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>



<?php if(get_field('new_slideshow')): ?>

	<div class="new_slideshow_wrapper new_slideshow">
 
	<?php while(has_sub_field('new_slideshow')): ?>
 
		<div>
		
		<?php $revamp_image_new = wp_get_attachment_image_src(get_sub_field('featured_slide_img'), 'event-revamp'); ?>
		
		<a href="<?php the_sub_field('featured_slide_link'); ?>">
			
			<img alt="Featured Event Somali Bantu Association of America" class="revamp_slide" src="<?php echo $revamp_image_new[0]; ?>"/>
			
		</a>
		
		<div class="slide_content">
		
			<h1><a href="<?php the_sub_field('featured_slide_link'); ?>"><?php the_sub_field('featured_slide_header'); ?></a></h1>
		
			<p><a href="<?php the_sub_field('featured_slide_link'); ?>"><?php the_sub_field('featured_slide_content'); ?></a></p>
		
			<a class="read_more_button" href="<?php the_sub_field('featured_slide_link'); ?>">Read More</a>

		</div><!-- content -->
		
		</div>
    
	<?php endwhile; ?>
	
	</div><!-- slideshow wrapper -->
 
<?php endif; ?>













<div class="new_slideshow_wrapper" style="display: none;">

	
	<?php $revamp_image = wp_get_attachment_image_src(get_field('featured_event_img'), 'event-revamp'); ?>
 
  <a href="<?php the_field('featured_event_link'); ?>"><img alt="Featured Event Somali Bantu Association of America" class="revamp_slide" src="<?php echo $revamp_image[0]; ?>"/></a>
	
	<div class="slide_content">
		
		<h1><a href="<?php the_field('featured_event_link'); ?>"><?php the_field('featured_event_header'); ?></a></h1>
		
		<p><a href="<?php the_field('featured_event_link'); ?>"><?php the_field('featured_content'); ?>...</a></p>
		
		<a class="read_more_button" href="<?php the_field('featured_event_link'); ?>">Read More</a>

	</div><!-- content -->

</div><!-- slideshow wrapper -->
		
		
		
		
		
		<div class="revamp_content">
	<div id="content">
		<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
	</div><!-- content -->
<div class="new_programs">
	<div class="program">
		<?php $program_one = wp_get_attachment_image_src(get_field('program_1'), 'revamp-event-thumb'); ?>
		<a href="<?php the_field('program_1_link'); ?>"><img alt="Program 1 Somali Bantu Association of America" src="<?php echo $program_one[0]; ?>"/></a>
		<a class="program_title" href="<?php the_field('program_1_link'); ?>"><?php the_field('program_1_title'); ?></a>
	</div><!-- program -->
	<div class="program second">
		<?php $program_two = wp_get_attachment_image_src(get_field('program_2'), 'revamp-event-thumb'); ?>
		<a href="<?php the_field('program_2_link'); ?>"><img alt="Program 2 Somali Bantu Association of America" src="<?php echo $program_two[0]; ?>"/></a>
		<a class="program_title" href="<?php the_field('program_2_link'); ?>"><?php the_field('program_2_title'); ?></a>
	</div><!-- program -->
	<div class="program">
		<?php $program_three = wp_get_attachment_image_src(get_field('program_3'), 'revamp-event-thumb'); ?>
		<a href="<?php the_field('program_3_link'); ?>"><img alt="Program 3 Somali Bantu Association of America" src="<?php echo $program_three[0]; ?>"/></a>
		<a class="program_title" href="<?php the_field('program_3_link'); ?>"><?php the_field('program_3_title'); ?></a>
	</div><!-- program -->
	<div class="program last">
		<?php $program_four = wp_get_attachment_image_src(get_field('program_4'), 'revamp-event-thumb'); ?>
		<a href="<?php the_field('program_4_link'); ?>"><img alt="Program 4 Somali Bantu Association of America" src="<?php echo $program_four[0]; ?>"/></a>
		<a class="program_title" href="<?php the_field('program_4_link'); ?>"><?php the_field('program_4_title'); ?></a>
	</div><!-- program -->
	
	
</div><!-- new program -->

</div><!-- revamp content -->
<?php get_footer(); ?>
