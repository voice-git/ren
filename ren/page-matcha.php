<?php get_header(); ?>

<div class="product-matcha">
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
      src="<?php echo get_template_directory_uri(); ?>/img/_RPT0254.jpg"
      alt="" class="product__img">
    <p class="product__sp--text">
      当店こだわりの白羊羹に<br>
      香り高い抹茶を混ぜ合わせた、<br>
      日本情緒あふれる抹茶羊羹。
    </p>
    <div class="product__inner">
      <p class="product__pc--text">
      当店こだわりの白羊羹に<br>
      香り高い抹茶を混ぜ合わせた、<br>
      日本情緒あふれる抹茶羊羹。
    </p>
      <!-- <img
        src="<?php echo get_template_directory_uri(); ?>/img/matcha-text01.png"
        alt="" class="product__img--text"> -->
      <p class="product__english01">
        Mixing classic matcha into our signature Shiro-Yokan.<br>
        The collaboration of Matcha and Yokan, The taste of Japan.
      </p>
    </div>
  </div>
  <div class="product__outer--bottom">
    <p class="product__pc--text">
      抹茶の風味と香りをしっかりと残すために<br>
      贅沢にたっぷりと抹茶を使用し、<br>
      芳醇で濃厚な口当たりに仕上げました。
    </p>
    <!-- <img
      src="<?php echo get_template_directory_uri(); ?>/img/matcha-text02.png"
      alt="" class="product__img--text-bottom"> -->
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/th__RPT348.jpg"
      alt="" class="product__img--bottom">
    <p class="product__sp--text">
      抹茶の風味と香りをしっかりと残すために<br>
      贅沢にたっぷりと抹茶を使用し、<br>
      芳醇で濃厚な口当たりに仕上げました。
    </p>
    <div class="product__inner--bottom">
      <p class="product__english--bottom">
        Using plenty of Matcha so it remains the flavor and scent after<br>
        blending. Rich and Smooth taste will amaze you.
      </p>
    </div>
  </div>
  <div class="product__unit">
	<?php if (get_post_status(367) === 'publish') : ?>
    <a href="<?php the_permalink('367'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/_maccya6.png"
        alt="" class="product__item">
        <p class="product__text">抹茶羊羹</p>
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
    <a href="<?php the_permalink('249'); ?>" class="product__unit--inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/yokan-set.png"
        alt="" class="product__item">
        <p class="product__text">羊羹三色つめ合わせ<br>（桜セット）</p>
        <p class="quantity">5本入 / 6本入</p>
    </a>
    <?php endif; ?>
	<?php if (get_post_status(982) === 'publish') : ?>
    <a href="<?php the_permalink('982'); ?>" class="product__unit--inner">
      <img
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
