<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vi_theme
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

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vi_theme' ); ?></a>

<div id="modal-main-shade"></div>
<div id="modal-main-container">
	<div id="modal-bg"></div>
	<div id="modal-area">
	<?php
		get_template_part( 'sidebar-templates/sidebar', 'modal-1' );
		if ( has_nav_menu( 'modal' ) ) {
			echo('<div id="nav-modal">');
			wp_nav_menu( array(
				'theme_location' => 'modal',
			) );
			echo('</div>');
		}
		get_template_part( 'sidebar-templates/sidebar', 'modal-2' );
	?>
	</div>
</div>
<div id="modal-button">MENU<a class="toggle-closed"><i class="fa fa-bars" aria-hidden="true"></i></a><a class="toggle-open"><i class="fa fa-times" aria-hidden="true"></i></a></div>

<div id="page" class="site">

	<?php get_template_part( 'sidebar-templates/sidebar', 'urgent-notice-1' ); ?>

	<header id="masthead" class="site-header">
	<div class="content-container" >
		<?php get_template_part( 'sidebar-templates/sidebar', 'header-1' ); ?>
		    <nav  class="primary-navigation navbar navbar-expand-md navbar-light bg-light" role="navigation">
		        <div id="nav-header-1">
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-controls="bs-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		        <?php if( get_theme_mod( 'site_logo', '0' ) != '0' ): ?>
		        <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_theme_mod( 'site_logo', '0' ); ?>" / alt="<?php echo get_bloginfo('name'); ?>"></a>
		        <?php endif; ?>
		        <?php
		        if ( has_nav_menu( 'header-1' ) ) {
		            wp_nav_menu( array(
		                'theme_location' => 'header-1',
		                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
		                'container'       => 'div',
		                'container_class' => 'collapse navbar-collapse',
		                'container_id'    => 'bs-navbar-collapse-1',
		                'menu_class'      => 'navbar-nav mr-auto',
		                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'          => new WP_Bootstrap_Navwalker(),
		            ) );
		        }
		        ?>
		        </div>
		    </nav><!-- .primary-navigation -->
		    <nav class="main-navigation">
		        <div id="nav-header-2">
		        <?php
		        if ( has_nav_menu( 'header-2' ) ) {
		            wp_nav_menu( array(
		                'theme_location' => 'header-2',
		            ) );
		        }
		        ?>
		        </div>
		    </nav><!-- .main-navigation -->
		<?php get_template_part( 'sidebar-templates/sidebar', 'header-2' ); ?>
	</div><!-- .content-container -->
	</header><!-- #masthead -->

	<?php get_template_part( 'sidebar-templates/sidebar', 'urgent-notice-2' ); ?>

	<div class="featured-image-header">
	</div><!-- .featured-image-header -->

	<div id="content" class="site-content">
	<div class="content-container" >
