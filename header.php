<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <ul>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>
            <div id="burger" class="burger" aria-controls="primary-menu" aria-expanded="false">    
                    <!-- Bouton du menu burger -->
                <button class="burger-icon burger-open">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                    <!-- contenu du burger -->

                <div class="burger-content">
                    <img class="burger-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="image burger logo">
                    <ul class="menu-items">
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <!-- éléments image footer -->
                    <div>
                        <img class="chat-noir" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/blackcat.png'; ?>" alt="chat-noir">
                        <img class="chat-jaune" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat.png'; ?>" alt="chat-jaune">
                        <img class="chat-violet" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat_violet.png'; ?>" alt="chat-violet">
                        <img class="fleur-orange" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/fleur-orange.png'; ?>" alt="fleur-orange">
                        <img class="fleur-blanche" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/fleur_blanche.png'; ?>" alt="fleur blanche style tournesol">
                        <img class="fleur-rose" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="fleur rose">
                        <img class="hibiscus-header" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscusheader.png'; ?>" alt="image hibiscus footer">
                        <img class="fleur-violet" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>" alt="image orchid">
                    </div>

                    <div class="footer-burger-title">
                        <ul>
                            <a href="#">STUDIO KOUKAKI</a>
                        </ul>
                    </div>    
                </div>
            </div>
        </nav><!-- #site-navigation -->
	</header><!-- #masthead -->
