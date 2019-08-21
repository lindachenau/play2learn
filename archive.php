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

<!-- PHONE MENU HIDER -->
<script src="<?php echo get_template_directory_uri()?>/js/menuToggle.js"></script>

<?php get_footer(); ?>	