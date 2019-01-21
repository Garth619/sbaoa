<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer_revamp">
		<div class="footer_revamp_content">
			<span>4979 University Avenue, #A San Diego, CA 92105 • <a href="tel:6195469346">(619) 546-9346</a> • Fax: (619) 546-9362
						Email:<a href="mailto:info@sbaoa.org">info@sbaoa.org</a><br/>A 501(c) (3) nonprofit organization 27-3390797</span>
						<p><?php echo do_shortcode('[gravityform id="2" name="Newsletter Signup" title="false"]') ?> </p>
		</div><!-- footer_remap_content -->

	</div><!-- #footer -->

</div><!-- #wrapper -->
</div><!--  mobile-menu-wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
