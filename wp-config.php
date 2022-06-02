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
define( 'DB_NAME', 'shiftpro_ww' );

/** MySQL database username */
define( 'DB_USER', 'shiftpro_ww' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Yasmina2010' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A7?kHDefy#ZaL/)u4WAO6=2K<.b-VxAC>tx(2-QgrK4l+mb-E|0)BmTHgvNu;Dsa' );
define( 'SECURE_AUTH_KEY',  '^?^>m/0l6@BltJJk<Yka[6!mJ$K$zWq04jOT?YH5^fHz#Tu}~D|Jd-*I 01ZAF:r' );
define( 'LOGGED_IN_KEY',    'Jd=}4qV]C(mgG.]:n4@BZ3;Oomew3qQ!HIaU:Gx;ne?m33BeK:O$a$(sz;/:<6kV' );
define( 'NONCE_KEY',        '(@s;p2+mA7xSzS-3e}}Y4gFk!O A.N0Z8?|yM?mZyEMwW9Irp(w8V6xe[1V)8:$V' );
define( 'AUTH_SALT',        '){4]2>EY/kH-7hC<m4ksa>q5G:Q@Uf.M?ig#k(LF/jCssH]<-~U}D_f:Pocp#j*{' );
define( 'SECURE_AUTH_SALT', 'uF3F0pxb|^z]yhVBzZV6EG-rX`VkIg[/@)R1R=wemq0X z:eYtZX.N@9|nUly))m' );
define( 'LOGGED_IN_SALT',   '>,f-+Vd$eDbQ$Bd[DzfHOY=Am GK8xJ&Xg)TWEf!JWn=cUV&ws?sw/`dA.Nl0jSt' );
define( 'NONCE_SALT',       'oZRQ0${9C5Fjrf89Nig)}grNgk^>G*l[auV:,T?>uAK*OpRhs2Lh;1<{+{(/ZI/U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
