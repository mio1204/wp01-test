<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
<div class="single-eyecatch eyecatch page-eyecatch">
  <?php echo get_the_post_thumbnail($post = 54); ?>
  <?php // 投稿のスラッグを取得
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
  ?>
  <div class="page-title">
    <h1 class="page-title__h1"><?php echo $slug; ?></h1>
    　　　　
    <!-- 固定ページのタイトル -->
    <p class=></p>
  </div>
</div>
<div class="contact">
  <form class="form" method="post">
    <?php echo do_shortcode('[contact-form-7 id="45" title="お問い合わせフォーム"]'); ?>
  </form>
</div>
<?php get_footer(); ?>