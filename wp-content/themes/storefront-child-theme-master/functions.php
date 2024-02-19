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

//26/02
/*
function prevent_checkout_access_no_shipping() {
    // Check that WC is enabled and loaded
    if( function_exists( 'is_checkout' ) && is_checkout() ) {
     
        // get shipping packages and their rate counts
        $packages = WC()->cart->get_shipping_packages();
        foreach( $packages as $key => $pkg ) {
            $calculate_shipping = WC()->shipping->calculate_shipping_for_package( $pkg );
            if( empty( $calculate_shipping['rates'] ) ) {

                wp_redirect( esc_url( WC()->cart->get_cart_url() ) );
                exit;
            }
        }
    }
}
add_action( 'wp', 'prevent_checkout_access_no_shipping' );
*/

function disable_checkout_button_no_shipping() {
    $package_counts = array();
     
    // get shipping packages and their rate counts
    $packages = WC()->shipping->get_packages();
    foreach( $packages as $key => $pkg )
        $package_counts[ $key ] = count( $pkg[ 'rates' ] );
 
    // remove button if any packages are missing shipping options
    if( in_array( 0, $package_counts ) )
        remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );
}
add_action( 'woocommerce_proceed_to_checkout', 'disable_checkout_button_no_shipping', 1 );


/* limitar direccion a 45 caracteres */
add_action("wp_footer", "cod_set_max_length");
function cod_set_max_length(){
if( !is_checkout()){
return;
	}
?>
<script>
jQuery(document).ready(function($){
$("#billing_address_1").attr('maxlength','40');

});
</script>
<?php
}


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





add_action( 'woocommerce_after_single_product_summary', 'boxesInfos', 15 );



 function boxesInfos() {?>

  <div class="container">

    <div class="section-boxHome boxSingle content-boxes">

 <ul>
 <li>

            <img class="boxes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-escudo.png" alt="">

            <div class="text">

              <h3>Seguro e confiável.</h3>

              <p>Sigilo Total com seus <br>pedidos e dados.</p>

            </div>

          </li>


							
          <li>
<span class="divider"></span>
            <img class="boxes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icone-entrega.png" alt="">

            <div class="text">

              <h3>Rapidez de envio.</h3>

              <p>Pedidos entregues com <br> segurança e no menor prazo.</p>

            </div>

          </li>

		</ul>

  </div>
</div>






<?php }




	add_action('woocommerce_after_cart_contents', 'checkout_discount');

function checkout_discount(){
	
global $woocommerce;
$cart_subtotal = $woocommerce->cart->get_cart_subtotal();
	
	echo("
	<style>
	#message-cart{
	color: red;
	text-align: center;
	background-color: black;
	}
	</style>
	<p id='message-cart'> Preencha o endereço para prosseguir </P>");


	$valor = str_replace("." , "" , $cart_subtotal ); // Primeiro tira os pontos
$valor = str_replace("," , "" , $cart_subtotal); // Depois tira a vírgula
	$valor = preg_replace("/[^0-9]/","", $valor);
	$valor = substr($valor, 4);
	$valor = substr($valor,0,-2);
	
	$valor = (int)$valor;

	if( $valor < 1000){
		echo "<style>
		.adv-gift-section {
    display: none;
}  </style>";
	}
	
}


add_action( 'woocommerce_single_product_summary', 'view_acf_field_for_single_product', 10 );





 function view_acf_field_for_single_product() {?>



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

  <?php }



  }





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



	  $text_to_add_before_price  =  str_replace( '<ins>', '<ins> <b>POR:</b> ', $price);



			return $text_to_add_before_price ;



	    }else{



	 return $price;



   }



}







 add_action( 'woocommerce_single_product_summary', 'sharedProduct', 60 );



 function sharedProduct() {?>



  <div class="shared-product">

    <span>COMPARTILHE:</span>

    <ul>


      <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-face.png" alt=""></a> </li>

      <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-twitter.png" alt=""></a> </li>

      <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-whats.png" alt=""></a> </li>

      <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-email.png" alt=""></a> </li>

    </ul>

  </div>



<?php  }





function ssp_always_show_variation_prices($show, $parent, $variation) {

return true;

}

add_filter( 'woocommerce_show_variation_price', 'ssp_always_show_variation_prices', 99, 3);





function wc_empty_cart_redirect_url() {

	return 'http://floraurbana420.com.br';

}

add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );





/**

 * Remove password strength check.

 */

function iconic_remove_password_strength() {

    wp_dequeue_script( 'wc-password-strength-meter' );

}

add_action( 'wp_print_scripts', 'iconic_remove_password_strength', 10 );



add_filter( 'woocommerce_loop_add_to_cart_link', 'ts_replace_add_to_cart_button', 10, 2 );
function ts_replace_add_to_cart_button( $button, $product ) {
if (is_product_category() || is_shop()) {
$button_text = __("Comprar", "woocommerce");
$button_link = $product->get_permalink();
$button = '<a class="add_to_cart_button" href="' . $button_link . '">' . $button_text . '</a>';
return $button;
}

}


function change_stock_message( $text, $product ) {
    // Managing stock NOT checked
    if ( !$product->managing_stock() ) {

        // Get stock status
        if ( method_exists( $product, 'get_stock_status' ) ) {
            $stock_status = $product->get_stock_status();
        }

        // Check stock status, adjust the message accordingly
        switch ( $stock_status ) {
            case 'instock':
                $text = __( 'Available', 'woocommerce' );
                break;
            case 'outofstock':
                $text = __( 'Out of stock', 'woocommerce' );
                break;
            case 'onbackorder':
                $text = __( 'Available after 4-7 days', 'woocommerce' );
                break;
        }
    }

    return $text;
}
add_filter( 'woocommerce_get_availability_text', 'change_stock_message', 10, 2 );

add_action('woocommerce_new_order', 'enviar_email_template_pedido_novo', 10, 1);
function enviar_email_template_pedido_novo($order_id) {
    // Envia o e-mail usando o template padrão do WooCommerce
    $mailer = WC()->mailer();
    $email = $mailer->get_emails()['WC_Email_Customer_On_Hold_Order'];
    $email->trigger($order_id);
}

// Hook into the order status transition to cancelled
add_action('woocommerce_order_status_cancelled', 'send_cancelled_order_email', 10, 2);

function send_cancelled_order_email($order_id, $order) {
    // Get the WC_Email_Cancelled_Order instance
    $email = WC()->mailer()->get_emails()['WC_Email_Cancelled_Order'];

    // Set the recipient email
    $email->recipient = $order->get_billing_email();

    // Pass the order to the email
    $email->object = $order;

    // Trigger the email
    $email->trigger($order_id);
}





?>