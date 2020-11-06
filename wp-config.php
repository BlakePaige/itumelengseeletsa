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
define( 'DB_NAME', 'itumelengseeletsa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2Vn d)Cq,!FU4/sPDtL:,>gBzS@:dd^LXgASH|iY&:]j* pEhV-v bxa})j)?zKl' );
define( 'SECURE_AUTH_KEY',  't8IgVopICAgKVJd|4UrMJ=/86^r1@ 1hMN`_a;ojiC!8[bM>@>c:rBM[Z(D5j[h)' );
define( 'LOGGED_IN_KEY',    '}IiaG[`sDf&OiIGK$5;niSWZ0%}Ccj+2N~:4-y`a6>YVqHti11j%)pkQ<%+XW~^$' );
define( 'NONCE_KEY',        'Y )^h?}/12)K m<^DC/dN7<v88GLqM@4TeMK=3sP6P0jS(P/JPFhL8b.M-&juKd5' );
define( 'AUTH_SALT',        '{Kc<:a6m2TB,uW:`R90Zt*.s3Fo$LkP<?m,4]4X*8E4U{>^*!mB14vg6VaJUK!Q;' );
define( 'SECURE_AUTH_SALT', '1o{*r#[2;paM3(D/HNBUex<ovA]6b&PSd#GQ<$0Q w/Gy+v8@*)8q,D9FfI`RgmN' );
define( 'LOGGED_IN_SALT',   ';pEGcGR|Q|i>z[w`1$r&]75m).^PS}b<o2eg7Z8-l9*]d^+/|%m1eJB_`6P[G>f,' );
define( 'NONCE_SALT',       'pmaya4;Y&;^aO0[L8lHZQcw @v{+U~s.G|%[7afJ0P4_0+vKP$+,rvSjPX6QzNBw' );

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

/** For things to work on a local host */
define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", "admin");
define("FTP_PASS", "1234");