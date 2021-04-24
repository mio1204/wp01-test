<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
  <!-- メインループ開始 -->
  <div class="eyecatch">
    <div class="single-eyecatch page-eyecatch">
      <img src="<?php echo get_template_directory_uri(); ?>/img/news-eyecatch.jpg" alt="no-img">
      <!-- 現在のディレクトリまでのパスを出力 -->
      <div class="page-title">
        <h1 class="page-title__h1">NEWS</h1>
        <p class=></p>
      </div>
    </div>
    <div class="single-container container">
      <div class="single-header__contain">
        <div class="style__border">
          <h1 class="single-title">
            <?php the_title(); ?>
            <!-- タイトルの出力 -->
          </h1>
          <div class="flex tags-date">
            <p class="single-date"><?php echo get_the_date('Y-m-d'); ?></p>
            <!-- 投稿日時を出力 -->
          </div>
        </div>
      </div>
      <div class="main-text">
        <?php the_content(); ?>
        <!-- 本文を出力 -->
      </div>
    </div>
  </div>
<?php endif; ?>
<!-- メインループ終了 -->
<?php get_footer(); ?>