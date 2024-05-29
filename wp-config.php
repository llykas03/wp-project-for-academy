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
define( 'AUTH_KEY',          'hZ{C@Q@pR?M4~c_kF,u=~Plqr0G*)ajfj;sm8DWWf1^*b/>J{!oO#r`xA>><N3N ' );
define( 'SECURE_AUTH_KEY',   'ZY8.vXl:Ui>O+,3?t((4Hr6F@8dP&Kzv *(qa{saJT,!Rvaf^?Qf~xN`~&`QaRXb' );
define( 'LOGGED_IN_KEY',     '+f$uDgx|]_?lSxRdy_5H2 9nX`E1}P[##rWbU+SofvKU6.GXXlm&9*2{Ohf`0 gE' );
define( 'NONCE_KEY',         'ppl}u>KA.{tG.^HubH3s2<Kb3<G6[n]-N3ko-H7~-mzu;[I^MhIhrCF`zN_I`|h6' );
define( 'AUTH_SALT',         '@dbouvW5x,9#tkBD/((m1s}mL8| =Tp[a1@K}%&%xSp-4vu(x+=9:j2Cv<W(=RCQ' );
define( 'SECURE_AUTH_SALT',  'A$]M#l0PLF+?RMiY[2GvD[I#1Dv^~t96V;Gp.S(?>JI>f$SlT8|nMBO!Hkski-_3' );
define( 'LOGGED_IN_SALT',    'We_Z2-}79zmb<)zjCHd?j@i_ogxSiL!W- eD] IFFV:]6=nf9Z}*Ecq5wB=->sIi' );
define( 'NONCE_SALT',        'a!;Z]uF,&9aLd2u$Ub,2wQiaJil`@w^q 0YR#:}<yWEjIKPl5RfqPwq=5M@L;gGL' );
define( 'WP_CACHE_KEY_SALT', '^Hg/I72S)(`E.@5BL##7+f1q!+;[#i sQ5k`;@;=u;C=&[?FjTYTR@L(OF})m?YI' );


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
