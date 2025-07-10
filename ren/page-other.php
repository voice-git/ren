<?php get_header(); ?>

    <div class="product-other">
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
    <section class="product__top">
      <div class="product__outer--other">
        <div class="product__unit">
		  <?php if (get_post_status(237) === 'publish') : ?>
          <a href="<?php the_permalink('237'); ?>" class="product__unit--inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/monaka-set.png" alt="" class="product__item">
            <p class="product__text">梅もなかつめ合わせ</p>
            <p class="quantity">6個入 / 8個入<br>12個入 / 16個入</p>
          </a>
	      <?php endif; ?>
<!--
          <a href="<?php the_permalink('705'); ?>" class="product__unit--inner">
            <img src="https://www.yorunoume.com/wp-content/uploads/2021/12/inner_12.png" alt="" class="product__item">
            <p class="product__text">福梅つめ合わせ</p>
            <p class="quantity">6個入 / 8個入<br>12個入 / 16個入</p>
          </a>
-->
        </div>
      </div>

  <?php get_template_part('template/popular-yokan'); ?>

  <?php get_template_part('template/product-yokan'); ?>
    </section>
  
    <?php get_footer(); ?>