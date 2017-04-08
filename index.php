<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Final_Project
 */

get_header(); ?>
    <section class="title-banner" style="background: url('<?php echo get_theme_mod('img-upload');?>') center/cover no-repeat;">
        <h2><?php echo wp_get_document_title(); ?></h2>
    </section>
	<div id="primary" class="content-area">
    <div class="container">
    <div class="row">
        <div class="col-sm-8">
		<main id="main" class="site-main blog-main " role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>


			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			wp_pagenavi();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
        </div>
	    <?php get_sidebar(); ?>
    </div>
    </div>
    </div><!-- #primary -->

<?php get_footer(); ?>