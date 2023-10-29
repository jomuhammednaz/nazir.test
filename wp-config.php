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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Nazir' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '7pwFtz16HmBWvpO61jsVusZsKDzEfRsvxzhmUda4KQxov1hG6mIqYMcrDxyXJeLE' );
define( 'SECURE_AUTH_KEY',  '3MaUwQlwqM1tvAw96U77xqmwQgaJwSMtT7JushSFQuN2wAjTovElNLWKAvDOwdkC' );
define( 'LOGGED_IN_KEY',    'QivBcQkoezfxMSOIWRPXjWxLVXFYvA6lnbQ3NxCWQgj7xDNMW4faNISjIVodAbZX' );
define( 'NONCE_KEY',        'VgVVtEU9vg3YZ0dVQux9oj1HwTbqx9pJACMfGe8iRgvjjz0KVgGgZV244eKIPE8W' );
define( 'AUTH_SALT',        'Z4NWCWzTSi02ndNpyKOspIoYXNSTFV812a6t8bW98ccNFaL7Z0JuPzAtHBWihOXC' );
define( 'SECURE_AUTH_SALT', '2soDCRqGsGiol4GipAOyzgmZSbNfO3OlPHEFw8oYhlHqhwsv71n4ygqbfIHN573z' );
define( 'LOGGED_IN_SALT',   'kfcsGdTV8YP1WQISt4pkGLXVD5MK31OOVx2tbpeakQxEXNXjE0lt01oqj4nQ8DSX' );
define( 'NONCE_SALT',       'm7RUUrLZ1mpjgG8NTRICam6xe7JzGC9Xwx6aViw0pym1eGBSLQeOH6cN1kj5XNBO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
