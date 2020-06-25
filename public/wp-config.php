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
define('AUTH_KEY',         'kLFtNSAverLdBGHBKpYX6KfUFKKQzMIP1TsS3ljSTfVXGhaAYSiLwfjUXqmD7s1jMjrBDkXeWvrV7o/mF/NPiA==');
define('SECURE_AUTH_KEY',  '7ZBhafGsCxWD2PyyeKonqvT4nxFWRc4ORAycLPRQUt5XPEWxoGuqqdIrmrCHhYaL8Se93PmLX3R2N4s5soenZA==');
define('LOGGED_IN_KEY',    'wUawFxFiXrTKop8xOXHs0Q/yY4Q7bFHxKfb9RXH/fCa4XyBJImTFpTnWv+fVC1HxJlO2hJvNkDH38R3ov9a8KQ==');
define('NONCE_KEY',        '4mtSF97LR7x65xMTuC7IBXB2z/oWzni36EBLdywLiEZ8d2dD0LY76RGnDsBp51pKSHqNq7wyMGLVBz4zSRFPeg==');
define('AUTH_SALT',        'st9xzkdGAXi/4+Q9j3M1JftEgpkTU6MFO18FGupydmgMJNa75Cc16E0QuWY7b+N3iLaVItVCrZKZJxAAypsYNg==');
define('SECURE_AUTH_SALT', 'OWIspaM04QrqV+QLplUHp3pHaEUG376FBMSV+nKM6KcBaWNPsSVclnZOWlPf0mNKsz9+Jfkp080e9g3v8eY7vg==');
define('LOGGED_IN_SALT',   '3Pdgi9X/1PNRd5zO2+hyO6UQZK/u8XGyVXCJciMICl4QtA9jBKzfHRu25muRqDySjMQq5lbCUywV0Q8qvLOESw==');
define('NONCE_SALT',       'gYFTk7spUnsZn4Xv9Uc8WS0PGwyZMu/NJqMz8m/2wlCGbd94OEdI3Rv8BviV+t4GYf7MwRQb/aw7z4l+Sn08NA==');

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
