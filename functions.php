<?php
function mytheme_setup() {
    add_theme_support('editor-styles');
    add_editor_style('style.css');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('menus'); // Add support for custom menus
}

add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_blocks() {
    wp_enqueue_script(
        'my-block',
        get_theme_file_uri('/blocks/my-block.js'),
        array('wp-blocks', 'wp-editor'),
        filemtime(get_theme_file_path('/blocks/my-block.js'))
    );
}

add_action('enqueue_block_editor_assets', 'mytheme_enqueue_blocks');

// Register custom menu locations
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'mytheme'),
        )
    );
}

add_action('init', 'mytheme_register_menus');
