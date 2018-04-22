<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arperinatal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Roboto+Condensed:400,400i,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body id="top">

  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'arperinatal' ); ?></a>
  
  <?php include('inc/mega-menu.php') ?>

  <header class="header">

    <?php include('inc/branding.php') ?>

    <nav class="header__nav">
      <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
    </nav>

    <div class="search header__search">
      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <div class="search__icon">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-search-white.svg" alt="Search">
        </div>        
        <input type="search" class="search__input" placeholder="" value="" name="search"/>
        <span class="search__trigger">Search</span>
      </form>
    </div>  

    <div class="mobile-nav">
      <div class="mobile-nav__trigger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div class="mobile-nav__nav">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
        
        <div class="mobile-nav__social">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook-large.svg" alt=""></a>
          <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter-large.svg" alt=""></a>
        </div>
      </div>        
    </div> 

  </header>

  <main>
