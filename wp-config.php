<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'portfolioWordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C<m(,p erz*L14M1TBtcOiy0AiIj$D2&0:oE`sq{8m1G8/O@y~fsn<4+9BamrR(%' );
define( 'SECURE_AUTH_KEY',  '!QrabmCjzr<!kw0PK`^jst`%ooZ0pAqn*?FZ.@vFt{4yMS8pDGOpf4^zY,*Ua%ee' );
define( 'LOGGED_IN_KEY',    'T@^I!z|aH{oUdnw]XFJ6Jh9t[bpMP1qKUpRA!FV4f%v8U^SE3V[kJdLp*o nap,:' );
define( 'NONCE_KEY',        'lVIG$Z-Sc>${_Uzvo>>mcpv_X>Z]+:@q$~ONqm+2dXu+tURsoUcwXRK$fv8q!3CN' );
define( 'AUTH_SALT',        'u<OFH4uE9(KcslO%iLo_-1N}h[=>Tt55?.C*i:LRgu4XqAQbnz*glm)^ TF(sSR1' );
define( 'SECURE_AUTH_SALT', 'O;>wCrJsU}u=hS7k56Af_Ttp%SAX[`eV;p+a+s2He3!k$z1nDE.18m,h&i?PcNh`' );
define( 'LOGGED_IN_SALT',   '#T+VdG@f&4x#.gHfw^pa(KhVM%p]5:HTQeL]5PWD7A!]E6ikd&D3,^g;BP4Ncqag' );
define( 'NONCE_SALT',       '@6-Iza5H/} N.:RLOdZ {f@B_U,+.h&Xok%_S37DyA&Rtpdt)Gm<&*-F``P@nF5a' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
