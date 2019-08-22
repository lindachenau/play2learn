<?php
/* Main Template File*/
    get_header();
?>

        <div class="blog-container">
            <div class="blog">

				<?php if ( have_posts() ) : ?>

					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'play2learn' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

					<?php
						// Start the loop.
						while ( have_posts() ) :
							the_post();
							the_title("<h2>", "</h2>");
							the_content();
						endwhile;
					?> 
				<?php endif; ?>
			</div>    
			<?php get_sidebar('main'); ?>
		</div>		
	</div>
</main>

<?php get_footer(); ?>					