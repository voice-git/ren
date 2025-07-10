<?php get_header(); ?>

<div class="product-ume">
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
      src="<?php echo get_template_directory_uri(); ?>/img/_RPT0250.jpg"
      alt="" class="product__img">
    <p class="product__sp--text">
      北海道産の大粒の小豆を炊き込んで散らし<br>
      「夜の梅」の名のごとく、その切り口を<br>
      夜の闇に咲く梅の花に見立てました。
    </p>
    <div class="product__inner">
      <p class="product__pc--text">
        北海道産の大粒の小豆を炊き込んで散らし<br>
        「夜の梅」の名のごとく、その切り口を<br>
        夜の闇に咲く梅の花に見立てました。
      </p>
      <!-- <img
        src="<?php echo get_template_directory_uri(); ?>/img/yorunoume-text01.png"
        alt="" class="product__img--text"> -->
      <p class="product__english">
        Mixing large steamed red beans from Hokkaido. <br>
        The name of this item is “a plum at night” directly comes from the <br>
        appearance of cross-section which looks like a blooming plum in <br>
        the dark of night.
      </p>
    </div>
  </div>
  <div class="product__outer--bottom01">
    <p class="product__pc--text">
      当店自慢の煉羊羹の中に、<br>
      蜜漬けした大納言を吹き込んだ<br>
      上品で美しい羊羹です。
    </p>
    <!-- <img
      src="<?php echo get_template_directory_uri(); ?>/img/yorunoume-text02.png"
      alt="" class="product__img--text-bottom"> -->
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/_RPT3351.jpg"
      alt="" class="product__img--bottom01">
    <p class="product__sp--text">
      当店自慢の煉羊羹の中に、<br>
      蜜漬けした大納言を吹き込んだ<br>
      上品で美しい羊羹です。
    </p>
    <div class="product__inner--bottom">
      <p class="product__english--bottom01">
        Soaked red beans with syrup in our signature Neri-Yokan. <br>
        Elegant taste and beautiful look.
      </p>
    </div>
  </div>
  <div class="product__unit">
	<?php if (get_post_status(337) === 'publish') : ?>
    <a href="<?php the_permalink('337'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/_ume6.png"
        alt="" class="product__item">
        <p class="product__text">夜の梅</p>
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
    <a href="<?php the_permalink('183'); ?>" class="product__unit--inner"><img
        src="<?php echo get_template_directory_uri(); ?>/img/popular02.png"
        alt="" class="product__item">
        <p class="product__text">夜の梅つめ合わせ</p>
        <p class="quantity">2本入 / 3本入<br>5本入 / 7本入</p>
      </a>
-->
  </div>

  <?php get_template_part('template/popular-yokan'); ?>

  <?php get_template_part('template/product-yokan'); ?>
</section>

<?php get_footer();
