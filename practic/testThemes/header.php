<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TestThemes
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'testthemes' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="main-header">
    <div class="main-logo">
        <div class="header-logo">
            <div class="logo-container">
                <div class="logo-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                </div>
                <div class="logo-title">
                    BRAND NAME
                </div>
            </div>
        </div>
        <div class="header-buttons">
            <img src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="Button 1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cart.png" alt="Button 2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar.png" alt="Button 3">
        </div>
    </div>
    <div class="main-nav">
        <ul class="header-menu">
            <li>HOME</li>
            <li>STORE</li>
            <li>ACCESSORIES</li>
            <li>BRAND</li>
            <li>PAGES</li>
            <li>ABOUT US</li>
            <li>NEWS</li>
            <li>CONTACT US</li>
        </ul>
    </div>
    <div class="search-form">
        <input type="text" class="search-input">
        <button type="submit" class="search-button">Search</button>
    </div> 
    <div class="header-badge">
        <div class="shipping">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shipping.png" alt="Search">
            FREE SHIPPING
        </div>
        <div class="refund">
            <img src="<?php echo get_template_directory_uri(); ?>/img/refund.png" alt="Search">
            REFUND
        </div>
        <div class="support">
            <img src="<?php echo get_template_directory_uri(); ?>/img/support.png" alt="Search">
            SUPPORT 24/7
        </div>
    </div>
</div>

	</header><!-- #masthead -->
