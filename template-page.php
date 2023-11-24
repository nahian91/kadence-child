<?php 

/*
Template Name: Full Width Template
*/

get_header(); ?>

    <main id="main" class="site-main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php
                // The Loop
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </article>
    </main>

<?php get_footer(); ?>