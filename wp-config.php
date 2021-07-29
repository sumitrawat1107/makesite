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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'qh.,}WZy+@|VGb%7r-g[xTAY[j6ocBpZ`-.mPpFd@tF&cAs`>J7JPTf`^)*|ZG3M' );
define( 'SECURE_AUTH_KEY',  '-7g[sF-aB#8v9G>5IQvgEYidaS_8n+c;nO?GmOVQDFa~EpT<PzuCi7<Er`Esv651' );
define( 'LOGGED_IN_KEY',    ' YsrHF_c6y0JXsa^}O(m>^3@OpBq{qQJ[+hBK3!.ApJHNPXonpL,nY]H.q/ScS0(' );
define( 'NONCE_KEY',        'y:N.<dYu4F>/47*!h.$<Y:.hoS,a&m`e*vCi</1F,vN!u!!U^]+?5EIapd74{l]`' );
define( 'AUTH_SALT',        'fP#KYa7/e|uB,@V*I3oQ?^h)i|*OisY#b[,6_l<F}YGEXw(F= `w `+RU`N+)Z4{' );
define( 'SECURE_AUTH_SALT', '/de&/G7S-xjwE$)}zD*f:.M6$`>vya5 f*{VKx@FZ23 VnDn4@X-D 5lr`p| F1O' );
define( 'LOGGED_IN_SALT',   'VVFztXq&M0H2zL:x?iJr}s0Srsb,HuEf~+p:PZfaYP_DPFe;tIqS<+33>7uL%88P' );
define( 'NONCE_SALT',       'YF@A~j3uo>jR^%g~TOw8u%jJA8cFh$zClv?ZXy_6PGO|bqA;0mMjJ UfKE+froS&' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
