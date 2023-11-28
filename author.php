<?php get_header(); ?>

<?php 
    $author_id = get_current_user_id();
    $auth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    $author_avatar = get_field('author_image', 'user_' . $author_id);
    $author_desc = get_field('author_designation', 'user_' . $author_id);
    $author_socials = get_field('author_socials', 'user_' . $author_id);
    $author_socials_list = $author_socials['author_social_lists'];
?>

<section class="author-info-area">
    <div class="site-container">
        <div class="author-info">
            <div class="author-img">
                <img src="<?php echo esc_url($author_avatar);?>" alt="<?php echo esc_attr($auth->display_name); ?>">
            </div>
            <div class="author-bio">
                <h4><?php echo esc_html($auth->display_name); ?></h4>
                <h5><?php echo esc_html($author_desc);?></h5>
                <p><?php echo esc_html($auth->user_description); ?></p>
                <div class="author-social">
                    <?php 
                        foreach($author_socials_list as $social) {
                            ?>
                                <span><a href="<?php echo esc_url($social['author_social_url']);?> ?>"><img src="<?php echo esc_url($social['author_social_icon']);?>" alt="<?php echo esc_attr($social['author_social_label']);?>"> <?php echo esc_html($social['author_social_label']);?></a></span>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="author-posts-area">
    <div class="site-container">
        <div class="author-posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="single-author-posts">                
                <div class="author-post-img" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>                
                <?php 
                    $categories = get_the_category();
                    if ($categories) {
                        $category_name = $categories[0]->name;
                        $category_term = $categories[0]->term_id;
                    ?>
                    <span><a href="<?php echo esc_url(get_category_link($category_term)); ?>"><?php echo esc_html($category_name);?></a></span>
                        <?php 
                    }
                ?>
                <h4><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h4>
                <span><?php the_time('d M, Y'); ?></span>
            </div>
            <?php endwhile; endif; ?>           
        </div>
        
        <div class="pagination-box">
            <?php
                echo paginate_links( array(
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;',
                    'type'      => 'list', // Use 'list' for numeric pagination
                ) );
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

