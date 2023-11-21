function graphics_visual_design_settings() {

    $labels = array(
        'name'                  => _x( 'Graphics Designs', 'Post type general name', 'graphics_visual_design' ),
        'singular_name'         => _x( 'Graphics Design', 'Post type singular name', 'graphics_visual_design' ),
        'menu_name'             => _x( 'Graphics Designs', 'Admin Menu text', 'graphics_visual_design' ),
        'name_admin_bar'        => _x( 'Graphics Design', 'Add New on Toolbar', 'graphics_visual_design' ),
       
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Design custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'graphics_visual_design' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
		'menu_icon'   => 'dashicons-open-folder',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'graphics_visual_design', $args );
}
add_action( 'init', 'graphics_visual_design_settings' );




// Marketing Settings
function marketing_settings() {

    $labels = array(
        'name'                  => _x( 'Marketings', 'Post type general name', 'marketing' ),
        'singular_name'         => _x( 'Marketing', 'Post type singular name', 'marketing' ),
        'menu_name'             => _x( 'Marketings Project', 'Admin Menu text', 'marketing' ),
        'name_admin_bar'        => _x( 'Marketing', 'Add New on Toolbar', 'marketing' ),
       
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Marketing custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'marketing' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
		'menu_icon'   => 'dashicons-open-folder',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'marketing', $args );
}
add_action( 'init', 'marketing_settings' );


