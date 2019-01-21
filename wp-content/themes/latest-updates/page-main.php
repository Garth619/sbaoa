<?php
/**
 * Template Name: Main
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

		<div id="container">
			<div id="content" role="main">
			<!--
<div class="event_wrapper" style="text-align:center;">
			<h1>SOMALI-BANTU ASSOCIATION OF AMERICA (SBAOA) </h1>
	<h2><i>invites you to its annual family celebration</i></h2>
	<h1 class="title" style="color:#086dbc;font-size:50px;font-weight:bold;">New Land, New Hope</h1>
	<img width="541" id="pic" src="http://sbaoa.org/wp-content/themes/latest-updates/images/Somali-Bantu-dance.jpg"/>
		<p class="bold">Saturday, September 20, 2014, 2:00-5:00 p.m.<br/>
	UDWA office, 4855 Seminole Dr, San Diego, CA 92115</p>
	<p>A family-friendly cultural celebration of featuring the music, dancing and delicious cuisine of the Somali-Bantu community</p>
	<p>Tickets: $35.00/$10.00 Children with all proceeds to benefit the Somali-Bantu Association’s programs impacting refugees in our community</p>
	<div id="button"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZZR7P9B96CAMC">
<table>
<tr><td><input type="hidden" name="on0" value="Event Ticket">Event Ticket</td></tr><tr><td><select name="os0">
	<option value="Ticket">Ticket $35.00 USD</option>
	<option value="Child Ticket">Child Ticket $10.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</div>
	<p style="font-size:27px;margin-top:20px;">Sponsored in part by</p>
	<p><img src="http://sbaoa.org/new-land-new-hope/download.jpg"/></p>
	<p><img src="http://garrettcullen.com/sbaoa.org/new-land-new-hope/photo.jpg"/></p>
	<p class="bold">For more information or tickets, please contact (619) 206-4000</p>
	<p style="font-style:italic;">The Somali-Bantu Association of America’s mission is to provide the guidance and services needed to empower and aid Somali Bantu and other refugees as they integrate into American society.</p>
			<hr>
			
			
			</div> event wrapper -->
<h1> Welcome to the Somali Bantu Association of America</h1>
			<?php if(get_field('slideshow')): ?>
				<div class="cycle-slideshow">
			<?php while(has_sub_field('slideshow')): ?>
			<?php $slides = wp_get_attachment_image_src(get_sub_field('slide'), 'slideshow'); ?>
      <img src="<?php echo $slides[0]; ?>">
        <?php endwhile; ?>
				</div>
				<br/>
				<?php endif; ?>
				<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
			<?php echo do_shortcode('[gravityform id="2" name="Newsletter Signup" title="false"]') ?> 
<hr>
<h1>Latest Updates</h1>
				<?php $mymain_query = new WP_Query( array( 'post_type' => array ( 'events', 'news', 'grants'),'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
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
