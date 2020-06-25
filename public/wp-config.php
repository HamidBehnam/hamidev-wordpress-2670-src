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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iHNXLtE9g/bugvdl56VI8FghxmOW6SuetbeHQPzn5KS31QhR5JlSa741gElEBlqgwg8itaEuPLob9SACz+5xTA==');
define('SECURE_AUTH_KEY',  '5vyLtTxkozop2609/9ixvcyM/DKpiFnv78BqSIIzW4ThOI/z5ufoQpik6IuGzNq+ZyLNvtPYVeRKEIbuyuigRA==');
define('LOGGED_IN_KEY',    'zm+05GWg++XEV6rU+Y1WR/1gI2l6QJnln/mD25Vle6q54tzdGwLIecqUyujB2y+Xb/hjQHJECFF2gz0ZbGYXjw==');
define('NONCE_KEY',        'UY6pCSqzILZWvzJZLfkUdDfa061svlKxmVCQIV7orn3I9tr5b0Ym0+++Dzc+f43g7bBB66faRyocHzKu2YpocQ==');
define('AUTH_SALT',        'D4hNdY2eSyana/phdP12C+3N2zLfpzqeKYCKBNGl/uWMwdTZqXqErVyEZHP/1edg2SCeoX81NLuo1LJj2osYiA==');
define('SECURE_AUTH_SALT', 'JOnJx/ao+kPXgwNWdmD45QG4G7RENqXxKbjU5k9O8cXH3VV0lXG8wyWrlxvBhd1xbxT6BkOwCsIv1uFeF/6abg==');
define('LOGGED_IN_SALT',   'iWfWwviov/mSaEHgIjiyhHxfoKbcSc1+/roRRVgFVoXJNGdbalK5vTsN+CVecwRQoNztbhLYh1FcMXAMH4w1EA==');
define('NONCE_SALT',       'NdlhXGxwqGE3hwnAq2G9mvFz5A5UGYSK5ruAal55hgCR303N1sRplt3CgbGaKEQmOJvLTU00oOY9V1AJiDePiQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
