<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wprueba' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w.mx,~@F;mz4Oxec,H?lT-]`LB*]=Vv``_Y|x)}=KUF>zchjQvWYDNg1Er:RO0&m' );
define( 'SECURE_AUTH_KEY',  'NR#Ai|^>YI`c9j/Y}o-!gtGq~^Pw@.KKu^cp5iN<{|OlJ:%h(6pkzGV`sOlA1w8}' );
define( 'LOGGED_IN_KEY',    'N*NO3b}qif&-l6LGEB1WE<7[u~HWCAsm;rsSJQaEZSu1OP!ipTE#t7Z~sj9F~ez?' );
define( 'NONCE_KEY',        'B]DnM&6m`Lh/+v49R&&3_dn9 G.H%A&rui][3Fn~~e4FSCLOcpoE_Xc#3la$?1RH' );
define( 'AUTH_SALT',        ';ho6B>XaEIM^Vq`TWwBz6oY&u)FaUK%OqCQ7<G>}vS:e4`~PqltshTX5fYkxn^%h' );
define( 'SECURE_AUTH_SALT', 'zrOK6P/v/R`f.LQ|6KT~6RSc`HVrXyj-;(=gUvuZ6Ud^_h)9JCzGkg.(J:YA,/Bp' );
define( 'LOGGED_IN_SALT',   'wC<:GY:r<:r^`^P#+bnJI6fu3YJ6+YD569W%]8:h_IYf ,$Hc(7(NXL/|f?}zLY!' );
define( 'NONCE_SALT',       '@3V97(]GNMDeS(E3<FOFIy^4zkDA*`cnQy(c+s!2`r+3v`k-5KC/mORWtu6V4iOU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
