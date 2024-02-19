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
  <footer>
    <div class="container">
      <div class="footer">
        <div class="column-1">
          <div class="logo-footer">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-footer.png" alt="">
          </div>
          <div class="social">
						<a target="_blank" href="https://www.instagram.com/floraurbana420/" class="icon-face"><i ></i></a>
            <a href="#" class="icon-insta"><i ></i></a>
          </div>
        </div>
        <div class="column-2">
          <div class="title-menu-footer">
            <h3>BANCOS DE SEMENTES</h3>
          </div>
						<ul class="menu-footer">
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/bancos-de-semente/barneys-farm/">BARNEYS FARM</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/bancos-de-semente/bsf">BSF</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/bancos-de-semente/kush-brothers">KUSH BROTHERS</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/bancos-de-semente/old-school-genetics">OLD SCHOOL GENETICS</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/bancos-de-semente/r-kiem">R-KIEM</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/bancos-de-semente/royal-queen">ROYAL QUEEN</a></li>
							<li><a href="<?php bloginfo('url'); ?>/categoria-produto/bancos-de-semente/sweet-seeds">SWEET SEEDS</a></li>
							<li><a href="<?php bloginfo('url'); ?>/categoria-produto/bancos-de-semente/tucano">Tucano</a></li>
            </ul>

        </div>
        <div class="column-3">
          <div class="title-menu-footer">
            <h3>TIPOS DE SEMENTES</h3>
          </div>
            <ul class="menu-footer">
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/tipos-de-semente/regular">REGULAR</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/tipos-de-semente/feminizada">FEMINIZADA</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/tipos-de-semente/automatica">AUTOMÁTICA</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/tipos-de-semente/fast-flowering">FAST FLOWERING</a></li>
              <li><a href="<?php bloginfo('url'); ?>/categoria-produto/tipos-de-semente/cbd">CBD</a></li>
            </ul>

        </div>
        <div class="column-4">
          <div class="title-menu-footer">
            <h3>FERTILIZANTES</h3>
          </div>
          <ul class="menu-footer">
            <li><a href="<?php bloginfo('url'); ?>/categoria-produto/fertilizantes/bio-bizz">BIOZ BIZZ</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria-produto/fertilizantes/general-hydroponic">General Hydroponics</a></li>

          </ul>
        </div>
				<div class="column-4">
          <div class="title-menu-footer">
            <h3>ACESSÓRIOS</h3>
          </div>
					<ul class="menu-footer">
            <li><a href="<?php bloginfo('url'); ?>/categoria-produto/acessorios/bandejas">Bandejas</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria-produto/acessorios/estufas">Estufas</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria-produto/acessorios/iluminacao">Iluminação</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria-produto/acessorios/medidores">Medidores</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria-produto/acessorios/tesouras">Tesouras</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria-produto/acessorios/vasos">Vasos</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria-produto/acessorios/outros">Outros</a></li>
          </ul>
        </div>
				<div class="column-4">
          <div class="title-menu-footer">
            <h3>LIVROS</h3>
          </div>
        </div>
        <div class="column-4">
					<div class="title-menu-footer">
						<h3>OUTROS</h3>
					</div>
            <ul class="menu-footer">
              <li><a href="#">DICAS</a></li>
              <li><a href="#">TERMOS DE USO</a></li>
            </ul>
          </div>
        </div>
      </div>
  </footer>
  <div class="cop">
    <p>© Copyright 2021 Flora Urbana - Todos os direitos reservados</p>
  </div>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
