<?php get_header(); ?>

<div class="product-shiro">
  <a href="/"><img
      src="<?php echo get_template_directory_uri(); ?>/img/ren.png"
      alt="" class="product__logo"></a>
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
  <div class="product__outer">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/_RPT0260.jpg"
      alt="" class="product__img">
    <p class="product__sp--text">
      老舗羊羹屋だからこそできる<br>
      他所ではなかなかお目にかかれない<br>
      美しい白羊羮。
    </p>
    <div class="product__inner">
      <p class="product__pc--text">
        老舗羊羹屋だからこそできる<br>
        他所ではなかなかお目にかかれない<br>
        美しい白羊羮。
      </p>
      <!-- <img
        src="<?php echo get_template_directory_uri(); ?>/img/shiro-text01.png"
        alt="" class="product__img--text"> -->
      <p class="product__english">
        One of masterpieces of a long established wagashi-shop<br>
        Which you can hardly see in other places.<br>
        The beautiful and white Yokan.
      </p>
    </div>
  </div>
  <div class="product__outer--bottom">
    <p class="product__pc--text">
      上質な白双糖と<br>
      国産の最高級糸寒天を使用し<br>
      シンプルな材料のみで作りました。
    </p>
    <!-- <img
      src="<?php echo get_template_directory_uri(); ?>/img/shiro-text02.png"
      alt="" class="product__img--text-bottom"> -->
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/_RPT3347.jpg"
      alt="" class="product__img--bottom">
    <p class="product__sp--text">
      上質な白双糖と<br>
      国産の最高級糸寒天を使用し<br>
      シンプルな材料のみで作りました。
    </p>
    <div class="product__inner--bottom">
      <p class="product__english--bottom">
        Fine white coarse sugar and exclusive Japanese shredded ager.<br>
        That’s the recipe. Less ingredients and better taste. We try to focus<br>
        on the taste of ingredients themselves.
      </p>
    </div>
  </div>
  <div class="product__unit">
	<?php if (get_post_status(368) === 'publish') : ?>
    <a href="<?php the_permalink('368'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/_shiro6.png"
        alt="" class="product__item">
        <p class="product__text">白羊羹</p>
        <p class="quantity">お好きな本数をご指定いただけます</p>
    </a>
    <?php endif; ?>
	<?php if (get_post_status(203) === 'publish') : ?>
    <a href="<?php the_permalink('203'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/popular01.png"
        alt="" class="product__item">
        <p class="product__text">夜の梅 五色5本入</p>
        <p class="quantity">5本入<!--  / 6本入 --></p>
    </a>
    <?php endif; ?>
	<?php if (get_post_status(249) === 'publish') : ?>
    <a href="<?php the_permalink('249'); ?>" class="product__unit--inner"><img
        src="<?php echo get_template_directory_uri(); ?>/img/yokan-set.png"
        alt="" class="product__item">
        <p class="product__text">羊羹三色つめ合わせ<br>（桜セット）</p>
        <p class="quantity">5本入 / 6本入</p>
    </a>
    <?php endif; ?>
	<?php if (get_post_status(982) === 'publish') : ?>
    <a href="<?php the_permalink('982'); ?>" class="product__unit--inner"><img
        src="<?php echo get_template_directory_uri(); ?>/img/yokan-set04.png"
        alt="" class="product__item">
        <p class="product__text">二〇〇年羊羹 三色つめ合わせ</p>
        <p class="quantity">5本入</p>
    </a>
    <?php endif; ?>
  </div>

  <?php get_template_part('template/popular-yokan'); ?>

  <?php get_template_part('template/product-yokan'); ?>
</section>

<?php get_footer();
