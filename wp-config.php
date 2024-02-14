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
define( 'DB_NAME', 'travela' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'BiZri6SPtCrKZk3cxM6gLeEkFcdeyKkgdnFbkBR5fp7SuBhfHooD7PcNg2vt33BE' );
define( 'SECURE_AUTH_KEY',  'a0rSSC75VNXdk5nDiM2IGUQQcmoINDsCjjJwkS2rGEiZfYmsFJbIt16vHyalx1ZR' );
define( 'LOGGED_IN_KEY',    'tU622FzmFIUX05k5Rxd39x0TKNi7VnBnjTFgNGPIbtZO1Ity8swcKTuJ2sGavjF9' );
define( 'NONCE_KEY',        'GDMHd5wixF8R2o7EF45psASZrsSdb3pKRtuVrBRLAMsDbFUrLsb576NxLexlskOr' );
define( 'AUTH_SALT',        'pUmkqMP6BMqOkrnRItBfzxLfD5KEDEbfdMfQ9r1ZXJ7T70dxlI8NMQM4Ow6E7u0j' );
define( 'SECURE_AUTH_SALT', 'Eto51PCdxn2jYZn5Yp1Z3s5cvS8llvDlbQg3ajf0mp6iGTxyVzp93oLdNJxCKeGe' );
define( 'LOGGED_IN_SALT',   '2lN7ctNdFCbcHqkM2XBd6TJz3dBmSaLlNR7hNWfOMv0YWFm3gOjmXpwOLFtK8RLF' );
define( 'NONCE_SALT',       'TBGrbaqXZImAOa3yCLRtw5Ki9WDOLg85xYETdcK4WR3LtcGQHrIx9hUK6C9iuxUt' );

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
