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
define( 'DB_NAME', 'WordPressDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3D&g w2-$@h+@k^.sUyv^OJ=:{E>~n9i3D9[yfSGXI_#$Iza(uMUx*1X6(fnmJl^' );
define( 'SECURE_AUTH_KEY',  'VjH*=]$+(&*o,)N+1?kNpSek,P<-C4gz[R3!ZoA dKGDrD[sUn4j6%lVS4Zl(GE4' );
define( 'LOGGED_IN_KEY',    '5O6/v>1C,qd&b=}qb7LpFa_024OHqhz/`i{VjPN`||D?A()@y /V6rPD[WW9<gJ=' );
define( 'NONCE_KEY',        'Cuq,i3W<1%C$edKRv`9!`xbn- R,U4|Byq{(}pQ!Y1j>*(^B&1<`QP#8~ijS=B!>' );
define( 'AUTH_SALT',        'jGPTJY5fK(7^=.g8EeZ.lk.CB|kXe|vsshdsL!HZ+2?tH=&APq-C!Z1uQ|GTSfdW' );
define( 'SECURE_AUTH_SALT', '+1ze2Y|+MwubY1R$oR(fy19N:>aUcDtKqG`vi0VNQWi:-R:K`AP{qmtA1>2/#b.x' );
define( 'LOGGED_IN_SALT',   '<^{aE}~Nocr2-c6p24Its;ALFc/H8-X.8i`0Woc17opf`T~}eD1l&C3V6W%df+To' );
define( 'NONCE_SALT',       'q5%(MI4U.3lpAcHtimDF-HC?$^1V%9r,c#8gWwt xE-U-,f<`nz2cgxb><Mio.ND' );

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
