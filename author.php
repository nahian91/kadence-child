<?php get_header(); ?>

<?php 
    $auth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    $full_size_avatar_url = get_avatar_url($auth, array('size' => 'full'));
?>

<section class="author-info-area">
    <div class="site-container">
        <div class="author-info">
            <div class="author-img">
                <img src="<?php echo $full_size_avatar_url;?>" alt="">
            </div>
            <div class="author-bio">
                <h4><?php echo $auth->display_name; ?></h4>
                <h5>Founder & Managing Director</h5>
                <p><?php echo $auth->user_description; ?></p>
                <div class="author-social">
                    <span><a href="">facebook.com</a></span>
                    <span><a href="">facebook.com</a></span>
                    <span><a href="">facebook.com</a></span>
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
                    <span><a href="<?php echo esc_url(get_category_link($category_term)); ?>"><?php echo $category_name;?></a></span>
                        <?php 

                    }
                ?>
                <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
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

