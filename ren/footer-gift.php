<footer class="footer">
	<a href="/about" class="footer__banner"><img src="<?php echo get_template_directory_uri(); ?>/img/component.jpg" alt="" ></a>
	<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo@2x.png" alt="" class="footer__img">
	<div class="footer__sns">
		<a href="https://www.instagram.com/ren_yokan/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-in.png" alt="" class="footer__insta"></a>
		<a href="https://www.facebook.com/ren.youkan" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-fb.png" alt="" class="footer__facebook"></a>
	</div>
	<div class="footer__outer">
		<a href="/about/#about" class="footer__item">会社概要</a>
		<a href="/guide" class="footer__item">ショッピングガイド </a>
		<a href="/guide#guide" class="footer__item">特定商取引法に基づく表記</a>
		<a href="/guide#privacy" class="footer__item">プライバシーポリシー</a>
	</div>
	<p class="footer__text">© REN EISHODO / REN NO YOKAN</p>
</footer>

</main>

  <script src="<?php echo get_template_directory_uri(); ?>/js/rellax.min.js"></script>
  <script>
    var rellax = new Rellax('.rellax', {
      center: true
    });
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
  <script>
	  var mySwiper = new Swiper('.swiper-container-0', {
		  loop: true,
        effect: 'fade',
          autoplay: {
         delay: 6000,
         disableOnInteraction: false,
       },
       speed: 2000,
    });
	  
    var mySwiper = new Swiper('.swiper-container-1', {
      autoplay: {
      delay: 4000,
      autoHeight: true,
      },
      slidesPerView: 1.7,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-1',
      type: 'bullets',
      clickable: true,
      },
    });
    
    var mySwiper2 = new Swiper('.swiper-container-2', {
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-2',
      type: 'bullets',
      clickable: true,
      },
    });

    var mySwiper3 = new Swiper('.swiper-container-3', {
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-3',
      type: 'bullets',
      clickable: true,
      },
    });

    var mySwiper4 = new Swiper('.swiper-container-4', {
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-4',
      type: 'bullets',
      clickable: true,
      },
    });

    var mySwiper5 = new Swiper('.swiper-container-5', {
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-5',
      type: 'bullets',
      clickable: true,
      },
    });

    var mySwiper6 = new Swiper('.swiper-container-6', {
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-6',
      type: 'bullets',
      clickable: true,
      },
    });

    var mySwiper7 = new Swiper('.swiper-container-7', {
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-7',
      type: 'bullets',
      clickable: true,
      },
    });

    var mySwiper8 = new Swiper('.swiper-container-8', {
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-8',
      type: 'bullets',
      clickable: true,
      },
    });
	  
	  var mySwiper8 = new Swiper('.swiper-container-9', {
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      pagination: {
      el: '.swiper-pagination-9',
      type: 'bullets',
      clickable: true,
      },
    });
  </script>
<?php if ( is_page("contact")) :
if (isset($_POST['recaptchaResponse']) && !empty($_POST['recaptchaResponse'])) {
    $secret = '6LdokIUbAAAAABHnsovoovrW_4A0wOA5W3fTZ3Q1';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['recaptchaResponse']);
    $reCAPTCHA = json_decode($verifyResponse);
    if ($reCAPTCHA->success) {
    } else {
      return;
    }
}
endif; ?>
<?php wp_footer(); ?>

</body>
</html>