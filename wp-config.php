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
define( 'DB_NAME', 'annesworld' );

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
define( 'AUTH_KEY',         '{g|./2+8sOZd1NAgA@j@|a%^jL?Qp~.kp2-/:CD -x>#lbnsv=w&G?R)ig.A0;=>' );
define( 'SECURE_AUTH_KEY',  'w0nc(x/,PkJhoBKzUA _=$*GCRT#OCx>OTC]#ShBL*#xQd*(0)1rt1m,zTx>SAN0' );
define( 'LOGGED_IN_KEY',    ')8XcNc&vK4/bxZ_h.}lTKt (U,S8<e .?2oHOlkuKCR9E.A&z;b1BycZZ:g!O.V4' );
define( 'NONCE_KEY',        'S5hFoVC^DWu/Kp<$&-EyGyCRhbqinf!d.;`kxSD@q5q}*8Y]]_2snmh0TsdPG(>M' );
define( 'AUTH_SALT',        'i0;Q=O^=bA^RE}qFv-&ZPKIpAlR4TZ?w].bIqG^sBAcap0~j0lU>bX;sjk+3cO-J' );
define( 'SECURE_AUTH_SALT', 'dW hA]cr;Lu=?.ZU8E]E8]]I-B|XbpPMxJnFn3^x/jFdXj10LV+Ms3_m.fG8&SiQ' );
define( 'LOGGED_IN_SALT',   'bS[a|&I8TPrwW.[06Aw{sp un)e1;ylp<m&]fP<fC1oSHA*%A0@Y5Q3Jf-Cir*wI' );
define( 'NONCE_SALT',       'b`Wh[a^Z+d#yX{qsQ#<%fX*g#)^}|#F_Ahwvktl;BA}Ou:7!Wt`ZGNcf`{Cjd z$' );

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
