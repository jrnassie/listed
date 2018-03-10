<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define('DB_NAME', 'listed42_justin');

/** MySQL database username */
define('DB_USER', 'listed42_justin');

/** MySQL database password */
define('DB_PASSWORD', 'Justin_listed420');

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
define('AUTH_KEY',         'voY#KYDD8;W/}j6IVv{fGaZuW5gu]]Ng}7tK{,Y;-Q$^U6wht kRMwK&bz I]Jsr');
define('SECURE_AUTH_KEY',  'MJxG1bH?tk|!~/)3pMaR7+;9*Rf6|w>)b*J04~#<KsB$piy(~tJp8d$eu(qd7Y]?');
define('LOGGED_IN_KEY',    '`%boaY r=!g:G4YK[;*xPpAeT%,k/Md`F.EB&)7q,*:yn4uoqzpqss8#$;by_Jy<');
define('NONCE_KEY',        'P,CX5ie!FoR%@@lkK7.qg$ZQiMQ!jAx(/)?*DO+TR0ZxqXkdJo4b4sYmHb (xn)q');
define('AUTH_SALT',        ')>26O1xk*SZyv5-/a!=mZo}<6~+bA`P)# &]cJ[={0Tf+Dyl^~6h5}anZ/`TrakQ');
define('SECURE_AUTH_SALT', '4XnOY:{{mUQ~e^,@,j^l6QR^ hKPA}3mJ}8 #u2)3Ip,sOs.7HON2EfzB&qyiOv)');
define('LOGGED_IN_SALT',   'EhjGGAyL=a}jyTRV].+bk*>3v~`!wxi0KqNh@,kh55IcocsJ72ZXK9wgu|h9uxKm');
define('NONCE_SALT',       'uiz[e/GJTR828J,&82D&K5=2ge. wP-M2ggxtVv_0nL!q$vhMM2Vf{<S:op6H{7*');

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
