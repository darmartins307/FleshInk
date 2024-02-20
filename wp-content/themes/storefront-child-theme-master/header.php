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



<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-fleshink.png" />


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">


<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>



<?php wp_body_open(); ?>

<!-- Adicionar contato via wpp
<div class="link-whatsapp">
    <a  target="_blank" onclick="ga('send','event','whatsapp','click','botao');" href="https://api.whatsapp.com/send?phone=55021978720572">
      <img id="wpp" style="width: 100px;" alt="Whatsapp" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boneco.png">
    </a>
</div>
-->

<header>

  <div class="header">
    <div class="container">
		<div class="inner-header">

        <div class="logo">

          <a href="<?php bloginfo('url'); ?>?page_id=13"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-fleshink.png" alt=""></a>

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


                    <div class="form-header">
                      <img  class="icon-search" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/2561381_search_icon.png" alt="">
                      <img style="display: none;"  class="closed-search" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_close.png" alt="">

                      <form  role="search" id="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                      	<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
                      	<input type="search" class="inputSearch" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                      	<button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"><?php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); ?></button>
                      	<input type="hidden" name="post_type" value="product" />
                      </form>
                    </div>


          <a class="cart" href="<?php bloginfo('url'); ?>/?page_id=33">

            <span class="prodCount"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count()); ?></span>

          </a>



          <div class="user">

            <a  href="<?php bloginfo('url'); ?>/?page_id=16" <?php if(is_user_logged_in()) {echo 'class="active"';} ?>>

				<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"

				viewBox="52.3 -27 125.3 125" style="enable-background:new 52.3 -27 125.3 125;" xml:space="preserve">

				<g>

				<path class="st0" d="M115,41.3c15,0,26-21.8,26-36.4c0-15.2-11.7-27.7-26-27.7s-26,12.5-26,27.7C89.1,19.5,99.9,41.3,115,41.3z"/>

				<path class="st0" d="M166.1,52.6c-4.3-4-22-9.8-32.3-12.7l-1-0.4c-0.4-0.1-0.7,0-1.1,0.1L115,51.9L98.3,39.7

				c-0.4-0.2-0.7-0.2-1.1-0.1l-1.1,0.4c-12.5,3.7-28.3,8.9-32.3,12.7c-4.3,3.9-7,14.2-8.2,30.5c-0.2,2.9,0.7,5.5,2.6,7.5

				s4.8,3.2,7.5,3.2h98.2c2.9,0,5.6-1.2,7.5-3.2c1.9-1.9,2.9-4.6,2.7-7.5C173.6,71.9,171.6,57.6,166.1,52.6z"/>

				</g>

				</svg>
      </a>

          </div>



          <div class="social social-header">

            <a target="_blank"  href="https://www.instagram.com/fleshink/" class="icon-face"><i ></i></a>

            <a target="_blank" href="https://www.instagram.com/fleshink/" class="icon-insta"><i ></i></a>

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
