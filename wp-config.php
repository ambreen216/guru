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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'guru' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'nLd+pxt31X0I;Z<t=yHePaz1D.iJ`+HF>n)a+891XFD%w<F)kXBV*t|@M^~aYL!G' );
define( 'SECURE_AUTH_KEY',  '-/yh4+*5vFxx6MP0adaB<zr$~rql^ik1U~YOPs(;&oI%{wnciL8trpM_P*#gCjs<' );
define( 'LOGGED_IN_KEY',    'R1X3Hj3d{czOMp_jRYr2z+D,Xu0x#_/W4VpOI k&mz0I(ruCsr?<}.x=o ndu2bI' );
define( 'NONCE_KEY',        ')6+qxJn$E]Z~xGS5UIfl_3=/V{JAOkem=@=Y[!_~)3<_A0c?zHnZ~.kt8,NYwj>*' );
define( 'AUTH_SALT',        'Q?[>O;*$I{%0z)i(s? +L6^K,E wg%K_mX}1*q(]pc[EL`{;M1[/L%l^:bJnNXLA' );
define( 'SECURE_AUTH_SALT', 'eFnnZ,&d/7=Enr[Mk|_rXP/OfVL&CiCrO)U1WN0*KU$`X7V):zk-b#yb!i5{og++' );
define( 'LOGGED_IN_SALT',   '6?D+t[!x%oGaD<6mk;`$CP-&?[y7mk~l*ZPSa+5hvUrzFJAE#HU^hT;5 9Dj9[~a' );
define( 'NONCE_SALT',       'G;ZfrvO22cR5aH.nBNq;=Hv*w~-v!^{os<:yw>jLvSZS>H5{Y-RIOa4|x79{Xst]' );

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
