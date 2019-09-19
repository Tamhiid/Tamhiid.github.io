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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'admin@localhost' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'Men;^`8Tg.DY1Hl!LbV0oIWQj.D+ 2?f5S[]*x(RYXHXgsQU~4^]6K;#d ;MFNV;' );
define( 'SECURE_AUTH_KEY',  'Fcn-,+<u{2V0O_Cg(7AV)r@9):vU]C8_S##>zHetIaG8-Rl}B:I3foViZpN>i)@Q' );
define( 'LOGGED_IN_KEY',    '}@*XnCnf8G@BpO(~g`fO=),ZuBYyV=@,_1 @]Dib GNh0azoSh=Y~zChI&oSoO%=' );
define( 'NONCE_KEY',        'z_ 5<x4Il2MERQv9)(q,-eil1VK7HVVCo==~M5n?S/%3l9CKl]T5lN~d|RM?6dX(' );
define( 'AUTH_SALT',        'q9os+`3yKIu7-84|wFh`Vk%13qP$lMf(6 Xg0|_7nNnAZR1oB`O&F!dw] DIt^,W' );
define( 'SECURE_AUTH_SALT', 'vwR2J&7t9n~!X9R_ ,vx84H bUD{!fD%]AvskcZ3Y$}r6S`,ozFW5uE2ycek@GEz' );
define( 'LOGGED_IN_SALT',   '[!p8=W-7:K7:Sda80Z8Ak!iU1a 2HX]Ml H_fvY:&|h8Oo!M`<G$PUtPetL^*5x^' );
define( 'NONCE_SALT',       'oi7rD9&DnzoZs=;B*5VO/dstZ=SmjK#>:|ciA;ru<P$RE 4IcI9Ub,AGTs>j&bG]' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
