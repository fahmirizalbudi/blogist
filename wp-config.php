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
define( 'AUTH_KEY',          '>jN76Cvbd(kDgsw!9pz`7~l}_fa7*vT.6/fAE*u?(rVFkiKCyFcB>o&l%rx.L]9M' );
define( 'SECURE_AUTH_KEY',   'z5Q-@Fs3Mj[[|5*c}e8.Et4+OB;%k@,0rsV&gb5=vw [iBtQtjI.$Y@N#vK/z[D9' );
define( 'LOGGED_IN_KEY',     'fx`>PPR>4Vl9!)<F1@uVrY#H,GC>eh=4-&Ni;#9k/o@cxe=hI9<b2U*IeVe4}gu.' );
define( 'NONCE_KEY',         'ZSiT}GzW>`=MiHM~>dikv*x<,_V}9,5$Oav3f S52Z|@EwSw4%Z@AD&X>iO-r1~v' );
define( 'AUTH_SALT',         'UalCy!6xB3N#tKVdOZ89|*:ouSl;XDXZAPv(Pg,!]He0,}3a,?jSEXeBN9~u0sZ=' );
define( 'SECURE_AUTH_SALT',  'v[p.9|eo~aR1VX+zpOa96(SWr>8v{w<h>`O@8B5g:(9a1ATX#J?HqO_vBJLe>~nx' );
define( 'LOGGED_IN_SALT',    'W/TQ/kOC29B%?&P,1Fb7*uTYWr:Vcg(jx8-hj@*O>d#Wa1!&XzDBp!YWMXq9`$/?' );
define( 'NONCE_SALT',        'dspF*dzO2]nm6-Fwr?}~{)MU]=hF{y2s>zQCZ$vVwqYJ,ec3x_QFqLhw=#iFQmr^' );
define( 'WP_CACHE_KEY_SALT', '(gw_-M^V6*-RU0t}dnHQ+tLv(iZ+fU>;<KXjcd~a!!lRD{8wN74gK:!t,lx|[MsX' );


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
