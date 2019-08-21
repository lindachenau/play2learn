<?php 
/* The template for the Social Sidebar */

?>

<?php if ( is_active_sidebar( 'social-sidebar' ) and is_active_sidebar( 'search-sidebar' )) : ?>
    <aside class="top-sidebar">

        <div class="search-container">
            <?php get_search_form(); ?> 
        </div>
        
        <?php dynamic_sidebar( 'social-sidebar' ); ?>

    </aside>
<?php endif; ?>