<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'uSiCNv4yAm4sQ+oIeCkmc7qBBM9ch0z/4ltM3MvA84VMdvx+ksVGDGbYndk93pvE88QXXN/uv3HVO2AIWptWDw==');
define('SECURE_AUTH_KEY',  'lrv2j+VU+P2gqAxpfqhMehrQxGYH3ulk/WAX5Iw3VFeWxDqpCiQ6NU0lO7+oIaIqWlJTE1qVvH3U2IukaYgt3Q==');
define('LOGGED_IN_KEY',    '0egvawOz9c2ToF6jFXMQ9p4h7fxPrmqAKvX7OE0g9f7sI4ARqwZJf3LFh7NalwYIQubAOapICpjeldZqDl15Dw==');
define('NONCE_KEY',        'AUtAO8ytuvZjb3QTrb/Mu4RikE9VT8l6EZTfDSy/9ahwDGv5+dmafxi8oFYRAXOS9qdIMe6ypD+yIHgUHziRjg==');
define('AUTH_SALT',        'js7pMs1gmgGs1/WYx/z8Gla+HYBg4MRaC4lr74tjGen4UXi/q+tM/NRAfkEFSypAYfTo/SOPUkXVy6YKqfoAiw==');
define('SECURE_AUTH_SALT', 'gOx67k/rMLAz0P+Ed/5mThxg1eQvrbpDPuRroG55VL+wDgR0eCO8VsHwG8CGx18ASDTLFKfqJa8WOqIEEM3Clg==');
define('LOGGED_IN_SALT',   'OF+XS8Nf/jPtsF+uK5IaBPbNnKe/j9iKPptP6XtWKd5JZgY+yCmMODwU5y/PG6bTSwqJHRxVgoPiD7EFn0Uuxw==');
define('NONCE_SALT',       '5vO1l+wytvjkqD4W/ptM1jgf/kMiYxI6S0kD8G4h20KE38bFIyhqXWEbzJjdpmpOP7IRD36iUHMXi5sMDWmbTw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
