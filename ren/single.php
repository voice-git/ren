<?php get_header(); ?>
    <section class="post">
      <div class="post__outer">
        <p class="post__date"><?php the_time('Y.m.d');?></p>
        <h2 class="post__title"><?php the_title();?></h2>
        <p class="post__text"><?php the_content(); ?></p>
        <div class="post__page">
          <?php previous_post_link('%link', '<img src="'. get_template_directory_uri().'/img/prev.svg" alt="前のニュースへ" width="7"/>'); ?>
          <a href="<?php echo esc_url (home_url('news')); ?>" class="post__page--list">一覧</a>
          <?php next_post_link('%link', '<img src="'. get_template_directory_uri().'/img/next.svg" alt="次のニュースへ" width="7"/>'); ?>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>