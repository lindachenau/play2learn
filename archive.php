<?php
/* Main Template File*/
    get_header();
?>

        <div class="blog-container">
            <div class="blog">

				<?php if ( have_posts() ) : ?>

					<?php
						the_archive_title( '<h1>', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>

					<?php
					// Start the Loop.
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