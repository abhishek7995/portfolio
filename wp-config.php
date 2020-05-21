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
define( 'DB_NAME', 'portfoliowebsite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'OI?p]#`Xc~GyE19#!S9fE(goO&4,+9Zc_b_z]m.Un*T?Y-rJi^Gwyj@l[c7Z0#(C' );
define( 'SECURE_AUTH_KEY',  'vPzo_17E%J.y9prfhZjgk@#)[#v37/RTd_E5Df#&PH~,:i <ae!2|J7[})dL@ C:' );
define( 'LOGGED_IN_KEY',    't = s8yx#}1*?W]a&?d &8{^q}`Xfq.HVJ05Sy)y1%detE$(Q-GGdBM3dld?/Bv!' );
define( 'NONCE_KEY',        '*fds]A>Jea+le123^IGI&G-I{1gV(Iz;C+l6V^eA2N6Na6JZ2:c,p+N:-;dje727' );
define( 'AUTH_SALT',        '-v>GQN}*r$vSOA/TvgiRgg#! im;G{0+$e>OFg0}7`pOjSSTdMhz2V09I:n|5m-p' );
define( 'SECURE_AUTH_SALT', 'sV=ChL]%Uq4@{#Vd-OuN8G5eXDOeph5K!B9n5mbGxepg@!$wphL9.p{^Lb!+&^sy' );
define( 'LOGGED_IN_SALT',   't1ZEWwYVsW>X6!lwB1#t1mv#jkjT-<BxP8r,lyJg-o>KgUS7xZ0;Bi:y^)Y^MDmc' );
define( 'NONCE_SALT',       'B4r(W2O[S3X-WA`qPkrHJ2EI9x=}w(ouxIj?CU-G!y}:Ox76>XMI^{2J{)HON;kT' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
