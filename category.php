<?php get_header(); ?>

<section class="category-archive-area">
    <div class="site-container">
        <header class="page-header">
            <h1 class="page-title"><?php single_cat_title(); ?></h1>
        </header>
        <div class="category-archive-layout">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="single-post">
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url( $post->ID, 'large' )); ?>" alt="">
                        <h4><a href="<?php echo esc_url(get_the_permalink( $post->ID ));?>"><?php echo $post->post_title;?></a></h4>
                        <p><?php echo get_the_date('F d, Y', $post->ID); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else : ?>
                <p><?php esc_html_e('No posts found.', 'yourtheme'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>