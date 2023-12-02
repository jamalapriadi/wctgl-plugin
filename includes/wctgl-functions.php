<?php
 /*
 * Add my new menu to the Admin Control Panel
 */
// Hook the 'admin_menu' action hook, run the function named 'wctgl_add_my_Admin_Link()'
add_action( 'admin_menu', 'wctgl_add_my_Admin_Link' );

function wctgl_add_my_Admin_Link()
{
    add_menu_page(
        'WCTGL Plugin', // Title of the page
        'WCTGL Plugin', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'wctgl-plugin', // The 'slug' - file to display when clicking the link
        'test_admin_page',
        'dashicons-tickets'
    );
}

function test_admin_page(){
    ?>
        <div class="wrap">
        <h1>Hello!</h1>
        <p>This is my plugin's first page</p>
        </div>
    <?php
}