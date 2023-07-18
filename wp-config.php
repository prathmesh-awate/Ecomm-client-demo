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
define( 'AUTH_KEY',         'e=a@^sDD`PZ{VJVvE&_sN3W.oh=~8VmZR.vk,bBI8B*M7JiLsCrjTPY6G=F;N|^Q' );
define( 'SECURE_AUTH_KEY',  '^(Y3`jLD%-7`^;3twedT2g{5%6H`Ee&24Ffiz;}+63sD:8rm></uzKk[^%1#<q.d' );
define( 'LOGGED_IN_KEY',    'M?C?5?Wn<7 _^8K?WU`k(tY0`6vV<lrb&svkK;//cB0_Bn*]QL72C#eB*fl/)/Z%' );
define( 'NONCE_KEY',        'UWiE|, lM;k0+j>6Iy?`M])9+I(a=N-vUbS0PP:h#7RlpzBmc*2xAh7g8Gm,SE3K' );
define( 'AUTH_SALT',        'f8@<w}77h,_7><0FX{R_=)iZaniFTO1O [cm699bB5CGKl~(`i^xH~j~Mc0W5LoO' );
define( 'SECURE_AUTH_SALT', 'KCSw`Bj?-ZT]$U!r9NoDGU !{m}weX@/ID-el]f5s9M|YmUg*/2$RD*T-MXCq(G|' );
define( 'LOGGED_IN_SALT',   'ddWNcJ8s2@!qGdv#:AbiX;wjGAuPF>JmUk(?xUD4A/LCZ[=v.)Xn/fIy=<,^9!=:' );
define( 'NONCE_SALT',       '<,i83JVP2bU]#.5)B[n,Y`TPWWW/xiePc6!opI8AWb4>2n}.;%XJG0kG<&+,=0+I' );

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