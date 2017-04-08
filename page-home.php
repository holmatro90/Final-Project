<?php /* Template Name: Home Template */


get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="home-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo wp_get_attachment_url( get_theme_mod( 'final_project-home' ) ); ?>"/>

                        </div>
						<?php if ( ! dynamic_sidebar( 'main-1' ) ) : ?>
						<?php endif; // end widget area ?>

                    </div>
                </div>
            </section>
            <section class="welcome">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo wp_get_attachment_url( get_theme_mod( 'final_project-welcome' ) ); ?>"/>

                        </div>
						<?php if ( ! dynamic_sidebar( 'main-2' ) ) : ?>
						<?php endif; // end widget area ?>
                    </div>
                </div>
            </section>
            <section class="service">
                <div class="container">
                    <div class="row">
	                    <?php if ( ! dynamic_sidebar( 'main-3' ) ) : ?>
	                    <?php endif; // end widget area ?>
                        <ul class="our-service">
							<?php
							$args         = array(
								'post_type'      => 'Offerings',
								'posts_per_page' => 3,
							);
							$servicePosts = new WP_Query( $args );
							if ( $servicePosts->have_posts() ) :
								while ( $servicePosts->have_posts() ) : $servicePosts->the_post();
									?>
                                    <li class="col-sm-4 ">
	                                    <?php echo get_the_post_thumbnail(); ?>
                                        <h3 class="our-ser"><?php echo get_the_title( $post ) ?></h3>
										<?php the_content(); ?>

                                    </li>
								<?php endwhile; ?>

							<?php endif;
							wp_reset_postdata();
							?>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="portfolio">
                <div class="container">
                    <div class="row">
	                    <?php if ( ! dynamic_sidebar( 'main-4' ) ) : ?>
	                    <?php endif; // end widget area ?>
                    </div>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
