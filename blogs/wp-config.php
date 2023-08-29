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
define( 'DB_NAME', 'i7218270_wp7' );

/** Database username */
define( 'DB_USER', 'i7218270_wp7' );

/** Database password */
define( 'DB_PASSWORD', 'Q.8uTscz6sv1sTvm7Gy70' );

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
define('AUTH_KEY',         'epUUjXOGkA6WnD9PQZMW1Dx77bN5H2qT1y42XLKq5JTipUITpMgvfXVA7l9kXQLF');
define('SECURE_AUTH_KEY',  'MQK3dfUnvamwk0qERyBAcJndsNYfcGOvZE9Mdm0vngRYJt19fygyWjE5LjV8EOzV');
define('LOGGED_IN_KEY',    'H9V6fGNEZOkhHMgA0oIireAwFx7qNVRMoORbOGdksIqMiybjpMOtVct3UdYklk9j');
define('NONCE_KEY',        'jAnX4uwwzfpybetP0h5l7f3Grj48fgbsPbJwSw2TMRYFQxhk9kYPuGK2DWLNH6zf');
define('AUTH_SALT',        'UmZNJ40qgrNO0kxVHEMraR6aDnrpw8yJJmbZy4Ijiz9kgtKrVKVpQjOKpqiuXBhR');
define('SECURE_AUTH_SALT', 'lSctcQxF77TUtL4aPshaEC1lIW212eKnn7SMN0kESNf3YeK8I5do6yv9un4Pw5cK');
define('LOGGED_IN_SALT',   'XGvRliRYGKgjLy0I8hANPgaZBSDbuS1cRxzBM3NO2F6BZkFG6bCgF8lrnemw6u8I');
define('NONCE_SALT',       'o6PeqcRBmgLfsXAIrsztrf4z0fXmGxn9wY6bpErWl2J4ydCk7yQP1Y2gneJxuLfX');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
