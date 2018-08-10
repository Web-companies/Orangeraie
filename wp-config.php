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
define('DB_NAME', 'orangeraie');

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
define('AUTH_KEY', 'S?;Ykk{^fSuC{pVl0%Vtw7OxCih,4q75vIB[DCvp;MwU8;_7&~yk*pjT [RGt?%|');
define('SECURE_AUTH_KEY', '5 %V-~kzz}?6atO#x^o{%pZ>]&@zrHZw.D=moPz}Rbq-;4xWoL72H#i3+Z%l1Czs');
define('LOGGED_IN_KEY', 'n.OYdsa>GoWMNaYmo>@Cs^D-yK>@){BP2,[;SvCbJ<[]tVP+2FWw1f02 Q4(8&)j');
define('NONCE_KEY', 'S[r`7`&F2ws!2IiAF$[-e`)q-.NT9?s^m.4@F){xD:8.gQVxwa{^_%<FK?!^OHRo');
define('AUTH_SALT', '|>qYdmgSj_V~[(1V7=j`B~{Z]/L>$i##98B+:z>d[|H!*-Op;^w<K|H hQu?~^5O');
define('SECURE_AUTH_SALT', 'z2tOGtB|pGhNRld3S8Zm]uO+^-hOcz?E^>j;C|V9L+q{wF5q$jjt*v! BGcHo]_.');
define('LOGGED_IN_SALT', 'ibw*.pNb@hxWQtH:KYYarD8mZD5KG^!/MFmCpn?~|J W<@b}@JPG>&M<NE:b|%W*');
define('NONCE_SALT', 'Wd+^$LC(:9Cu >A3#nOg{l7nt-/s=4,)7Y@]Q.a[)-b@>*Zo|HJU09e+fhr<xk++');

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
/* WordPress debug mode for developers. */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);
define('SAVEQUERIES', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
