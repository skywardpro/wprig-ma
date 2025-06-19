<?php

/**
 * Enqueue Custom Functions
 */

/**
 * Custom Pagination Function
 *
 * This function generates a customized pagination for WordPress, where the text
 * of the "Previous" and "Next" links are wrapped in <span> tags for additional styling flexibility.
 *
 * Usage:
 * - Include this function in your theme's functions.php file.
 * - Call this function where you want to display pagination, e.g., in index.php or archive.php.
 *
 * @param array $args {
 *     Optional. Array of arguments for generating pagination.
 *
 *     @type string   $base         Base of the paginated URL. Default is an URL with the page number as a query variable.
 *     @type string   $format       Format for the pagination structure. Default is '?paged=%#%'.
 *     @type int      $current      Current page number. Default is the current paginated page number.
 *     @type int      $total        The total number of pages. Default is the total number of pages in the main query.
 *     @type string   $prev_text    Text for the "Previous" page link. Default is '&laquo; Previous'.
 *     @type string   $next_text    Text for the "Next" page link. Default is 'Next &raquo;'.
 *     @type WP_Query $query        Custom WP_Query object to use for pagination. Default is global $wp_query.
 * }
 *
 * @return void
 */
function custom_pagination($args = array()) {
    global $wp_query;

    // Get the query object to use
    $query = isset($args['query']) ? $args['query'] : $wp_query;
    unset($args['query']); // Remove from args to prevent conflicts

    // Get the current URL without pagination
    $current_url = get_pagenum_link(1);
    
    // If we're on a taxonomy archive, we need to handle the URL differently
    if (is_tax()) {
        $term = get_queried_object();
        $current_url = get_term_link($term);
    }
    
    // Remove any existing pagination parameters from the URL
    $current_url = remove_query_arg('paged', $current_url);
    
    // Default pagination arguments
    $defaults = array(
        'base'      => $current_url . '%_%',
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $query->max_num_pages,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type'      => 'array',
        'add_args'  => false, // Don't add query args
        'show_all'  => false,
        'end_size'  => 1,
        'mid_size'  => 1,
    );

    // Parse arguments
    $args = wp_parse_args($args, $defaults);

    // Generate the pagination links
    $pagination = paginate_links($args);

    if ($pagination) {
        // Output the pagination
        ob_start();
        echo '<nav class="nav-links typo--unbounded typo--body-big">';
        echo implode('', $pagination);
        echo '</nav>';
        echo ob_get_clean();
    }
}

/**
 * Simple change blog posts per page
 */
function change_blog_post_per_page($query) {
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }
    
    // Set posts per page for main blog page
    if (is_home() || is_front_page()) {
        $query->set('posts_per_page', 3);
    }
}
add_filter('pre_get_posts', 'change_blog_post_per_page');