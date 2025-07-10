<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?20221209">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/dist/zoomslider.css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script-gift.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/dist/jquery.zoomslider.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/dist/modernizr-custom.js"></script>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">

  <title><?php
global $page, $paged;
if (is_front_page()) : //トップページ
    bloginfo('name');
elseif (is_home()) : //ブログページ（ブログサイトの場合はトップページ）
    wp_title('|', true, 'right');
    bloginfo('name');
elseif (is_single()) : //記事ページ
    wp_title('');
elseif (is_page()) : //固定ページ
    wp_title('|', true, 'right');
    bloginfo('name');
elseif (is_author()): //著者ページ
    wp_title('|', true, 'right');
    bloginfo('name');
elseif (is_archive()) : //アーカイブページ（カテゴリーページなど）
    wp_title('|', false, 'right');
    // $cat = get_the_category();
  	// $cat = $cat[0];
  	// echo get_cat_name($cat->term_id);
	echo 'お知らせ一覧｜ 羊羹専門店 れん永昌堂【夜の梅】';
elseif (is_search()) : //検索結果ページ
    wp_title('');
elseif (is_404()): //404ページ
    echo '404|';
    bloginfo('name');
endif;
if ($paged >= 2 || $page >= 2) : //２ページ目以降の場合
    echo '-' . sprintf(
        '%sページ',
        max($paged, $page)
    );
endif;
?></title>
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SH2J6RSF2K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SH2J6RSF2K');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201775836-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-201775836-1');
</script>

<style>
	.cartjs_box .cartjs_product_form select{
		opacity: 1!important;
	}
	.cartjs_box .cartjs_product_input_txt{
		color: #fff!important;
	}
	.details__dummy:after{
		content: "数量";
		position: absolute;
		left: 0;
		bottom: -30px;
	}
	@media screen and (max-width: 768px){
		.details__dummy:after{
			bottom: -80px;
			left: 10px;
		}
	}
	.history{
		background-image: none!important;
	}
	
	.header__about{
		display: none;
	}
	.fv{
		width: 100%;
		height: 100vh;
		background-image: url(<?php echo get_template_directory_uri(); ?>/img_gift/fv.jpg);
		background-position: center center;
		background-size: cover;
	}
	@media screen and (max-width: 768px){
		.fv{
			background-image: url(<?php echo get_template_directory_uri(); ?>/img_gift/fv_sp.jpg);
		}
	}
	.kuri_area,.neri_area,.two_area,.monaka_area{
		width: 100%;
		background-color: #000;
	}
	.kuri_area .topimg,.neri_area .topimg,.two_area .topimg,.monaka_area .topimg{
		width: 100%;
		height: auto;
		display: block;
	}
	.kuri_area .topimg{
		margin-top: 135px;
	}
	.cart_wrap{
		position: relative;
	}
	.cart_wrap >img{
		width: 100%;
		height: auto;
	}
	.cart_wrap_sp{
		display: none;
	}
	@media screen and (max-width: 768px){
		.kuri_area .topimg,.neri_area .topimg,.two_area .topimg,.monaka_area .topimg{
			display: none;
		}
		.cart_wrap{
			display: none;
		}
		.kuri_area{
			padding-top: 94px;
		}
		.neri_area{
			padding-top: 94px;
		}
		.two_area{
			padding-top: 94px;
		}
		.monaka_area{
			padding-top: 94px;
		}
		.cart_wrap_sp{
			display: block;
		}
		.cart_wrap_sp .btn01_sp,.cart_wrap_sp .btn02_sp,.cart_wrap_sp .btn03_sp,.cart_wrap_sp .btn04_sp{
			width: 85%;
			margin: 40px auto 120px;
		}
	}

	.kuri_area .cart_wrap .btn01 {
		position: absolute;
		top: 46vw;
		left: 49vw;
	}
	.kuri_area .cart_wrap .btn02 {
		position: absolute;
		top: 90vw;
		left: 49vw;
	}

	.neri_area .cart_wrap .btn01 {
		position: absolute;
		top: 80vw;
		left: 24.5vw;
	}
	.neri_area .cart_wrap .btn02 {
		position: absolute;
		top: 80vw;
		left: 55vw;
	}
