<?php // Shortcodes

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type(
        'html5-blank', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('HTML5 Blank Custom Post', 'balefireblank'), // Rename these to suit
                'singular_name' => __('HTML5 Blank Custom Post', 'balefireblank'),
                'add_new' => __('Add New', 'balefireblank'),
                'add_new_item' => __('Add New HTML5 Blank Custom Post', 'balefireblank'),
                'edit' => __('Edit', 'balefireblank'),
                'edit_item' => __('Edit HTML5 Blank Custom Post', 'balefireblank'),
                'new_item' => __('New HTML5 Blank Custom Post', 'balefireblank'),
                'view' => __('View HTML5 Blank Custom Post', 'balefireblank'),
                'view_item' => __('View HTML5 Blank Custom Post', 'balefireblank'),
                'search_items' => __('Search HTML5 Blank Custom Post', 'balefireblank'),
                'not_found' => __('No HTML5 Blank Custom Posts found', 'balefireblank'),
                'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'balefireblank')
            ),
            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag',
                'category'
            ) // Add Category and Post Tags support
        )
    );
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function balefire_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function balefire_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}
