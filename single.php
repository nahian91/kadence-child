<?php 
    get_header();
    $post_id = get_the_ID();
    $categories = get_the_category();
    $category = $categories[0];
    $author_id = get_post_field('post_author', get_the_ID());
    $author_data = get_userdata($author_id);
?>

<section class="single-post-area">
    <div class="site-container">
        <div class="single-post-layout">
            <div class="single-post-content">
                <span><?php echo esc_html($category->name);?></span>
                <h4><?php echo $post->post_title;?></h4>
                <div class="post-meta">
                    <span><?php echo esc_html($author_data->display_name); ?></span>
                    <span><?php echo get_the_date('F d, Y', $post->ID); ?></span>
                    <span>
                        <?php
                            function calculate_read_time($content, $words_per_minute = 200) {
                                $word_count = str_word_count(strip_tags(html_entity_decode($content, ENT_QUOTES, 'UTF-8')));
                                return ceil($word_count / $words_per_minute);
                            }
                            $post_content = get_the_content();
                            $read_time = calculate_read_time($post_content);
                            echo "$read_time mins read";
                        ?>
                    </span>
                </div>
                <img src="<?php echo esc_url(get_the_post_thumbnail_url( $post->ID, 'large' )); ?>" alt="">
                <div class="single-post-box">
                    <?php the_content();?>
                </div>
                
                <div class="single-post-author">
                    <div class="author-img">
                        <?php echo get_avatar($author_data->ID, 96);?>
                    </div>
                    <div class="author-content">
                    <?php                  
                        if ($author_data) {
                            ?>
                                <h4><?php echo esc_html($author_data->display_name); ?></h4>
                                <p><?php echo esc_html($author_data->description); ?></p>
                            <?php 
                        }
                        ?>

                    </div>
                </div>
                <div class="single-related-posts">
                    <h3>Related Posts</h3>
                    <div class="single-posr-related-layout">
                        <?php 
                            $single_related_posts = get_field('single_related_posts');                    
                            if($single_related_posts) {
                                foreach($single_related_posts as $post) {
                                    $category = get_the_category($post->ID);
                                        foreach ($category as $cat) {
                                            $cat_link = get_category_link($cat->term_id);
                                        }
                                    ?>
                                        <div class="single-related-post">
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url( $post->ID, 'medium' )); ?>" alt="">
                                            <span><a href="<?php echo esc_url($cat_link);?>"><?php echo $cat->name;?></a></span>
                                            <h4><a href="<?php echo esc_url(get_the_permalink( $post->ID ));?>"><?php echo $post->post_title;?></a></h4>
                                        </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="single-post-comments">
                <?php
                    $comments = get_comments(array(
                        'post_id' => $post_id,
                        'status' => 'approve', // Only approved comments
                    ));

                    // Check if there are comments
                    if ($comments) {
                        echo '<ul class="comment-list">';
                        
                        // Loop through each comment
                        foreach ($comments as $comment) {
                            echo '<li>';
                            echo '<div class="comment-avatar">' . get_avatar($comment->comment_author_email, 50) . '</div>'; // 50 is the avatar size in pixels
                            echo '<div class="comment-content">';
                            echo '<strong>' . esc_html($comment->comment_author) . '</strong>';
                            echo '<p>' . esc_html($comment->comment_content) . '</p>';
                            echo '</div>';
                            echo '</li>';
                        }
                        
                        echo '</ul>';
                    } else {
                        echo 'No comments yet.';
                    }
                    ?>

                    <?php
                    // Check if comments are allowed for the post
                    if (comments_open() || get_comments_number()) {
                        // Output the comment form
                        comment_form();
                    } else {
                        echo 'Comments are closed.';
                    }
                    ?>
                </div>
            </div>
            <div class="single-post-sidebar">
                <?php
                    // Check if the sidebar is active and has widgets
                    if (is_active_sidebar('sidebar-primary')) {
                        // Output the sidebar
                        dynamic_sidebar('sidebar-primary');
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>