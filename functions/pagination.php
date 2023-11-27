<?php

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function balefirewp_pagination()
{
    global $wp_query;
    $big = -1;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}