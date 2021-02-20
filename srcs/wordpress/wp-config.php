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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'jperez' );

/** MySQL database password */
define( 'DB_PASSWORD', 'contra' );

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
define('AUTH_KEY',         'y(OYR=)]HsrB9Y=o_+|Hht:}1@i|IpT@>b2#bu_->0x&2(Uv_e^}4gI-M2;zmvN+');
define('SECURE_AUTH_KEY',  'pzlf:Ann:Ek}P/uH9)p_uxF#tU;M5FQ&9i^+39D:N4abYQMT:uit*9V`+7}KL>yq');
define('LOGGED_IN_KEY',    '(S!p;Fcltc)|FlR{_|Q n;_w~|sQ!p/(R_ r2=**v-u_w&dJ5k+R!m4E;i`xJPmA');
define('NONCE_KEY',        'Y<-6=9sJ*G,g6]4|6+iu8~RB@6(P{HUtTGF|9Z|=:.Ty-;}F-ck|]5Lo^8-|-f<p');
define('AUTH_SALT',        'HS3 |&4sS/IRgKh$+{LYtoeH.X@{),D+uC3bmeFVk%.-;5$Q8t|P<`E)&mfe|_z`');
define('SECURE_AUTH_SALT', 'g+78HGJ5JrclfaSrEs)aKWGJY9*?A)n7_OP905/Svb`NXq>UR[krm,,|d}ws&W=%');
define('LOGGED_IN_SALT',   'ng3I*4VvIry:G9Y$+r_+Rf--W1e^ M|+/6nl5se!IpsAm}C`W- pcB$&&22A-zTF');
define('NONCE_SALT',       '- E-?8)f2J@tDw&KP,AWv0Zi(6vd0^C`nW6/5^T,Z,qU)d-uzwX;?u]pl>KfVYpe');


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
