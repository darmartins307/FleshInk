<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */

 register_nav_menus(
   array(
     'menu-1' => esc_html__( 'Primary', 'flora' ),
   )
 );

function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}


remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 1 );

add_action( 'woocommerce_single_product_summary', 'view_acf_field_for_single_product', 10 );

?>

<?php function view_acf_field_for_single_product() {?>
  <?php if( !empty( get_field('strain') ) ) { ?>
  <div class="single-extraFields">
    <ul>
      <?php if( !empty( get_field('genetica') ) ) { ?>
      <li>

            <div class="icon-field">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-genetica.png" alt="">
            </div>
            <div class="content-field">
              <span>genética</span>
              <p><?php echo the_field('genetica'); ?></p>
            </div>

      </li>
      <?php } ?>
      <?php if( !empty( get_field('strain') ) ) { ?>
      <li>

            <div class="icon-field">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-cepa.png" alt="">
            </div>
            <div class="content-field">
              <span>strain</span>
              <p><?php echo the_field('strain'); ?></p>
            </div>

      </li>
      <?php } ?>
      <?php if( !empty( get_field('nivel_de_thc') ) ) { ?>
      <li>

            <div class="icon-field">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-thc.png" alt="">
            </div>
            <div class="content-field">
              <span>nível de thc</span>
              <p><?php echo the_field('nivel_de_thc'); ?></p>
            </div>

      </li>
      <?php } ?>
      <?php if( !empty( get_field('producao') ) ) { ?>
      <li>

            <div class="icon-field">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-prod.png" alt="">
            </div>
            <div class="content-field">
              <span>produção</span>
              <p><?php echo the_field('producao'); ?></p>
            </div>

      </li>
      <?php } ?>

      <?php if( !empty( get_field('tempo_de_floracao') ) ) { ?>
      <li>

            <div class="icon-field">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-tempo.png" alt="">
            </div>
            <div class="content-field">
              <span>tempo de floração</span>
              <p><?php echo the_field('tempo_de_floracao'); ?></p>
            </div>

      </li>
      <?php } ?>
    </ul>

  </div>
  <?php } ?>

<?php  } ?>

<?php add_action( 'woocommerce_after_single_product_summary', 'boxesInfos', 15 ); ?>

<?php function boxesInfos() {?>
  <div class="container">
    <div class="section-boxHome boxSingle content-boxes">
  	    <ul>
  	      <li>
  	        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-seguro.png" alt="">
  	        <div class="text">
  	          <h3>Seguro e privado</h3>
  	          <p>Somos muito discretos com <br> seu pedido e detalhes</p>
  	        </div>
  	      </li>
  	      <li>
  	        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-entrega.png" alt="">
  	        <div class="text">
  	          <h3>entrega rápida</h3>
  	          <p>Você receberá seu pedido com <br> rapidez e segurança</p>
  	        </div>
  	      </li>
  	      <li>
  	        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-cepa.png" alt="">
  	        <div class="text">
  	          <h3>mais de 100 cepas</h3>
  	          <p>Nosso catálogo contém <br> mais de 100 cepas </p>
  	        </div>
  	      </li>
  	      <li>
  	        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-entregaBrasil.png" alt="">
  	        <div class="text">
  	          <h3>entrega em todo brasil</h3>
  	          <p>Envíos via PAC ou SEDEX para <br> todo o território Brasileiro</p>
  	        </div>
  	      </li>
  	    </ul>
  	</div>
  </div>



<?php  } ?>



<?php



/**
 * Change the "Add to Cart" text on the single product page
 *
 * @return string
 */
function wc_custom_single_addtocart_text() {
    return "ADICIONAR AO CARRINHO";
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'wc_custom_single_addtocart_text' );


add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
	global $product;

	$product_type = $product->get_type();

	switch ( $product_type ) {
		case 'external':
			return __( 'Buy product', 'woocommerce' );
		break;
		case 'simple':
			return __( 'COMPRAR', 'woocommerce' );
		break;
		case 'variable':
			return __( 'COMPRAR', 'woocommerce' );
		break;
		default:
			return __( 'Read more', 'woocommerce' );
	}

}

add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);

function custom_variation_price( $price, $product ) {

     $price = '';

     $price .= wc_price($product->get_price());

     return $price;
}


/**
 * Add text before the  price
 */

add_filter( 'woocommerce_get_price_html', 'njengah_text_before_price' );

function njengah_text_before_price($price){

    $text_to_add_before_price  = '<b></b>'; //change text in bracket to your preferred text


	return $text_to_add_before_price . $price   ;

}

/**
 * Add text before the sales price
 */

add_filter( 'woocommerce_get_price_html', 'njengah_text_onsale_price', 100, 2  );

function njengah_text_onsale_price( $price, $product ) {

  if ( $product->is_on_sale() ) {

	  $text_to_add_before_price  =  str_replace( '<ins>', '<ins> POR: ', $price);

			return $text_to_add_before_price ;

	    }else{

	 return $price;

   }

}

?>




<?php add_action( 'woocommerce_single_product_summary', 'sharedProduct', 60 ); ?>

<?php function sharedProduct() {?>

  <div class="shared-product">
    <span>COMPARTILHE:</span>
    <ul>
      <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-face-product.png" alt=""></a> </li>
      <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-flora-tt.png" alt=""></a> </li>
      <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-whats-product.png" alt=""></a> </li>
      <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-mail-product.png" alt=""></a> </li>
    </ul>
  </div>

<?php  } ?>
