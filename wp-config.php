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
define( 'DB_NAME', 'gamugamu' );

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
define( 'AUTH_KEY',         'r8%on:1ZaFonok0uuJ] )VWypg<sCI|fA{!ZTL5#7/x3U`95~h[}k~t:q+=x.bj]' );
define( 'SECURE_AUTH_KEY',  '5g,+)ugrph:*:9E&YLcYcYD&&CWgvG{|?Pn,1M4BCY!I}A.oXBBVy ]NC2^#RT1&' );
define( 'LOGGED_IN_KEY',    'ipR;7ikuJ7:5u_s~ NEeN|*&Ap%R]Z4C6X+1Q~CVGG/rGtuV:nHC D2iu&_?*|J~' );
define( 'NONCE_KEY',        'Cv;0]X:0~[+JWK*&z$tUf+LMrP{|P Dt(mk@(ULZsJ.PS.Yy`/[sSAbtr!mST~Y|' );
define( 'AUTH_SALT',        'kp8J/G?IA]=:`_Q8[AVKp~FAjG(&.yiQ-BBSEU@rU_ $nebTUG9T-j%-aNI|ubuI' );
define( 'SECURE_AUTH_SALT', 'wtM3Pi~;U#j@mzW3X6ui_`56tOKDqq)2n1&A?SnvPI7z&kRtp5}Q0yDa-@5?vh:g' );
define( 'LOGGED_IN_SALT',   '~8b->pIGezGywo6)z!N)/-x)&nN[*^@byg;8V7%KcoMb,H@eHHh<tg3 >6=v#fq{' );
define( 'NONCE_SALT',       'L$O^3J/]%YAeh]02Up!6jB%8oF=.37D)6!aX=ZbU{Jq*mBI+B3UW<Ul,hx&g^AOX' );

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
$table_prefix = 'gamubd_';

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
