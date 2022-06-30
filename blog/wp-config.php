<?php

define('WP_CACHE', true); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'huelladi_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's2vgrx0o1bhvjkqy2pol9vtipmfkplm9ndah0d7ycqvv1ydqbyzuq8kt0zapmgjo' );
define( 'SECURE_AUTH_KEY',  'hkxicvqmpd5axcs2j4d8lfdsy8wotc0sg1ubp2znvvfjawgn3rfdzh0c2olgc4hh' );
define( 'LOGGED_IN_KEY',    'q0bxfharxcxuwhqswhlgghvwzdbavwe9fbioputv7ujsuslget30y3pbieu1y4hd' );
define( 'NONCE_KEY',        'bcyhnkwitofqiqwu3nvcmqtqxcvxmhjtvfyyp0mdqa0xvufbeb4vhysitiotdzgw' );
define( 'AUTH_SALT',        'c0zlj9abk5oflfwaaibktbwdc5ti0hseqij5pmhjiywyeri5fnfq4ktkn21veo1p' );
define( 'SECURE_AUTH_SALT', 'mlxvooi8h2wy5wigao2thlglcxyiiyz1jpft1octvdx4ksd3znh4uy9wlifdo7c9' );
define( 'LOGGED_IN_SALT',   '8eksflewuhpingp1va2rxglyzg4iagm3kstoqsrr26kbxreijc5np5u4wtetxkfk' );
define( 'NONCE_SALT',       'msfhsiuxwgkm65lr6wkuhyvbasqwc26xiq7i8s35xiwygif751oaznmrwlxsivif' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
define( 'WP_DEBUG', false );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
