<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar">

    <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

    <nav id="main-nav" aria-labelledby="main-nav-label">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <h2 id="main-nav-label" class="sr-only">
                    <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
                </h2>

                <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-2-white.png" class="nav-logo">
            </div>
            <div class="col-md-6">
                <button aria-label="open" class="hamburgerMenu" id="hamburgerMenu" data-toggle="collapse" data-target="#headerDrawer" aria-expanded="false">
                    <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 1.5H26" stroke="white" stroke-width="2"/>
                    <path d="M0.5 12H26" stroke="white" stroke-width="2"/>
                    <path d="M0.5 22H26" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
            </div>
        </div>

    </div><!-- .site-navigation -->
    </nav><!-- .site-navigation -->

</div><!-- #wrapper-navbar end -->






<section class="header-drawer" id="headerDrawer">

    <button title="Close" class="nav-link" aria-label="close" id="drawerClose" data-toggle="collapse" data-target="#headerDrawer" aria-expanded="true">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9.91304L21.913 0L24 2.08696L14.087 12L24 21.913L21.913 24L12 14.087L2.08696 24L0 21.913L9.91304 12L0 2.08696L2.08696 0L12 9.91304Z" fill="white"/>
        </svg>
    </button>
    
	<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-drawer-grey.png" class="drawer-logo">

	<div class="container-fluid mainNavItems">
	    <div class="row">
	        <div class="col-md-12">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
	        </div>
	        
	    </div>
	</div>
	
</section>




