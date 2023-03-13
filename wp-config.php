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
define( 'DB_NAME', 'myfirstbase' );

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
define( 'AUTH_KEY',         '6P,YzpNn+*AYDcal1W<h7#0^T)SJ&&6JJIehi3m.PFSl0JPWhPEi8my MY8{M~9T' );
define( 'SECURE_AUTH_KEY',  'd}.yrF0A?#$80IX|u)ax D25 [[7AU-(NfO]:5-Q+44Io]bdH<&R=$@!R6x.JO(q' );
define( 'LOGGED_IN_KEY',    'j)5v9sAyRwj23i^f;Z*8KUfSbC4`=RR($T^_^p[N_i(2%h6/<PBy^w`V1ejJf]3[' );
define( 'NONCE_KEY',        '|DpPN[3PY)YTvgbBp(:h tp+j!~Lb>Wt{w};AX~)sF+oPvM>-)N!yfiu`~KdB,:E' );
define( 'AUTH_SALT',        'L3qvC?o:rwcfAmtF{H;Lfc{L@$ 3$~xx8>Y88%n9~L_e_,wVJL6`Q;Bbk+`T.m`|' );
define( 'SECURE_AUTH_SALT', '$*2hQ^-uvDlK%wu5|eOa3:Zr};e9YM5CnNx!FbW6%HwW3>oo34-]#IP)`jtQwB2r' );
define( 'LOGGED_IN_SALT',   'KE{dD^|*G;EulH(_/(`/5Ykx` :-^&(y w25mwJzsWtM8PZK];%oF}y-3&%e;c/X' );
define( 'NONCE_SALT',       '22y6ej1-S [fo2$8^D2h!oPf#jUKG$Rp/{_!mj3NoXiIj$-;8fF0ad6)`Q=kkTef' );

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
