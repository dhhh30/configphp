<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rr2006817' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ct,HwAaL%;/&CP5|Wk<Ctz%&!I^)-ufi9DqRyTB[%j;{OJU|Q6/#jivGSw7K@!FN' );
define( 'SECURE_AUTH_KEY',  'fs<fYq@:^}<R:dIG^@}t2+rH~WYjk]#)$<K2YHR4%I2|j  c(aqK!)3R0b_dRu~P' );
define( 'LOGGED_IN_KEY',    'uI^nTF1:3]Ktc0_,[~ 3z!%CtaFpjF.sYIt.y4BDzqBx]DOF`tdE[|SIwXf9o/,D' );
define( 'NONCE_KEY',        'b5T9}l;;Y]`AR]c>{UIl[7vx4[GdNYY><*,)+!jO.?h>to~`5c[pOBmIGGe=VF-{' );
define( 'AUTH_SALT',        'Dw2M)x%rVAk>[Q<Gts{m]ShQLDp&p8uE@mKW1~RB_:oY,Os92l([b_}0_C/.)GlB' );
define( 'SECURE_AUTH_SALT', 'L:n=P_C>/W*YDMI;dV%l9D^KrCfffiDIU?{DPh{6<})2P10a<Ol{Z)m*.BNdYIgd' );
define( 'LOGGED_IN_SALT',   '<SLF9GOhVY5D&sB1e;2jcV[B6J^JYBXK53mdE6DL7UXjW@;W3AK%IWb)~G(a0o-2' );
define( 'NONCE_SALT',       'F#o3e.tn*smoxO6%c1Tzmr9^=+F^zGbTN]TM<9-qq<xmdNV3q[b){R8xA= Kd$d8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

