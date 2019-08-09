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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iadaptime' );

/** MySQL database username */
define( 'DB_USER', 'muthupandikcet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kowsaly@15' );

/** MySQL hostname */
define( 'DB_HOST', 'db4free.net:3306/iadaptime' );

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
define( 'AUTH_KEY',         ' / `ac@J,6l^U C96deb/E*X=TIBx0Jq1)B/!g?z*g|^W@-kmF]O),{tzJ-e{.lL' );
define( 'SECURE_AUTH_KEY',  ',Cs4#BT]DQSC:%49si<dJ8Nvnn*yA1.}Rh1}[NzRZ7~E/fV<]u 5,q|ugHn7Dbs?' );
define( 'LOGGED_IN_KEY',    'HSFF/#kPqlb):o:ry?@7+b7z;i,i;aPA@SWX.1}M}74Fclp)?u]G&9z(U8U/3SO.' );
define( 'NONCE_KEY',        'Q;O9Lu.xMM$82Bv9F%]S[p0#mqlp}J@zNXqEB;0gE^KCh%0tHfHsM%1[_nGygCQd' );
define( 'AUTH_SALT',        'V0vvaC{S7N8~^%i3v_bK<ta^OE7wN(pFM!LoGJ1}GD0fIzlMyoN8bFh5UU,awKR:' );
define( 'SECURE_AUTH_SALT', 'd!]eX1jFYB>SJOoT1][+uf?0A.<qW~,+P=5}e=HYyPV-4$|}y9?a)0D5FcCrV6XD' );
define( 'LOGGED_IN_SALT',   'SQZ#|cD<L3(F;p4Fe=}2b&e)7~^I(bBO-I&h:.>np*:]lrp:VS{tM7>oF[[n]uxB' );
define( 'NONCE_SALT',       'a`fav5r;A3}[CDtpE4*j{^c[IT0m2B`g8vr9{~0x1vIvf,di+9TQ(/S4k}0}rnLc' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
