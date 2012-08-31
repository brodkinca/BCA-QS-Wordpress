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
 * to 'wp-config.php' and fill in the values.
 *
 * @package WordPress
 */

// ** Path Settings - Wordpress loaded as a submodule - DO NOT REMOVE!!! ** //
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

// ** Pagoda Box - If your database is not DB1, change the number accordingly. ** //
if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX')
{
  // ** WP Updater - Pagoda Box filesystem is read-only ** //
  define('DISALLOW_FILE_MODS',true);

  /** The name of the database for WordPress */
  define('DB_NAME', $_SERVER['DB1_NAME']);

  /** MySQL database username */
  define('DB_USER', $_SERVER['DB1_USER']);

  /** MySQL database password */
  define('DB_PASSWORD', $_SERVER['DB1_PASS']);

  /** MySQL hostname */
  define('DB_HOST', $_SERVER['DB1_HOST']);
}
// ** Development Server - Change these values to match those of your dev server. ** //
else
{
  /** The name of the database for WordPress */
  define('DB_NAME', $_SERVER['DB1_NAME']);

  /** MySQL database username */
  define('DB_USER', $_SERVER['DB1_USER']);

  /** MySQL database password */
  define('DB_PASSWORD', $_SERVER['DB1_PASS']);

  /** MySQL hostname */
  define('DB_HOST', $_SERVER['DB1_HOST']);
}

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
define('AUTH_KEY',         'cwhir=7v$+f$tv|R{U5+Qbp66Vd<_-#POm?-|!`SgOTX>RVJQ!&}|ODq+-^.R+;)');
define('SECURE_AUTH_KEY',  'Au+tNhKo(zZT=]|}]ctEjL{[wjDI|:hsU2zoy<52*|NmK&nh-5_i,Tr&HrhrbRB^');
define('LOGGED_IN_KEY',    'Z8(sEI7`(@%Ynf%By@vB6ji?fa.7D1tW(ctI|#:Lo^45=}>yy9,-,G}U3U?j:-;,');
define('NONCE_KEY',        '*#hCdji[5Th17KHs]{2ZsOmtao>VH=k-%$-JS]hD*L cPC|o|q$+++4CGwr]X`eK');
define('AUTH_SALT',        'av,bG|CI{CVw|rj]vMwye5h9-xOt@.RwG!^@ck|!6y>C]N3?DnC 6w||ma 9@6lJ');
define('SECURE_AUTH_SALT', '6y+O7+1fY$l<3 53 c(ST>-D<c0c+Nr(;C9A6R4NIVij8t=#YeZw}-7!cg]_u?M.');
define('LOGGED_IN_SALT',   '_Bg|=|:p.Iq[{+S|&:AIT>_7*?@3d<S.uR#M]a3fp5OKTJbvN;v,_~,R5F-|>bgw');
define('NONCE_SALT',       '1{y>W+YFT-?Yl2)#dsc>+<g;EfF!;Ksg?QxJ]j/]j/Hr4P* 3RE`Wx0LxKb[=q^E');

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
define('WP_DEBUG', 0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
