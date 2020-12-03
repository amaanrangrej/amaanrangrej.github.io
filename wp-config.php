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
define( 'DB_NAME', 'Rangrej And Sons' );

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
define( 'AUTH_KEY',         'fAB4124k9tkrZ~9uG<9Op62>iKb;OD&z3M!.!`&;CPyrl_@] chTq12a^L=^E~x>' );
define( 'SECURE_AUTH_KEY',  '0KZZH:c@Pl2<PE],pM}[LUpXtK;~I.tUlIra>2v[[$PtrH(c/M8(K&(h%}X4 ?.!' );
define( 'LOGGED_IN_KEY',    '3lmFg3XNqKPyQVQ&VN0:bYi3E*8RO75dbQQy=su*@1Fg},e1Smi~N9ReVCAnC(f#' );
define( 'NONCE_KEY',        'n>Mfea0:S.IhdAm:2$qae5 x nWE;X~q*GEkNr;3JZ}E}`9ba[Up5apc< *D}!u=' );
define( 'AUTH_SALT',        'juk}y#cn5|f9R8]rGQDF|s[,.[O ?L#U:XGDWy9hA*)EFG4;j6rlS+~):Ab_rHzO' );
define( 'SECURE_AUTH_SALT', 'bSY*A,&oZo52mCguc%}:^r_]a;h;(*D0,*h+zX~3++S5K86?5Ip;fR;!sv9+m5?1' );
define( 'LOGGED_IN_SALT',   '9lzUM>I[As%0# *a$]BKMd*uza,w0Kb~uD@|15!{m`Ha5vt? Y3}j!yBd^r-u4*l' );
define( 'NONCE_SALT',       '3QL[Ileu(t?@Jz$O&YPXNUtP^1onmKFtz7r&d(1.aW~`w-xK6&+qn{pq0p%Wi|zB' );

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
