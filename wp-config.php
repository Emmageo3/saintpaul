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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saintpaul' );

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
define( 'AUTH_KEY',         'yp^j=XW}-FX*}b=Dt+Ld8W-Y(:&<1IHAEpY4v1_s}DDLYVfL3v.f_:3u$)INv)y(' );
define( 'SECURE_AUTH_KEY',  'O;:N5H0/0ZqNvII{V)/#00{Wlx<q:VZ.677J0,Er0c>HJWD<I9oyJ1JWNja7sb l' );
define( 'LOGGED_IN_KEY',    '][MM/B}&:5%%{nj[y/uIr@{ooA:PkpI{LD(k+B.yC4tp c3L&zoYT`R `5m<s<E-' );
define( 'NONCE_KEY',        'J?.e|P$+q&4w;ti#zPZm[kSspqK6CUsqo,7!-Ktz-td~tk:*v/CTDf?P_R@%=2hO' );
define( 'AUTH_SALT',        't1 1,EsMC{WU@O;%_A9oI Q}Msm^L__ejdUy+h,CnK.dueSvMQFQF8Zg.*cbn:0k' );
define( 'SECURE_AUTH_SALT', '?!od,Kh#@)[0=&0Ckh=p=sFo>2T(!hWPuQ^86L+A#%diqs-|Xf*FCp v(Nk!IqB#' );
define( 'LOGGED_IN_SALT',   'jE6%_rCQabB`07*1~8R)!|-l}u?ZkwSR2?bt!)Uh=vf5[VU][rg{:R2>L8hIF6}~' );
define( 'NONCE_SALT',       'r5SCsg9U29n;$atp4zpu~=?GM3OWWmCL8xMh_/)Y:qQIZ<RzSN0QL+ZOlYC5H3L*' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

define( 'FS_METHOD', 'direct' );
