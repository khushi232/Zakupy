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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'Mt%G%eR(MzqRny,M,pwBm?Yl dmEN0y,DCa0C2vE?L= <d17>ek#)gkk/#89Q1$f' );
define( 'SECURE_AUTH_KEY',  '^As[W8H`>wo0+C2ZA1)4c<:_LX{Azfs<wc $wO ZJ#aBqZfp>1cQ]nZ*;*Eq3),n' );
define( 'LOGGED_IN_KEY',    'w_HReD*Cc<_j#0+9`)pcu/bPOjvm//-@`@OOJs=w9!$de17.0zB[kWKW2YQc(FD>' );
define( 'NONCE_KEY',        'dqt/O(Q]~1Lw:!VmJbzk:qJ-_L>/.}}eWmb.d%&h!$yH`dc^col+^ko{HG36}i}R' );
define( 'AUTH_SALT',        'PN5bYCzE(~s2kB)|a_?hoOmbwqf8f1Y~DU%IHn-c)*0)g{JbQ(#7h3F&b]UPN%>3' );
define( 'SECURE_AUTH_SALT', '|+(cqsh&FHxsgis7 =ZDXdK!bRUyx4c6hr8_Y:O:kF,^Y>=r-^s~7[~WfH<{XJ8Q' );
define( 'LOGGED_IN_SALT',   '}P$p(PB9zkho%lES@x}M*eDr&P!%b7xcD+?h0v7JnmVi|c$_JD}X y]d*Dd)?WSZ' );
define( 'NONCE_SALT',       '[Ek[C[cwoH!v]cFP!1nhkUoma-tm2KW#@-Fr^ mXK femE%yNzFl*|R!hDTcUu{`' );

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
