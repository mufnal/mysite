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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'hBm47~x$:gj9.VH6oC^3;?f[/k@RR|}qHmDDUy|dmGOu<,g,=0q0Y-?2Z0nj-u:M' );
define( 'SECURE_AUTH_KEY',  '#RdqRZPg^J8; {3_R`ysosu<aa6!GES)6y].iZG-zZ?D*W5t =sUZK1.U.ezMqU0' );
define( 'LOGGED_IN_KEY',    'P#sV~nN5l,]1g@#gS~Q5A4bLL#af(oOOpN6}}fkgb/qaL>I*T= GN.9`t[8Y$:[L' );
define( 'NONCE_KEY',        'l,5)w!h;iJ1oxh1i/<eh+m`[rtcR7>c5|WR:CF?`EAo:2TMVLT*FeJ+3po 5kYz%' );
define( 'AUTH_SALT',        '^j[&b}*~P<z ?*`@r +XR9U ,>?FQQ&bQABI.lYaO+&aJ5Yb2cF*v*-w@vS:V&U^' );
define( 'SECURE_AUTH_SALT', 'BS7b;!;v6)syK::gv2m|%!s%Uosvk=}2IFn)550:|AV=JzLu NzIS:y8`IS$+)@?' );
define( 'LOGGED_IN_SALT',   ' WF!O^lZ{!:8[G?AxK7p7/sdFO1oucbS{58$mj>/14~^ccIp<m`Y/E%-k_KKXxK|' );
define( 'NONCE_SALT',       'rep6$-J#RHHXnX4q7[HC};Uu*aYM9.9hnB.YxgZUseKt>%gtW:ie9#5Ra_Q*,Vp*' );

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
