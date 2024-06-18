<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abijatpu_hik' );

/** Database username */
define( 'DB_USER', 'abijatpu_hik' );

/** Database password */
define( 'DB_PASSWORD', 'zMkat3&*T2W@' );

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
define( 'AUTH_KEY',         'u3]qkRhYE5hxmHT9-^.+sNyX#M|3Ra^`Gx,]`1dEEfyO:oxj.(*O>ld0Z=YJpu:+' );
define( 'SECURE_AUTH_KEY',  '?OY10FbE{`/4B+<^}&hdP?FFId6)*Ydi<!A;F[7T onY$`(Jhmr[a&T#>W8d<T<3' );
define( 'LOGGED_IN_KEY',    'V&Wwdvd6E%#MW.c-*X(?A@?WXQ=e:U.NqtnOrEb|$H|(+nVL3>nw4<Z>fn5qGxcW' );
define( 'NONCE_KEY',        '55p<,&jNM&Te_;m9ch:mv{3ToLS]6$;6>Iy@a/-hW4Sd.ya6}ZpV-|{_;btQjX/N' );
define( 'AUTH_SALT',        'Z2h.N}967^QTUNp5-_f?r_LB)Wx<~.yF|`!1Z|.JeYhG:TyT+3Wicr:}n_&<*~t.' );
define( 'SECURE_AUTH_SALT', 'cFVVo5PPgT/E2b^u2E-Zju8x,l>4)riCL^/PpRJfnm-X84Ce2j:+^%/B<-_g89v&' );
define( 'LOGGED_IN_SALT',   'Vz`%,Ie+go<eEoZj<[Q:,mV@JZmC_eQ@LKG1mzU!Ohk+MXQROZ;k9pk}MM~jB$~2' );
define( 'NONCE_SALT',       'T{QTKJEl?Sfx8lp8227$gy15I l*B;`-r2c9Eq|bv8hv$;kS-KHgU@lx$elwT5o=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hik_';

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
