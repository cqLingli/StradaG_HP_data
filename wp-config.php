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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '.hpS?:a;2M,;APlt|VNK2SUK<QqvkU9P}o@Qkx|U*eLq;T2u[kFOZMaa1xv$OWsA' );
define( 'SECURE_AUTH_KEY',  'rr^VlVcdW`(BG^g35iL(v@KD~[gb284`8o8k++XWkU<|FiFMtgx&@V2P/1Bs3ss_' );
define( 'LOGGED_IN_KEY',    '@XkIHhI!}-<}i&^+WkvMe^.Y!w7|1^2Q*@^sRV!i*?mh-=)]@:Jx]~vCa-?/A|8/' );
define( 'NONCE_KEY',        '%oJC9udE&cqMu4.KJ(|0cy|2@PmDR&?R/1I>,H/{?wDaa9k6;$n9yOedg^Z@oZz>' );
define( 'AUTH_SALT',        '9.e}cyf+)_Ymjle:K8H>}{wOCb2Lv{|4}J <b7<ArxHZA..&4l:foN$c]3mg:x`{' );
define( 'SECURE_AUTH_SALT', 'tGRAxFzBSy[WzboXOy+>a((@J4I!Mxi{3/vb2;&2~$EjxSDDJBCDtDF {jQYNBHe' );
define( 'LOGGED_IN_SALT',   'kud-zp+]|<97(dB7/h~_>OA^`D(j{&j,O.;GL;a_qf1^WD_{N+2YyO!yj5qlX<X3' );
define( 'NONCE_SALT',       '&J?J9MP9Mi;tfj}$m1J~cHKb-Mg3kRp [^Z*?fB^33P7*]uDwDHy2{:5%]YJG(-B' );

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
