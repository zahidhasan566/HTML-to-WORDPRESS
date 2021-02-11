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
define( 'DB_NAME', 'theme3' );

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
define( 'AUTH_KEY',         ') t!Q2<e-iQ7[+b+w)M%I?XGz?h/8a;jdWnz)pM*);!NS?AqC51$|`(M+L,WG<-t' );
define( 'SECURE_AUTH_KEY',  'hM_>!z_?Mz)ZP9N7DHZQqY:;8Uo?+s.W(k$AR+-R747DbkrNC[Lasx&mh?YL<lIQ' );
define( 'LOGGED_IN_KEY',    ':lu:gx !g[P:}eFdATj@%k [t^t$Nn</Wbx/G[|Ch#8?:_xSB4}OKrKuf~92e4u8' );
define( 'NONCE_KEY',        'XhebE|9O($xBU4lkU$VA&n$.J9kV@#,:x7|&Y1Ttw6=>KCqf>HXA~q <iY,}Z/Q ' );
define( 'AUTH_SALT',        '}Xs;9@.K$69c?9g&aMX^<`[x?v4=avfbtu~}L?qJ<^l#z/,+L<]K7s4_h~Z3H$f[' );
define( 'SECURE_AUTH_SALT', ')plxhzz1Q2Hex?mTF-~VIIbBwo!Mz*(d+J{vM&iABusHp/P[V>^EA+)7WxI*Ti%F' );
define( 'LOGGED_IN_SALT',   '.4vj=pJV6;qpDX=Y|+PB>(#AUCbIw-%XJx*80QN@*_]r>{vqQEe%]ab$y>moNHCP' );
define( 'NONCE_SALT',       'WJf.[y9&fn_p2Q VP@)5r@hE)k5^I U4oF7M4EMWEV[`j)]+R|O)a(R4(G$G|!5c' );

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
