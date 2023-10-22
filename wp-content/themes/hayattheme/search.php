
<?php get_header(); ?>

<!-- Main Header -->
    <header id="main-header">
        <div id="container">
            <p style="font-size:20px;">نتائج البحث عن:</p>
            <h1>" <?php the_search_query(); ?> "</h1>
            <?php get_search_form(); ?>
        </div>
    </header>
<!-- END Main Header -->

<!-- BODY -->
<!-- Blog Posts -->
<section id="blog-posts">
    <div class="posts-container">
        <!-- Getting Posts Loop -->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
            <?php the_post(); ?>
                <article class="card">
                    <?php if(has_post_thumbnail()): ?>

                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?else: ?>

                        <a href="<?php the_permalink(); ?>">
                            <img src="https://via.placeholder.com/300" alt="">
                        </a>

                    <?endif ?>

                    <div>
                        <h3>
                            <a href="<?php echo the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <div class="post-categories">
                            <?php the_category(' '); ?>
                        </div>
                        <p><?php echo the_excerpt(); ?></p>
                        
                        <button class="readmore">
                            <a href="<?php the_permalink() ?>">إقرأ المزيد</a>
                        </button>
                    </div>
                        
                </article>
        <?php endwhile ?>
    <?php else: ?>
        <?php echo "لا يوجد أي مقال لعرضه!" ?>
    <?endif; ?>

    </div>
    
<?php get_sidebar() ?>

        <!-- Pagination -->
        <?php get_template_part('pagination'); ?>

</section>
<!-- End Blog Posts -->
<!-- END BODY -->




<?php get_footer(); ?>