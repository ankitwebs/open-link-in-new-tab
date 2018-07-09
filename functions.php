add_action( 'init', 'droid_buttons' );
function droid_buttons() {
    add_filter( "mce_external_plugins", "droid_add_buttons" );
    add_filter( 'mce_buttons', 'droid_register_buttons' );
}

function droid_add_buttons( $plugin_array ) {
    $plugin_array['droid'] = get_template_directory_uri() . '/text-button.js';
    echo get_template_directory_uri();
    return $plugin_array;
}

function droid_register_buttons( $buttons ) {
    array_push( $buttons, 'droid_title'); // droid_title
    return $buttons;
}
