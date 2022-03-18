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
define('AUTH_KEY',         'gW7vElbg0rXCzrTL+3LVEu0ius0ULt4J/QkP/nkxLa4+Q3ArWnOOqrhsd/9+9CVcZJiUCModq8kUsg9xov1BBQ==');
define('SECURE_AUTH_KEY',  'uoxVScJ6xFN5XwchZEuzu8xufN3cCVCkDp8nEQR5ZVcYtZDXq7oMNHI9H3JWXY8QjFuViNZqx12rz+2Jryzurw==');
define('LOGGED_IN_KEY',    'aTBc7RzwBHfTmB/03wWtUitEvr2LWqukTa8OzhV+IedrdfXhQA4gdyig5Q34ZLxhRPg8NsYlRG9A0b62xxV5eg==');
define('NONCE_KEY',        'I9Q6UiMexu056qxU0fWY0Zn9pmb+SnzKUOzgEpFhWqBmS4Ox++3aADl501lK0XokGZY2AwKi303BoWW12BsPpQ==');
define('AUTH_SALT',        'PHgv/7NWD6rXL9/iWTNlNqQ3GIt/5clbU9Q+Bo3zoBn6ghMeGbXcFssKSgUZ8WWFKXzzUXtcSXfh34oJ0a6APw==');
define('SECURE_AUTH_SALT', 'WiS0aV/ETVid73kf+Q1nc1sYmAev1+MIZXv13SFhcQW/fApx8zluV9fo6wIP1dvWRrkBVSoO/m4qXXtUvFMGnQ==');
define('LOGGED_IN_SALT',   'sD6qUV2yrxHubZg6bp4X2AqPQ2zwJ9IihQ5rmMTq/p2JBtjBoTV7FatoHggTDiz9bKDHbRLNWqi9Q/xf/JcoJg==');
define('NONCE_SALT',       '8TPWUN8RnI4ZMZ9zDTrjH1T8tqQDSigy1A/3lR9juYNW9j+QM2wFqt2ERxAwnJO46kOpawhxpkKpd2GCPkPMGQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_HOME', 'http://devdouc0090mtm6303inclass6.local' );
define( 'WP_SITEURL', 'http://devdouc0090mtm6303inclass6.local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
