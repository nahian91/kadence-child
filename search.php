<?php get_header(); ?>

<section class="search-result">
    <div class="site-container">
        <div class="page-header">
            <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'kadence'), '<span>' . get_search_query() . '</span>'); ?></h1>
        </div>
        <div class="search-list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
            <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else : ?>
                <p><?php esc_html_e('No results found. Please try again with a different keyword.', 'kadence'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>