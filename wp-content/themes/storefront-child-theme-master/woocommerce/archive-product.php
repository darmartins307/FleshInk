<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<!-- <header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>


	<?php

	do_action( 'woocommerce_archive_description' );
	?>
</header> -->

<?php
	$args = array(
			'delimiter' => '<span>/</span>',
	);
?>

<?php woocommerce_breadcrumb($args); ?>

<?php $post_id = get_queried_object(); ?>
<?php $image = get_field('logo_categoria', $post_id); ?>
<?php $text = get_field('texto_categoria', $post_id); ?>
<?php $banner = get_field('banner_categoria', $post_id); ?>

<?php if( get_field('banner_categoria', $post_id) ): ?>
<div class="banner-category">
	<img src="<?php echo $banner; ?>" alt="">
</div>
<?php endif; ?>

<?php if( get_field('logo_categoria', $post_id) ): ?>
	<div class="content-top-categoryLogo line-orange">

		<div class="container">
			<div class="logo-category">
				<div class="logo-inner">
					<img src="<?php echo $image; ?>" alt="">
				</div>

			</div>
			<div class="text-category">
				<p><?php echo $text; ?></p>
			</div>
			<div class="btn-vermais">
				<span>
					<p class="open-text">Leia Mais <i class="fas fa-sort-down"></i></p>
					<p class="closed-text" style="display: none;">Fechar<i class="fas fa-sort-up"></i></p>
				</span>
			</div>
		</div>
	</div>
<?php endif; ?>


<?php

function get_parent_terms($term) {
    if ($term->parent > 0){
        $term = get_term_by("id", $term->parent, "product_cat");
        return get_parent_terms($term);
    }else{
        return $term->term_id;
    }
}
global $wp_query;
$cat_obj = $wp_query->get_queried_object();
$Root_Cat_ID = get_parent_terms($cat_obj);


?>
<div class="section-product archive-product line-orange">


  <div id="<?php echo(woocommerce_page_title()); ?>" class="header-title--product title-category-product-<?php echo $Root_Cat_ID; ?>" style="display: none;">
    <h2><?php woocommerce_page_title(); ?></h2>
  </div>
<?php 			 

?>
	<div id="<?php echo($title_category); ?>" class="header-title--product header-allpages title-archive-product-<?php echo $Root_Cat_ID; ?>">

    <h2><?php woocommerce_page_title(); ?></h2>
  </div>

	<div class="header-title--product header-allpages title-category-banco-<?php echo $Root_Cat_ID; ?>" style="display: none;">

    <h2><?php woocommerce_page_title(); ?></h2>
  </div>


	<div class="container">
		<div class="list-product">
				<?php
				if ( woocommerce_product_loop() ) {

					/**
					 * Hook: woocommerce_before_shop_loop.
					 *
					 * @hooked woocommerce_output_all_notices - 10
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );

					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();

							/**
							 * Hook: woocommerce_shop_loop.
							 */
							do_action( 'woocommerce_shop_loop' );

							wc_get_template_part( 'content', 'product' );
						}
					}

					woocommerce_product_loop_end();

					/**
					 * Hook: woocommerce_after_shop_loop.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				}

				/**
				 * Hook: woocommerce_after_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action( 'woocommerce_after_main_content' );

			?>

				<div class="content-boxes content-boxes-category">
					<div class="container">
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
	</div>
</div>



</div>
<?php get_template_part('template-notice'); ?>

<?php get_template_part('template-instagram'); ?>

<?php get_footer( 'shop' ); ?>
