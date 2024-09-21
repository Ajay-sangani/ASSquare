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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assquare_infotech' );

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
define( 'AUTH_KEY',         'v+3ZH8}|$w}m?m-60LO&[S_#?21QUr0=BCM-~&eD0$>.h,*.(U0Ia~01oTPfP;%r' );
define( 'SECURE_AUTH_KEY',  'dm8|K+V?+dwQ$xh6CFd{ ugko3zh.%)Vw5!5QCg5`jbush8Cw:3Q:keokEm.^ia$' );
define( 'LOGGED_IN_KEY',    '(/:%vI;tmTEoB~p!:Q9vnm1QA~??3$?|@F8|8AG+r3Sn$*P.@!l I]p_pRNc /j#' );
define( 'NONCE_KEY',        'l?f6,0jE{#m=.+)7!`h-)9n%Bj-g],SzBiA9u*Ry9e%T%/+3{M2nb4y`E*.gr!!D' );
define( 'AUTH_SALT',        'xM4.$7T;(><QM&V6cW&t*B`&q3T0o$qyBb>i3p,/}qGs<BY2Ay}c3+bIh3lG&$ /' );
define( 'SECURE_AUTH_SALT', '9tal]RgRTp_{9x;;MA^7Xx(b9b7^&Gt*4W~ggJ?k8PwLzNd),Yb4d^E.Q)f>el#}' );
define( 'LOGGED_IN_SALT',   'TAgFHZPMU{*yNA-)M6y3ned,{wB `oL9Y!6d099Y:R2nO9Dr&8 Ez~@ZCuFXUEF*' );
define( 'NONCE_SALT',       'b|5m[8#@~9k0IgWYhK>NSyB%LkR$V;|R+yU0&Jtl5JrN1?Gw1@C=e2U?C/f=/7G8' );

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
