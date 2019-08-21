<?php
/* Template Name: Blog with Sidebar (Right) Template */
    get_header();
?>

<!-- CHECK DEVICE SCREEN WIDTH -->
<script src="<?php echo get_template_directory_uri()?>/js/mobileScreen.js"></script>

<main>
    <div class="main-content">
        <?php get_sidebar('top'); ?>

        <nav class="clearfix">
            <button id="hamburgerBtn">&#9776; MENU</button>
        <?php
            wp_nav_menu( $arg = array (
                'menu_class' => 'main-navigation closed',
                'theme_location' => 'primary'
            ));
        ?>
        </nav>

        <figure class="headerImgWrapper">
            
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
  
<!-- PHONE MENU HIDER -->
<script src="<?php echo get_template_directory_uri()?>/js/menuToggle.js"></script>

<?php get_footer(); ?>