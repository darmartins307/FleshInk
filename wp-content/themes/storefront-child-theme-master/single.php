



<?php woocommerce_breadcrumb(); ?>



<div class="section-single-notice">

  <div class="container">

    <h2><?php the_title(); ?></h2>

      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

      <div class="thumb-single" style="background-image: url('<?php echo $featured_img_url ?>"></div>

      <div class="desc">

        <p><?php the_content(); ?> </p>

      </div>

  </div>

</div>



<?php get_footer(); ?>

