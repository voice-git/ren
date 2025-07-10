<?php get_header(); ?>

<!--
<div class="popup_wrap">
    <div class="index_popup">
	    <div class="popup_close"></div>
        <div class="popup_inner">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/popup/popup_sp.png?0922">
				<img class="popup_img" src="<?php echo get_template_directory_uri(); ?>/img/popup/popup_pc.png?0922" width="900" height="600" alt="12月1日、れんの羊羹は生まれ変わります。　山代温泉の皆さまと生きてきた二◯◯年に感謝を込めてご購入いただいた方に先着で「二〇〇年羊羹」をご用意しております。おたのしみに。　※ 店舗改装中は、温泉通り側の一角にて通常通り商品を販売しております。">
			</picture>
        </div>
    </div>
</div>
-->

<div class="hero">

<div class="swiper-container-0">
  <div class="swiper-wrapper top__flex">
    <div class="swiper-slide">
      <section class="top">
      </section>
    </div>
    <div class="swiper-slide">
      <section class="top02">
      </section>
    </div>
    <div class="swiper-slide">
      <section class="top03">
      </section>
    </div>
    <div class="swiper-slide">
      <section class="top04">
      </section>
    </div>
    <div class="swiper-slide">
      <section class="top05">
      </section>
    </div>
    <div class="swiper-slide">
      <section class="top06">
      </section>
    </div>
  </div>
</div>
<div class="hero-header">
  <div class="top__head">
    <div class="top__head--box">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/ren.png"
        alt="" class="top__logo">
      <p class="top__logo--text">Ren Eishodo / Ren no Yokan<br>
        Yamashiro Onsen, Kaga, Ishikawa.<br>
        Est.1819
      </p>
    </div>
    <div class="hamburger">
      <button class="hamburger-btn">
        <span class="hamburger-btn__bar">
          <span class="hamburger-btn__bar--top bar"></span>
          <span class="hamburger-btn__bar--middle bar"></span>
          <span class="hamburger-btn__bar--bottom bar"></span>
        </span>
      </button>
      <a href="https://yorunoume.shop-pro.jp/cart/" class="hamburger__shop"></a>
    </div>
  </div>
  <?php
  $args = array(
    'posts_per_page' => 1 // 表示件数の指定
  );
  $posts = get_posts($args);
  foreach ($posts as $post) :
    setup_postdata($post); // 記事データの取得
  ?>
  <a href="<?php the_permalink(); ?>" class="top__news">
    <p class="top__news--title">お知らせ</p>
    <p class="top__news--date"><?php the_time('Y.m.d'); ?>
    </p>
    <p class="top__news--text"><?php the_title(); ?>
    </p>
  </a>
  <?php
  endforeach;
  wp_reset_postdata();
  ?>
</div>
</div>


<section class="history">
  <div class="history__outer">
    <p class="history-text">羊羹は、加賀大聖寺藩十万石の前田家にも愛され、<br>
        御用菓子商を代々にわたって賜った。<br>
        煉り固める意味の「煉」に、<br>
        頂点を目指すという「王」の字を加えて<br>
        「瑓（れん）」と書く。<br>
        その名は、前田家より授かったものである。<br>
        以来「加賀銘菓 れんの羊羹」は、<br>
        二〇〇年の歳月を超える。<br>
        旅人の美味は代々の子孫によって受け継がれ、<br>
        いまなお多くの人々に親しまれている。<br>&nbsp;</p>
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/text-left.png"
      alt="" class="history__left" data-aos="fade-in" data-aos-offset="-300" data-aos-delay="800"
      data-aos-duration="2000">
    <div class="box">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/title.png"
        alt="" class="history__center">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/ren-logo-2.png"
        alt="" class="history__center--sp">
      <a href="/about">れんの羊羹</a>
    </div>
    <p class="history-text">時は二〇〇年前。<br>
        旅に疲れた旅人が泊まる宿もなく困っていた。<br>
        あわれに思った男は、旅人を一晩泊めてやった。<br>
        旅人は、宿を与えてくれた御礼に、<br>
        男に羊羹のつくり方を教えた。<br>
        男はあまりの美味しさに心を躍らせ、<br>
        羊羹づくりの習得にいそしんだ。<br>
        男が学んだ製法技術は代々子孫に受け継がれ、<br>
        初代 菓子屋源五郎が「れん永昌堂」の暖簾を掲げた。<br>
        創業の地は山代温泉の湯の曲輪。<br>
        山代の、今も昔も中心をなす総湯前に店を構えた。</p>
    <img src="<?php echo get_template_directory_uri(); ?>/img/text-right.png"
        alt="" class="history__right">
  </div>
