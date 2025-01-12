<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ycjhrfmy_WPA2A');

/** Database username */
define('DB_USER', 'ycjhrfmy_WPA2A');

/** Database password */
define('DB_PASSWORD', '_uz>yIrQ)uqXh=cnh');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'caf7314d94e6a967177efcad304205c849109c9d4f419cb5a1249659c93f969a');
define('SECURE_AUTH_KEY', '419467f75df87b6196aab65e6a66e4b20c7c02b881e15ca30e76a4b1b43bd9e9');
define('LOGGED_IN_KEY', 'e74fab7b590fd23ceca3e7d21d4cc247d1cfc077563ecbc8fecfb71371aed3f3');
define('NONCE_KEY', 'd78b2fb6ea502ceb21e44020e5c02efb8cc4a7d91293c05edf6bd21638242964');
define('AUTH_SALT', '92191289fa234cbc2f8641e2e75e0f9e43044b2780cc86002879a129e7962c8c');
define('SECURE_AUTH_SALT', '50bffc071c3d91032a43bbe01622d309964110ca50249b6c638004b932f31122');
define('LOGGED_IN_SALT', '561466df58928514b9f3f83ad078eac57395f87a975abbfb7cfe8bfa12cf96d8');
define('NONCE_SALT', '314c8900549c166dacca9a52e7765547486ceadba9201b7e8706624e0352d9cb');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'Yfd_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
