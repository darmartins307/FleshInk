<?php get_header(); ?>



<div class="slider">
 

<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<script>
  new Glide('.glide').mount()
</script>

<?php 
$images = get_field('banner_home');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>

        <?php foreach( $images as $image_id ): ?>
     
            <div class="item">
	
				<?php 
				 echo wp_get_attachment_image( $image_id, $size ). "</a>";
					
					

				?>
			
                </div>
        <?php endforeach; ?>

<?php endif;
      
?>

</div>
<div class="content-mid-home">


  
  <div class="section-product line-orange">
    <div class="header-title--product">

    </div>
    <div class="container">
      <div style="margin-right: 48px;" class="list-product">

          <?php
$featured_posts = get_field('produtos_mais_procurados');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
            <li>

          <?php

          $thumb_id = get_post_thumbnail_id();

          $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);

          ?>

            <a href="<?php the_permalink(); ?>"><div class="thumb-product" style="background-image: url('<?php echo $thumb_url[0] ?>')"></div></a>

            <div class="name-product"><?php the_title(); ?></div>

            <div class="category-product">

              <?php the_field('banco_da_semente'); ?>

              <?php the_field('nome_categoria'); ?>

            </div>

            <div class="subcategory-product">

              <?php the_field('nome_tipo_de_semente'); ?>

              <?php the_field('nome_fabricante'); ?>

            </div>

          <div class="btn-buy"> <a href="<?php the_permalink(); ?>">COMPRAR</a></div> 



       <!--      <a class="xc-woo-order-whatsapp-btn " data-href="https://web.whatsapp.com/send?phone=5521992638523&amp;text=Olá, gostaria de fazer a compra do produto, <?php the_title(); ?>" href="https://web.whatsapp.com/send?phone=5521992638523&amp;text=Olá, gostaria de fazer a compra do produto, <?php the_title(); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path></svg>Comprar no Whatsapp </a> -->

        </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>

      </div>

    </div>

  </div>

</div>
    <div class="container">
      
      <div class="content-boxes">

        <ul style="border: none;" >

          <li>

            <img class="boxes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-escudo.png" alt="">

            <div class="text">

              <h3>Seguro e confiável.</h3>

              <p>Sigilo Total com seus <br>pedidos e dados.</p>

            </div>
<span class="divider"></span>
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
    
      <?php 
$images = get_field('carrousel_home');
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
?>

      <div class="glide">
  <div data-glide-el="track" class="glide__track">
    <ul class="glide__slides">

     <?php if( $images ): ?>

<?php foreach( $images as $image_id ): ?>

    <li class="glide_slide">
      <?php 
        echo wp_get_attachment_image( $image_id, $size ). "</a>";
      ?>
      </li>
      <?php 
      endforeach;
      endif;
      ?>
    </ul>
  </div>
</div>

    </div>


    <div class="glide">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      <li class="glide__slide">0</li>
      <li class="glide__slide">1</li>
      <li class="glide__slide">2</li>
    </ul>
  </div>
</div>




<?php get_footer(); ?>

