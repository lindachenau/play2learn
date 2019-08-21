<?php 
/* The template for the Main Sidebar */

?>


<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
    <aside class="main-sidebar">
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </aside>
<?php endif; ?>
