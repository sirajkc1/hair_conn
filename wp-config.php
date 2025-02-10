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
define( 'DB_NAME', 'my_connect(1)' );

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
define( 'AUTH_KEY',         '9O$6m?*[_I)G:SGxHi2JUPz,Shv7D^-=r=a6n,)+9~g8RWDYz ;dQ6_-y%,Q26bI' );
define( 'SECURE_AUTH_KEY',  '^^y3ev`u@a))UCi1J`ou3BKKrr/I){u*@J/BMB2,g]?so<DQ4eI+Ts$qYFuhz^3!' );
define( 'LOGGED_IN_KEY',    'v#7O6E=V.T?8,krs(Zh|CnNrhO6yNiNPl||<2.OCbJ_/LX9M-(IepT_4!48CJ9}c' );
define( 'NONCE_KEY',        '^<j0i5I24ocJ6:nlS-kLKX8:5_qNML!)Iy{_j:qG`SjOXqaN^_/XUh45E/JI<ePx' );
define( 'AUTH_SALT',        'T}5Q.;fC>w&yt:MCEtRrD:z&2P`#Z_Lry+8o(|P<`#41Fz@,+h<.]8:X*gF~|nyz' );
define( 'SECURE_AUTH_SALT', 'u#q-Ye-.SD+Uzsps[iX:%(w)dpPk.K<!y0:_%ajRba(w6]Q?Zkv=Jr7S8{-W}}A2' );
define( 'LOGGED_IN_SALT',   '*/M<Vr ^p1$u@*zk7B){49RiIY)iH~*AmDk3ZIXyCQDtxa*7bXxj$*^0{Nr%o9$Y' );
define( 'NONCE_SALT',       'm<B-4AX&O3.&YIun-`zJij:/eS9(qrQ7Iff=m7bud1ciwJ(r*IKBBOu w@`#ELl8' );

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
