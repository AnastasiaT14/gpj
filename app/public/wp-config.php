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

define('AUTH_KEY',         'AXIPWCZ5nslUgTRVT32st01M6UbD/ZpEe55uZIm48IvK2aY9u3HbaoLGJ2/TbGD0DObdfHX86AlPSO1Aa9Z9VQ==');
define('SECURE_AUTH_KEY',  '+ToOgWTE8u8P9jCC0+DN0Sy2b2tF+0aKoMm8yZNogsymy3J7q5DWf6ea230mcCl7/CmuaB0tAjBGv5ycqbAwMA==');
define('LOGGED_IN_KEY',    'OSbQwfbZvNRUwcAWMotQpHesrCKZuiH8HZagbiXnW6uFsK3eidBv/RBY/6X30sdMpS+BysF83tw6x7C8h4Y9xw==');
define('NONCE_KEY',        '4548WjtkG6BfwL/ub6qW1GtvP7qZGKIKkMZXXsSi2ebvL5M+P/rh4Te+83cxWwH1AQ6F0AQaB0Kg4RP9l16+zA==');
define('AUTH_SALT',        '8sZTBkbvR1zsGNWw+OHyIkOpdseaGenBb+4iIG0irvPpDlcdax9zo5sq3BM06G4oxGcgfFH5ZSgGD7SEMOf+Yg==');
define('SECURE_AUTH_SALT', '8uXmvz8QWVdNigZp/5nvZ1lSrFjCH0vXZrDqUtm3AZWmQSew7MR9nmiRFNQMDUABEJ20ynbrfooC83Mz4Vj6lg==');
define('LOGGED_IN_SALT',   'Blgqtm0ij+2WFGNulZKnynYK/MY6tiL0WqLJwUU2cMk+DLG3RjihNC9uoyTYUuEv/FuuRb1S+/gIbnadvKDTBw==');
define('NONCE_SALT',       'RykxkQ6XZ2bWRqYlTG1AlacS2Imp3KYEt4knOLB/k2GewxFDlsUFYl2DijjOD80+dCsmQ+Af0v+Z23VvTFwVbw==');