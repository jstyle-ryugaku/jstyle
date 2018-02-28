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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jstyle' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jstyle-ispec-dik' );

/** MySQL hostname */
define( 'DB_HOST', 'ispec.tech:32768' );

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
define('AUTH_KEY',         'uKxlzUZldz4aKqlBY7h97NHcYymAgxsBP4gjO3VbHS7rl5g27OJ5E7dNqYMloAsXhxm0tSzE+haC5lJfR9/G7g==');
define('SECURE_AUTH_KEY',  '6wb/0w7mtcLKOvN9h7w7PZ18ngSLUTs8TmPexZZnxhSoiCuKx218t86XlP+pL+qi1Il+LAeBgSgsO7BVJdNpmw==');
define('LOGGED_IN_KEY',    'TewSIMQ2ZyQNdDwGh9VXdbHrLQPM6+SDQO3iyBi1Ec403tAWiugDWvFg/OtvOw3B4jkv5WZ/nGYwlm925URBoA==');
define('NONCE_KEY',        'r0jMncQM+rvFUcDMeQKUpeN8NzzIcq3b9ixdLHjc7BNK+L4tM/0ogJVeT0xkzPKGwTH5+VA2kjyUmNtkgkn/Mg==');
define('AUTH_SALT',        'qIJ1mDQeuicF9UIcr98Ic7cljt0vL77ZOlWb8F5gRq4TI/6VZ7kzQNBopx0xsTgPxl6rvja4QUIIsmxWaGQaTw==');
define('SECURE_AUTH_SALT', 'lmVq+SRZGqTEr9sPXAdOYsCqWHbEyfRuJ3S8JMVXlyWJ6+mGcqxDLCWGhTegG9jUZnPFuNHv2CxcSNGnW3/UZg==');
define('LOGGED_IN_SALT',   '0uP9fVYppOlUUstMMCSfuJ9hkHXuIp1dXfNIReT/bZe5/KzzjuvNvfvUm5xor1BIiBUjTLae+1vg3MTgbBheEQ==');
define('NONCE_SALT',       'PaQw8fc/7lJyp85zS/9cUDpITXG2sVDsksDKYl5z3xMPYLiXz7E8nzGZXesgyVd6YVGdadzfXXXbYOJEhyWZUA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
