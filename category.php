<?php get_header(); ?>
<div class="eyecatch single-eyecatch page-eyecatch">
  <img src="<?php echo get_template_directory_uri(); ?>/img/category-eyecatch.jpg" alt="no-img">
  <div class="page-title">
    <h1 class="page-title__h1"><?php single_cat_title(); ?></h1>
    <!-- カテゴリーのタイトルを出力 -->
    <p class="page-title__p">カテゴリー記事一覧</p>
  </div>
</div>
<main>
  <div class="flex">
    <div class="container-top">
      <div class="new-articles">
        <div class="flex">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <!-- メインループ開始 -->
              <a href="<?php the_permalink(); ?>" class="magazine-colum">
                <!-- 個別記事へのリンクを出力 -->
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
                <?php endif; ?>
                <!-- サムネイルの出力 -->
                <?php if (!is_category() && has_category()) : ?>
                  <p class="category-tag">
                    <?php
                    $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                  </p>
                <?php endif; ?>
                <!-- カテゴリーの出力 -->
                <div class="text-content">
                  <p class="article__date"><?php echo get_the_date('Y-m-d'); ?></p>
                  <!-- 投稿日時の出力 -->
                  <h3 class="article__title">
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '…';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                    <!-- タイトルの文字数が30文字以降は表示せずに、最後に「…」をつける -->
                  </h3>
                  <div class="article-tags">
                    <p class="article-tags__inner">
                      <?php $posttags = get_the_tags();
                      if ($posttags) {
                        foreach ($posttags as $tag) {
                          echo '<span class="tag-span">' . $tag->name . '</span>';
                        }
                      } ?></p>
                    <!-- リンクの無いタグをspanタグで囲って出力 -->
                  </div>
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <!-- 投稿が無い場合の処理 -->
            <p>投稿が見つかりません。</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>