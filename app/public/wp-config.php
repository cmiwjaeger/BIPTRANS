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
define('AUTH_KEY',         'UWKm0hVH228cO3QZYMJHAevcGwgncy2AeH3m2kCibKYTnfqJTFPjwAJBZ+mOrLyNFmvv5YOpF1rLHYI7admsRQ==');
define('SECURE_AUTH_KEY',  'qz46wuXMpj9bWlguaISa2+GMsKf2hdDCwzDF09PvZE0ARCDl++4vYUcazIWOF+pPEBYN+xIP+GdFLwt/kyAvnQ==');
define('LOGGED_IN_KEY',    '3InEq3mHHKsfnBIpC07fx0jA7ghgUTkPLs2dMP+rDbJyEUXf0VsPw1JRbxx+13Q1iqYEf3wwyu7SEhWnbOShTA==');
define('NONCE_KEY',        'SaUhc+jFjWd9tMwKr2ZH9BVelbPPWrgiYt+bI+RFV+ST2Nyf1DZ9suW3z8KbyzIAjid+7fzKl8OFTONo17Q16Q==');
define('AUTH_SALT',        'HlPD0q806Isd+jZ2aE1hvdO2YpYxakrZN+siD6idI7eZQ37qmbeFcF42ee6gwfclSnguTS0QidjNF9JDWXoM0A==');
define('SECURE_AUTH_SALT', '8qtFCgf358w/SVudoP/xZUt1JXL+aMRRygh+F0/vYbxtMnYUWg3MrZ5vnvBtyP6QBOVUGfY0dl6cj/Ry+2zzPw==');
define('LOGGED_IN_SALT',   'h8EH0nH2bJuCGwMx4GEEe8MQp6Kvdjt0sLUNVvzfIWWzExvZHaxa7ZcuYVo7EVRI+e5b4DAfbOYOFgeepWemRw==');
define('NONCE_SALT',       'YuRJxOA9JK2JGzzJmxFrvY+wwHoTzbivKc7NWq2gS9sYWkj3iYAp4+Z1HnINAqT2iMu2k3CmUNJyUbMtkPJSNQ==');

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
