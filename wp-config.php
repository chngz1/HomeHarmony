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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u900825059_JhKQK' );

/** Database username */
define( 'DB_USER', 'u900825059_AoIDB' );

/** Database password */
define( 'DB_PASSWORD', 'N4t2ZIadX3' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'A|CF1OC=P3L#W}pmlC!{o(z50Dj/bA fkC_=iZ!~XwOs91:Zt^S;eOaF,158)I~r' );
define( 'SECURE_AUTH_KEY',   ';B7NOksU|MLQP*3lD&UqOEd*v=56Q#0-[h6rC{y-z^4u8n,pDKXI<]S|V0kihO%v' );
define( 'LOGGED_IN_KEY',     'd4a*>}))*WHvP}c#HJwYIx[0xz4rv.h~Z=>e-YPA43}}8]Sw~~yfXbQ1A($03[B%' );
define( 'NONCE_KEY',         'kh~@Hy}m#qI1_jq-k=2N/bqe%XIDH0Jut]/J$o(M)m}:^=+r~([*%:?zb9D@]f95' );
define( 'AUTH_SALT',         '9{{=wT{i 9Z@nYycb6qial&QW3qeZM(wC[~2FVNE`x^_J(ND&(=2sWBm=->dBhj!' );
define( 'SECURE_AUTH_SALT',  '@w/7+Qwk/X)Es5gvs[lQ_&/6ko/n8rsYU6anKP(Z{pg2Zu~_8uo6U5Z>+r|b@=v?' );
define( 'LOGGED_IN_SALT',    '{o*Qhb>(Ue2 2yT$vh.P)H#crHtmNXZd5;CWH2&p~-rW uizQ#r/j/q4%mk ^]^_' );
define( 'NONCE_SALT',        '?k2b|n#72-.ngE[5e_SZ9&Z;T*k{6NnAgW<%o>6,MrW%h1Vam)o7UEgFi@[9:-a7' );
define( 'WP_CACHE_KEY_SALT', 'E[{;vsrf>.+%S)qV-!e(qu7BL>k&?P!0a=>rdjB|@N*:,z>%tAyC~0>2`NeF9eZ)' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
