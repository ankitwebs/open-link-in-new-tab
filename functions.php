add_action( 'init', 'new_tab_buttons' );
function new_tab_buttons() {
    add_filter( "mce_external_plugins", "new_tab_add_buttons" );
    add_filter( 'mce_buttons', 'new_tab_register_buttons' );
}

function new_tab_add_buttons( $plugin_array ) {
    $plugin_array['new_tab'] = get_template_directory_uri() . '/js/text-button.js';
    echo get_template_directory_uri();
    return $plugin_array;
}

function new_tab_register_buttons( $buttons ) {
    array_push( $buttons, 'new_tab_title'); // 
    return $buttons;
}
