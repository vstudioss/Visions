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

define('WP_REDIS_HOST', 'visionaries-001.c4yvp2.0001.usw1.cache.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'VisionariesStudio');

/** MySQL database username */
define('DB_USER', 'phpMyAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'phpMyAdmin');

/** MySQL hostname */
define('DB_HOST', 'phpmyadmin.cw637ad2cjeo.us-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '47pEzYaY9dS|>N>Ikl]v5.&Z:%lCAL`O0jGdv!,^mm*[,`E|^DyU0(b93mJ-DUxk');
define('SECURE_AUTH_KEY',  ',dg-B#BL+fh)yoDv8SfZkC{%:U9WQbB=q`!sMH*tY`wX?h>X{m3p@<T40ycs^3PT');
define('LOGGED_IN_KEY',    'Wx^dT2.=[M|A[+t?!@_TyNrl%o]ByhXx!{j~5:+/IQdHU!y|t~3.zwWNF5kGe0i,');
define('NONCE_KEY',        ';Wod2SsNA4:x,Ups3[}& I11)#^`&~k,FeHy2Om1x8y@ad;l|1W51-]z:-k]Vgy&');
define('AUTH_SALT',        'o$:ief J>tZhz)m9<>*QI}.tbYci@*}ao&xUrSn2wm|U9Av+zkNT-_^B(qYBF7Pc');
define('SECURE_AUTH_SALT', 'UPJ`St,D_:Sq^$=rl!:C7mP-eA+Gic|]uzbo@J9,shXv#8-)|l0olA-Gc.dZbSf8');
define('LOGGED_IN_SALT',   '<[*{$pNN0Xz,s&o@(|U6h8#PyS0J2+KM=r_q=XERhZtQQvo0>h+tl#FE+W__NP;7');
define('NONCE_SALT',       '[tDFE4>xYW~d)0Wy1hirWQc[p`q#|cx:E1TUW!YX/7fCD56;)`#f+x#wC_(e0(6m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'success_';

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
