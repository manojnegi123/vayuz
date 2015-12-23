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
define('DB_NAME', 'vayuz');

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
define('AUTH_KEY',         ',bl(R1P~>{c`EIVhYh^zc&z`f6<o[GT3P>Zw|2ukZrP#e-}gk676<yg<n(k!n8!}');
define('SECURE_AUTH_KEY',  'WUSE3]->5j+An<etxQRU]q5s@y3@&*EeL;&JsENb+#gswiq}}RB]]:1W+`&@fz:+');
define('LOGGED_IN_KEY',    'R@Z,!Lp2x05d9a}&&q#!JTD3}5]X1){I-BZt(QgIe]JWLO3qsE.O9r q,,rw&FM=');
define('NONCE_KEY',        '9IX|%ZN48csScrN#jLtY|FZ^-6aS3g+S}#-$u_|b?2WR<?,z3?1fhe%,JV-?$3U!');
define('AUTH_SALT',        'YCkwJ~J@|%MDlk`|rj#]O-` |)ojj*b =2@3AzT&d.1U+-!-Z83({}C:-tz%1xqi');
define('SECURE_AUTH_SALT', 'GVU{?U011|xoghiV`7);G(Lrv8m3,lQEm:9R-]f?LZ$L0qz,6y6*F2IntTWSy;rD');
define('LOGGED_IN_SALT',   'Ff>H_j@[}BDx><+oy0&Dx##JF|OI{c>1]ktlp<u$6+F&i!17,&RpEjr92U!`E[E*');
define('NONCE_SALT',       'x!zkv7Q,hMhs=(=]BSvqJZ,Z6k>VhrPVFu%hwJ6?UPf9J,yHm-Mz57`/=@I+<)CB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vayuz_';

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
