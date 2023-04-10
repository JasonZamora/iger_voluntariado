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
define( 'DB_NAME', 'iger_voluntariado' );

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
define( 'AUTH_KEY',         'u9S5p-fq&(v60S jmksM&*KVq?^U&}Yox<om(rGw_[Uj<IsZ~A~r1l84bEi[0;e{' );
define( 'SECURE_AUTH_KEY',  'nK`K|nWQ(_<NE[%wp$DK~h`/_g^^|^`6mIfYtPUA@s+fVoj8{/AL4f;kI!X+0w5z' );
define( 'LOGGED_IN_KEY',    'gfU9e_;Ayv(TwD{_5F,0Cr4#2cK*%%E%0;2ts0R$#k|ofTK0?Wuk<q]o7=#MdmaR' );
define( 'NONCE_KEY',        'j?-k0Tv2lj]7d^dl1scS)[:;`:pn!7qvkDdr>7GG}7%QY$?I^c8~khc RE_#aA!5' );
define( 'AUTH_SALT',        'Rttx(6?*yY/|Q.jhnV=6*AzFt*$ NL8:=t0GmL`=Og.ld`>4NX]1EoCSed]ag>z7' );
define( 'SECURE_AUTH_SALT', 'HxVVtKMe{:K=2esO5ZH9h.oT]w]?8$K.$],+1NWE[JN$=T;CpPUdS?*M*f/Gs#uu' );
define( 'LOGGED_IN_SALT',   '%B}UQ+B(VH1dtzpz$ 6o4a~:ql)z>k@Od#|tc9F*YHq{1^0#_}3,g kl]>xR~MN@' );
define( 'NONCE_SALT',       'qML}G[&HQDc;GGJ-+*+DsqM(<VM./:nX),CEyT|8B>37e$Ohb^dLb| (0eBVA~I$' );

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
