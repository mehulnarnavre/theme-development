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
define( 'DB_NAME', 'theme-development' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'bZ7;OVJYJ(K0M]aSGX>E,]2dw1wx6etZVo bd@R.<93-F@%jL!KQYxEh3=oTv<:e' );
define( 'SECURE_AUTH_KEY',  'F!Q+Gl,4eYU.^N)!Z<+NsP@@{c>$0mwZ=KK_ag0@[bb&4l![{c^R76Nj^glkY9,T' );
define( 'LOGGED_IN_KEY',    'HB<BI1f7id Z_]h 8.C[64S,bEB^},vb8PjhDYyeCc,9bg>260BmraO(:!:Ni>+Z' );
define( 'NONCE_KEY',        'CvAvk#MmD8U3byCT^`kWz,[|oVi/]oG@t`]4X5Zwn6ZD|KewpV1`6j:z-l?INt6V' );
define( 'AUTH_SALT',        'mlARv1/HF@~UzCJwSIo{C8FxlO7(|Rm/?RdDlsf;CR]a1UL=_,Ac@%E9xXl}qF<x' );
define( 'SECURE_AUTH_SALT', '%=b${_EfK4 l~e{0rQu^9y6}IbvyU`rL]~PWH:U9w39*sYA&FK?>M#qj51A%jyQT' );
define( 'LOGGED_IN_SALT',   'S8s$F%/2Gruf1Woe[`6/.5vu*=[HkmX#dm6NZGpw@5 !;?^nu}GlWlnI_]]iwbpQ' );
define( 'NONCE_SALT',       'Cs4|TJ=Z+5.(|Wv:OVM>gAPok9[C}$}p8d8Yh5jL80SPvmj9[TUcpp{/x # `WT8' );

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
