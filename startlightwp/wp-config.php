<?php
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
define( 'DB_NAME', 'starlightwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'd#nloWMv[hZ#c4B!sD=>CJM/kAg:{^5u@u-%j0pgkIkS8J8m(vjl0VZm!qnOTlqQ' );
define( 'SECURE_AUTH_KEY',  '6^20LLE!zVX%zoVQVcCypVpSN]*Lr$JcObpx?>I//mbtcyz_BrW5O,NA[dcNk&U[' );
define( 'LOGGED_IN_KEY',    '}3PSfAo#0f$YS6$GgX.)}!LNjvMFf>mFjd;At[m8h[Fh|tHJ05=}@DIhx,9Q`D9*' );
define( 'NONCE_KEY',        'e;Q^P+cMk8JZ*ub~3*Tcr$%pimt! ^fZ[klwBo`]a8j@.P Av}a/ p)6V=XQmFb/' );
define( 'AUTH_SALT',        'KCR6,m{nq~=;wRz`|;-^By-/}0|q}k,iSIXQnr?V<px3cI7sB!V9WpBMQ/ODO{N%' );
define( 'SECURE_AUTH_SALT', ':SV5%BD^*) ZF_VfBvsgmmeq]Zr`vcci~Wd/1af<uhtTplvw}.~/,n1yAHs]T>r%' );
define( 'LOGGED_IN_SALT',   'l|}(jZ$u_ypEKEWl09Lz1o-WAL7k&OiO^SvWWA=IfSryE_zJG@ZQa~}jCeHwwc3D' );
define( 'NONCE_SALT',       'I;ARW.uLo$e|oG&:NmxJ1}XA6kmy6<.RnPH?>F**c=X`)Y)B| )XI.$9?Doeyg&~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
