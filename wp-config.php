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
define( 'DB_NAME', 'wp-blog-2019-2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/81J3BP61R0{?xhgGVxs*ZUghUMtv>P<PXjgX=yen>a(`Xh4>UYfC25S $i28kH5' );
define( 'SECURE_AUTH_KEY',  '.?*{h0i?k{zIVd)Wojj3g>q*(47##=saHf9G^|`l#HrS=F39n`D+W/!*u<D126v3' );
define( 'LOGGED_IN_KEY',    '174xA BB+(#@a3dJ>h$uFqe/Mb*hbP/8PoG/%N>YNcfRz$YB2O7YGXBv5lP}AM;L' );
define( 'NONCE_KEY',        'eA-FIk*jNC1@0JO#}o /N:RP_R9SH8}2;rkgp*O>;+1tF!bg$`fToG/1wt><L)x ' );
define( 'AUTH_SALT',        'iP.I$h01e<VF?aLnRBG}s,{&#~7aI0sfRq~m>mZ$cIBp9OcY^kf16qz^vdcx,X8y' );
define( 'SECURE_AUTH_SALT', '@oDB43iViPxfe L5@dsN,CJkvl=op?tewX1Ph-Re6rlkb_Ph#rC435LWI?)aeQow' );
define( 'LOGGED_IN_SALT',   '8h~%N6,{B @6Lsu]> a,;=S;JIdJ?3199(R>}dCB^9;:<pSMjK)HgAoc>Tm% 57{' );
define( 'NONCE_SALT',       'G9MO8fxY-5RF)k>cbn~?r>-)}Fv8IrZoUNlcY^C%|,v%Up3]IpVQ[Uq4fsSq%[Mo' );

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
