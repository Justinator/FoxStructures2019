<?php
/*Custom Portfolio Post type start*/
function custom_post_type() {
$supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
);
$labels = array(
  'name' => _x('Portfolio', 'plural'),
  'singular_name' => _x('Portfolio', 'singular'),
  'menu_name' => _x('Portfolio', 'admin menu'),
  'name_admin_bar' => _x('Portfolio', 'admin bar'),
  'add_new' => _x('Add New Project', 'add new'),
  'add_new_item' => __('Add New Project'),
  'new_item' => __('New Project'),
  'edit_item' => __('Edit Project'),
  'view_item' => __('View Project'),
  'all_items' => __('All Projects'),
  'search_items' => __('Search Projects'),
  'not_found' => __('No Projects found.'),
);
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'portfolio'),
  'has_archive' => true,
  'hierarchical' => false,
  'menu_icon' => 'dashicons-admin-tools',
);
  register_post_type('portfolio', $args);
}
  add_action('init', 'custom_post_type');

  /*Custom Staff Post type start*/
  function staff_post_type() {
  $supports = array(
    'title', // post title
    'editor', // post content
    'thumbnail', // featured images
    'post-formats', // post formats
  );
  $labels = array(
    'name' => _x('Staff', 'plural'),
    'singular_name' => _x('Staff', 'singular'),
    'menu_name' => _x('Staff', 'admin menu'),
    'name_admin_bar' => _x('Staff', 'admin bar'),
    'add_new' => _x('Add New Staff', 'add new'),
    'add_new_item' => __('Add New Staff'),
    'new_item' => __('New Staff'),
    'edit_item' => __('Edit Staff'),
    'view_item' => __('View Staff'),
    'all_items' => __('All Staff'),
    'search_items' => __('Search Staff'),
    'not_found' => __('No Staff found.'),
  );
  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'about-us/leadership'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-businessman',
  );
    register_post_type('staff', $args);
  }
    add_action('init', 'staff_post_type');
?>