</section>

<section class="bnr_area">
	<a href="/gift">
		<picture>
			<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img_gift/banner_gift_sp.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img_gift/banner_gift.jpg" width="992" height="280" alt="">
		</picture>
	</a>
</section>
<!--
<section class="bnr_area">
	<a href="<?php the_permalink('705'); ?>">
		<img class="imgtext" src="<?php echo get_template_directory_uri(); ?>/img/bnr_fukuume_text.png" width="992" height="280" alt="期間限定 新しい年に、甘いしあわせ、謹賀最中。">
		<picture>
			<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/bnr_fukuume_sp.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/bnr_fukuume_back.jpg" width="992" height="280" alt="">
		</picture>
	</a>
</section>
-->

<section class="popular">
  <img
    src="<?php echo get_template_directory_uri(); ?>/img/subtitle-1.png"
    alt="" class="popular__title">
  <div class="popular__outer">
    <a href="<?php the_permalink('203'); ?>" class="popular__inner w235">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/popular01.png"
        alt="" class="popular__img">
      <p class="product__text">夜の梅 五色5本入</p>
      <p class="quantity">5本入<!--  / 6本入 --></p>
    </a>
    <a href="<?php the_permalink('337'); ?>" class="popular__inner w235">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/_ume6.png"
        alt="" class="popular__img">
        <p class="product__text">夜の梅</p>
        <p class="quantity">お好きな本数をご指定いただけます</p>
    </a>
    <a href="<?php the_permalink('982'); ?>" class="popular__inner w235">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/popular03.png"
        alt="" class="popular__img">
      <p class="product__text">二〇〇年羊羹<br>三色つめ合わせ</p>
      <p class="quantity">5本入</p>
    </a>
<!--
    <a href="<?php the_permalink('183'); ?>" class="popular__inner">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/popular02.png"
        alt="" class="popular__img">
      <p class="popular__text">夜の梅つめ合わせ</p>
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
    <a href="<?php the_permalink('1022'); ?>" class="product__swiper--inner">
      <img src="<?php echo get_template_directory_uri(); ?>/img/popular05.jpg" alt="" class="product__item">
      <p class="product__text">栗羊羹</p>
      <p class="quantity">5本入 / 8本入</p>
    </a>
-->
  </div>
  <a href="/list" class="popular__btn">
    <div class="popular__button">全ての羊羹を見る</div>
  </a>
</section>

<section class="swiper-container-1">
  <img
    src="<?php echo get_template_directory_uri(); ?>/img/subtitle-1.png"
    alt="" class="popular__title">
  <div class="swiper-wrapper">
    <a href="<?php the_permalink('203'); ?>" class="swiper-slide popular__slide-1">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/popular01.png"
        alt="" class="popular__img">
      <p class="popular__text">夜の梅 五色5本入</p>
      <p class="quantity">5本入<!--  / 6本入 --></p>
    </a>
    <a href="<?php the_permalink('183'); ?>" class="swiper-slide popular__slide-1">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/popular02.png"
        alt="" class="popular__img">
      <p class="popular__text">夜の梅つめ合わせ</p>
      <p class="quantity">2本入 / 3本入 / 5本入 / 7本入</p>
    </a>
<!--
    <a href="<?php the_permalink('705'); ?>" class="swiper-slide popular__slide-1">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/popular04.png"
        alt="" class="popular__img">
      <p class="popular__text">福梅つめ合わせ</p>
      <p class="quantity">6個入 / 8個入 / 12個入 / 16個入</p>
    </a>
-->
    <a href="<?php the_permalink('982'); ?>" class="swiper-slide popular__slide-1">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/popular03.png"
        alt="" class="popular__img">
      <p class="popular__text">二〇〇年羊羹 三色つめ合わせ</p>
      <p class="quantity">5本入</p>
    </a>
<!--
    <a href="<?php the_permalink('1022'); ?>" class="swiper-slide popular__slide-1">
      <img src="<?php echo get_template_directory_uri(); ?>/img/popular05.jpg" alt="" class="popular__img">
      <p class="popular__text">栗羊羹</p>
      <p class="quantity">5本入 / 8本入</p>
    </a>
