<?php

namespace App\Products;
class Products
{
    public function __construct()
    {
        add_action('init', [__CLASS__, 'register_products_type']);
    }

    public static function register_products_type()
    {
        register_post_type('products', [
            'labels' => [
                'name' => __('Products', 'test_project'),
                'singular_name' => __('Product', 'test_project'),
                'add_new' => __('Add new', 'test_project'),
                'add_new_item' => __('Add new product', 'test_project'),
                'edit_item' => __('Edit product', 'test_project'),
                'new_item' => __('New product', 'test_project'),
                'view_item' => __('View product', 'test_project'),
                'search_items' => __('Search product', 'test_project'),
                'not_found' => __('Product not found', 'test_project'),
                'not_found_in_trash' => __('Product not found in trash', 'test_project'),
                'parent_item_colon' => '',
                'menu_name' => __('Products', 'test_project'),

            ],
            'public' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => ['title', 'editor'],
            'taxonomy' => true,
        ]);
        register_taxonomy('product_cat', ['products'], [
            'label' => 'product_cat',
            'labels' => [
                'name' => 'Product categories',
                'singular_name' => 'Product category',
                'search_items' => 'Product categories',
                'all_items' => 'All Product categories',
                'view_item ' => 'View Product category',
                'parent_item' => 'Parent Product category',
                'parent_item_colon' => 'Parent Product category:',
                'edit_item' => 'Edit Product category',
                'update_item' => 'Update Product category',
                'add_new_item' => 'Add New Product category',
                'new_item_name' => 'New Product category Name',
                'menu_name' => 'Product category',
                'back_to_items' => '← Back to Product category',
            ],
            'description' => '',
            'public' => true,
            'hierarchical' => true,
            'rewrite' => true,
            'capabilities' => array(),
            'meta_box_cb' => null,
            'show_admin_column' => false,
            'show_in_rest' => null,
            'rest_base' => null,
        ]);
    }
}