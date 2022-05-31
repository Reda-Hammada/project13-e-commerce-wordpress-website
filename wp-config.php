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
define( 'DB_NAME', 'wordrpess1' );

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
define( 'AUTH_KEY',         'E<M)3dPdB}#riN{DKt#U23IcA7l8,_&0IG7_Q}B99^^uFylVCNY<4Cq9-q|w+x/s' );
define( 'SECURE_AUTH_KEY',  '~|Yi/yiy8+ybf~!=&(0:o[jcn%S,gg5(q}yDqYD(iQG@{iWLGqc[l_YD N?Al/vM' );
define( 'LOGGED_IN_KEY',    '|^Pdv,bv@cyWXN,-B%54Y)VOC^yG@fPJ)a4XNz]:,8{v=2Bci[I,=d8&7~c03eqm' );
define( 'NONCE_KEY',        '&1Mwzskb%[2y2YIytn~-G-  q*9UL/ cy*G7#RqH!OA2*@G5>0[&@l^rl[lgWpbA' );
define( 'AUTH_SALT',        '^=Vjpg<9}4{/d_aBc5l`.JGo,B|ht~$h8=?H ,=*(Dx;{nq)*c~/#zkHV:],A,v+' );
define( 'SECURE_AUTH_SALT', 'QvgYv9$g<Hdtvw@ F>99}cJV+-AAn|hNmbJN<Y(jn8E(btXw:h>6+*n7[m<x$0H^' );
define( 'LOGGED_IN_SALT',   'L.Jlx(,^bNA9=V2(1 E$w;fsMj@nTP#9)KB2nGSK[|L6Bq^-)Y};r[[<QfHru[W*' );
define( 'NONCE_SALT',       'TopV;Pv>(RU*]dZ`#HB/,.DkmC<JhT!HU!} 0vUA1kHR4i?*{S]BT2.5y5G%pPxR' );

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
