<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id="main-core".
 *
 * @package ThinkUpThemes
 */
?>

		</div><!-- #main-core -->
		</div><!-- #main -->
		<?php /* Sidebar */ consulting_thinkup_sidebar_html(); ?>
	</div>
	</div><!-- #content -->


</div><!-- #body-core -->
<div class='mailfooter'>
<h3 class='mailfooterheading'>Stay in touch &amp; subscribe to Advancer’s mailing list</h3>
<?php echo do_shortcode("[wpforms id=\"11764\" title=\"false\" description=\"false\"]"); ?>

</div>

<?php wp_footer(); ?>
</article>
<div class="customfooter">
	<div class="mks_col customfooterinner">
			<div class="mks_one_third">
				<div style='text-align:center;'>
				<?php dynamic_sidebar( 'Footer-Column-1' ); ?>
				</div>
		    </div>
			<div class="mks_one_third footermiddlecol">
				<div style='text-align:center;'>
				<?php dynamic_sidebar( 'Footer-Column-2' ); ?>
				</div>
			</div>
			<div class="mks_one_third">
				<div style='text-align:center;'>
				<?php dynamic_sidebar( 'Footer-Column-3' ); ?>
				</div>
			</div>
	</div>
</div>
<div class='copyright'>
	&copy; Copyright 2018 Advancer Group Pty Ltd
</div>
</body>
</html>
