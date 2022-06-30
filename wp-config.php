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
define( 'DB_NAME', 'database.int.mobilise.academy' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'database.int.mobilise.academy' );

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
define('AUTH_KEY',         ';X}k,j70|QI]-:;q0PYk#V|7)FL&%}m/egR3=tLhkWk+)dZz(*j>h:1qO;;d->jP');
define('SECURE_AUTH_KEY',  'm-swio~q+M^B1,2_1;&dIHEWf4YHY<.&x[QGp[k6z$*-f&0eY7+R%>(N1pfjMYE>');
define('LOGGED_IN_KEY',    'E$GzYWD}5^^s 9PDewF3x!JnLwQr,U>vq&RXO}nyWU|4^|g$Qw+R`LXFpIw+POE:');
define('NONCE_KEY',        '}FgGOfg.mk<5mNSLFs5=ygmA.|+$7|]oQ-5q_hV+0E.NY#zsl)+STJ]&Y^eq%voX');
define('AUTH_SALT',        'Xh=h>YG3%?x_y+-WF%Bpc1Deaq7)gv6&Jt@ZVG^r{@-vyVR`yM3cqw%Skz<_dx`#');
define('SECURE_AUTH_SALT', 'u&38jle?0@Hw`6bqh45U>#;F|!t-%f6fMzc#qCFdlL}/_WfX0=&7YdG?V`9^Z{^+');
define('LOGGED_IN_SALT',   '_-^L$_xseLRq9[/EsP_!+xvE2XtBM/]d-2U?J*+.!A`4&Rg_zZwwQZpseNu!/NY!');
define('NONCE_SALT',       'tO3S?NFcl|#0QnKd}/p=QOz{Mc>d$vbxD_SGx6ua{[:wA>GC|+V:IpjIS9$9]>5=');

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
