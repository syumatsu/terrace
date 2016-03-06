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
define('DB_NAME', 'heroku_415f99152e880f2');

/** MySQL database username */
define('DB_USER', 'bef997e69034ae');

/** MySQL database password */
define('DB_PASSWORD', '6281930c');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

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
define('AUTH_KEY',         'eC>33D#N5Qvy4+:|-5R|g~,+eDVBKA5J+$+r0:zD1n7>S0cj*|!|CYPmu0E&@.T^');
define('SECURE_AUTH_KEY',  '#T8?@bd63?o^<U&~(+xoAezcM9nj6.cSxRhnN|XmX# |X0:k)h[?9#y+,=.uC$a0');
define('LOGGED_IN_KEY',    'J4vU*bNKtTWUMs/V|fjSClu4N!NJ.+&7JO0Ja!~!EwQ?(D&J7D:C+i]nSuR|dpM2');
define('NONCE_KEY',        'UY.2*YYf;QoagEGw2-zz/$f<L?QEF)G&A(*@ToV2b,rUa-Z/`,<5I5^*]h|I%{A2');
define('AUTH_SALT',        '2[]RNEX[6S}mLg!v;jQ_e6}$(LiEQ3qT2t<a97cfe|uWHgeQLpJ:>RA#W95=TOa|');
define('SECURE_AUTH_SALT', '8^*zJna:JJgTj h]y88Ok=9fCOGXC6hpBKCL#@?ey@>j+J +-A-`LrJi}qab$L%t');
define('LOGGED_IN_SALT',   '_~fzT-j:)QD$Sv[ehyx7`fy!{Y<0VDsDL)R|GUuAcC?jp+0$H(5d@[s:I1XQnZ.:');
define('NONCE_SALT',       'bP_~50rL0/<*6|1rCY(SUD:3vv#4^-d)G_QF3)%7 {u$4N0Ndqzom;8&!uWdo~ay');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
