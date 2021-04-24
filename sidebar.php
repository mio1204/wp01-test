<aside class="sidebar">
  <?php if (is_active_sidebar('main-sidebar')) : ?>
    <ul class="menu">
      <?php dynamic_sidebar('main-sidebar'); ?>
    </ul>
  <?php endif; ?>
</aside>