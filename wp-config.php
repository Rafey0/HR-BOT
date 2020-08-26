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
define( 'DB_NAME', 'mov_23659210_wp828' );

/** MySQL database username */
define( 'DB_USER', '23659210_2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S92-)p281Y' );

/** MySQL hostname */
define( 'DB_HOST', 'sql212.byetcluster.com' );

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
define( 'AUTH_KEY',         'jbiuu52p2wsveyto4s7d4vcr27xjgggxlvvj5ulfeynpvharpm8one6jubzrzjsr' );
define( 'SECURE_AUTH_KEY',  'fef0xwdzncxtyxjnfekhxhz684ydejxortcfv5ahj3374xfrjdc5ogztxh555nmm' );
define( 'LOGGED_IN_KEY',    'viyiloyxnv6pi8ob3wycgexs7qqpa9zihbprqwdi0cjeyhoh1fawuihnywyhxc2q' );
define( 'NONCE_KEY',        'lirje8xzxvvaratynxhi1headwrezkujy6kife75jlrhxlw6v0yjpcasr43gnkte' );
define( 'AUTH_SALT',        'jhhg9nbfnrmbfef9tstpvzaucqvxjreiucx5qfyatlwhjvddn9yxinne8plerqlq' );
define( 'SECURE_AUTH_SALT', 'odbur7elntuh1ecap7quwpru2gkgzatj46cn5isiqk9w21fxy3p87wu8txthsqyn' );
define( 'LOGGED_IN_SALT',   '69qnlakwqhzl1jd6riqbofdpajwgfav5njqhlr8nmttjcbgtel9abtrewt4k8c2e' );
define( 'NONCE_SALT',       'jsw1nlcgwiud7dpl7emvsvyrg60o3xxnsriumtnw4k8ghmgknbkzrksgdqelnoxa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfu_';

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
