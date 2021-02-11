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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '$%QMVql)uwe+X((0_HjilJ<r{szDOq$%yoVB_=&}tPj4dAXk+=5Qda$xs.<AW6e0' );
define( 'SECURE_AUTH_KEY',  'd]?3xD7Jzg#)l%T:b-0644q`z{u#;-cGx[^w/%NQo^(5Ydm5Y-A+79T[1&{@~Dri' );
define( 'LOGGED_IN_KEY',    'E,XNK_3HseoLAUCF`frIE|QvWCC/bDFIO:8Mh,P0;0AHY_?M:OGnYw)lnwu1<{cF' );
define( 'NONCE_KEY',        'Nf7xqJqv/7TsET$/xM9GvM%T&Y}#WJjgNrm]X3}hSHW87IJ;z?_N:E#kC5(IAN6T' );
define( 'AUTH_SALT',        '$FGv,jmRz+o|SzkwGgs4F6%|o.]#k!EO^|h44O WtP~5y^?{R3+V>JrK]i6a9wK.' );
define( 'SECURE_AUTH_SALT', 'oZwQB-PH.xfbW>M0u{|tt2a&O*Urr8x>sgc4YC4;0Fx2H{2|@6cvN0=N308+[q9j' );
define( 'LOGGED_IN_SALT',   '[bbNGc/OPpzzYGbVUjQ@D9/]<]xT]PsC}gv,CTM-}+6*/-k|m|[Aya@%916,1u[g' );
define( 'NONCE_SALT',       'nn2hiq:S!0~Qz:snP r)[$?pb},9le/|+9Bsxgk{-F1rk}@n7[C*Bblz{V}dqPap' );

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
