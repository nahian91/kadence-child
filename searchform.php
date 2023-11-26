<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'kadence'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'kadence'); ?></span>
    </label>
    <button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button', 'kadence'); ?></button>
</form>