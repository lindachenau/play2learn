<?php
/* Template Name: Blog with Sidebar (Right) Template */
    get_header();
?>

        <figure class="headerImgWrapper">
            <!-- CHECK DEVICE SCREEN WIDTH -->
            <script src="<?php echo get_template_directory_uri()?>/js/mobileScreen.js"></script>
            
            <img class="headerImg" id="hero">
            
            <script type="text/javascript">
                let heroName = "<?php echo get_template_directory_uri()."/images/headerImg-blog"; ?>" 
                document.getElementById("hero").src = heroName + checkMobile();
            </script>
        </figure>

        <div class="blog-container">
            <div class="blog">
                <?php
                // Start the loop
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_title("<h2>", "</h2>");
                        the_content();
                    endwhile;
                endif;
                ?> 
            </div>    
            <?php get_sidebar('main'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>