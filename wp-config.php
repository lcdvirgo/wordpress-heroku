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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         '+~6J)G-:l+2bTNPh49rziyr`Y -zb%^55T]Z!>L(8#=toQTv(!9}(=>NZx)+na-)');
define('SECURE_AUTH_KEY',  'fbGqq+N@M:X{sv,r_%G{(a-1.>qvY-a(H#h TQR0=c_h`M,xKgyAx|<hp}/J Eak');
define('LOGGED_IN_KEY',    '_$&UPg^tS{,2l0Z0GOc9v<d7v}hP@8USbm:%gncx NdN0FfMBp-yq&rS_YMO(`GK');
define('NONCE_KEY',        'n9{))_v2zn[TD5PcxvT4-zz/#Z-.~`*=x?)bJc6,;$?(q.%eO% NXm-!d|??$6tg');
define('AUTH_SALT',        'h[brztyNf;LbP|GXP2=^}0(P%;TPmH:#VQ @n]@V`4e-zr3`SGI;|Ic6dMB[D;s.');
define('SECURE_AUTH_SALT', 'Ceeq/34`hN-CvLVesdviQx/sfC+5E>]mIlB6=SxcS[]{7fw08|g{Z.zO4lGr0Y&n');
define('LOGGED_IN_SALT',   'rYZ]IfuF0[$-i/A.iC?Q^QDj%um_|1nQMJm&I?(BbU1Wp#=t-_`9 f+4yv<O[?*E');
define('NONCE_SALT',       '-F=i)3:7^[v4+C=(N=2eOZdx+e||qao1&>=Hl,[`,gx :q1bTKX9wk)w1eF2aff>');

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
