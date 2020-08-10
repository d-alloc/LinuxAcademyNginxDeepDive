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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p@ssw0rd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'm,/jff[Y9!+Dh@6#re--?]<YuEiv3*,/(,&Ujr(BN]=8JfRv9/oKG8d~(`sWf|Zo');
define('SECURE_AUTH_KEY',  '?AXq)!F<}.Nmx51T%n>]vTJ4mD#y#o~}]{hwi^y)DE-%+RizJc4T`Z/-9Lx3|>}W');
define('LOGGED_IN_KEY',    'chA|eA+d62M4fc(w)dB*zm?xaC+[e[vh{I`|~5X/3N,%fM+[qKR/bw#!l;j8U8R ');
define('NONCE_KEY',        'o{HnzlRk?B&sn+rK<29?{<g#R:T]jFZn?YGQ<Ub3loM$Xxu?2m2G]26r>j#(ts`(');
define('AUTH_SALT',        '-[FOW:t*?8|L~.2qQ_fT yGj2PX|7/@Y|?ua[iWb1.=k:dWQEox1^N8{}/t~fEdD');
define('SECURE_AUTH_SALT', '7V+d,i@-ds/G>QRajciAkE]dcwbM811U?[J5%M&p7L)*S2@Ff*:u?s8@$$>5!zCv');
define('LOGGED_IN_SALT',   'NE??e|aKSP!XU5a5e9Cq+t-,_+l4P-BbHPG;?.?N,W9IR*?LbVO[ls,@}F|MxF]T');
define('NONCE_SALT',       'V)f0 Kv=Aj+A+C3+b2/DZT|KHaXNTIZSPiyb7nE^iPf.8aW?z3FG`I+XU$Au4n#Q');


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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
