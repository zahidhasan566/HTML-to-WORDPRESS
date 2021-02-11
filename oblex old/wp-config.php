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
define( 'DB_NAME', 'oblex' );

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
define( 'AUTH_KEY',         'GOKZ>uoD)]P?%#Y7x^]Lz`trs4K=rKk(c@jC-.b>Li2*)x4H)D+$ClLAedE3hD|b' );
define( 'SECURE_AUTH_KEY',  'bw -?.t^LVlD8te#yS#@MY-az4PIKatR2l^c%GxW^nxRsrxTkL:z!8zyhm&8oR]{' );
define( 'LOGGED_IN_KEY',    '8uj6)J;&8&Y/?bXn:xFKewwxfl1}:%X/99V1/SXy)mExW,EL&RIYMp@Lc*!fa`uE' );
define( 'NONCE_KEY',        '+RSFcxZV]to3S+?`8Rmh&GAf-B>:;F:A)<oi)UBKtC64`G$ CJ5`CgR#0(9|rT3t' );
define( 'AUTH_SALT',        '([a)AVFh]dh1xjK<68 Fz)iWXT=c;87@4N{9mV0;9OWDPsooMM?gnEkhx]7)*6tD' );
define( 'SECURE_AUTH_SALT', ']EEH|D?w=-Xun2G0!cPa,&9u0`1cJKpv<ffm;pf;[M+BJ:?;)F#,xYvGiM+M3<?X' );
define( 'LOGGED_IN_SALT',   '3*{A8qZbX`y!-n-ME0hvX335cy&wQ1YbXm-@n:k=hv0+-3mBaGmNfG6vNl2^.W_D' );
define( 'NONCE_SALT',       'poZ64(1lN4b5ZWYl?#@.e6K-U%[hq/gj!Rh~MD)h*BLYzyi%CT [?GZbm.^(VJ(D' );

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
