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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gbbrbhceuq' );

/** Database username */
define( 'DB_USER', 'gbbrbhceuq' );

/** Database password */
define( 'DB_PASSWORD', 'xdRvj5ECF7' );

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
define( 'AUTH_KEY',         'K+PWUU7>ezOfWm8)UEd5{8J*T}}2BD mGswM$,<N4i%9vY0CY^R,TOY@~pYG=B!7' );
define( 'SECURE_AUTH_KEY',  'h2FxKCqGY(KdU,fz[ @NiI5?Ua3kU>I@(cJ5LDjDEH8%j&xLPmF?n^m sDw=Bcxk' );
define( 'LOGGED_IN_KEY',    '.mj+wfw|.(?<dig&h:y8+@^^k!#~zbJeI7zs$)qMg<sgHuV*1}E}S[3=mXth%e0)' );
define( 'NONCE_KEY',        '.P/qAbAa7bq&e`JQKZVf#&JL<hHNW A=-^d_Ylp&mB&H.~0-Anond9S0TH*2p)$;' );
define( 'AUTH_SALT',        'x+`?yx[4Gc|0l6=Yu~ysy)nA#I= jAFUE2ky7 3GU%J%q]|5^O#cb21J_Z*o|jT8' );
define( 'SECURE_AUTH_SALT', 'aCb@E*.he9/T?wc]1K&U>sY7.S|6}-5hf{^~u+m9*5&.N-,*ux:,m[c>cpI/`l3e' );
define( 'LOGGED_IN_SALT',   'B)[{tYqgk/2w%;l4Hgm,LQb,hD~*Tn$|M/E.ZHgHG;nQw$1hd8^BCqjLo]2cbalY' );
define( 'NONCE_SALT',       'AM|0Cx5(Z%W.9Qok8[{F-Hmq(ThKW0RN,YuRFqso6p4c# sNHJ|dQyy5esDwuPqH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
