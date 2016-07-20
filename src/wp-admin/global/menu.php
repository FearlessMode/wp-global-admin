<?php
/**
 * Build Global Administration Menu.
 *
 * @package GlobalAdmin
 * @since 1.0.0
 */

/* translators: Global menu item */
$menu[2] = array( __( 'Dashboard' ), 'manage_networks', 'index.php', '', 'menu-top menu-top-first menu-icon-dashboard', 'menu-dashboard', 'dashicons-dashboard' );

$submenu['index.php'][0] = array( __( 'Home' ), 'read', 'index.php' );

$update_data = wp_get_update_data();
if ( $update_data['counts']['total'] ) {
	$submenu['index.php'][10] = array( sprintf( __( 'Updates %s' ), "<span class='update-plugins count-{$update_data['counts']['total']}' title='{$update_data['title']}'><span class='update-count'>" . number_format_i18n( $update_data['counts']['total'] ) . "</span></span>" ), 'update_core', 'update-core.php' );
} else {
	$submenu['index.php'][10] = array( __( 'Updates' ), 'update_core', 'update-core.php' );
}

$menu[4] = array( '', 'read', 'separator1', '', 'wp-menu-separator' );

$menu[10] = array( __( 'Users' ), 'manage_global_users', 'users.php', '', 'menu-top menu-icon-users', 'menu-users', 'dashicons-admin-users' );
$submenu['users.php'][5]  = array( __( 'All Users' ), 'manage_network_users', 'users.php' );
$submenu['users.php'][10]  = array( _x( 'Add New', 'user' ), 'create_users', 'user-new.php' );

$menu[25] = array( __( 'Settings' ), 'manage_network_options', 'settings.php', '', 'menu-top menu-icon-settings', 'menu-settings', 'dashicons-admin-settings');

unset($update_data);

$menu[99] = array( '', 'exist', 'separator-last', '', 'wp-menu-separator' );

// This would be needed if it was in Core.
//require_once( ABSPATH . 'wp-admin/includes/menu.php' );