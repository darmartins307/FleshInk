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

<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-flora-urbana.png" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/inicio.css">

<script type="text/javascript">

  function inputAccepet() {

  var element = document.getElementById("accepeted");

  var entrance = document.getElementById("entrarInicio")

  element.classList.toggle("active");

  entrance.classList.toggle("active");

  }

</script>

<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>


<div class="content-inicio">

  <div class="logo">

       <img id="img-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_flora.png" alt="">

  </div>

  <div class="text">

	  <p id="bem-vindo-site">Bem vindo a Flora Urbana,<br>
	  </p>
 <p id="cultivo">
	 
	o melhor portal de produtos

    para o auto-cultivo.</p>

  </div>

  <div class="input" id="accepeted" onclick="inputAccepet()">

     <span style="" id="accepted"></span> <p id="idade-inicio">Sou maior de 18 anos</p>
<style>
	
	.content-inicio .input span:before {

  content: '';

  width: 19px;

  height: 19px;

  background: rgb(255,108,0);

  background: linear-gradient(

  180deg

  , rgba(255,108,0,1) 0%, rgba(226,96,0,1) 50%, rgba(194,82,0,1) 100%);

  border-radius: 50%;

  position: absolute;

  left: 0;

  top: 0;

  opacity: 0;

  visibility: hidden;

  transform: scale(0);

  transition: all 0.2s ease;

  }

.content-inicio .input.active span:before {

  opacity: 1;

  visibility: visible;

  transform: scale(1);

}
	
</style>
	  
  </div>

  <div class="link-entrar" id="entrarInicio">

    <a disabled href="<?php bloginfo('url'); ?>?page_id=13">ENTRAR</a>

  </div>

</div>


</body>

</html>

