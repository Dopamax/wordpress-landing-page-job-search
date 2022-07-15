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
define( 'DB_NAME', 'base_wp_job_search' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'Pg32|.bvq@Eal?b)=lY/rcQG@?&a.bu`zO[UdpKTudqN*a,}+d2a|_HGswmna&Y<' );
define( 'SECURE_AUTH_KEY',  ']}tDrRl0(zEXFYc#(bk4;a`XFMcyVq@G4D$zD>A>Z?ZOWV^qS6fa&+,8njkvLQmn' );
define( 'LOGGED_IN_KEY',    'hYsK]5`op(J<N)YDmyx!/)&s7(z2VPwL(VK:WX~v<}DcH_!t2K[=n?dAQ#;]My9(' );
define( 'NONCE_KEY',        'b[4UUg4ge/dA[R_AG7RCE6#T;4FD$hrlZcAQ}whUU|tgZP!lqa?~[T%ZQva:i;58' );
define( 'AUTH_SALT',        'zh1@O22%vN_s<$([-%}XR0lSCNT Ty(^!USOCTktduFYAcnJu(Xs=X(:Q7*Nv XN' );
define( 'SECURE_AUTH_SALT', '~iy,vO$^>h4,1p$e3sx]4u;?fO@_=+0-LE5popaEzM9eC>+{VqV<@X=2^0wwK8,Q' );
define( 'LOGGED_IN_SALT',   ':?UCrYY[ Ivsl}%fW`SiL^}a.4vV.t;Rma8<( d+#?th@K(TA*n86Q&|ODJ7q&xC' );
define( 'NONCE_SALT',       'z/k ,V4EV122)4<+T {(sg/jS#T,lI*5Zk,953 ia1A>c)|_cRU}Hnr%*2^@@23,' );

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
