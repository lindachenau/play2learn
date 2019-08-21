<?php
/* Main Template File*/
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
            
            <?php if (is_front_page()) : ?>
                <script type="text/javascript">
                    let heroName = "<?php echo get_template_directory_uri()."/images/headerImg-home"; ?>"
                    document.getElementById("hero").src = heroName + checkMobile();
                </script>
            <?php else : ?>
                <script type="text/javascript">
                    let heroName = "<?php 
                                        global $post;
                                        $post_slug = $post->post_name;
                                        $headerImgName = get_template_directory_uri()."/images/headerImg-".$post_slug;
                                        echo $headerImgName;
                                    ?>";
                    document.getElementById("hero").src = heroName + checkMobile();
                </script>
            <?php endif; ?>

        </figure>

        <?php if (!is_front_page()) : ?>
            <h1 class="pageTitle"><?php echo get_the_title() ?></h1>
        <?php endif; ?>
        
        <?php
        // Start the loop
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?> 
    </div>
</main>

<!-- PHONE MENU HIDER -->
<script src="<?php echo get_template_directory_uri()?>/js/menuToggle.js"></script>

<?php get_footer(); ?>