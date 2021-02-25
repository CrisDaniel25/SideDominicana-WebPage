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
define( 'DB_NAME', 'sidedominicana' );

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
define( 'AUTH_KEY',         '9X/>.OSyt$u4Q;#z/a&o(>~`Q6z=%{D=}>>=PMw/d~/9Fn7q7p|RDcvN& 1Q/,[U' );
define( 'SECURE_AUTH_KEY',  'Ky{M!ndmjL2~Xcl9Rq|n!vmXmxwaxBdLHAAspD=Z4X&4(~OXZtL4fAn.B@+~f^~-' );
define( 'LOGGED_IN_KEY',    'vM`Keg9T>^S@9[3>4Ng!~i_1-{m~k,r/~`z{0}zJodygyq-!kVo(!f4}k4rvR?(R' );
define( 'NONCE_KEY',        '5q/pJsnp)`>}md4Gc{lq<6${VZr8?39SYg.Oz32=rZJw`?G5pg6.QUBv2!dz&Mb^' );
define( 'AUTH_SALT',        'bu$hf<x<A]7w=^rCEk3eGd{Ff53e:Qn2U}EF!W4#?ja-xB7,hG/oK;H#;6^u|{oV' );
define( 'SECURE_AUTH_SALT', 'V0l7J.xnFY|Y3o]yiYs^Lpg$H2xY|J$Y%#;Hzm2cdXq)y5eebR#kRt/sp4y&pi@2' );
define( 'LOGGED_IN_SALT',   'hl,{d%y+M Vm1vrN$aABh_W<+gqC&(hr5?J]U?hf,<u@dFwER0$y_O~4,))Tte{C' );
define( 'NONCE_SALT',       'EY:3l&EB{N(JB :b}5*C,5ZZ/)?*ZCfp@s[y+br9CtS!_r(xhP6s=21z%@/KIbl9' );

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
