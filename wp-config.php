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
define( 'DB_NAME', 'pra4feunpak' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'pra_' );

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
define( 'AUTH_KEY',         '-8kWn5IDai1R7/Y-pT>9?ClE=zxnXTiEU]w!2N{/b(|IA[bvxf!7?k9~$cgfR`Y;' );
define( 'SECURE_AUTH_KEY',  'nwa_ ^4>X*#h_{@?*i)J,{ SN_P^.8[8@=;N$a0]],ETu(Tb?CA-52=%K1NQ53V0' );
define( 'LOGGED_IN_KEY',    '2^yV/)uG}R|h2$:hPmH1]:_.2IOTQ1*ha^WnTCAPQY5pnC-=k,UOn}_YXgd`?v.y' );
define( 'NONCE_KEY',        'v9kq&S31kmN,$.ht8-$=7N$~.vK(lFJ;Y_kR,GZ@aT)dS.s)I;XO?RN4)T]!j$r.' );
define( 'AUTH_SALT',        '1} XFM+k#)%ZjShG[P|!]e%xmzpGLyL9EeM9_SA^#JmSY9M$IFJ0{.Rx!8E+w*[<' );
define( 'SECURE_AUTH_SALT', 'R~RO[.sF1Ri/(<7_==.?1YU{!VnevDgo1<b=l?TJ#b*_!}~_*.t;``SVSrz{rU-K' );
define( 'LOGGED_IN_SALT',   '#bHVjs-f)74RzP`#tTU}ZiS}u<J$CTY$(5_BHb:P]t5B.szS7iw/Ra,5dGmgpx0a' );
define( 'NONCE_SALT',       'X&h*<(vNCgr+aVB,B._BM)msC`By3C|1>-nV:,46$h]6-A1MT,4*y;>i??tP&:Yp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pra_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
