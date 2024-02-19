<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'quantumhub.solution' );

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
define( 'AUTH_KEY',         'JHEGr31:x4AWW`w(G=K3)|Ut+ngNK!dxRbOQDC$CQ0:2]jvRGEb@(N,RCf}$Eb!A' );
define( 'SECURE_AUTH_KEY',  '5$uRz@h|g_U1N8dB#i(vj~I1E`D]K3*/n#3X3=`{aS|<#3I2q8j4c%X|ZK^#;Oko' );
define( 'LOGGED_IN_KEY',    ']c;SL[Qj0uX12P4?G^f!7eah>09UOhh-twu!sSwPaXNuS(.9kl,zm>!((Kr*Bf*^' );
define( 'NONCE_KEY',        'j#@Jqs:XKO`N`Al#v!Ac0]^JCcm PxI86-jisBUvfKxU Od>9n)X;Tp]g7.)eSmP' );
define( 'AUTH_SALT',        'HI+Yd1HJ_UAqo;:[=uaT[IlP)#5T[XpOzOhW{?W7uO%d,n`Hq+D7t+%7)B)G.$n}' );
define( 'SECURE_AUTH_SALT', ';@qnB |42x4+(CtIW,`0OUkABawEJvwZlb2/,*?bu6Xof|D1w@L]WWtI88#!dTap' );
define( 'LOGGED_IN_SALT',   'vI,%qj,3sm0WuVo!_?3~v3C6wa1=.$~scMG*+1FZ8@@zt~xC//6rhZ(YEcajhht1' );
define( 'NONCE_SALT',       '!1V&W:}VRRiITBZ/FDm3>#rKsh({BZC2_*-ow1+CiyWt7 Pp/^2hea93.jjDYMt5' );

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