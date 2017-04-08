<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Final_Project
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

                <section class="clients">
                    <div class="container">
                        <div class="row">

	                <?php if (!dynamic_sidebar('main-10')) : ?>
	                <?php endif; // end widget area ?>
<?php echo do_shortcode('[wpaft_logo_slider]') ?>
                        </div>
                    </div>
                </section>
                <section class="contacts">
                    <div class="container">
                        <div class="row">
	                <?php if (!dynamic_sidebar('main-11')) : ?>
	                <?php endif; // end widget area ?>
                            <div class="col-sm-6 contact-form">
		                        <?php echo do_shortcode('[contact-form-7 id="80" title="Untitled"]') ?>
                            </div>
                    </div>
                </section>
                <section class="logo">
                    <h3 class="footer-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo wp_get_attachment_url(get_theme_mod('final_project-logo')); ?>" /></a></h3>

                </section>
                <section class="rights">
                        <p> 	&#169; 2015  All Rights Reserved.</p>
                </section>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
