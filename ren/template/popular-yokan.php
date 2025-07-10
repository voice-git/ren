      <!-- 人気羊羹ここから -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/subtitle-1.png" alt="人気羊羹" class="product__subtitle">

      <div class="product__swiper">
      	<?php if (get_post_status(203) === 'publish') : ?>
        <a href="<?php the_permalink('203'); ?>" class="popular__inner w235">
          <img src="<?php echo get_template_directory_uri(); ?>/img/popular01.png" alt="" class="product__item">
          <p class="product__text">夜の梅 五色5本入</p>
          <p class="quantity">5本入<!--  / 6本入 --></p>
        </a>
        <?php endif; ?>
      	<?php if (get_post_status(337) === 'publish') : ?>
  	    <a href="<?php the_permalink('337'); ?>" class="popular__inner w235">
  	      <img
  	        src="<?php echo get_template_directory_uri(); ?>/img/_ume6.png"
  	        alt="" class="product__item">
  	        <p class="product__text">夜の梅</p>
  	        <p class="quantity">お好きな本数をご指定いただけます</p>
  	    </a>
        <?php endif; ?>
      	<?php if (get_post_status(982) === 'publish') : ?>
  	    <a href="<?php the_permalink('982'); ?>" class="popular__inner w235">
  	      <img
  	        src="<?php echo get_template_directory_uri(); ?>/img/popular03.png"
  	        alt="" class="popular__img">
  	      <p class="product__text">二〇〇年羊羹<br>三色つめ合わせ</p>
  	      <p class="quantity">5本入</p>
  	    </a>
        <?php endif; ?>
<!--
        <a href="<?php the_permalink('1022'); ?>" class="product__swiper--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/popular05.jpg" alt="" class="product__item">
          <p class="product__text">栗羊羹</p>
          <p class="quantity">5本入 / 8本入</p>
        </a>
-->
<!--
        <a href="<?php the_permalink('183'); ?>" class="product__swiper--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/popular02.png" alt="" class="product__item">
          <p class="product__text">夜の梅つめ合わせ</p>
          <p class="quantity">2本入 / 3本入 / 5本入 / 7本入</p>
        </a>
-->
<!--
	    <a href="<?php the_permalink('705'); ?>" class="popular__inner">
	      <img
	        src="<?php echo get_template_directory_uri(); ?>/img/popular04.png"
	        alt="" class="popular__img">
	      <p class="popular__text">福梅つめ合わせ</p>
	      <p class="quantity">6個入 / 8個入 / 12個入 / 16個入</p>
	    </a>
-->
<!--
        <a href="<?php the_permalink('215'); ?>" class="product__swiper--inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/popular03.png" alt="" class="product__item">
          <p class="product__text">太鼓の胴つめ合わせ</p>
          <p class="quantity">3色5本入</p>
        </a>
-->
      </div>
		
      <a href="/list" class="popular__list--btn">
        <div class="popular__list--button">全ての羊羹を見る</div>
      </a>
      
      <section class="swiper-container-1">
        <img src="<?php echo get_template_directory_uri(); ?>/img/subtitle-1.png" alt="人気羊羹" class="popular__title">

        <div class="swiper-wrapper">
        	<?php if (get_post_status(203) === 'publish') : ?>
          <a href="<?php the_permalink('203'); ?>" class="swiper-slide product__slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/popular01.png" alt="" class="product__item">
            <p class="product__text">夜の梅 五色5本入</p>
            <p class="quantity">5本入<!--  / 6本入 --></p>
          </a>
          <?php endif; ?>
        	<?php if (get_post_status(183) === 'publish') : ?>
          <a href="<?php the_permalink('183'); ?>" class="swiper-slide product__slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/popular02.png" alt="" class="product__item">
            <p class="product__text">夜の梅つめ合わせ</p>
            <p class="quantity">2本入 / 3本入 / 5本入 / 7本入</p>
          </a>
          <?php endif; ?>
        	<?php if (get_post_status(982) === 'publish') : ?>
  	      <a href="<?php the_permalink('982'); ?>" class="swiper-slide product__slide">
  	        <img src="<?php echo get_template_directory_uri(); ?>/img/popular03.png" alt="" class="product__item">
  	        <p class="product__text">二〇〇年羊羹 三色つめ合わせ</p>
  	        <p class="quantity">5本入</p>
  	      </a>
          <?php endif; ?>
<!--
          <a href="<?php the_permalink('1022'); ?>" class="swiper-slide product__slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/popular05.jpg" alt="" class="product__item">
            <p class="product__text">栗羊羹</p>
            <p class="quantity">5本入 / 8本入</p>
          </a>
-->
<!--
	      <a href="<?php the_permalink('705'); ?>" class="swiper-slide popular__slide-1">
	        <img
	        src="<?php echo get_template_directory_uri(); ?>/img/popular04.png"
	        alt="" class="popular__img">
	        <p class="popular__text">福梅つめ合わせ</p>
	        <p class="quantity">6個入 / 8個入 / 12個入 / 16個入</p>
	      </a>
-->
<!--
          <a href="<?php the_permalink('215'); ?>" class="swiper-slide product__slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/popular03.png" alt="" class="product__item">
            <p class="product__text">太鼓の胴<br>羊羹三色つめ合わせ</p>
            <p class="quantity">5本入</p>
          </a>
-->
        </div>

        <div class="swiper-pagination-1"></div>
        <a href="/list" class="popular__btn">
          <div class="popular__button">全ての羊羹を見る</div>
        </a>
      </section>
      <!-- 人気羊羹ここまで -->