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
define( 'DB_NAME', 'testTheme' );

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
define( 'AUTH_KEY',         'C$zWCBT0!b4N7Ys g`D%Pm:#kDqQr`(X1~I Y/B^A2Ceo7Sp@)$Zm,j/7%dQc<y#' );
define( 'SECURE_AUTH_KEY',  'kD7;5]GI:z1@oN,Ox0IiK4o[h:;:}xl@VfyVf)4uoA@w*Bn9Rhe!GO0Ad${}eUJ}' );
define( 'LOGGED_IN_KEY',    '1ZR5_WTRn{sxSS]GH7o3Fl6PG.6uP~o%_bQ<R~{Hih[A;N<Y2,]4+uWYt(e18N>h' );
define( 'NONCE_KEY',        'lT7qWX_:S7Lww+uu*v&:hn(dMiU1`qq5$S,+I7R`q.r*Ff,9BT4fRm?-UFv,Bm_P' );
define( 'AUTH_SALT',        'L)kOQB|<m,hf5>4lQ-i+q|1vQTMHZn$SM~>ko(&C<]KS0L>i]oY.@ mikp):L55$' );
define( 'SECURE_AUTH_SALT', 're*m${q:fYqXY?zEj<v|A1TiRHX&tl?&8l+;6DfZD-jD.@IFXYfgDd!v9;4.,>cA' );
define( 'LOGGED_IN_SALT',   'syxqn>6A(^L3sT}JI0jJ,HX|t_aSgAP@kEAw-HoJS1|$9pP<-X$s}<#K/CaJ2lqG' );
define( 'NONCE_SALT',       'z2XnqGR4TsbIq)Rok*Zb|Ni u)-0Lt:93u0H(!dyE4CX#T,6>7E.Sf6&n_Phjahj' );

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
