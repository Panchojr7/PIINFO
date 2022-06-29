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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Sq3g@bVsV0gYT!*& }yvuhxtT1vsh*ln! /rER9J6D/.BYmWB7$%uST}FWm7~C[J' );
define( 'SECURE_AUTH_KEY',  'GIjd)8kn6D$}$F@dB;>@qRAHYhP*]MoVn75})rU]:Co[G9(Ta09`U_K!?b;rT< :' );
define( 'LOGGED_IN_KEY',    'jyo;pqj1Iz.lKYKEabF$6E Fw]w{FiDJ^+3o[6jlQC!jqop-LsTr`]vY$}BXgWi+' );
define( 'NONCE_KEY',        'sBvR6|@6GhN?h0)V0otC8S;cCu>x^p W<tBw_4T8iEB];d~?!]u kARgVCOI;X7J' );
define( 'AUTH_SALT',        '!:Wa]4B<Z5g2(Cn5*UX}nB)z!&-;JYe@U$V14 [ZZU]?L04~CxH6[C_7-+OjR,fC' );
define( 'SECURE_AUTH_SALT', '+Q#[xv8;~QE*QpnEs>J_q.mbcqi&TuDfiKt}V%BC8i]G@_`ug-P5a+W)8M6h]vUI' );
define( 'LOGGED_IN_SALT',   'AvWgm>hf<<n8j[_RCOFQP}$Ju^?M!:&~XwujZrz s/iBj@^@d}`N|i%k<X9r?EYO' );
define( 'NONCE_SALT',       ':Kp?8;tm,CyF%wIOjw{30m~VzBWKfeuah>2+9%G@aH6~%34{fPjZtFc6:K~;7Jg-' );

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
