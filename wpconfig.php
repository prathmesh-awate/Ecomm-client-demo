<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y=,61]Qq5+$rz3#B=^L)Memcd{Pp3(V~,J!QVxX1LOrYnf-)pq7%T(xuxQ/NxZKc' );
define( 'SECURE_AUTH_KEY',  'U&mWFHOew}bUWA&EO!5ZFTXqXX;e]uCN[0@u QP#%Y4RVdWivQ<<_M_nAx2[,5eR' );
define( 'LOGGED_IN_KEY',    '$Lakv>(#K`j|FT=(FZKnBty-iMAQNK$$:m~b,+v0x2,f+2asZ|_c VSPGY>49d;K' );
define( 'NONCE_KEY',        '[N9T+jWq=cw%H8:]CMG]ha,1Ry=&{G9A|cT&&8kEq *9Ehk$AIDj0jU>Z;|[6e12' );
define( 'AUTH_SALT',        ')T&P4RpgvgCa!E%p8Ba]!zPz8(zN;$Co(5St60KAR6902b0:a9/3XD=-bE}S@e-f' );
define( 'SECURE_AUTH_SALT', '3XWE7R*F59zBUZZ[zfu.#MXV2$D^F0XxOJ]1PY=>mg<[]:qT!:`AwKRamCo<m [-' );
define( 'LOGGED_IN_SALT',   'K?06mFuh qZy8&TgYOKr|kgc%6U|Kw&TGLkWv~7wd2O=>!f)qc),&I2.Zq5zzRMi' );
define( 'NONCE_SALT',       '`bb2~6yINE*&W7(OSc0(4`Frte)a;1ddj/4w&nFn3!x:&!`CvS/MF$yc[zsEak.|' );

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
define('FS_METHOD','direct');
