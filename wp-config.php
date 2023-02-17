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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'lovemyself_07' );

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
define( 'AUTH_KEY',         'pc}mEx#rqa?&_X$h;+.MB|Riz[z7>7ws<-,zNdsH}@BMpyqs<XHDk>a8sWe>1dsg' );
define( 'SECURE_AUTH_KEY',  '((dq,T=dVh(UlC&NIli62f0I652r(f[?:%$v:Fn~a%aPsy7VhWWnxWT[>}@t=Mpu' );
define( 'LOGGED_IN_KEY',    'x9;/o=kC-!wPKLC3k-l<V!Zj<)I.+2E5-Za{pfI/(ErBir.f[EVkl0]i1uO,aW V' );
define( 'NONCE_KEY',        '99P|3/A;@H-oUi]3}_:L1s)Dw=;Ko D#sYB:`L}<%g>kqB^HM%),TLy!*qE9`f2r' );
define( 'AUTH_SALT',        'b0:JYh~H=)GeKD)3a13NSBzJ_z5[MX2x7X3Ze!^eL*p<lDDzx9y%ns@ uBrn*GpK' );
define( 'SECURE_AUTH_SALT', 'L)43Sb/W4Bu;^e`hb4 BaO*pi[cmuOr]J7Fe<@^ W#L)T[;i#gyqf3KQB^Rnii}W' );
define( 'LOGGED_IN_SALT',   'YJ&]sky:EssEgQ$Cd4<ilkWM?&DejSQ/G#j.{ua >!=~KX?%(#Hu|b5#eIhNiZ78' );
define( 'NONCE_SALT',       'X;d0)ay&+`=|_oAF:IEPT(7~wOLoVQ6iMy {]YO4in&jEk3]~@7Wv@L^K_Yk]=IQ' );

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