-->
  </div>
  <div class="swiper-pagination-1"></div>
  <a href="/list" class="popular__btn">
    <div class="popular__button">全ての羊羹を見る</div>
  </a>
</section>

<section class="yokan">
  <img
    src="<?php echo get_template_directory_uri(); ?>/img/subtitle-2.png"
    alt="" class="yokan__title">
  <div class="yokan__outer">
    <a href="/goods/栗羊羹" class="yokan__img kuri">
      <div class="yokan__img-bg bg-low">
        <p class="yokan__img-text">栗羊羹</p>
        <p class="yokan__img-sub-text">KURI</p>
<!--         <p class="yokan__img-text--other">COMING SOON…</p> -->
      </div>
    </a>
    <a href="/ren" class="yokan__img ren">
      <div class="yokan__img-bg">
        <p class="yokan__img-text">煉羊羹</p>
        <p class="yokan__img-sub-text">NERI</p>
      </div>
    </a>
    <a href="/kurumi" class="yokan__img kurumi">
      <div class="yokan__img-bg">
        <p class="yokan__img-text">くるみ羊羹</p>
        <p class="yokan__img-sub-text">KURUMI</p>
      </div>
    </a>
    <a href="/shiro" class="yokan__img shiro">
      <div class="yokan__img-bg">
        <p class="yokan__img-text">白羊羹</p>
        <p class="yokan__img-sub-text">SHIRO</p>
      </div>
    </a>
    <a href="/hagi" class="yokan__img hagi">
      <div class="yokan__img-bg">
        <p class="yokan__img-text">萩羊羹</p>
        <p class="yokan__img-sub-text">HAGI</p>
      </div>
    </a>
    <a href="/ume" class="yokan__img yorunoume">
      <div class="yokan__img-bg">
        <p class="yokan__img-text">夜の梅</p>
        <p class="yokan__img-sub-text">YORU NO UME</p>
      </div>
    </a>
    <a href="/matcha" class="yokan__img matcha">
      <div class="yokan__img-bg">
        <p class="yokan__img-text">抹茶羊羹</p>
        <p class="yokan__img-sub-text">MATCHA</p>
      </div>
    </a>
    <a href="/other" class="yokan__img monaka">
      <div class="yokan__img-bg">
        <p class="yokan__img-text">もなか</p>
        <p class="yokan__img-sub-text">MONAKA</p>
      </div>
    </a>
  </div>
</section>

<section class="shop" id="shop">
  <img
    src="<?php echo get_template_directory_uri(); ?>/img/subtitle-3.png"
    alt="" class="shop__title">
  <img
    src="<?php echo get_template_directory_uri(); ?>/img/_RPT3796_.jpg"
    alt="" class="shop__img">
  <div class="shop__outer">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ren-map.jpg" class="map__img" alt="店舗所在地">
    <div class="shop__inner">
      <p class="shop__info">江戸時代の温泉場が色濃く残る、<br class="shop__sp">
        加賀の観光名所「山代温泉」の<br class="shop__sp">総湯前にございます。<br><br>
        瑓永昌堂
        〒922-0242<br>
        石川県加賀市山代温泉18-60-8<a href="https://goo.gl/maps/t8AfZh95u6uLbVQr5" class="shop__map">map</a><br>
        TEL: 0761-76-1480<br>
        営業時間：8:00〜18:00
      </p>
    </div>
  </div>
</section>

<section class="time-line">
  <img
    src="<?php echo get_template_directory_uri(); ?>/img/subtitle-4.png"
    alt="" class="time-line__title">
  <div class="time-line__outer">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-1@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-2@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-3@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-4@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-5@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-6@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-7@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-8@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-9@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-10@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-11@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-12@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-13@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-14@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-15@2x.png"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-16@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-17@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-18@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-19@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/item-20@2x.jpg"
      alt="" class="time-line__img" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
    <span class="time-line__black" data-aos="fade-in" data-aos-offset="-500" data-aos-delay="200"
      data-aos-duration="2000">
      THE <br>
      200 YEARS <br>
      YOKAN
    </span>
  </div>
</section>

<section class="page-top">
  <a href="#" class="page-top__outer">PAGE TOP <span class="page-top__arrow"></span></a>
</section>

<?php get_footer();
