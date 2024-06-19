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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u834651083_coinquant');

/** MySQL database username */
define('DB_USER', 'u834651083_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Blockwarp2024');

/** MySQL hostname */
define('DB_HOST', 'aliceblue-mallard-545481.hostingersite.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lq2A+E+{5`,>dWE;IIcxUxdL~)w%lI;*nOGw#r/,5ph.gchc%+Z|Yuz;I.7l#LQ~');
define('SECURE_AUTH_KEY',  '[>CA3Na`.,|B@mbvQ,xvY&V>U<M*OGrx0E|)4o9U}Icl J(o17q@+-{=*}kicZ9L');
define('LOGGED_IN_KEY',    '8B`<E#0vuiJaD/,J-y1BT)Xu$d3YUCgi%>UDSI>M`r|= 7h|LA4RItDoqGZ{Rn|I');
define('NONCE_KEY',        'eS4R7J#XmfZl1X!~6+1cT+r3-|{=VJ~B./Xoqx@a1Gw5RijC0|6R8y[|NHCUiV+)');
define('AUTH_SALT',        '`zP!3n=xG~O_]8Q`VQbiY3*bo}Ng; |(11F$w|2|=W:CL&Cc.:`T!+-TOwYp9 +}');
define('SECURE_AUTH_SALT', 'PR&iDT8y7yPA;Jh.tX1w|CPeL7Hun.@u/CwG[YJfLDpL-]:+wap}d/V+8RIClyA!');
define('LOGGED_IN_SALT',   '4L[Xrzw<>ZnCc)HE TO_2+%!VQ#:=yK2a!bMppGxmUchp<Iwu-3||j=-.852$J;B');
define('NONCE_SALT',       '`P5~#AlR7S@~d>`mL&^@K+Z#+UI ~I@t}9iVpCc/IZCO]uL8v}|OlF)#<e(6r)dx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
