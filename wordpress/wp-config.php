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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '@xr!%zeA+D1]198 -,>32o2T_XSd9lHa@a50Yz(,KK&t!EZy4<8Gg_3DEf0(W)hF' );
define( 'SECURE_AUTH_KEY',  'P;z9`I|=F^QX,6M6pd@t-i3y8ZX[_V|JL~MfZX{N 0_mZ .o_dG=L!nDe}hNY{Jz' );
define( 'LOGGED_IN_KEY',    'p5vy+$HraH&PEx?m{zTxo+;oUAnUS.sHaq[IXUXl.qfB?ELk#RjZDsau/67s@8}T' );
define( 'NONCE_KEY',        'Y&L-/(MiF=[v gF)7QhxZfhk0j~8L^^rz;Y6<~=)E2%PJnY|J`cMtx-(]iF]Kjsk' );
define( 'AUTH_SALT',        'V2?IskK^Oaer0nWU3[ 9qsjhye<Irh{g]UWaa)xHGi3) Rmg}22}IOSkHoDCJ2{h' );
define( 'SECURE_AUTH_SALT', 'GFM]^+7no`5@R<S*qE9!eb T5&9Pp/84MAZDcl$t=Qt6LAUmtLj(|o<.kWk?dz}y' );
define( 'LOGGED_IN_SALT',   ';Zvf`]u?bxgB%yAsU<{-(9Y@_G_G%A~0l_e+T<K/J7jV]1gv?1xsAEBwqrT7`fNj' );
define( 'NONCE_SALT',       '=VD`RfH]F:cHS!@*n0@NAvBvia=3o$qx?`|Y6cSs}j1uy~n;>(y(n_%#2;)?9+@b' );

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
