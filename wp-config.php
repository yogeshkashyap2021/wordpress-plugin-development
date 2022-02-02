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
define( 'DB_NAME', 'pluginDevelopment' );

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
define( 'AUTH_KEY',         'x !]n*$%CiQS{tx4]AYW&)WcTwzmiH]~:Io(2)9&@!XDz&IR.Vw*;{_twrZ/>JZ-' );
define( 'SECURE_AUTH_KEY',  'M;Ph&SD-p5K.#H-}z| h&NVyE-/`~uNG,V.mN4{_2x*c-VbIo-1 ^`(q_3+RhNOI' );
define( 'LOGGED_IN_KEY',    'OaPZKP;Upqm?&4gE8nl9%.>^)~j/tD,A*<$K!(QKv^hx>[%p#Sc&dYy6`+u6/v?J' );
define( 'NONCE_KEY',        'C^]S-b)1,0s{(6er*Jkc~O`cgi*_8>*eo3PX0|`obs=%?A>z1qZUNEkn,JB|ZASz' );
define( 'AUTH_SALT',        '!N|mC9+JcSr2(m~xsM:r%-QVRa6$7vNX4g,X!d 2J:_cuECuT:uMN?kL(&c<zj7R' );
define( 'SECURE_AUTH_SALT', '6?!vYqiAi:nT^KsFlV?qb}tzGLp_mb6Uetq`1~M#Q6)Ngv]mrT4a{7{#`FY7b%S~' );
define( 'LOGGED_IN_SALT',   'kigS:8=p@fUUj9PvbMsC~wZ 3iMA)Ku0zQ3ukhKthKASKQ5%z<KrnkgA(64q~&gC' );
define( 'NONCE_SALT',       'l<Mu~8)l5a54V$TNB)dT 5jmqloH;?:>4kBJM,W_kp:Z I8%75%43?=lp3;IeD6*' );

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
