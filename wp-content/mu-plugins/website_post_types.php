<?php
function website_post_types(){
        register_post_type('service', array(
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Services',
                'add_new_item' => 'Add a Service',
                'edit_service' =>  'Edit Service',
                'all_items' => 'All Services',
                'singular_name' => 'Service'
            ),
            'menu_icon' => 'dashicons-admin-generic',
            'rewrite' => array('slug' => 'services')
        ));
    }

    add_action('init','website_post_types');
    ?>