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
define('AUTH_KEY',         'qG7OacuZZPzplJhLTlZ9mpj++k8L4iPFTtXYkzTPIchapBkRDMpEPT+orB9ObXG8a3tOU0v2w/2B5g+lsQGJ3A==');
define('SECURE_AUTH_KEY',  'nvZRnCkDlztaq2uHGsyDCL9aPeSCBM8g19s0u1VBpvkP5w9BL6w1HD4UKjMhlSPVeJcUP1Ov5k8pBXgnifMX+g==');
define('LOGGED_IN_KEY',    'D8Z7Nb0mWOLvBNRvP+mgkxmv62qX9HYdRadC3aNeCH/3k5DurpYYe2LqOiTjFTiBidz+djWGeG391z5xETHNZw==');
define('NONCE_KEY',        '1eDaonMteb3ES7QlXDTlkZe7bQx0ikFa4Ahjw1kF+hhD2NCcIci9QJgkwfs7cF/XncLPDdY7f3xlU9HYWUyaVg==');
define('AUTH_SALT',        'iXGvwcQ0PCp6UsWhOpIwVMD3Qkedlz2zi1K4Lm+FF824/a76dhwb/KorEWpgCU5w+78Qm6upUoeLNSqVhPbFBg==');
define('SECURE_AUTH_SALT', '7p30vh3aIMR4QTqVRtqUCXUGQs/D/wAD+Eo1vz0bepYAjyJLCjfaMR4BW0qhkvIzZpoR9GGTWmf/gLPh8RnlDA==');
define('LOGGED_IN_SALT',   'hun5ExHsvH9sgynofZD1/WQpqEpMdpo9IlCRgf9ODTol6xrk2vwsTrZ1MpsiV0jiWTsGwODyjGWeeyKqOGzc9g==');
define('NONCE_SALT',       '0Ece2MV33hIJ5PgBz7WjMCz8Hohzb9Y/2cw5kZqjbjC7UDfySeF7fVUEcwurplGLFDmnbl91FegzfiDS/GdXhg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_HOME', 'http://douc0090mtm6303assg2.local' );
define( 'WP_SITEURL', 'http://douc0090mtm6303assg2.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
