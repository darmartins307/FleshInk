<?php

/**

 * The template for displaying product content in the single-product.php template

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.

 *

 * HOWEVER, on occasion WooCommerce will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen. When this occurs the version of the template file will be bumped and

 * the readme will list any important changes.

 *

 * @see     https://docs.woocommerce.com/document/template-structure/

 * @package WooCommerce\Templates

 * @version 3.6.0

 */



defined( 'ABSPATH' ) || exit;



global $product; ?>





<div class="heading-product">

	<div class="title-product">

		<?php the_title(); ?>

	</div>



		<ul class="tipo-bancoCat">

			<li>

				<?php the_field('banco_da_semente'); ?>

				<?php the_field('nome_fabricante'); ?>

			</li>

		</ul>

		<ul class="tipo-sementeCat">

			<li>

				<?php the_field('nome_tipo_de_semente'); ?>

				<?php the_field('nome_categoria'); ?>

			</li>

		</ul>

			<!-- <?php





				$term_id       = 16;

				$taxonomy_name = 'product_cat';

				$termchildren  = get_term_children( $term_id, $taxonomy_name );



				echo '<ul class="tipo-bancoCat">';

				foreach ( $termchildren as $child ) {

				$term = get_term_by( 'id', $child, $taxonomy_name );

				echo '<li>Banco: <a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';

				}

				echo '</ul>';



				$term_id       = 19;

				$taxonomy_name = 'product_cat';

				$termchildren  = get_term_children( $term_id, $taxonomy_name );



				echo '<ul class="tipo-sementeCat">';

				foreach ( $termchildren as $child ) {

				$term = get_term_by( 'id', $child, $taxonomy_name );

				echo '<li>Tipo: <a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';

				}

				echo '</ul>';



			?> -->





</div>



<?php

/**

 * Hook: woocommerce_before_single_product.

 *

 * @hooked woocommerce_output_all_notices - 10

 */

do_action( 'woocommerce_before_single_product' );



if ( post_password_required() ) {

	echo get_the_password_form(); // WPCS: XSS ok.

	return;

}

?>







	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>


		<?php

		/**

		 * Hook: woocommerce_before_single_product_summary.

		 *

		 * @hooked woocommerce_show_product_sale_flash - 10

		 * @hooked woocommerce_show_product_images - 20

		 */

		do_action( 'woocommerce_before_single_product_summary' );

		?>



		<div class="summary entry-summary">




			<?php

			/**

			 * Hook: woocommerce_single_product_summary.

			 *

			 * @hooked woocommerce_template_single_title - 5

			 * @hooked woocommerce_template_single_rating - 10

			 * @hooked woocommerce_template_single_price - 10

			 * @hooked woocommerce_template_single_excerpt - 20

			 * @hooked woocommerce_template_single_add_to_cart - 30

			 * @hooked woocommerce_template_single_meta - 40

			 * @hooked woocommerce_template_single_sharing - 50

			 * @hooked WC_Structured_Data::generate_product_data() - 60

			 */

			do_action( 'woocommerce_single_product_summary' );

			?>

		</div>





	</div>

</div>



	<?php

	/**

	 * Hook: woocommerce_after_single_product_summary.

	 *

	 * @hooked woocommerce_output_product_data_tabs - 10

	 * @hooked woocommerce_upsell_display - 15

	 * @hooked woocommerce_output_related_products - 20

	 */

	do_action( 'woocommerce_after_single_product_summary' );

	?>





<?php do_action( 'woocommerce_after_single_product' ); ?>
