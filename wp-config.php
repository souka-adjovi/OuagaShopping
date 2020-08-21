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
define( 'DB_NAME', 'OuagaShopping' );

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
define( 'AUTH_KEY',         '/d<Jc9B)8`c/5r]z$SOGrooKl4P|J_~d[LhXPw >x8{Rx@g;){Uve=ltVZ}CME/]' );
define( 'SECURE_AUTH_KEY',  'r|HdGhdT~,QXp.{5!nhkJf@Vp(_zda* ro~jS%V3L-{Z_?Y]5q+K}HVhff[a[ lP' );
define( 'LOGGED_IN_KEY',    '% mexs4L4*-zBM{@HADFAhTR~H15t}/WUU)t?m]C7D1r+r>n{D@)`hoA!l$</oYD' );
define( 'NONCE_KEY',        ',WjtB&G{<lV @8f`{A9I.:F-KZM@K],0EXqPE[I(8P3]07,1MM##g]|l}0tCD9nZ' );
define( 'AUTH_SALT',        'p0K#QX;MR/2Z8#k6H0h38VR`48@i95$F W?D-F[xBB[sq;tQrG{}law<W)=I%|1S' );
define( 'SECURE_AUTH_SALT', 'E9O{!h*I&vfUkzxH|rhkN+aIKaMa$&@Gb2{G]SqK.K46; Llrf0%y=Jqo95z0F{a' );
define( 'LOGGED_IN_SALT',   'S@V=3L6B4l(_mb&6]>cHvZ1<)<xNFDHg&L^lMCE/?Z,5@vZf.97+/Ic<<:|Y:@Wb' );
define( 'NONCE_SALT',       'MIVoZZgT!SHM](%yeE3 yYZfsQLX }uVtfZf|[I5`Taj%p:ITfP(?8)J{(JIoi}K' );

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