/*
	.neri_area .cart_wrap .btn01 {
		position: absolute;
		top: 80vw;
		left: 9vw;
	}
	.neri_area .cart_wrap .btn02 {
		position: absolute;
		top: 80vw;
		left: 39vw;
	}
	.neri_area .cart_wrap .btn03 {
		position: absolute;
		top: 80vw;
		left: 68vw;
	}
*/

	.two_area .cart_wrap .btn01 {
		position: absolute;
		top: 75vw;
		left: 21vw;
	}
	.two_area .cart_wrap .btn02 {
		position: absolute;
		top: 75vw;
		left: 58vw;
	}

	.monaka_area .cart_wrap .btn01 {
		position: absolute;
		top: 75vw;
		left: 21vw;
	}
	.monaka_area .cart_wrap .btn02 {
		position: absolute;
		top: 75vw;
		left: 58vw;
	}
	.monaka_area .cart_wrap .btn03 {
		position: absolute;
		top: 155vw;
		left: 14vw;
	}
	.monaka_area .cart_wrap .btn04 {
		position: absolute;
		top: 155vw;
		left: 48vw;
	}
	.monaka_area .cart_wrap .btn04.center {
		left: 35vw;
	}
</style>

</head>

<?php if ( is_home() || is_front_page() ) : ?>
<body>
<?php /* リニューアル時のローディング画面、後日使用
  <section class="loading">
	  <div class="loading__outer">
		  <img src="<?php echo get_template_directory_uri(); ?>/img/loading-title.png" alt="" class="loading__img">
		  <p class="loading__subtitle">2021年7月9日 WEBサイト リニューアル</p>
	  </div>
	  <img src="<?php echo get_template_directory_uri(); ?>/img/ren.png" alt="" class="loading__ren">
  </section> */ ?>
	<section class="loading">
		<img src="<?php echo get_template_directory_uri(); ?>/img/loading-title01.png" alt="" class="loading__img01" style="display: none;">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ren.png" alt="" class="loading__ren01" style="display: none;">
  </section>
  <section class="open-hamburger" style="display: none;">
    <div class="open-hamburger__header">
      <div class="open-hamburger__outer">
        <div class="open-hamburger__inner">
          <button class="open-hamburger-btn">
            <span class="open-hamburger-btn__bar">
              <span class="open-hamburger-btn__bar--top about-bar"></span>
              <span class="open-hamburger-btn__bar--middle about-bar"></span>
              <span class="open-hamburger-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="open-hamburger__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </div>
	<ul class="open-hamburger__menu">
		<li><a href="/" class="open-hamburger__list">トップ</a></li>
		<li><a href="/about" class="open-hamburger__list">二○○年羊羹</a></li>
		<li><a href="/list" class="open-hamburger__list">商品一覧</a></li>
		<li><a class="open-hamburger__accordion">各種羊羹<span class="open-hamburger__arrow click__arrow"></span></a>
			<div class="open-hamburger__category none">
			<a href="/goods/栗羊羹/" class="open-hamburger__item">栗羊羹</a>
			<a href="/ren" class="open-hamburger__item">煉羊羹</a>
			<a href="/kurumi" class="open-hamburger__item">くるみ羊羹</a>
			<a href="/shiro" class="open-hamburger__item">白羊羹</a>
			<a href="/hagi" class="open-hamburger__item">萩羊羹</a>
			<a href="/ume" class="open-hamburger__item">夜の梅</a>
			<a href="/matcha" class="open-hamburger__item p-0-20">抹茶羊羹</a>
			<a href="/other" class="open-hamburger__item">もなか</a>
			<a href="" class="open-hamburger__item"></a>
			</div>
		</li>
		<li><a href="<?php echo esc_url (home_url('/#shop')); ?>" class="open-hamburger__list">店舗情報</a></li>
		<li><a href="<?php echo esc_url (home_url('news')); ?>" class="open-hamburger__list">お知らせ</a></li>
		<li><a href="/contact" class="open-hamburger__list">お問い合わせ</a></li>
	</ul>
    <div class="open-hamburger__text--box">
		<div class="open-hamburger__text--unit">
		  <a href="/about/#about" class="open-hamburger__text">会社概要&ensp; /&ensp; </a>
        <a href="/guide" class="open-hamburger__text">ショッピングガイド</a>
		</div>
		<div class="open-hamburger__text--unit">
		   <a href="/guide/#guide" class="open-hamburger__text">特定商取引法に基づく表記&ensp; /&ensp; </a>
		   <a href="/guide/#privacy" class="open-hamburger__text">プライバシーポリシー</a>
		</div>
    </div>
    <div class="footer__sns">
      <a href="https://www.instagram.com/ren_yokan/"><img src="<?php echo get_template_directory_uri(); ?>/img/social-in.png" alt="" class="open-hamburger__insta"></a>
      <a href="https://www.facebook.com/ren.youkan"><img src="<?php echo get_template_directory_uri(); ?>/img/social-fb.png" alt="" class="footer__facebook"></a>
    </div>
  </section>
  <main>
    <header class="chase-header" style="display: none;">
      <div class="chase-header__outer">
        <div class="about-hamburger">
          <button class="chase-header-btn">
            <span class="chase-header-btn__bar">
              <span class="chase-header-btn__bar--top about-bar"></span>
              <span class="chase-header-btn__bar--middle about-bar"></span>
              <span class="chase-header-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="open-hamburger__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </header>
    <?php elseif(is_page('about')):?>
    <body>
  <section class="open-hamburger" style="display: none;">
    <div class="open-hamburger__header">
      <div class="open-hamburger__outer">
        <div class="open-hamburger__inner">
          <button class="open-hamburger-btn">
            <span class="open-hamburger-btn__bar">
              <span class="open-hamburger-btn__bar--top about-bar"></span>
              <span class="open-hamburger-btn__bar--middle about-bar"></span>
              <span class="open-hamburger-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="open-hamburger__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </div>
	<ul class="open-hamburger__menu">
		<li><a href="/" class="open-hamburger__list">トップ</a></li>
		<li><a href="/about" class="open-hamburger__list">二○○年羊羹</a></li>
		<li><a href="/list" class="open-hamburger__list">商品一覧</a></li>
		<li><a class="open-hamburger__accordion">各種羊羹<span class="open-hamburger__arrow click__arrow"></span></a>
			<div class="open-hamburger__category none">
				<a href="/goods/栗羊羹/" class="open-hamburger__item">栗羊羹</a>
				<a href="/ren" class="open-hamburger__item">煉羊羹</a>
				<a href="/kurumi" class="open-hamburger__item">くるみ羊羹</a>
				<a href="/shiro" class="open-hamburger__item">白羊羹</a>
				<a href="/hagi" class="open-hamburger__item">萩羊羹</a>
				<a href="/ume" class="open-hamburger__item">夜の梅</a>
				<a href="/matcha" class="open-hamburger__item p-0-20">抹茶羊羹</a>
				<a href="/other" class="open-hamburger__item">もなか</a>
				<a href="" class="open-hamburger__item"></a>
			</div>
		</li>
		<li><a href="<?php echo esc_url (home_url('/#shop')); ?>" class="open-hamburger__list">店舗情報</a></li>
		<li><a href="<?php echo esc_url (home_url('news')); ?>" class="open-hamburger__list">お知らせ</a></li>
		<li><a href="/contact" class="open-hamburger__list">お問い合わせ</a></li>
	</ul>
    <div class="open-hamburger__text--box">
		<div class="open-hamburger__text--unit">
		  <a href="/about/#about" class="open-hamburger__text">会社概要&ensp; /&ensp; </a>
        <a href="/guide" class="open-hamburger__text">ショッピングガイド</a>
		</div>
		<div class="open-hamburger__text--unit">
		   <a href="/guide/#guide" class="open-hamburger__text">特定商取引法に基づく表記&ensp; /&ensp; </a>
		   <a href="/guide/#privacy" class="open-hamburger__text">プライバシーポリシー</a>
		</div>
    </div>
    <div class="footer__sns">
      <a href="https://www.instagram.com/ren_yokan/"><img src="<?php echo get_template_directory_uri(); ?>/img/social-in.png" alt="" class="open-hamburger__insta"></a>
      <a href="https://www.facebook.com/ren.youkan"><img src="<?php echo get_template_directory_uri(); ?>/img/social-fb.png" alt="" class="footer__facebook"></a>
    </div>
  </section>

  <main>
    <header class="chase-header" style="display: none;">
      <div class="chase-header__outer">
        <div class="about-hamburger">
          <button class="chase-header-btn">
            <span class="chase-header-btn__bar">
              <span class="chase-header-btn__bar--top about-bar"></span>
              <span class="chase-header-btn__bar--middle about-bar"></span>
              <span class="chase-header-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="open-hamburger__logo"></a>
        <a href="http://yorunoume.shop-pro.jp/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </header>

    <header class="header__about">
      <div class="header__about__outer">
        <div class="about-hamburger">
          <button class="about-hamburger-btn">
            <span class="about-hamburger-btn__bar">
              <span class="about-hamburger-btn__bar--top about-bar"></span>
              <span class="about-hamburger-btn__bar--middle about-bar"></span>
              <span class="about-hamburger-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="header__about__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </header>
    <?php elseif(is_page('ren') || is_page('shiro') || is_page('kurumi') || is_page('hagi') || is_page('ume') || is_page('matcha')|| is_page('other')|| is_page('list')):?>
      <body>
  <section class="open-hamburger" style="display: none;">
    <div class="open-hamburger__header">
      <div class="open-hamburger__outer">
        <div class="open-hamburger__inner">
          <button class="open-hamburger-btn">
            <span class="open-hamburger-btn__bar">
              <span class="open-hamburger-btn__bar--top about-bar"></span>
              <span class="open-hamburger-btn__bar--middle about-bar"></span>
              <span class="open-hamburger-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="open-hamburger__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </div>
	<ul class="open-hamburger__menu">
		<li><a href="/" class="open-hamburger__list">トップ</a></li>
		<li><a href="/about" class="open-hamburger__list">二○○年羊羹</a></li>
		<li><a href="/list" class="open-hamburger__list">商品一覧</a></li>
		<li><a class="open-hamburger__accordion">各種羊羹<span class="open-hamburger__arrow click__arrow"></span></a>
			<div class="open-hamburger__category none">
				<a href="/goods/栗羊羹/" class="open-hamburger__item">栗羊羹</a>
				<a href="/ren" class="open-hamburger__item">煉羊羹</a>
				<a href="/kurumi" class="open-hamburger__item">くるみ羊羹</a>
				<a href="/shiro" class="open-hamburger__item">白羊羹</a>
				<a href="/hagi" class="open-hamburger__item">萩羊羹</a>
				<a href="/ume" class="open-hamburger__item">夜の梅</a>
				<a href="/matcha" class="open-hamburger__item p-0-20">抹茶羊羹</a>
				<a href="/other" class="open-hamburger__item">もなか</a>
				<a href="" class="open-hamburger__item"></a>
			</div>
		</li>
		<li><a href="<?php echo esc_url (home_url('/#shop')); ?>" class="open-hamburger__list">店舗情報</a></li>
		<li><a href="<?php echo esc_url (home_url('news')); ?>" class="open-hamburger__list">お知らせ</a></li>
		<li><a href="/contact" class="open-hamburger__list">お問い合わせ</a></li>
	</ul>
    <div class="open-hamburger__text--box">
		<div class="open-hamburger__text--unit">
		  <a href="/about/#about" class="open-hamburger__text">会社概要&ensp; /&ensp; </a>
        <a href="/guide" class="open-hamburger__text">ショッピングガイド</a>
		</div>
		<div class="open-hamburger__text--unit">
		   <a href="/guide/#guide" class="open-hamburger__text">特定商取引法に基づく表記&ensp; /&ensp; </a>
		   <a href="/guide/#privacy" class="open-hamburger__text">プライバシーポリシー</a>
		</div>
    </div>
    <div class="footer__sns">
      <a href="https://www.instagram.com/ren_yokan/"><img src="<?php echo get_template_directory_uri(); ?>/img/social-in.png" alt="" class="open-hamburger__insta"></a>
      <a href="https://www.facebook.com/ren.youkan"><img src="<?php echo get_template_directory_uri(); ?>/img/social-fb.png" alt="" class="footer__facebook"></a>
    </div>
  </section>

  <main>
    <header class="chase-header" style="display: none;">
      <div class="chase-header__outer">
        <div class="about-hamburger">
          <button class="chase-header-btn">
            <span class="chase-header-btn__bar">
              <span class="chase-header-btn__bar--top about-bar"></span>
              <span class="chase-header-btn__bar--middle about-bar"></span>
              <span class="chase-header-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="open-hamburger__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </header>


    <?php else: ?>
      <body>
  <section class="open-hamburger" style="display: none;">
    <div class="open-hamburger__header">
      <div class="open-hamburger__outer">
        <div class="open-hamburger__inner">
          <button class="open-hamburger-btn">
            <span class="open-hamburger-btn__bar">
              <span class="open-hamburger-btn__bar--top about-bar"></span>
              <span class="open-hamburger-btn__bar--middle about-bar"></span>
              <span class="open-hamburger-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="open-hamburger__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </div>
	<ul class="open-hamburger__menu">
		<li><a href="/" class="open-hamburger__list">トップ</a></li>
		<li><a href="/about" class="open-hamburger__list">二○○年羊羹</a></li>
		<li><a href="/list" class="open-hamburger__list">商品一覧</a></li>
		<li><a class="open-hamburger__accordion">各種羊羹<span class="open-hamburger__arrow click__arrow"></span></a>
			<div class="open-hamburger__category none">
				<a href="/goods/栗羊羹/" class="open-hamburger__item">栗羊羹</a>
				<a href="/ren" class="open-hamburger__item">煉羊羹</a>
				<a href="/kurumi" class="open-hamburger__item">くるみ羊羹</a>
				<a href="/shiro" class="open-hamburger__item">白羊羹</a>
				<a href="/hagi" class="open-hamburger__item">萩羊羹</a>
				<a href="/ume" class="open-hamburger__item">夜の梅</a>
				<a href="/matcha" class="open-hamburger__item p-0-20">抹茶羊羹</a>
				<a href="/other" class="open-hamburger__item">もなか</a>
				<a href="" class="open-hamburger__item"></a>
			</div>
		</li>
		<li><a href="<?php echo esc_url (home_url('/#shop')); ?>" class="open-hamburger__list">店舗情報</a></li>
		<li><a href="<?php echo esc_url (home_url('news')); ?>" class="open-hamburger__list">お知らせ</a></li>
		<li><a href="/contact" class="open-hamburger__list">お問い合わせ</a></li>
	</ul>
    <div class="open-hamburger__text--box">
		<div class="open-hamburger__text--unit">
		  <a href="/about/#about" class="open-hamburger__text">会社概要&ensp; /&ensp; </a>
        <a href="/guide" class="open-hamburger__text">ショッピングガイド</a>
		</div>
		<div class="open-hamburger__text--unit">
		   <a href="/guide/#guide" class="open-hamburger__text">特定商取引法に基づく表記&ensp; /&ensp; </a>
		   <a href="/guide/#privacy" class="open-hamburger__text">プライバシーポリシー</a>
		</div>
    </div>
    <div class="footer__sns">
      <a href="https://www.instagram.com/ren_yokan/"><img src="<?php echo get_template_directory_uri(); ?>/img/social-in.png" alt="" class="open-hamburger__insta"></a>
      <a href="https://www.facebook.com/ren.youkan"><img src="<?php echo get_template_directory_uri(); ?>/img/social-fb.png" alt="" class="footer__facebook"></a>
    </div>
  </section>

  <main>
    <header class="chase-header" style="display: none;">
      <div class="chase-header__outer">
        <div class="about-hamburger">
          <button class="chase-header-btn">
            <span class="chase-header-btn__bar">
              <span class="chase-header-btn__bar--top about-bar"></span>
              <span class="chase-header-btn__bar--middle about-bar"></span>
              <span class="chase-header-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="open-hamburger__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </header>

    <header class="header__about">
      <div class="header__about__outer">
        <div class="about-hamburger">
          <button class="about-hamburger-btn">
            <span class="about-hamburger-btn__bar">
              <span class="about-hamburger-btn__bar--top about-bar"></span>
              <span class="about-hamburger-btn__bar--middle about-bar"></span>
              <span class="about-hamburger-btn__bar--bottom about-bar"></span>
            </span>
          </button>
        </div>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ren-logo.png" alt="" class="header__about__logo"></a>
        <a href="https://yorunoume.shop-pro.jp/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/shop-logo.png" alt="" class="header__about__shop--logo"></a>
      </div>
    </header>

    <?php endif;?> 
