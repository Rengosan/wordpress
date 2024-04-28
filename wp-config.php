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
define( 'AUTH_KEY',         '31!}wtos/WH1`$zS$^R?f3H!CW{#Pf:BY>UhgP8TZ}t+do~i7p_@[1B#vZ$q%~cm' );
define( 'SECURE_AUTH_KEY',  'ApE6q=;CiyLvd.]A$6wTJvIjgY@wP$i+E*:%,Uf/.MNdv7FH&AP{s9~!93O=S0:_' );
define( 'LOGGED_IN_KEY',    'Bd(eT)p6j73D0QqdeoQRTU<*EQEKJSL(M=uxOIg1]. EIJE<l}.N}S[TYy~c13RW' );
define( 'NONCE_KEY',        '-OY[!g/aw=N*$`grXCznd?1wuAbT)KFAdlQwKD@B!#L]8m3/+`>s&wa6]XW<,mB ' );
define( 'AUTH_SALT',        ')es>u2el1Us@LC:z(h~%AU27xM ;Y-7mDjxCnX:?aA7%sJm,#<zb0RPbj`u{#_V$' );
define( 'SECURE_AUTH_SALT', ')_f4=)SU@J):Vm1a@1u1>A&4c~]g[2_4so}p0WLL!ptlG_m-Q*ERI(RZ5l^aC(P[' );
define( 'LOGGED_IN_SALT',   'wk$J[< |y8~:K&57L]<Rv9B=]U`.nB1`Q5~=S,i/RT!9v@!p)oR^{|})2d|/O*$8' );
define( 'NONCE_SALT',       '2j-!Aym/&:lR<%d{DSnxwK^Z3CE7&QDZk,W2U+w-w`7}V%4mtyi!;u(,4<n(~$`a' );

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
