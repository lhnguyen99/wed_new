<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'iejfzvslhosting_ttsw' );

/** MySQL database username */
define( 'DB_USER', 'iejfzvslhosting_ttsw' );

/** MySQL database password */
define( 'DB_PASSWORD', '88zpSiA6]!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'cl8xxnwckdbjgfrpwkuexj4gpihpsa64nohgrx87zxe8h0ygc3tzt6cjqs9rjpzw' );
define( 'SECURE_AUTH_KEY',  'uhxcolp1gtzst5jskg9kzpmtabgu8wh3jgrrl45zpv9esvvlfcffg1djewitbrdn' );
define( 'LOGGED_IN_KEY',    'vltumlwznrvifaap9nwdd7qzqzezqkl98qzp4r132ewq7ei2fqtjnjrqbtamrhnf' );
define( 'NONCE_KEY',        'jwpwzpyglwluesdmbyitzaih5xtlz1zfezlsgzvexa4zn4yx9qh7pgqsgiugmqif' );
define( 'AUTH_SALT',        'h4mlgbkcn0am7xruytgxfp4iiiqeoaf9htljzynk1pvqfhmzp2vbekzhmboilzlu' );
define( 'SECURE_AUTH_SALT', 'icreffxinujqkisn2jihmuveffbwrwsznkzrzzq24orolglv01y3hqwl6yh8yks6' );
define( 'LOGGED_IN_SALT',   '4ofanamti7eryhnz5avkks9lvdxuj30ym49ygsslw8uenri8ljdp6mbxaqexdiiv' );
define( 'NONCE_SALT',       'exh94kd6fzusogzor82o3eecvo8hkpe8cptjmlhxrpczkztzhdhaasw9fpciymrx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'begin_';

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
define( 'WP_DEBUG', false );
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';