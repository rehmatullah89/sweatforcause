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
define('DB_NAME', 'sweatforcause');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ';[A&m#e[ ,F$v]rRP1iZt5//vWHIPd`umsk%nF,}Cfp~}c18Zm`lDQ8EJ!62D{8D');
define('SECURE_AUTH_KEY',  'UF.Y;c{,NB(i&%5<kj|CP#Ajc?ZT/DCV)jmgfMP6;R>c>8Wnl[i~uf)W$-By|LKB');
define('LOGGED_IN_KEY',    'bzJo6!wjN$bm990gNj3L3,,6Js7fyGIkzU-@QV+A!t})bwk,h-73j}J,9 ><)A`p');
define('NONCE_KEY',        'DGZz,9gc`]RpT-#APAer-YXARFvnRgN2(x >I(=-T_-?TwID6Qbe:d{uv$mQ.5Dh');
define('AUTH_SALT',        'Nw6}E=}F0E*D5`$?5%w`<O_h~hlzhPJt!4<7:FB??ehBpY&f2%$4oxlm/$yPq9j$');
define('SECURE_AUTH_SALT', '^S`I]Oh:?AXtHklqTa!dpg;QXM;=s-V0QI3kV9l#X]AD`;SqRbEpmP-Gr/9qh}oq');
define('LOGGED_IN_SALT',   'd<N!A-^8Gp]>)#fIE4@@&D.~[CF{uz_Uz%7KHz/& FzAe0k1cF59-4%=Xxto}j^H');
define('NONCE_SALT',       'K=Y:b9F.6@~C2t2uUSy70:f/W3d#6i!/RG=v<Sl>6iYv1.NDp,h*}A7/s^Zder+G');

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
