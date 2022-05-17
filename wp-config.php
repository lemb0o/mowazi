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
define( 'DB_NAME', 'mowazi');

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
define( 'AUTH_KEY',         '/$w _2:A_ y$/A0O0+qT=YJM;>n3mkPQX.Zi0T{5d~$b8vW;Hh(xTh^c.|>cWkr[' );
define( 'SECURE_AUTH_KEY',  '$aA?bUh$u_3f%p<rNA7czrV&uv29ZG4ZS.`sRd!BhIhY,%f>LrhW 1ZJm%HS<c]O' );
define( 'LOGGED_IN_KEY',    'axBm/(_NNIX#1ASU~O|vi`p~lx (TNK*HHX{+SV`Hmn=?lN87gz:GgL`$#3{`xQA' );
define( 'NONCE_KEY',        'R55bn|[@MRa>kNRdh|1+.f_/M4^sH-{%{vLo~ae(,Nk8vC#e_UJwqn!N>sq#y%x-' );
define( 'AUTH_SALT',        ']`E{K7/O;pt0?Z$V&H9SWc[_PL=!-EAok1r~S%;_=S#i_4flQQ.q!Oj4I_ iuG}C' );
define( 'SECURE_AUTH_SALT', '>H@)ZQ>srAKb2a!uJvt+nqR3piq7FYL>7m[b #~^Gr(,s[t(e]E>vI;Q=>>bWG%V' );
define( 'LOGGED_IN_SALT',   '%YU:y_RI@$E o5ln7d! 5(OCPkj@KuwR:EcbL/k84Ol~klTH% b5omLKa@6OzWME' );
define( 'NONCE_SALT',       '3FJ}oDMGHZ/*!/Bwy.Zx/=MkjSPei<l2LIZ7nh=&Bpr$L:N3,wRf$d`1iaEdkOa_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mowazi_';

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
