<?php get_header(); ?>
<?php $p_date_set = (string) filter_input(INPUT_GET, 'p_date'); ?>
<section class="news">
  <h2 class="news__title">お知らせ</h2>
  <div class="news__select">
    <div class="news__select--left">
		<p class="news__option--left"></p>
      <select name="p_date" onchange="document.location.href=this.options[this.selectedIndex].value;">
        <option value="/news/">Archive</option>
        <?php wp_get_archives('type=monthly&format=option&post_type=post'); ?>
      </select>
    </div>
    <form class="news__select--right" action="<?php echo get_post_type_archive_link('news'); ?>" method="get">
      <input type="hidden" name="category" value="category">
      <?php $p_cat_set = (string) filter_input(INPUT_GET, 'p_cat'); ?>
      <p class="news__option"></p>
      <select class="news__option--text" name="p_cat" onchange="submit(this.form)">
        <option value="all" <?php if ($p_cat_set == 'all' || !$p_cat_set) {
                              echo 'selected class="selected"';
                            } ?>>
          Category
        </option>
        <?php $args = array(
          'post_type' => 'post',
        );
        $categories = get_categories($args);
        ?>
        <?php foreach ($categories as $category) : ?>
          <option value="<?php echo $category->slug; ?>" <?php if ($p_cat_set == $category->slug) {
                                                            echo 'selected class="selected"';
                                                          } ?>>
            <?php echo $category->name; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </form>
  </div>
  <div class="news__outer">
    <?php
    $if_category = $_GET['category'];
    if ($if_category === 'category') :
    ?>

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      if (!($p_cat_set === "all")) {
        $args = array(
          'paged' => $paged,
          'post_type' => 'post', // 投稿タイプスラッグ:以下パラメータ
          'posts_per_page' => 9,
          'tax_query' => [
            [
              'taxonomy' => 'category',
              'field'    => 'slug',
              'terms'    => $p_cat_set,
            ],
          ],
        );
      }
      if (!$p_cat_set || $p_cat_set === "all") {
        $args = array(
          'paged' => $paged,
          'post_type' => 'post', // 投稿タイプスラッグ:以下パラメータ
          'posts_per_page' => -1,
        );
      }
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
          <a href="<?php the_permalink(); ?>">
            <article class="news__inner">
              <?php the_post_thumbnail('medium'); ?>
              <p class="news__date"><?php the_time('Y.m.d'); ?></p>
              <p class="news__text"><?php the_title(); ?></p>
            </article>
          </a>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
    else :
      ?>


      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post(); ?>

          <a href="<?php the_permalink(); ?>">
            <article class="news__inner">
				<?php if( has_post_thumbnail() ): ?>
				<img src="<?php the_post_thumbnail_url(); ?>">
				<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail.jpg">
				<?php endif; ?>
              <p class="news__date"><?php the_time('Y.m.d'); ?></p>
              <p class="news__text"><?php the_title(); ?></p>
            </article>
          </a>
    <?php
        endwhile;
      endif;
      wp_reset_postdata();
    endif; ?>



  </div>
  <button class="news__button">さらに表示</button>
</section>

<?php get_footer(); ?>