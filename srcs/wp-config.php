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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );
/** MySQL database username */
define( 'DB_USER', 'admin' );
/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define('AUTH_KEY',         'toOv6`ft-g+8|)1L.SU[({zi415x36%:ZcSWOla_<OG*-e!A#X5q@XV8>wWRz`Lj');
define('SECURE_AUTH_KEY',  '>Jxip=VOjQ?$C!AS_lOvYM<-}Af1~jWXkYmzj9C.T37I_ZF]kGwZ+`+kAjhU-6T|');
define('LOGGED_IN_KEY',    '&o#m7jiV`gSY-y6Ub-|n4}2obXAYp:MJg?[JnnCjWslh>V{b42tIlnS;jm,5f,+F');
define('NONCE_KEY',        'N#|/@K/(|w(k.$D0^kHuq^}yjK>;nGcD`gt|f&o7YO9iiK}Z:JFALG`Gx1l^UzPh');
define('AUTH_SALT',        'k3#|eX@N*~Ti~0|FWp%O%~rkf<x:Gi5<R-Po0}mBDv(?SS|(2+#DE<zu<NwZH4ui');
define('SECURE_AUTH_SALT', 'R{gk/ekE4$QB;*iMxNb3)-TpVQ_Xh1R5~*UT$Nc.S9Uzwb*G4fPGoGA_tiKf cc3');
define('LOGGED_IN_SALT',   '$BVi+KkM}$Qy>w.eb3s>IfII`9UUVZWF8)A#J D,Q!5X/5#=9L6dGtEdE&<23=/q');
define('NONCE_SALT',       'B!kbV$-?oI+$a3<OQQYw1fDG6Cx_[@f-_ PSN)V9-v[j0e+Rk|f@&bHrP96Wk)im');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
