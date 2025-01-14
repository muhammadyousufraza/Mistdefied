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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '#x-hG9=ctKX)6A#g#k.gArj:=fwb]F3{A9dZ{dpL?52OnWJ,OvAy%a[Nr7,T;FW`' );
define( 'SECURE_AUTH_KEY',   ')F(<wg%YnHa~0UT+7tC{(Ut+Tr,;)_;J.KE}9voaA](a_+#^ f*&@y+()@&8_>4j' );
define( 'LOGGED_IN_KEY',     'FnP]y|??uB;~H+/hBBj|2oT}~|YQFiE/ao=V%FW0 rAUt_>K]qxKj5=,UOWm;$<-' );
define( 'NONCE_KEY',         '!2]sJmwc;Xzr{-XRW?8B{,*-B}OC,:$8qmBoq5]fk#A{[/1hWv&~6b0&fJPxhC3N' );
define( 'AUTH_SALT',         '844Q<P25:ghmHjlw@3.u;FYDiL?Ne(bsIfEy1a19UuU*Q%8e`SQHwk|:mrc,&)&i' );
define( 'SECURE_AUTH_SALT',  '*+/-&Q9>p(UR5HgI:$0W E- T[<7tg76By%;A[1lG+}iY>9lbGsstb)du0qmb:=$' );
define( 'LOGGED_IN_SALT',    '_|>8dM21hf{N(C!Lf/R@!mJCMj}Yv!w[boM%1CS}fq^;?sg3KwrG.E3K&oOL|Cd_' );
define( 'NONCE_SALT',        ')S]{C/:#YOsR)bn/jOO|z/y/71fpgdT(H8jxC*ms6OGa:Y:;5[jbP|]aNWB=nQ0;' );
define( 'WP_CACHE_KEY_SALT', 'R 8|:nM}.<6XY.;JF~$`&U%4[;uKKj?6hu#)tAW`xp_Zk}q(u*a$w>6FhFVE9yi@' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
