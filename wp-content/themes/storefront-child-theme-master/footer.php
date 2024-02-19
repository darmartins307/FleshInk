<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package storefront

 */



?>







	<?php do_action( 'storefront_before_footer' ); ?>



<div class="clearfix"></div>
<!--<ul id="info_site">
<li><img id="info-2" src="https://floraurbana420.com.br/wp-content/uploads/2023/05/page_10.png"> </li>
	<li><img id="info-3" src="https://floraurbana420.com.br/wp-content/uploads/2023/05/page_9.png"> </li>
	<li><img id="info-4" src="https://floraurbana420.com.br/wp-content/uploads/2023/05/page_8.png"> </li>
	<li><img id="info-1" src="https://floraurbana420.com.br/wp-content/uploads/2023/05/page_11.png"> </li> 
	
</ul>-->
  <footer>

    <div class="container">

      <div class="footer">

        <div class="column-1">

          <div class="logo-footer">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-fleshink.png" alt="">

          </div>

          <div class="social">

						<a target="_blank" href="https://www.instagram.com/floraurbana420/" class="icon-face"><i ></i></a>

            <a target="_blank" href="https://www.instagram.com/floraurbana420/" class="icon-insta"><i ></i></a>

          </div>

        </div>

        </div>

      </div>

  </footer>

  <div class="cop">

    <p>© Copyright 2021 Flora Urbana - Todos os direitos reservados</p>

  </div>



	<?php do_action( 'storefront_after_footer' ); ?>



</div><!-- #page -->



<script src="https://kit.fontawesome.com/16f9e98d19.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/pop-up.js"></script>



<?php wp_footer(); ?>



</body>

</html>
