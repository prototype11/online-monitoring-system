<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U#MdE?sPTri:.aKF,vRKoT03v,>yri.L`X:~G9,^k/51&%vxLcNDevED6MKvfw1`');
define('SECURE_AUTH_KEY',  '[^?5t^!NV,E;C![&i<[tbR*t+ qX_6Q!4<0ya!>oK!Y7 3?7.H26iSMbl[LBvkVl');
define('LOGGED_IN_KEY',    'EA3rv=5kDo!/aswj=KH0(+O^i_5S<B-[^[nA8NU`8>nxv;RsG)R/-b:]K{IEh=Wp');
define('NONCE_KEY',        'x?Fb[brK*-b$4T2(6%yTO5pG?(R*L=Ez:_l5fPp_`;2r,G.oXL~?%f/N=8~6TN1!');
define('AUTH_SALT',        'X0#EmUE;*wlhi]MzQV,`FYIn)x:;W&psN,mVtMU)L:lA^NSum0(<gK6=L_6Xe,;l');
define('SECURE_AUTH_SALT', 'b0dVu.r<3rZ(z>No@u4{;);WhfHd}<lw4)QVej(ph89)BnF%{oM*_<F9|gS(h}@6');
define('LOGGED_IN_SALT',   'al5f@|d:6Izkh8q:)df^vBp&%)Tf%lKxh`]B>x(<LP36G{G4.mtZaD}#Gz_arC=u');
define('NONCE_SALT',       'ju[GsuDC#~mVTy LUnR}fCC`>rupy&u.Hon;}vf<Xj4haF&!=]i/8}w3h2gI*F6E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
