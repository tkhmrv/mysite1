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
define( 'DB_NAME', 'mysite1.ru' );

/** Database username */
define( 'DB_USER', 'admin-mysite1' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'ogA(DCBWQ^=WdE1qmcjg}ZS,#[oIYKsjmM#)UE94N`*8hY2qS@bIVyS>^o<^u<xN' );
define( 'SECURE_AUTH_KEY',  '0Wf~:|,:V9R;2YXFz[sURzb::}Dy3L_i)k/3weHepP(W7}gw{ZD_]pMM^Ru9V9)y' );
define( 'LOGGED_IN_KEY',    'wvM(7f$<_Di^q#@-:84FN{:,?pt!Aw((.]PY3J]eKrVt~5I:.w8]y9Tt(lmVHKPa' );
define( 'NONCE_KEY',        'cl}TH~gy<yIAxRDHbJ)YB#AR;l32}tGx65my63NrPkB7$uVloV5nE>!!D@89vedp' );
define( 'AUTH_SALT',        'y:e?oMbYdPWPZfq2!hSh`pO%0x9H7YEQxN[7vV(@BOgLbQd=&y)xPS}}YhZu!*d$' );
define( 'SECURE_AUTH_SALT', '5<i@rrb}6>.VuCu-9+HWFee,DIIUkRWqwG)6%$V!w)H,s(~PQDQ@ 6N70P`jc0os' );
define( 'LOGGED_IN_SALT',   '^43ZEC}ol>p|n!{]@(>`WKQj2R0&^9hO%i`u!=IGH5GIW |Bg.cB2N{D)YxU:VD-' );
define( 'NONCE_SALT',       '*1CIOirGRr>%IW.c6}GA2R~D+Wq,caDi}DzyQ?j|7Q)MeWAILoWn4P{gndIl;`zf' );

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
