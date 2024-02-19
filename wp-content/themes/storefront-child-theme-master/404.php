<?php get_header(); ?>
  
  <div class="section-404">
    <div class="container">
      <div id="content-404" class="list-product">

    <h1 style="text-align: center;">Página não encontrada!</h1>
    <button id="home" > <a href="http://floraurbana420.com.br" id="text-404" >Retornar para Home</a> </button>
      </div>

    </div>

  </div>




<?php get_template_part('template-notice'); ?>



<?php get_template_part('template-instagram'); ?>



<?php get_footer(); ?>

<style>


@media (max-width: 768px) {
  
  .section-404 {
    padding-bottom: 56%;
    margin-top: 12%;
}

}
    ul#info_site {
        z-index: 1;
    }

    #home{
 background-color: grey;
    border-radius: 15px;
    height: 20%;

}

#text-404{
    color: black;
}

.section-404 {
    margin-top: 12%;
}

#content-404{
    display: flex;

align-items: center;

justify-content: center;

flex-direction: column;
margin-bottom: 175px;
}
    </style>