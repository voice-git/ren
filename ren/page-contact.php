<?php get_header(); ?>

      <section class="contact">
        <h2 class="contact__title">お問い合わせ</h2>
        <p class="contact__text">当店へのご要望は、下記フォームに<br class="contact__sp">ご記入のうえ送信してください。</p>
        <p class="contact__english">NOTICE :<br class="contact__sp"> Shipping is only available to address in Japan.</p>
        <?php echo do_shortcode('[mwform_formkey key="43"]'); ?>
      </section>

  <?php get_footer(); ?>