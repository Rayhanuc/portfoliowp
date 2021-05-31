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

define( 'DB_NAME', "portfolio" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'tOQC=fXjesU-P]LV&Qt:]2>=A1oLx[1Yc4(ha]RKs<%+;w6OIr.#29Hxdl+L],JO' );

define( 'SECURE_AUTH_KEY',  'i[_*h`aJX+A*Z>3kr(/8dB9JZ%LY<I$gjqGC6mVZt%xJL>#1@(F<xbES_m23wiU3' );

define( 'LOGGED_IN_KEY',    '@oE@f_&0F4:+2Hro;`hY|.9BW}a>#[B%!?sb|^2$SOSdERm$rK@sk!I|jpWioDd,' );

define( 'NONCE_KEY',        'di?pq,s[_c[HcXZSm^4ih q/EFQ]Zm-^hwJuA@RSTd@z3;~++4DcT?et.v?`k-D`' );

define( 'AUTH_SALT',        '!I/*mSxVkGN^,PPJOGSCgCw(4Gs:?qR:%1U<sB2T]!tf8*i8gQu9l%/gNdc)Y,%]' );

define( 'SECURE_AUTH_SALT', '~-LE5dA>E4lIS01`kHS1ab@@<Q!}Asp)zkkQ]3q 3|4McGF]ZO3/z2hEf7a9#hkP' );

define( 'LOGGED_IN_SALT',   'dn-bXmppW7@~C*mOpu=?5@Hb_G>Q=1wOcK{f6Sp9sW;(1J0hvQ*oUi=4>$nXhJME' );

define( 'NONCE_SALT',       'Y.HVSeiI~9ym;OXBmRAl5pxKiNdtlha)8jlR_};R<*xc!H|l+<%-m9-|lRT2Iz^r' );


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

