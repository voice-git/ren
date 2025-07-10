<?php get_header(); ?>

<div class="product-hagi">
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
      src="<?php echo get_template_directory_uri(); ?>/img/_RPT5753.jpg"
      alt="" class="product__img">
    <p class="product__sp--text">
      萩羊羹とは、大納言を萩の花に見立てて、<br>
      白羊羹に蜜つけ大納言を散らした羊羹のこと。<br>
      昔からお客様の中では<br>
      萩羊羹が一番美味しい、と言う声も頂きます。
    </p>
    <div class="product__inner">
      <p class="product__pc--text">
        萩羊羹とは、大納言を萩の花に見立てて、<br>
        白羊羹に蜜つけ大納言を散らした羊羹のこと。<br>
        昔からお客様の中では<br>
        萩羊羹が一番美味しい、と言う声も頂きます。
      </p>
      <!-- <img
        src="<?php echo get_template_directory_uri(); ?>/img/hagi-text01.png"
        alt="" class="product__img--text01"> -->
      <p class="product__english">
        The origin of Hagi Yokan comes from bush flowers. People used red <br>
        beans and mix them into Shiro-Yokan(white) to express bush flowers. <br>
        Among our customers, this sweet is one of the most popular.
      </p>
    </div>
  </div>
  <div class="product__outer--bottom01">
    <p class="product__pc--text">
      当店自慢の白羊羹と黒い大納言の<br>
      コントラストが美しい萩羊羹<br>
      全国でもなかなか出会うことができない<br>
      当店オリジナルの羊羹です。
    </p>
    <!-- <img
      src="<?php echo get_template_directory_uri(); ?>/img/hagi-text02.png"
      alt="" class="product__img--text-bottom01"> -->
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/RPT5753.jpg"
      alt="" class="product__img--bottom01">
    <p class="product__sp--text">
      当店自慢の白羊羹と黒い大納言の<br>
      コントラストが美しい萩羊羹<br>
      全国でもなかなか出会うことができない<br>
      当店オリジナルの羊羹です。
    </p>
    <div class="product__inner--bottom">
      <p class="product__english--bottom">
        The beautiful contrast of Shiro-Yokan(white) and red beans (black).<br>
        This is our original recipe that is only sold in our shop.
      </p>
    </div>
  </div>
  <div class="product__unit">
	<?php if (get_post_status(364) === 'publish') : ?>
    <a href="<?php the_permalink('364'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/_hagi6.png"
        alt="" class="product__item">
        <p class="product__text">萩羊羹</p>
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
<!--
  	<?php if (get_post_status(337) === 'publish') : ?>
    <a href="<?php the_permalink('337'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/_ume6.png"
        alt="" class="product__item">
        <p class="product__text">夜の梅</p>
        <p class="quantity">お好きな本数をご指定いただけます</p>
    </a>
    <?php endif; ?>
-->
  </div>

  <?php get_template_part('template/popular-yokan'); ?>

  <?php get_template_part('template/product-yokan'); ?>
</section>

<?php get_footer();
