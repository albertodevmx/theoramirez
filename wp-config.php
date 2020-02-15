<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'imb090503');

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
define('AUTH_KEY',         '?k[qiYiIhIE}(U_CyWj~Xu[1}ud-MwoG-_gf_6Ehq<t!sCtx]GOy79rE>oj0p-W~');
define('SECURE_AUTH_KEY',  '-LL4{Vk2/({{:{f^)^?k}<.dL||BvuN{-B%em4rx;Pzm$u4O=TS,BmC2A=.6_lTP');
define('LOGGED_IN_KEY',    '/-NovEsx7xQmPaX#NXe$w%@#,aUY]izx*)Jx1{YqWk|6nf,p|c7UOF!zWS 5Zr,r');
define('NONCE_KEY',        '4ni-cvw;}c9&pd!R$tivdzVX)~2NVK|GRtikVG[f842{lFr<~zL-kb;h/H66&;]q');
define('AUTH_SALT',        '<xe<o#3$R#]kqV|bPc,V04mTc3)*B*5m+UH@WkD}.+yk{Q|l4KJZ0E+X5~+=U0^H');
define('SECURE_AUTH_SALT', 'P&.?+g>+Ra_;;MHmz$eDW(:V^R;~$[> qgFZ.|euTE~ZU-SK4o2*!xBZJHp8eomX');
define('LOGGED_IN_SALT',   '5T|G|K%W.B]4;}#XNV?-Nl;37rXAri6aaAjJ+5g-Bp50)5xxl.9giL/L+EBIhS7L');
define('NONCE_SALT',       ';MQK]*SD.-I&:yjPpX3w0mu~8zJSiIQg[:|mG_V5TX~l+1%UG}097jLN1hQW}{[3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
