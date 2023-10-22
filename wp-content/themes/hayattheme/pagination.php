<!-- Pagination -->
<div id="pagination">
  <div class="container">
    <div class="nav-previous align-left">
      <?php if(is_single()): ?>
        <?php previous_post_link('<strong>%link</strong>') ?>
        <?php else:?>
      <?php previous_posts_link(' منشورات جديدة ') ?>
      <?endif;?>
    </div>
    <div class="nav-next align-right">
      <?php if(is_single()): ?>
        <?php next_post_link('<strong>%link</strong>') ?>
        <?php else:?>
      <?php next_posts_link('منشورات أقدم') ?>
      <?endif;?>
    </div>
  </div>
</div>