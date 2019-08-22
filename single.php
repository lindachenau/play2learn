<?php
/* Main Template File*/
    get_header();
?>

        <div class="blog-container">
            <div class="blog">
                <?php
                // Start the loop
				while (have_posts()) :
					the_post();
					the_title("<h2>", "</h2>");
					the_content();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

				endwhile;
                ?> 
            </div>    
            <?php get_sidebar('main'); ?>
        </div>		
	</div>
</main>

<?php get_footer(); ?>
