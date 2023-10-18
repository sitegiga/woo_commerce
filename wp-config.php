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
define( 'DB_NAME', 'blogingsite' );

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
define( 'AUTH_KEY',         'Ke])h}X<78b;!fk~_ss;(lm^}}4XVKlHNUNjv($xA}8p&{HZm|Al8d_4w$8`o~P.' );
define( 'SECURE_AUTH_KEY',  'VXkb8*put.!;,a6Z#smW3TM<aR%lB 4<F2zDx#G9GN:@ir7u;w ZE;]KNDqx~oIQ' );
define( 'LOGGED_IN_KEY',    'PEna5wm=Fj-{zifvmWo}!5-|MXbx@!DF2J_SuhtG`]tq#g;jeT0;q[6VvQzz>#B/' );
define( 'NONCE_KEY',        'A0u#Sx;K+!`al (EMV|$~q>gaydde].Z?pGFE-fyB$9/j93s})7RQB^3Ei]qe)oV' );
define( 'AUTH_SALT',        '6a7FV^a{)9.^!KXcn@_sSEB6*(k?YGD6qm0yd=gljx~PTyK2g>/d`g9@N(,pqG@|' );
define( 'SECURE_AUTH_SALT', '1/Bt?N2SgTi9m`)WU@=Tc.AJd |a7Rz7bL4e%e{8nxNj@!n+CeRTZk*%aH,M<?/2' );
define( 'LOGGED_IN_SALT',   'L5Qx[OG2w:^H{`=eehPg]9uJir2OeO59-Jh1k{]~JTF %8hC=~{Mg9k#NCh%mmcA' );
define( 'NONCE_SALT',       'sU4TjI. Q.u{9vv}9v=h Je>(@C6lM<_m2,ywdXq0ZM06Pf`,^ 8fFQ5{!83Jgw9' );

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
