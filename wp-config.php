<?php
define('WP_CACHE', true);

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
define( 'DB_NAME', 'SalamatAcademy' );

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
define( 'AUTH_KEY',         ')vA`QW@EB`A_{V~_N/|`]+qzBl(RVZ5 ,u8m74Ie^z]116L6PDvJh}WV}v dsZ`5' );
define( 'SECURE_AUTH_KEY',  'Krk>_Tez@XUC?Ps+^7kVYHX{#_Yl}FCpUGqUZo]Pn=jvr5)Z{^!xHklyJ:&7nav4' );
define( 'LOGGED_IN_KEY',    '0o;7ENzVDAK<C1C9P%Fm8K@D:.)6Su5GRK]EsJH{ijAh->cTRF{}FsaZub0N^p~?' );
define( 'NONCE_KEY',        ')1s#f+WJVr:^/FIhD8[Pm>Up$$y5THVTF4^?,uD+M3H7EGInt]-{O)TYI*RZO./8' );
define( 'AUTH_SALT',        '_tohiZ;zz4nieRIGt#?.Q?-[VVA0Vgv~MFXfHeqC)nO){~=D-n.*!G;39sgg?5jF' );
define( 'SECURE_AUTH_SALT', '?N*HkZ+Dp,5)V:&AerVNq%ErBJv=rV.h`+(Zc4L|f->&#OV@#x>T^5@dDVKXcPeo' );
define( 'LOGGED_IN_SALT',   'S:&%1jku9n6{Uw7M8D(Nx%I&.(ku>Z4x6reee5~}G:%H,D;u%xSo- c}_!W9Iw?Z' );
define( 'NONCE_SALT',       'uF}/~R-c6-v-8i.2upoTzQK&Gj<ZBlm#01mv~Ui~Gl6FSsXt2o6PN1)E:]v^K@Ip' );

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
