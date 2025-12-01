<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hayyajan' );

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
define( 'AUTH_KEY',         'M5,)(6VE[}Hbw`^O0.kv&fkq](j$Hp6qL,M01 %wm6A-UECVk(=*6K$7|Wu^<2zI' );
define( 'SECURE_AUTH_KEY',  'duf,~SDx%D#E]l l_ R:IXJH<oN%]#Q&-0L8M{jo_4#V*L,v8sNL>RO8K[W>Gcz|' );
define( 'LOGGED_IN_KEY',    '?F o=8:&CfV`/iBWt}ix61A9k1F)2+$kv8wW,s!9G:y>3,_w#1<|!I6Vmh{MJBM-' );
define( 'NONCE_KEY',        '*%c#KdPnbmAgfR;EKo;i/XuQcL2LLe~wNA6x5A[;Y>s@4GUw#KZD09pW|9[F8V/O' );
define( 'AUTH_SALT',        'P}:.5k3~+]~g1ph7.^AI B6ia5+)RTR3`YXAvQ0^elNTH>uNk.6C2t4F(o-G#XT@' );
define( 'SECURE_AUTH_SALT', '6b!U-+Nmg/,feJ,0-{p:gRd!{~i#LW_pK[eJXE)en=}sY(sd6| l18/DR[:]YDxt' );
define( 'LOGGED_IN_SALT',   'KZ?wjLf0%r6bu_@C6Xvg`S+IxjU}WS.Zfi%+NH+86$J0Jyv]g31~k5OS,s^q.7^G' );
define( 'NONCE_SALT',       'm&AP={9*x(dn?YS58U}+>}aH8:40~;MGB-fR?9ZfmtRaLw4`7hj/.<{=xK?byR54' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
