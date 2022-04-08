<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u920581523_YSdfH' );

/** Database username */
define( 'DB_USER', 'u920581523_eMrS5' );

/** Database password */
define( 'DB_PASSWORD', 'wHSDLBgX7S' );

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
define( 'AUTH_KEY',          'p#DN<5C|Yu&u;ilr>tylZlJ}Y{ar](R4+6HMc3CljZ7$s}0Ok:y?!!F%O`goS0HR' );
define( 'SECURE_AUTH_KEY',   'P2KYr/_-iQ6B2V/QNbL&/LZ#W9,/dySKwg,nI9y8l%Xlc~m@ez9=5T$oE)>f`Zt.' );
define( 'LOGGED_IN_KEY',     'xl3Hg]T=5JM]Q]` +g8<U=?6IZdj50(#:pfzxn~_5%W+p%v&-vSCg?HpORR`DGG]' );
define( 'NONCE_KEY',         'J,9{Hrl@/H?$|,*GwFt]!<%x/8Zhj}<;I}Rrj9NDvEr,-L+;;t.+ zYey^y2;NT[' );
define( 'AUTH_SALT',         '8KPu4#baiAcz3O6<I^;P6P.,;;SUUiGdq7?zt67Vh96VRE,[7zBONdMyv8u5-tI/' );
define( 'SECURE_AUTH_SALT',  '_15K%BVLO~Z9F5=KS#fUxd:.SqxO41w{*s.G4_8gWkphqg+BdqD~[.G+ZcWFW{$:' );
define( 'LOGGED_IN_SALT',    'f})sR|NS8T_7~qbHeF@.eLy7rHZ?DXc}eSB`!cOW-~rh5]fs O?nP>mQwW*E(qEc' );
define( 'NONCE_SALT',        '7fFO9,A,Lh.l(6W4Mk^].r<EutfUfA{u7%1eNG$1xm`gvMJHH=Pg!?4YU71z5+wZ' );
define( 'WP_CACHE_KEY_SALT', 'B1D,$lI&175W,c7W8^^6TREV&/=b8r?c57m[>,!DXshB)m!8Q0;-ZuVvq7={vOGh' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
