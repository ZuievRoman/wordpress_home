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


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

define('AUTH_KEY',         'Z/f(NXo;%+KU2n2U4c??N.+|:%6XE+4TWy-VDflN;~`yU`I#>q?$xiMP.Rep`Pd3');
define('SECURE_AUTH_KEY',  'D$dP1whA%AiC94X[H}8}BXn$Oo1|?*G$SS<HxS:%vWmO2n>~nNTsf!Q1y,)[RA#j');
define('LOGGED_IN_KEY',    '|]b[#O&zjh`H?}*XAj~p,|hO%y^3}(xfOZ+W?k;0RZ4-4}vs-0<[rg|~u%AV2xlb');
define('NONCE_KEY',        '@=A&%-s/F{l21x_|Xf}[a@oeY7Qb|g7IIk!s2vs-.K;sTJfJ<e+~?-j3fg8L[R|i');
define('AUTH_SALT',        'H@CQV+/X&x)Aa@n}qJ0vUK1gJ&#Mb+~*6YOU~*f8 zX(-tB=iMzoB*U4<^Y|R3BW');
define('SECURE_AUTH_SALT', 'VfFBK?P:06*7R[$}t-(70n{bT}U_0X)y,+h[{?K!08Y)iYi`_Y#{dXLS$-S!9b-:');
define('LOGGED_IN_SALT',   'ucW9IN{5H@!OdM-maIw_ov$gtUJ[DH0Sa?*T4de9s$I^_9U~fs*b##36V+fI!(V.');
define('NONCE_SALT',       ';Zrd%[fde@P.XtzNf:AXw]??qmEI?f73${[3 eg]}u@id|ec@c:rWjpTMdG[zNg6');

$table_prefix  = 'rz21012017_';

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wordpress/rz21012017/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/wordpress/rz21012017/wp-content');

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
define( 'SCRIPT_DEBUG', true );

define('AUTOSAVE_INTERVAL', 320);

define('EMPTY_TRASH_DAYS', 0 );

define('SAVEQUERIES', false);

define ('WPLANG', 'en_GB');

define('WP_CACHE', false);

define('FS_CHMOD_DIR', 0755);
define('FS_CHMOD_FILE', 0644);


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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
