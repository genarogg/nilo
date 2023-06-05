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
define( 'DB_NAME', 'nilo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I3C{JKYd}D=GUQTE-$0+>C{vuTcD9Zg2@tn,7)~>dOKnRr5XR-Y:C|yHAk{>_Uve' );
define( 'SECURE_AUTH_KEY',  'Vh5r]:Uz/r.ccBVbk#DFQyX7L@(50N17JACSLy. ,9X8[2J|6W:B3f:YPQ%+MCQI' );
define( 'LOGGED_IN_KEY',    'CuXXYsX;=?bFKAno,I88.y&(/GmST1;~r`?6tcN]SK]:{Kse35=4@F8h@5mw8GOs' );
define( 'NONCE_KEY',        'gx..nj%B v@9pFEf7~CwBq!@js3c8Np4*<=P2$~=JE$5vPbo{B+`<--P1)nX%@hx' );
define( 'AUTH_SALT',        '<y&#u%qY~DTx+d]fOP>5,r82n{1~ADg(yvl=J$^rooF&j,yN3_GHq *Z2nf|s_Gb' );
define( 'SECURE_AUTH_SALT', 'WhwXDRd(Mh^d&PO`AijrTW-1&edUk&s,7BQsJJ?Q&.POp5)mIx(@k9B(=sCL{/;g' );
define( 'LOGGED_IN_SALT',   '2C$2PQ3UtNDjd>q-yL3>{QO,Y`(];.VQ1Y#.:6RP@[73>Y?>70$W^)<7DV`cU~FX' );
define( 'NONCE_SALT',       '`;LuU0f,3)+AMRN+f*$`:aGLV[?h-y:U&,PT_nkNu6OLOUVI3!~QIJo6u>>K(F0c' );

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
