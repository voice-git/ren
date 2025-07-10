<?php get_header(); ?>

    <div class="product-list">
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren.png" alt="" class="product__logo"></a>
      <div class="product-hamburger">
        <button class="product-header-btn">
          <span class="product-header-btn__bar">
            <span class="product-header-btn__bar--top about-bar"></span>
            <span class="product-header-btn__bar--middle about-bar"></span>
            <span class="product-header-btn__bar--bottom about-bar"></span>
          </span>
        </button>
      </div>
    </div>

      <section class="list">
      <img src="<?php echo get_template_directory_uri(); ?>/img/subtitle-2.png" alt="" class="list__title">
      <div class="list__outer">
      <?php $args = [
          'post_type' => 'goods',
          'posts_per_page' => -1,
          'paged' => $paged,
        ];
        
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) :
            $the_query->the_post();
        ?>
        <a href="<?php the_permalink() ?>" class="list__inner">

          <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="list__img">
          <h3 class="list__subtitle"><?php the_field('goods-subTitle') ?></h3>
          <p class="list__text"><?php the_title(); ?></p>
          <p class="quantity"><?php the_field('goods-quantity') ?></p>
        </a>

    <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
      </div>
      <button class="list__button">さらに表示</button>
    </section>

  <script>
    $(function() {
      var text = $('.quntity').text();
      $(this).html(text);
    });
  </script>
    <?php get_footer(); ?>