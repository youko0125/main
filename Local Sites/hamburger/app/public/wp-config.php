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
define('AUTH_KEY',         'euLCpXFPEZ4H5r6JJBwoidDH39ENqsC8MeU1WLcJ/d+wmG1GSI8h1s7Zdqig0UoF1EK+LF+JR48Ed2pICC+C4A==');
define('SECURE_AUTH_KEY',  '1bXUWZB1UJr+ApotqtOu4b38hjko2bLW1+6/pOS47P6oG4mvLKsPJW90E8iCV13MiA/FnTTClsCLCPanUFDXwg==');
define('LOGGED_IN_KEY',    'GvZC472kDXKtrtugd+89KOG7SP62QUnrJ65rRI260v7ha9AGB9Cp9aict61B5MfyS4KsSvTBnsRbQLMDj4FXAA==');
define('NONCE_KEY',        'iN/01s2J7l901cDQsyKmoXeoCzbM3h3OoKl7DbIfMpaYdL1M3AmHdiax7+szzSzKckFWhjw4VIZCP0kTyAZ8xw==');
define('AUTH_SALT',        '8QG+g+QBBw/pkepa2Rd8pX8PUsUmR0Udmwah2Evn5l/95bdV6qYgW6I4D/jfm7hOjnQ832tpVNeHJ8AVMNS+MQ==');
define('SECURE_AUTH_SALT', 'b1eXBpHYOVQX9FyFOfj8unVrl8D5laUH/D86kStmeFeUYXygfLU21jiNrKlf+yOKFryqeMvMmBX/Si+ChfnQOQ==');
define('LOGGED_IN_SALT',   '4OQc4bz/XV6NFS9JfCH+obGMSI1t+X0m0UvMIc7SOmZDLbYRWVUd3wU1Rera/TjeEkgL73rq4zjT79X5Kg+Bxw==');
define('NONCE_SALT',       'qTKPHsch0EfEDGi6jVzXt9cUQEZinA4y3TXrWw4FOWOiuOdLsYb/2gF5yZAtx+CREAnI5CEeBh4zKvYb0loeUg==');

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
