
<?php get_header(); ?>

<!-- Single Page Main -->

<section id="single" class="container">
        <div class="single-content">
                <?php if(have_posts()): ?>
                        <?php while(have_posts()): ?>
                                <?php the_post();?>

                        <article class="card">
                            <div class="article-header" style="background-image: url('<?php the_post_thumbnail_url();?>'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                              <h1><?php the_title()?></h1>
                                <small><?php the_date()?> - <?php the_author()?></small>
                                  <div class="post-categories">
                                  <?php the_category(' ')?>
                                  </div>
                            </div>
                        
                          <div class="article-content">
                          <?php the_content()?>   
                          </div>

                        </article>
                        <?php endwhile;?>
                <?php endif;?>
          <!-- Pagination -->
          <?php get_template_part('pagination'); ?>
        </div>
        
        <?php get_sidebar() ?>
</section>

<?php get_footer(); ?>