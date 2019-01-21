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
			<span>Our Service Office:  Somali Bantu Association of America<br/><br/>4979 University Avenue, #A San Diego, CA 92105 • <a href="tel:6195469346">(619) 546-9346</a> • Fax: (619) 546-9362
						Email:<a href="mailto:info@sbaoa.org">info@sbaoa.org</a><br/><br/>
						
				<span>Cooperate Office: Somali Bantu Association of America<br/><br/>4265  Fairmont Ave Suite 210 San Diego, CA 92105 • <a href="tel:6195469346">619-546-8181</a> • Fax: 619-546-8065
						Email:<a href="mailto:info@sbaoa.org">info@sbaoa.org</a><br/><br/>A 501(c) (3) nonprofit organization 27-3390797<br/>
						
						<br/>
						<br/>
						For mail<br/>

						PO.BOX 50067<br/>
						San Diego,CA 92165<br/>
						
						
						
						<a target="_blank" href="https://login.microsoftonline.com/">Office 365</a></span>
						<p><?php echo do_shortcode('[gravityform id="2" ajax="true" name="Newsletter Signup" title="false"]') ?> </p>
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
