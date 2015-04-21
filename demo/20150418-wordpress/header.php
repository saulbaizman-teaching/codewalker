<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CMP3011
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php // if ( is_front_page() ) { ?>

    <link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

    <?php // } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body>

<header>
    <a href="index.html" class="lovelogo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/love_logo.png" alt="love pole logo" Title="Love Pole Fitness and Aerial Arts" height="215" width="325"/></a>
    <p id="tagline">Bellinghams Premier Alternative Fitness Studio<p>
    <div id='cssmenu'>

        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' , 'container' =>'' ) ); ?>


    </div>
    <a href="https://clients.mindbodyonline.com/classic/home?studioid=44427"class="btn" target="_blank">Register</a>
</header>


<div id="wrapper">
