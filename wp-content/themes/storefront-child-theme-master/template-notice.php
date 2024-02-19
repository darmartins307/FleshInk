<div class="section-dicas">
  <div class="container">
    <div class="title-section">
      DICAS
    </div>
    <div class="list-dicas">

      <?php
      $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,

      );

      $post_query = new WP_Query($args);

      if($post_query->have_posts() ) {
          while($post_query->have_posts() ) { $post_query->the_post(); ?>
            <div class="card-dicas">
              <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
              <div class="thumb-dicas" style="background-image: url('<?php echo $featured_img_url ?>"></div>
              <div class="title-dicas">
                <?php the_title(); ?>
              </div>
              <div class="desc">
                <?php $content = nl2br(get_the_content()); ?>
                <p><?php echo(wp_strip_all_tags(substr($content, 0, 260))); ?> ... </p>
              </div>
              <div class="btn-dica"> <a href="<?php the_permalink(); ?>">VER MAIS</a></div>
            </div>
            <?php
            }
        }
    ?>

    </div>
  </div>
</div>
