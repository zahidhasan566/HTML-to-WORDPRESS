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
define( 'DB_NAME', 'theme4' );

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
define( 'AUTH_KEY',         'Ws<NLaKj:m[;:l2K9bkssvSj8P@8.J;<4F2e8-H;M2Q|1xD+rr;>6L7?7(%+B Kp' );
define( 'SECURE_AUTH_KEY',  'Ypfy!ZakI07XeP}{h+dT& *XTs{^t15l}pt>D?F+ZP9</([iq8&q=c|8 5vU.gb4' );
define( 'LOGGED_IN_KEY',    'yb#n](4su5B0lsq89(|Vnq[MHF,>bJDfV_/fKwe/hT-8CZq4Bgqz/!@)_}_)AcQ}' );
define( 'NONCE_KEY',        'RtN{p1)E8-k<#}gcI/D^-X1jm >lJBj<BWOGC5Z]k>E,;v0qR[!V%ZwN>2s&wl/y' );
define( 'AUTH_SALT',        'dr*d<Ai(9E `d!21DT|a=7/Gta>Wlu{i]q*{?gc`s-:TiyVy3H/+y_&Ifw<wHG}r' );
define( 'SECURE_AUTH_SALT', 'La1HlXsv6 h%Ysr/Um,JdxA #${yhdXm+yilQ>VfR9OJ)cdUlBC@=ZoLB5KZy| U' );
define( 'LOGGED_IN_SALT',   '&/a>dt>r1ZhaJS]@NG|Px+rq4KC}kH h|&GKq|@ktzqb@!ahrXtX-9DoeH2VntZ$' );
define( 'NONCE_SALT',       't,GkRekmw(:GGHuN7J&[JiK:%[}3Px%QDq.`fHrk<4K?=&9N`%lpHst8.sYf3wFh' );

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
