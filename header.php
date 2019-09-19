<?php
 /*  Main Header Template */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width">
    <meta name="Play To Learn Early Learning Centre" content="Information Pages for Play To Learn Early Learning Centre">
    <?php wp_head(); ?>
</head>

<body>
    <div class="header-wrapper">
        <header>
            <div class="header-content">
                <h1 class="title">Play To Learn Early Learning Centre</h1>
                <h1 class="tagLine"><span class="dash">&ndash;</span>love . knowledge . respect . meaning . wisdom . intelligence</h1>
            </div>
        </header>
    </div>

    <main class="clearfix">
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

            <!-- PHONE MENU HIDER -->
            <script src="<?php echo get_template_directory_uri()?>/js/menuToggle.js"></script>

        </nav>
