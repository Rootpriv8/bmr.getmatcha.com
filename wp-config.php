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
define( 'DB_NAME', 'u602004246_koryu' );

/** Database username */
define( 'DB_USER', 'u602004246_koryu' );

/** Database password */
define( 'DB_PASSWORD', 'PNVfph~ZoE3&' );

/** Database hostname */
define( 'DB_HOST', 'srv939.hstgr.io' );

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
define( 'AUTH_KEY',         'xF:n0jU/7I{<%I%Rg[K7s6OWFk)KUvY7i[Hif<0kQ<e]IO8atTg$xVUMf/r9g6pD' );
define( 'SECURE_AUTH_KEY',  'e22I9u#F],$^<VD_qf/_kmCs=/TCzJOn)JX)>1,Y4zEjeh:,+1B%X.C#-(1. 4B%' );
define( 'LOGGED_IN_KEY',    'oJ8G7r7c<-U.y@fnBne?|b8Tk{obLXWat7seBW@J!UfojFgCX/64x7a.W<I%,:$-' );
define( 'NONCE_KEY',        'hX{5MexVR5rV}i9<nM.E[S/~7mB,89+?s7h[9X69zR% /xva3&~%p%60d+  ?Cg}' );
define( 'AUTH_SALT',        '`I<fSO:LBDf5y8S(LdUcQvt2hI8}JCg5TpljZ;U6P_x/a/Dz_t%(F/N}CX6x.xn}' );
define( 'SECURE_AUTH_SALT', '1*Z;t(vGl5-eCC`uNo_qtRGj6UK^d*!|/*qEY&Q[@|D3}yDKhr .U1Q<xU-J:;/[' );
define( 'LOGGED_IN_SALT',   'i8~By$oqhO[*sZlgJGYFT)4LoI.? r!rS=kmtbOs9;_GY}ukuH6(po.hJ:Lu*>e/' );
define( 'NONCE_SALT',       '.8dsSKH2.418*CPFUjB7xWq~Eu(|w/2/A:7+i0Rp]|8!%AtN@$[tp:-*ACbC^n}N' );

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

$_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
