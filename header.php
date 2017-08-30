<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brennan_Group_Inc.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Vidaloka|Source+Sans+Pro' rel='stylesheet' type='text/css'>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brennangroupinc' ); ?></a>

	<nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan-logo.png" alt="Brennan Group Inc Logo"></a>
            </div><!-- navbar-header -->
            
            <?php 
                wp_nav_menu( array(
                
                    'theme_location'    => 'primary',
                    'container'         => 'nav',
                    'container_class'   => 'navbar-collapse collapse',
                    'menu_class'        => 'nav navbar-nav'
                    
                ) );
            ?>
            
        </div><!-- container -->
    </nav>