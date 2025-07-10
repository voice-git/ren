<?php get_header(); ?>

<div class="product-kurumi">
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
      src="<?php echo get_template_directory_uri(); ?>/img/_RPT5921.jpg"
      alt="" class="product__img01">
    <p class="product__sp--text">
      職人が厳選したくるみを<br>
      煉羊羮にたっぷりと散りばめた<br>
      贅沢な一品。
    </p>
    <div class="product__inner">
      <p class="product__pc--text">
        職人が厳選したくるみを<br>
        煉羊羮にたっぷりと散りばめた<br>
        贅沢な一品。
      </p>
      <!-- <img
        src="<?php echo get_template_directory_uri(); ?>/img/kurumi-text01.png"
        alt="" class="product__img--text"> -->
      <p class="product__english">
        Gorgeous one with carefully selected walnuts by our chef.<br>
        mixing a lot of those walnuts into Neri-Yokan.
      </p>
    </div>
  </div>
  <div class="product__outer--bottom">
    <p class="product__pc--text">
      当店自慢の煉羊羹と<br>
      香ばしいくるみが合わさった<br>
      愉しい歯応えが特徴です。
    </p>
    <!-- <img
      src="<?php echo get_template_directory_uri(); ?>/img/kurumi-text02.png"
      alt="" class="product__img--text-bottom"> -->
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/_RPT3741.jpg"
      alt="" class="product__img--bottom">
    <p class="product__sp--text">
      当店自慢の煉羊羹と<br>
      香ばしいくるみが合わさった<br>
      愉しい歯応えが特徴です。
    </p>
    <div class="product__inner--bottom">
      <p class="product__english--bottom">
        Enjoy the curious texture of <br>
        our signature Neri-Yokan and roasted walnuts.<br>
        The crispness is in the jelly-like texuture of Neri-Yokan.
      </p>
    </div>
  </div>
  <div class="product__unit">
	<?php if (get_post_status(365) === 'publish') : ?>
    <a href="<?php the_permalink('365'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/_kurumi6.png"
        alt="" class="product__item">
      <p class="product__text">くるみ羊羹</p>
      <p class="quantity">お好きな本数をご指定いただけます</p>
    </a>
    <?php endif; ?>
	<?php if (get_post_status(223) === 'publish') : ?>
    <a href="<?php the_permalink('223'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/_RPT0101.png"
        alt="" class="product__item">
      <p class="product__text">二〇〇年羊羹つめ合わせ<br>（くるみ羊羹）</p>
      <p class="quantity">5本入 / 6本入 / 12本入</p>
    </a>
    <?php endif; ?>
  </div>

  <?php get_template_part('template/popular-yokan'); ?>

  <?php get_template_part('template/product-yokan'); ?>
</section>

<?php get_footer();
