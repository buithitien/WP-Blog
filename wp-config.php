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
define( 'AUTH_KEY',         'z}{)2I&Zm|TsMJ;H@}oDBxR<kyWu=Zn1wYP3&J!=>,!i^PbGFTPoxRE7 $ E00;)' );
define( 'SECURE_AUTH_KEY',  'ik{W:3UV(HP?qa(szjgMWJEOJ{fh*!E^~]/O.[&i]*l#ts&#SMYJ~$O,3-QwG2Nw' );
define( 'LOGGED_IN_KEY',    'D)g?.t6f^V632#RNuF IYU#$O|B2vlcD@8ysM0E!SDoB(gP(<IZa[aW_hc@/D*F%' );
define( 'NONCE_KEY',        'kGtsPk>}7p@W--{/U@U-/OhMn{lqi?kyUII*%HxM?O}z`M0sE}SsD3ml>N2+uKIx' );
define( 'AUTH_SALT',        'ps#GKI2Tp2X>(.cL<Yx!(|mls]M[K<=WsaZA&MOz.P;M=i-Tc:2L|W=)~a-#)8U3' );
define( 'SECURE_AUTH_SALT', '~JNjwTAb2uEhCM=Zzx!5M9IzzDrQ2L!nT{a*MH{J/4bQ1uB$vgsAW_02)(B:eN>r' );
define( 'LOGGED_IN_SALT',   '<1$OwJ,9|22]|&hfWu .$3>`_}6Ds?_;xLoc=W_i4~>8KM[VA(qcLUi6^7q`ViB3' );
define( 'NONCE_SALT',       '6/HmVxkA}ON8dPexV=Fgb[SoINoz<m__j?NliJ3B+99ni=H^x]c}7$Fa!!mMz,i;' );

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
