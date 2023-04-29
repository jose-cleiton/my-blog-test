<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my-blog-test' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'JW|vfUYQEqphlz($?Cf#GtnZQn6AE7]R: 9mQ|]P; +D$b^?$bq<VTL1!gvP8lx/' );
define( 'SECURE_AUTH_KEY',   '+[sPQ18E|cC!V/t&F]DmqB_~olCB]9B,yr82qPwZWZ?uq]|B7DA+<K+b7r_5|0]?' );
define( 'LOGGED_IN_KEY',     'dNUG(8u2.xBnS|s-7! AY%H(J,by6lUrE*(6xO)uCCTEHH@n/`XCO/`ca,juEdyZ' );
define( 'NONCE_KEY',         '9!qdww:vU6NA7 V xzy-}gW2pN7}VfhQZnKQ,UoJbC4V,ah=V|2rpriMuReK!Mp}' );
define( 'AUTH_SALT',         'mGeEY[7`N]i`UaN@m]#b$9{U/?{W$/k` e!Lf{-/+_ //IrS;fi<*(/oKk_3fZmv' );
define( 'SECURE_AUTH_SALT',  'p H~ddi_|Qs%k*(cowW|7]xg/O->*:Y%o2]A=.=ah+93(+GUuQMZf7v(LqfG_7@0' );
define( 'LOGGED_IN_SALT',    'vS=Kz&G]9WeJ]lHC$vhwoF ZJGw* mn76o<V$Z@<w:@piP/9:;t]d`<X5Oz.hDbo' );
define( 'NONCE_SALT',        'l>]M}5b73-V/[k`R@+kG{kmH@M{3.yOcn|G.NLQweELYYqOYtZU^HP)zdc=.W3t-' );
define( 'WP_CACHE_KEY_SALT', '&x9VtcR62xy;%|eH)+a:P`!7bnWo0_niLXB6dQpZdB<-S.QdloHuawIjh@jp2T6s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
