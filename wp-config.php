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
define( 'DB_NAME', 'bodega' );

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
define( 'AUTH_KEY',         'Go%4A_P@aLH^g=eq>s<Z.h??*%3kALR=*6+Yk%J(h3?hus2P`<Z_!W>z+E#;9V?%' );
define( 'SECURE_AUTH_KEY',  '_uy}mD)ue@e0;XEKkWp0mN0n//q!J}.92n=^F0dx!X8xgYDC:_Yz#_z$eHpx,/n<' );
define( 'LOGGED_IN_KEY',    'WJAr1Gf?6MT]+4xk2a:_|9!S@{8?[xU[nz@ndq&a>,pQ%<C3|%FkZKjoB-@C`oY`' );
define( 'NONCE_KEY',        ']VfM.cScP}ZhHHTfB#!XO20;(2>aoX2Zdk$w45x7-clT70}.g]ciIwg`im&nVtd@' );
define( 'AUTH_SALT',        'oPN}Q7H-B%jaD|Z/p#g9Q3Dcxl|F@^>jR$_H=9:4I9X]{/l4 p~22q^b^Rj(Rq3;' );
define( 'SECURE_AUTH_SALT', 'D.XN_X>WBp}h)%#= Ec>j7&OH$KF !faUd?,]rD{E_3#F{z0q: Y4cW&+$V=?$hr' );
define( 'LOGGED_IN_SALT',   'v+TCbcqkL#tSL}=95Bq@qSarp|8}z#p 5Wh8=?Q*sd(Q9 u{zz0n5|06J$5h^G/U' );
define( 'NONCE_SALT',       '2m`yb0sDN8Q#Za,elt4,u2yxUd+pTH~xu@*&u@i,QbN+K7{0Wq0O{U/47wTn6k4<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bd_';

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
