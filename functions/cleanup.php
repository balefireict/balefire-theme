<?php

function get_latest_build_file($dir, $type)
{
    $latest_file = '';
    $latest_ctime = 0;
    $files = glob($dir . '/*.' . $type);

    foreach ($files as $file) {
        if (is_file($file) && filectime($file) > $latest_ctime) {
            $latest_ctime = filectime($file);
            $latest_file = basename($file);
        }
    }

    return $latest_file;
}

// Custom Excerpts
function balefirewp_index($length) // Create 20 Word Callback for Index page Excerpts, call using balefirewp_excerpt('balefirewp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using balefirewp_excerpt('balefirewp_custom_post');
function balefirewp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function balefirewp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function balefire_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'balefireblank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function balefire_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function balefireblankgravatar($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}