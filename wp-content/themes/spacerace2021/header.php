<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spacerace2021
 */
  $theme = get_field('page_theme');
  $header = get_field('header_color');
  if(empty($theme)) {
    $theme = 'dark';
  }
  if(empty($header)) {
    $header = 'dark';
  }
?>
<!doctype html>
<html <?php language_attributes(); ?> class="<?php echo 'theme-'. $theme; ?> <?php echo 'header-'. $header; ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/kdp0xpf.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<link rel="icon" id="favicon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/build/images/favicons/favicon.png"/>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/build/images/favicons/apple-touch-icon.png" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/build/images/favicons/android-favicon.png">
	<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'spacerace2021' ); ?></a>

	<header class="site-header">
		<div class="site-header__inner">
			<div class="site-branding">
				<a href="<?php echo home_url(); ?>">
					<?php get_template_part('template-parts/logo'); ?>
				</a>
			</div>

			<?php $dn = false; if($dn): ?>
			<nav id="site-navigation" class="desktop-navigation d-none">
				<ul>
					<?php
					$primaryNav = array(
						'theme_location' => 'menu-1',
						'container_class' => '',
						'items_wrap' => '%3$s',
						'container' => '',
						'menu_class' => ''
					);
					wp_nav_menu( $primaryNav );
					?>
				</ul>
			</nav>
			<?php endif; ?>

			<?php $un = false; if($un): ?>
			<div class="desktop-utility">
				<a class="icon-link" href="">
					<span>Request Demo</span>
					<svg width="7" height="10" viewBox="0 0 7 10">
						<path d="M1.92247 9.75581L6.67831 4.99997L1.92247 0.244141L0.744141 1.42247L4.32164 4.99997L0.744141 8.57747L1.92247 9.75581Z" fill="white"/>
					</svg>
				</a>
				<a class="btn" href="">
					<span>Free Trial</span>
					<svg width="7" height="10" viewBox="0 0 7 10">
						<path d="M1.92247 9.75581L6.67831 4.99997L1.92247 0.244141L0.744141 1.42247L4.32164 4.99997L0.744141 8.57747L1.92247 9.75581Z" fill="white"/>
					</svg>
				</a>
			</div>
			<?php endif; ?>

			<div class="menu-toggle js-menu-trigger">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="6" y="6" width="16" height="1" fill="white" id="b-top" />
					<rect x="2" y="16" width="16" height="1" fill="white" id="b-btm"/>
					<rect x="2" y="11" width="20" height="1" fill="white" id="b-md" />
					<circle cx="3" cy="6.5" r="1" fill="white"/>
					<circle cx="21" cy="16.5" r="1" fill="white"/>
				</svg>
				<span>Menu</span>
				<span>Close</span>
			</div>
		</div>
		<div class="navigation-drawer">
			<div>
				<ul>
					<?php
					$primaryNav = array(
						'theme_location' => 'menu-2',
						'container_class' => '',
						'items_wrap' => '%3$s',
						'container' => '',
						'menu_class' => ''
					);
					wp_nav_menu( $primaryNav );
					?>
				</ul>

				<div class="mobile-utility d-none">
					<a class="icon-link" href="">
						<span></span>
						<svg width="7" height="10" viewBox="0 0 7 10">
							<path d="M1.92247 9.75581L6.67831 4.99997L1.92247 0.244141L0.744141 1.42247L4.32164 4.99997L0.744141 8.57747L1.92247 9.75581Z" fill="white"/>
						</svg>
					</a>
					<a class="btn" href="">
						<span>/span>
						<svg width="7" height="10" viewBox="0 0 7 10">
							<path d="M1.92247 9.75581L6.67831 4.99997L1.92247 0.244141L0.744141 1.42247L4.32164 4.99997L0.744141 8.57747L1.92247 9.75581Z" fill="white"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->



	<main id="primary" class="site-main">
