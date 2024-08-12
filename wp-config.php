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
define( 'DB_NAME', 'backbeach' );

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
define( 'AUTH_KEY',         'FwDE<2}9}!@}a&(EjG~9^#:U|E~IUw=fXa3JknVXdx!d|*c50>hkw9bNS<ZEEFh8' );
define( 'SECURE_AUTH_KEY',  'u!/;~ ->s5*zOC_6k4*OKJ!YBc1Ps[!2l{JeT0A`9a1a)+38{Y*8BTc~hR?_uj^1' );
define( 'LOGGED_IN_KEY',    '=?&M6msW`h(^$W}6dpzl#lc!HBt#}6Juq~p!D|^q6|Qm L}R<-x`WD+r6.]514dt' );
define( 'NONCE_KEY',        'j}K]G!e)<O(qV_H=>,FkJ+bA..{)tfPHpgQT`+r+_5A0(XUu2%KMY?t{ot5Vf>7P' );
define( 'AUTH_SALT',        'CZ@exvhF)3[Y4_|kp@q{.6pw;.PpG+h#VvlUZrm?t!&`BwXa43zV/J,g@~$=L)8M' );
define( 'SECURE_AUTH_SALT', 'i^Q+(ijlKaUg0~VPqD=92{Oj<2e#&$!6`P7|~Pw8eMS*%8y%0LX8hC`7fI>-.@EW' );
define( 'LOGGED_IN_SALT',   'W,}NmVY`e2t*h5WO- ]nad<X&Y$c9G*qCo>];#))8{ M@+f$1}`3-}p&1,zqpVlV' );
define( 'NONCE_SALT',       'v.&>|;ek2Js4oSX&B-8_IRxG}WQweGPY4i@=i+|e`Mn~N)!(2H^=@PH3`u>uqR~$' );

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
