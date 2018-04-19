<?php
/*
		===================
		Custom Post types
		===================
		tutorial link: https://www.youtube.com/watch?v=vSM7w3zzlSU&list=PLriKzYyLb28nUFbe0Y9d-19uVkOnhYxFE&index=18
    gets required by the "functions.php" file
*/


function sambacemetheme_custom_post_type () {

  // Reviews
    $label = array(
      'name' => 'Reviews',
      'singular_name' => 'Reviews',
      'add_new' => 'Add Review',
      'all_items' => 'All Items',
      'add-new_item' => 'Add Item',
      'new_item' => 'New Item',
      'view_item' => 'View Item',
      'search_item' => 'Search Reviews',
      'not_found' => 'No items found',
      'not_found_in_trash' => 'No items found in trash',
      'parent_item_colon' => 'Parent Item'
    );
    $args = array(
      'labels' => $label,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'revisions',
      ),
      'taxonomies' => array('category', 'post_tag'),
      'menu_position' => 5,
      'exclude_from_search' => false // Cant be found by search
    );
      register_post_type('reviews',$args);


    // Interviews
      $label_0 = array(
        'name' => 'Interviews',
        'singular_name' => 'Interview',
        'add_new' => 'Add Interview',
        'all_items' => 'All Items',
        'add-new_item' => 'Add Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Interviews',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
      );
      $args_0 = array(
        'labels' => $label_0,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'thumbnail',
          'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 6,
        'exclude_from_search' => false // Cant be found by search
      );
        register_post_type('interviews',$args_0);

  // Gigs in Tour Dates
  	$label_1 = array(
  		'name'                => 'Gigs',
  		'singular_name'       => 'Gigs',
  		'add_new'             => 'Add Gigs',
  		'all_items'           => 'All Items',
  		'add-new_item'        => 'Add Item',
  		'new_item'            => 'New Item',
  		'view_item'           => 'View Item',
  		'search_item'         => 'Search Gigs',
  		'not_found'           => 'No items found',
  		'not_found_in_trash'  => 'No items found in trash',
  		'parent_item_colon'   => 'Parent Item'
  	);
  	$args_1 = array(
  		'labels'              => $label_1,
      'show_ui'             => true,
  		'public'              => true,
      'show_in_menu'        => true,
  		'has_archive'         => true,
  		'publicly_queryable'  => true,
  		'query_var'           => true,
  		'rewrite'             => true,
  		'capability_type'     => 'post',
  		'hierarchical'        => false,
  		'supports'            => array(
        'title',
  			'excerpt',
  			'revisions',
        'thumbnail',
  		),
  		'taxonomies' => array('category', 'post_tag'),
  		'menu_position' => 7,
  		'exclude_from_search' => false // Cant be found by search
    );
  register_post_type('gigs',$args_1);

  // Shop Items
    $label_2 = array(
      'name'                => 'Shop',
      'singular_name'       => 'Shop Item',
      'add_new'             => 'Add Shop Item',
      'all_items'           => 'All Items',
      'add-new_item'        => 'Add Item',
      'new_item'            => 'New Item',
      'view_item'           => 'View Item',
      'search_item'         => 'Search Shop Items',
      'not_found'           => 'No items found',
      'not_found_in_trash'  => 'No items found in trash',
      'parent_item_colon'   => 'Parent Item'
    );
    $args_2 = array(
      'labels'              => $label_2,
      'show_ui'             => true,
      'public'              => true,
      'show_in_menu'        => true,
      'has_archive'         => true,
      'publicly_queryable'  => true,
      'query_var'           => true,
      'rewrite'             => true,
      'capability_type'     => 'post',
      'hierarchical'        => false,
      'supports'            => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'revisions',
      ),
      'taxonomies' => array('category', 'post_tag'),
      'menu_position' => 8,
      'exclude_from_search' => false // Cant be found by search
    );
  register_post_type('shop',$args_2);


}
add_action('init','sambacemetheme_custom_post_type');
