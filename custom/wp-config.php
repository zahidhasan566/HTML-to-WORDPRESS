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
define( 'DB_NAME', 'custom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '8mO4~.g)~@53z#2)+s`|u)hq9)ZAaQ_dph9&F*~lsFybVf7B)U.y[]~%1Wjgc0~,' );
define( 'SECURE_AUTH_KEY',  'WO,yh}48&lS-1T$~okSyqI$LyeO~+z S[fS+vjZI!hR2|e]J|Tiqhj@&xb{|n{e;' );
define( 'LOGGED_IN_KEY',    'Enr{/m|VPhnXB*-LE,LxwD[Z6q{VY^IfP7p`]67,w.T@[ZJ[;3I^q-Z?=S.NIl&%' );
define( 'NONCE_KEY',        '%SP)u<gdq6?q+S;0OMW6jsj}9B2>(3u_!9QVKC${}:$#9ZB(pXA _}H0BP#b8X`k' );
define( 'AUTH_SALT',        '=#PgDqpxEDE.B(|_>?QV9KzUTO).>8P&IN,>n|M9X3bGp:%Laed.<Aq9HAJ]$P.:' );
define( 'SECURE_AUTH_SALT', 'H]a)hmk%-XI8K?Oe}.1cLrRybDgt+TJO24GZE0|R=%>-Gx!<U+,=>udFh*M0}J;t' );
define( 'LOGGED_IN_SALT',   '%}.|jQH$e7!cci3IJRv40g$3$)+nXVA:t&&,09DYUjW7UU2 <7jOhRtF@4kd*a&Y' );
define( 'NONCE_SALT',       '8TTH6cFItPGj0cw/Epn{O. ?DSQ!aprt^9f}PR?;VB-aCRq!/&|U+1cXn@MisF:<' );

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
