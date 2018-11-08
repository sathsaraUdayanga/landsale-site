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
define('DB_NAME', 'landsale');

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
define('AUTH_KEY',         '&/Z#{$x~m>`wyq( fi|^fcNowF^Z$q][fU?OycTCEa0#Kx#8Bt&:e.v{_|shvbP(');
define('SECURE_AUTH_KEY',  'HMF#NjT#vhXuEN;~7!EwxKiaN^]PV@5psEX[,n<C{w{|bdmSDY`1zq~6wtz26_E>');
define('LOGGED_IN_KEY',    'E6c=]D)b<szL*QL_z(*seR$kBF)2D{CHgR0Xa|Pxq2Y?|YkKH?4YRW:_7`>Q/A0g');
define('NONCE_KEY',        '%o%k-DS}&G#Ct>>i[{VpH0)KI=O{G!RF-_Cv L:+Q-RZ6Dq`[GdjR;0VIU-`%=4N');
define('AUTH_SALT',        't[8XGxt&)&) ANoL.*wcTUfa!&jNkY>SQ~&}s#9=]nc6p=#1fm97hGr:z,/zLEqb');
define('SECURE_AUTH_SALT', 'vuTXfJ<~j23<>[J0^;c_Kv#^Y9jfz$=Q|Vm#0H4X0Crul>T!<$/C|)B,:QmK3ltg');
define('LOGGED_IN_SALT',   'f992XvXAoyH e7zNK @tgeYw#$#EfXY];X sTf:I;aRsWu4GWV-kK<?&.RuXH%k!');
define('NONCE_SALT',       '-lL/T6N$cTo|zh@,FRQAH}geR/5lXbV4k=KIKu*;[45rP,8|@{ffP(m*bhvp-.>R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ls_';

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
