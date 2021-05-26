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
define( 'DB_NAME', 'astrolab' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<KkkK!=X6V[v(18@z`?=?l_5rQa8beJ~MXQ4~L};GskF9?fA<r(m=3S?g@}(BaQc' );
define( 'SECURE_AUTH_KEY',  '>MVs@DI*eoTo9dC9{G~Y3qqVwVx:6DZt=j|STZ;ZX]Co3FrOs*&n`KS~BF`:p?M{' );
define( 'LOGGED_IN_KEY',    ',WY|qqGk1#/kDkN#dn+P,1j03{F}c(Qo-PK)iQT[9a[{6ffN2x_Sj5j-KOD;w/ho' );
define( 'NONCE_KEY',        'enfyWze/]TmysH0Mm,XVpPjJm(& B@s]`P5CNN=p?Nlu}mv2vc]ow}[DhL6:T.#l' );
define( 'AUTH_SALT',        '^EqOOY@]BoT>cZ_s7~@kcosp>lpLj9*ERcD@|g=4BB0C8m!XDjqpJ<L|+UgwV>2K' );
define( 'SECURE_AUTH_SALT', ':cBGmJdn8^i:n.;pyl7`a<D1 jHA./dePc}to?){^q~vK#J#N68#u8dE; wL5b<i' );
define( 'LOGGED_IN_SALT',   'FG$l.%D eGunRQ2M|H*OHOnZ8cX>Xb&~{S?eUhd|uB W#q}jJ_+G81<:@Cuf ~gv' );
define( 'NONCE_SALT',       'Rw9c(<NF|zfj;fZ(~^A`8mnw0Kg=jqH_%(;eZ#AN^SF#Q;Scp6$$&1ygMSP1(=3G' );

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

define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('WP_MEMORY_LIMIT', '128M');