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
define('AUTH_KEY',         'tjVgI9RFKEIhGvPc4T9GGAehwHR4vkBpoSsoNo8YY1ZdNs9YHLcWRK0DiV2JzERe2J7TQDcuQV/LJIwWxq/Yeg==');
define('SECURE_AUTH_KEY',  'Xz+LeaPdvDHFvC6vh6KEwW5C/uDLExfyEsIMdDH5B9en22erTD/IS1UMJLteC4a2kgSkBg88w/BtjM1eyvYDGA==');
define('LOGGED_IN_KEY',    'wgNSihYWvdUna7QdAb1zlH/5d7Bh+5fmFHVzNuDcTGYLECWga4BTGf3lFqlcTaOkpx/o4EAv7Dl/r5O0zWDufg==');
define('NONCE_KEY',        '52ot1BqJJLdVGdyNd6u8GrWsfF6HLLwV2V1w3/+l7N+7ebDly5bGVtXPK1opPLzCoZPvHEowAsN2ed5nDRaozA==');
define('AUTH_SALT',        '4JiRmdvy8fAiVtvGH4u755FQC8xUCM1AMd0AiWBMxhBpfd8MRxBnlRRh5xkzm/mB7p2oIbYfJVe2DeIefJklaw==');
define('SECURE_AUTH_SALT', 'qAC1GUrfCpAK03oocncznWMDRrpBMq9W3tO19aOO7o99yl+9CYe27o0rBWbXTlbC91c2xZj5IcORAiRcip1krA==');
define('LOGGED_IN_SALT',   'YoCJddaUKrJSQJpnFAndz3xQgY5fNhzJrcgvSIUtvwpzLNIsPV6fVSXORnbc4vLtT62hljDtVVmHr6oY05Zbuw==');
define('NONCE_SALT',       'd8A7lPeq2TIlMSiAtjyXGOxV+a3W8V6VE0Q/VWZMR+KE5+In4S05LgVuO2clERCW51URnE1ORbDtGgV8UZRAAw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



define( 'WP_DEBUG', true );
define( 'SAVEQUERIES', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
