<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'natsuki' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+hnq`XyXhIN~N>QHs-cO#U1eM!T+0KB1-*Kz4pt8W)L!d1g Tzl~pH=Rt,3-Tpoi' );
define( 'SECURE_AUTH_KEY',  '/|Fxu@r^APN]x!C=6{4lZHNCQ*!mE!O,dutWna.*s%#QgmlR4da0t~H&zq?1p`1n' );
define( 'LOGGED_IN_KEY',    '_?.L0Zy`* qJp`JnsUzYx^:+5K*=b{3cKa7s&T[sk<oS:?Co4izl;ZgxwOV=##lk' );
define( 'NONCE_KEY',        '&Ah&}C6K%z+F{@W;crPH$+1!pB9&*PJb {$7k5joZg+pE@j=Qh`PltOnMi#-m/0 ' );
define( 'AUTH_SALT',        'JOU-I{jjylgkys&eTVdFB?TY]TPt?/wmyBvb,/{`ga^f7]+?s@}>rO$VL%HUSL6e' );
define( 'SECURE_AUTH_SALT', 'h?z$0ah;aby-iAG?7.QeK*WYCd#efT.INa/23_]0p($~x9fq:c0<yV7K~2TAr&0Q' );
define( 'LOGGED_IN_SALT',   '6nr?)&d.oQy)W7g*H4VFGaoH1F()HPm {fu{*dk+<}~gI3n-*LW_0k:$@0tq9lT)' );
define( 'NONCE_SALT',       'nW,G@9N}neAE+GJCh.|uST1:`OLyAMh9v~z[e[cDKHk5S(|4+?gwAf[{%4d^hY4T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
