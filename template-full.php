<?php 

/*
Template Name: Page Full Width Template
*/

get_header(); ?>

    <div class="site-container">
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
    </div>

<?php get_footer(); ?>