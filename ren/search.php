<?php get_header(); ?>

    <section class="news">
      <h2 class="news__title">お知らせ</h2>
      <div class="news__select">
        <p class="news__select--left">Archives</p>
        <form method="get" action="<?php echo get_post_type_archive_link('search'); ?>" class="news__select--right">
          <?php wp_dropdown_categories('depth=0&orderby=name&hide_empty=1&show_option_all=Category'); ?>
          <?php $tags = get_tags(); if ( $tags ) : ?>
        <select name='tag' id='tag'>
        <option value="" selected="selected">タグ選択</option>
          <?php foreach ( $tags as $tag ): ?>
        <option value="<?php echo esc_html( $tag->slug); ?>"><?php echo esc_html( $tag->name ); ?></option>
          <?php endforeach; ?>
        </select>
          <?php endif; ?>
          <input id="submit" type="submit" value="検索" />
        </form>
      </div>
      <div class="news__outer">
      <?php
    $args = array(
      'post_type' => 'post', //投稿タイプ名
      'posts_per_page' => -1, // 表示件数
      'paged' => $paged,
      );
        ?>
        <?php $myposts = new WP_Query('cat' => $category->term_id);
          if ($myposts->have_posts()): while ($myposts->have_posts()): $myposts->the_post();
            ?>
        <a href="<?php the_permalink(); ?>">
          <article class="news__inner">
            <?php the_post_thumbnail('medium'); ?>
            <p class="news__date"><?php the_time('Y.m.d');?></p>
            <p class="news__text"><?php the_title();?></p>
          </article>
        </a>
      <?php
      endwhile;
      endif;
      wp_reset_postdata(); ?>
        </div>
      <button class="news__button">さらに表示</button>
    </section>

    <?php get_footer(); ?>

    