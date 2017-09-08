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
define('DB_NAME', 'devbb');

/** MySQL database username */
define('DB_USER', 'devbb');

/** MySQL database password */
define('DB_PASSWORD', 'wqd_34fwe;lkKCFWEK__');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'E7!L-P^5 F9.q:2.ai0+V_quvxl,BI`rh&$Yc$!Knlgia:k,0I;)zSKQ=l~M||#U');
define('SECURE_AUTH_KEY',  '#nfh;o.5]inH n~m?EM6Tk=_]voy|YPk#CBoHT4rl4skIk$Ub1s~r YWFOIlwqvC');
define('LOGGED_IN_KEY',    'Y:+jrkb@1Q;SWTtsZZJ)qBPo `5S_:9?LH|Ik>d{,bt^8CbyphXHo0vU d_g}2m5');
define('NONCE_KEY',        'qrzPCH&ml2?8})@: 2*a|RDLl^=y-VY)b9^zl8=0f0zuZcM0+0p[GBj&lHba|-Pa');
define('AUTH_SALT',        'SxA-_:{XrFwK%I}H3axV*tK-cl6;. n{FeCrRRU&B=&`o$heBu0({lim/)o+vIc$');
define('SECURE_AUTH_SALT', 'Mg);/q@bI+uJ|JpTp_AB[XYlx$Ya6l<swg zq7MnPA^Ij@[LTZqy0rX|`Lr`l^>{');
define('LOGGED_IN_SALT',   '+sKW< `!eFS*HH%6/X=Ve^2/n%6`}?I5?oTjz!G9c|,IC%|nux:[N^oP4VsHTtEO');
define('NONCE_SALT',       '9JLo.9jd!%_S0vYlq(!Q=R#p3Hq2X7(.k>f9?Q?^t`:$=,!6dtF:N.F>A@?YO2T/');

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
