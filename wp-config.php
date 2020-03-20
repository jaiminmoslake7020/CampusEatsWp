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
define( 'DB_NAME', 'ceatsgrp_campus_eats' );

/** MySQL database username */
define( 'DB_USER', 'awesome7' );

/** MySQL database password */
define( 'DB_PASSWORD', '*214bqmK' );

/** MySQL hostname */
define( 'DB_HOST', '74.208.228.35:3306' );

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
define( 'AUTH_KEY',         'bHUP(ll<4Z;4/|ebITe:YWVFicULrXXr<R?+86^#3gROXbZDfg4$X7DeUB7CK/_;' );
define( 'SECURE_AUTH_KEY',  'l~|s#hZ7f?)UTO21WvWg]uPJxG%Jz*-u$5Q0XZrYKM%$+B67m0{PU70[X%)[$tq+' );
define( 'LOGGED_IN_KEY',    '=p1f,J,zrcx6;(bk D3=P3%8K k]`171:h _+^eu?|H^Dwo]<|?$3;9I=79*ONxl' );
define( 'NONCE_KEY',        'KRm]E{5DbHodB]}:Xvd~-.uya>8/%&A05B5IC{s8xlls43#PA|t4,nYkil4[d3$n' );
define( 'AUTH_SALT',        'zkA=7.Kc01{ZjcG)A8 Cw&zSw[wzxKB;m@< !u>uO(24;MRa!8T->rK;dp+P-_q!' );
define( 'SECURE_AUTH_SALT', 'MX^jXw6UIo9>,CDf8nXl^?wM`N=G-#^k3yXdVfSF#DMT8rAAU-D||I,C0!bC!TdK' );
define( 'LOGGED_IN_SALT',   '4ip+qN8c3t`kP@#q#Wcm)~;_G=|zTD:PaY1Qayai5o0C+RT_6%Q-W.-je{xKbEDF' );
define( 'NONCE_SALT',       'H3;KEs>^c;(N:73-P8oby<C)Q0MUaw(l~CV2dGZRVI>88jkZEjmzZ%kw)izNzmEC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
