<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u273925517_AaCIa' );

/** Database username */
define( 'DB_USER', 'u273925517_BK3W0' );

/** Database password */
define( 'DB_PASSWORD', 'pMtFIg2vv5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'S E6sN=r;3cr.IUnut6oGuR1Q]OS>I{,.xs2CPO*wh3v:6U}8mm18Jx1p8B3mOcv' );
define( 'SECURE_AUTH_KEY',   '.D ?|ob ,7kG%pB+j6(j51Q2GKP#kULWgpw1AYggB>imY5F0~)4a)]-oq_aa8grF' );
define( 'LOGGED_IN_KEY',     '2<pZ}Db[G@?vr{PNkBD86]a{;AEMPL-.wH;MkXJ[L`#}~E`2@DseYDS2gVzff$=J' );
define( 'NONCE_KEY',         'OB0&o_TtB:&*RjUR5aHySU_w~997(=v7@?x3+@AFtMPV%ixb=f_4Ym. h>%tZ+HY' );
define( 'AUTH_SALT',         ']PT Z:,U/>[cN/$;o8*C;GobPn~l1[Xah9=eAE|YlS7+Zkt3-M{$[LehQv$s^%YD' );
define( 'SECURE_AUTH_SALT',  '9f~ve9V]7u1[{Ywv{S22z.}@RaLkap4eW}^A~crt{7%g%P.+wUS:zzcU3^3HGXt*' );
define( 'LOGGED_IN_SALT',    'KD<LGC!Jllp:E{uqN5jvhB/r&>mf20%`)Y`{sF6IbPvbS^yoX#:f2iLi&[e?#UJL' );
define( 'NONCE_SALT',        ';imWq(M3CVXRjyi;Oo!7|&9nKx .Ce!ayOC-.xt(3@L;.BY=e,&.2Dy3kor{GblZ' );
define( 'WP_CACHE_KEY_SALT', 'qRx-W_9SDw)3wEoB~b3iRoZB*5vN@/eW$mHmtl*9<,m>7qaq(BR0]n]B&t%q_Tw1' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
