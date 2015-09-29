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
define('DB_NAME', 'megashop');

/** MySQL database username */
define('DB_USER', 'megashop');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '5|^-&a ^}PoU:-zNvs5JQF}-gn`MR(-|MXLK|*TQ/UDf-u+~o3Rrkil}v~|Y&D]~');
define('SECURE_AUTH_KEY',  '+_2(V*T2ryK;Rk1xGk.7m8J=]Dwftobw8:vH:gq2g8dMK+vo0)junNgrcUp/)#.&');
define('LOGGED_IN_KEY',    'b-U2e83R/ txZ/1) IVaPV+&d;Rtw${(d:r2VuC`*2XPq]pJ5N}Iu2t~5?i<-OeG');
define('NONCE_KEY',        '<-m_:|zHH|/1/7bzA/ppQB1<-6tU/er&W|%+cbw50mnZkgA(dX5y}H:fF,>c%Hbd');
define('AUTH_SALT',        'a-!!?g[a4WtU92..+m[yl4Qn|`;ZraqfPHNfZ%-i1m/x6<*lg R+|oWI!:/i!qT`');
define('SECURE_AUTH_SALT', '!8?*uwRm,}H+nW;(Hi,B:T$0@{C!hkc?7uf-gm[%2,- u|Bu~fGnuveT:az)C,v|');
define('LOGGED_IN_SALT',   '1U]zT!UP_k-4]d)!cO+ 04YdPHGt~`@$^+U7+K!{c0e2B5}3UIzMpwnTFrBlkjhI');
define('NONCE_SALT',       '03;p+,b5md[}ac_/[akx4//Hmx(a,!@(7wk7o^eg7O>m!6z9!+UANDdHP.FAnJWG');

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
