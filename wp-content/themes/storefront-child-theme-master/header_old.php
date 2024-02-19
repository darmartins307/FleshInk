<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
<script src="https://kit.fontawesome.com/16f9e98d19.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/app.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header>
  <div class="header">
    <div class="image-details-left"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/faixa-left-details-header.png" alt=""> </div>

    <div class="image-details-right"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/faixa-right-details-header.png" alt=""> </div>
    <div class="container">
      <div class="inner-header">
        <div class="logo">
          <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt=""></a>
        </div>
        <div class="menu-desktop">
          <nav>
            <?php
              wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'container' => 'false' ) );
            ?>
          </nav>
        </div>
        <div class="infos-header">
          <a class="cart" href="<?php bloginfo('url'); ?>/carrinho">
            <span class="prodCount"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count()); ?></span>
          </a>
          <div class="social social-header">
            <a href="#" class="icon-face"><i ></i></a>
            <a target="_blank" href="https://www.instagram.com/floraurbana420/" class="icon-insta"><i ></i></a>
          </div>

          <div class="button-nav">
  					<div class="collapsed btn-burguer blue" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  						<span class="icon-bar top-bar"></span>
  						<span class="icon-bar middle-bar"></span>
  						<span class="icon-bar bottom-bar"></span>
  					</div>
  				</div>
        </div>
      </div>

    </div>
  </div>
</header>

<div class="header-mobile">
		<div class="blackface"></div>
		<div class="menu-mobile">
			<span>MENU</span>
			<div class="closedMenu">
				<div>X</div>
			</div>
			<div>
        <?php
          wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'container' => 'false' ) );
        ?>
			</div>
		</div>

	</div>
