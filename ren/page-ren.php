<?php get_header(); ?>

    <div class="product">
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
      <div class="product__outer">
        <img src="<?php echo get_template_directory_uri(); ?>/img/th__RPT5879.jpg" alt="" class="product__img">
        <p class="product__sp--text">
          職人が技を磨き抜いてきた、煉羊羹。<br>
          小豆の風味をしっかりと残しながらも、<br>
          後味爽やかな甘味が特徴の、上品な味わい。
        </p>
        <div class="product__inner">
          <p class="product__pc--text">
            職人が技を磨き抜いてきた、煉羊羹。<br>
            小豆の風味をしっかりと残しながらも、<br>
            後味爽やかな甘味が特徴の、上品な味わい。
          </p>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/product-text.png" alt="" class="product__img--text"> -->
          <p class="product__english">
            For 200 years, Our chefs have been refining and improving skills to <br class="product__pc">make better Neri-Yokan. The flavor of red beans itself still remains.<br>Enjoy a refreshing and sweet aftertaste and feel the Neri-Yokan.
          </p>
        </div>
      </div>
      <div class="product__outer--bottom">
        <p class="product__pc--text">
          「餡」は厳選された北海道産の高級小豆。<br>
          添加物は一切使わず、創業以来二〇〇年間<br>
          代々家伝の製法を受け継いだ当店自慢の羊羹です。
        </p>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/product-text@2x.png" alt="" class="product__img--text-bottom"> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/th__RPT3645.jpg" alt="" class="product__img--bottom">
        <p class="product__sp--text">
          「餡」は厳選された北海道産の高級小豆。<br>
          添加物は一切使わず、創業以来二〇〇年間<br>
          代々家伝の製法を受け継いだ当店自慢の羊羹です。
        </p>
        <div class="product__inner--bottom">
          <p class="product__english--bottom">
            "Ann" is exclusive selected red beans from Hokkaido. <br class="product__pc">Without any additives, We keep using the same process as when our <br class="product__pc">shop was opened 200 years ago. This is one of our masterpieces.
          </p>
        </div>
      </div>
      <div class="product__unit">
	  	<?php if (get_post_status(244) === 'publish') : ?>
        <a href="<?php the_permalink('244'); ?>" class="product__unit--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/_neri6.png" alt="" class="product__item">
          <p class="product__text">煉羊羹</p>
          <p class="quantity">お好きな本数をご指定いただけます</p>
        </a>
        <?php endif; ?>
	  	<?php if (get_post_status(203) === 'publish') : ?>
        <a href="<?php the_permalink('203'); ?>" class="product__unit--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/popular01.png" alt="" class="product__item">
          <p class="product__text">夜の梅 五色5本入</p>
          <p class="quantity">5本入<!--  / 6本入 --></p>
        </a>
        <?php endif; ?>
	  	<?php if (get_post_status(249) === 'publish') : ?>
        <a href="<?php the_permalink('249'); ?>" class="product__unit--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/yokan-set.png" alt="" class="product__item">
          <p class="product__text">羊羹三色つめ合わせ<br>（桜セット）</p>
          <p class="quantity">5本入 / 6本入</p>
        </a>
        <?php endif; ?>
<!--
        <a href="<?php the_permalink('429'); ?>" class="product__unit--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/yokan-set02.png" alt="" class="product__item">
          <p class="product__text">煉羊羹つめ合わせ</p>
          <p class="quantity">3本入 / 5本入 / 6本入<br>8本入 / 10本入</p>
        </a>
-->
	  	<?php if (get_post_status(983) === 'publish') : ?>
        <a href="<?php the_permalink('983'); ?>" class="product__unit--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/yokan-set03.png" alt="" class="product__item">
          <p class="product__text">二〇〇年羊羹 煉羊羹つめ合わせ</p>
          <p class="quantity">5本入 / 10本入</p>
        </a>
        <?php endif; ?>
	  	<?php if (get_post_status(982) === 'publish') : ?>
        <a href="<?php the_permalink('982'); ?>" class="product__unit--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/yokan-set04.png" alt="" class="product__item">
          <p class="product__text">二〇〇年羊羹 三色つめ合わせ</p>
          <p class="quantity">5本入</p>
        </a>
        <?php endif; ?>
      </div>

      <?php get_template_part('template/popular-yokan'); ?>

	  <?php get_template_part('template/product-yokan'); ?>
    </section>
  
    <?php get_footer(); ?>