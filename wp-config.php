<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'wp_pzoz3' );

/** MySQL database username */
define( 'DB_USER', 'wp_kdff1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'swQ72$i4MF' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'gmt58]RKofeA@]PP68_8L6+@i34O1(1#(:*T5LJcsC-a@1;)Du39G0jd7UeuNU_+');
define('SECURE_AUTH_KEY', 'L(7N4*_6rZ*7Hx711Ju!3B9CR0n9S/!LR_S|jQ3p1t(Hx81wAm30C_-O7)&SUm2#');
define('LOGGED_IN_KEY', ':t~1FE51_h*09s|4W#3RDz5@Ec9)66lo#3D[zug#Ni(rFPgIk[-]aA4r_s8[!Es&');
define('NONCE_KEY', 'IaE9&0DSa[P9Y[6Sd]+UUmaF9n%|+2x3D18aBqoD]p3O)9-6~;G%]]G6Rm!PTM|p');
define('AUTH_SALT', '~woC~010A7&B1!U@r(fWjw%Wn82q:GJN+N)e~Gr/U9276!GdP!/du1c5Nt9#*fB!');
define('SECURE_AUTH_SALT', '|8VoSp4nRd5Ly4Q~1RU9Npi;fU0gsU0P&12A8~UWg34WBiE]Fmk[I&UN63hh+%Gm');
define('LOGGED_IN_SALT', '#2-pV1V@PI3/tp&%N#1!&Ve4X0cppUcyXE8Z56C6)#96uZYU2]-|aWj|%DIkmMif');
define('NONCE_SALT', 'Qag*26pyX2B_8bR%5(0!9b|%kN+ZH/)x[+vND6j|TFQ#(D6T6GHBTL&8GX0%Z]y/');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_ALLOW_MULTISITE', true);
define('SCRIPT_DEBUG', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
