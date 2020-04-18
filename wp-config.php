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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'sY$d>DY-O_UFmFIU0)W}LNMZY;N16C,?la) >7[6Y^V&Qt,tGsJtPX]}y%Gi=$S*' );
define( 'SECURE_AUTH_KEY',  'c?$;w[5(q{usvXDP@& b*h;xv6uJPbgDt; +!.fO%n$lkf~?(!PUw(sU>j`oOu z' );
define( 'LOGGED_IN_KEY',    'h0tj4a&pV-t@){;LfKV;y~HO9wv~G8(#C_n4}|0sT]tM/7WG42{%C?+a:U.70*,P' );
define( 'NONCE_KEY',        'uB1fNCK@vUP7B8Ite/7$M/26[6J=r~c{<vyM /WlT]R(~Y%FKENrUz(Z?1E Xjc4' );
define( 'AUTH_SALT',        'R2 &CKD(k{qV>x)hPb}^.Utb~;~HBMg+n(mlGuSFsN*vC-M@lqeo6L&Be/hcN=22' );
define( 'SECURE_AUTH_SALT', 'c<w<8hb_/o4mVH2+GJ?ypJS7&;cQ]L+``]+AH(%yB*boNmA64CGO0NfjPPOi)d|B' );
define( 'LOGGED_IN_SALT',   'VqC_nD-XYvb$A2kh8r= j8[/#fXk;B7qySzN4 WVjW$=INm=5p4i){lAl}dduqdH' );
define( 'NONCE_SALT',       'l>f)L}~,QhhrUh4^GbhU}bqiTo.}B14UfZtnqtx=1jz7N+FKQj#X#Bh>DUPr/Mw.' );

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
set_time_limit(600);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
