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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'e{8JXQx# ]]P0gGwUF5O,+U8e_q%w(B-#qaE2Vb1io=:eLGqqWHs1Wj?aW;OvLg@');
define('SECURE_AUTH_KEY',  'x2m0V]<Go._W;H$9a4wMaew/mRMn-G#t5P%FLD7N/vBLa$zqV|0Y+G1uxn5m,!RO');
define('LOGGED_IN_KEY',    'd/5q5-T1(S3BMHPEvn$`B_@p$*X[4+hHh].}rIh^w_>m|^ayJ,J%$ZW`%*7eodk>');
define('NONCE_KEY',        ']?xgE_B6n](cu&%t9o=sqRS$M]1..@1=JApb4Mv^C1o$6Wn?ZCnY.ZMhx7%6{+3H');
define('AUTH_SALT',        'T`7yVw?O</)BOfA;I{0dOYG@HnN 7mm}rqU}js~!!O{$]RtzbRtW86fG88sk0$u=');
define('SECURE_AUTH_SALT', '9q&sRlnK2M+kO(  X]duum+xBV-b)pLX?s%{&A*l/eaRk]89FnJy)nVZ@sMu>)8C');
define('LOGGED_IN_SALT',   '?_Au]_ZLV.cPX@@m,:)$K]qTD_0R`<AOi,$o]D)mJgTYjr76s^0!q]M8k:o5!/l1');
define('NONCE_SALT',       '%K<z!VeE:c9bk(K0|Pyx|m4|o:=mL^CC]y7gRg,_v4hKi)_plmvm3#eIdK2Calq;');

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
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
