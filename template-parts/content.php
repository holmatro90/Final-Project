<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
	    <?php echo get_the_post_thumbnail(); ?>
		<?php
		the_content( sprintf(
		/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'final-project' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'final-project' ),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .entry-content -->

    <div class="entry-footer">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>'  );
		endif;

		if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
				<?php the_excerpt(); ?>
                <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j, m, Y'); ?></p>
            </div><!-- .entry-meta -->
			<?php
		endif; ?>
    </div><!-- .entry-footer -->
</article><!-- #post-## -->
