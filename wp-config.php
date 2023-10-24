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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bitPress' );

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

/** to enable me to play with plugins and updates without FTP/SFTP interuptions */
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         'xwq{V!QP_ qw=jZ0=yc]VY5DyhF-}dy)`0idqZPNfwJ3vLficd)y{@kr5{.oSepW' );
define( 'SECURE_AUTH_KEY',  'Mc+]$UZ&DgDf(}F:E+@d@whdWIQKLQ?]=`|8rpjRp&7&G,6N7}ej$70gBB9 P6*9' );
define( 'LOGGED_IN_KEY',    'm$l)u3]Q$ZoZ6dEz14X)-2irWZ|GInRn[~zG,@[Mgpwan>V;zQM9NLQMnHwXESza' );
define( 'NONCE_KEY',        'Csxb-x~FVU!B9NrYX(CV.#mg(M|P-woNz!*3kEX4(RX/--0,BYr>JV2WqV~09`If' );
define( 'AUTH_SALT',        '/^NP|jKJnY`;^Iv5M 61q(*,bv|h2?A+=nu!@r~(W5z@RXc&Cm>Pr+R0VN#kR?_F' );
define( 'SECURE_AUTH_SALT', '.:t{81~qh`) <Y5YO/&8iQE]M2|8V^V=/8y>F9A?6!:/C?)|qI8AR5aZ XZe~sO*' );
define( 'LOGGED_IN_SALT',   ':(5AB<ow5twTa!#l6]_.=mE*c=Pv4<2<-JURwn$EDFXzKR4!.U$Uv tT8n^v9f/0' );
define( 'NONCE_SALT',       '5XYmsx,sQfTeExhoY+r6#upRT#<!X+ :*<CiL}QgjCcGW^.NA^[4CMI X<C1Y|8z' );

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
