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

define ('CONCATENATE_SCRIPTS', false);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_plataforma' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LFHzT *BH6zc^d-iJ:V%(o%3owpra^|o8t`TU<AuwRHpI8P9<(BL[~0&k__@Y8kD' );
define( 'SECURE_AUTH_KEY',  '!Ds&P8mSH1Zm@0X_!9T38gh|<j*1at5[22fD+AM_z!e(ta~e8:nC70OlRf87Df0x' );
define( 'LOGGED_IN_KEY',    'RY6,MUtSzzC1+FPa{]VKNCf>J_vTUUJBfX_YjDUMaSg`Y+KtLyiR?KN7* ;g|4rL' );
define( 'NONCE_KEY',        'IL2{hd?nTgx70$6V_~u,rxg[lb$l5f#O=XUk&zle[u@Z;/D=7#R]!DgWk|0lukNv' );
define( 'AUTH_SALT',        '(6vI0H)]{TO}{RpgzTna5OQx]Q2}}epBqM!toM*x.E5O;o0?&<h HhszH-M,  a}' );
define( 'SECURE_AUTH_SALT', 'gh%Q,<?hu-w,DD2Amz?Zq(Y>N2Hsgp4MA-]3Y`KyvEfRE*u^UOTcVe^]~X.`L8V:' );
define( 'LOGGED_IN_SALT',   '0<+y{d[;2(H2xtOY}Iw)~{ys#0G_Xe3GOm*iP%2J@)[ i3GA7NMFZ<PF4b7Rj}aQ' );
define( 'NONCE_SALT',       'fGiR<Ewxk=!Joo^ec`pu7yXA6G2bR&4v<B2k*|Al#(IzMMkI`/k}M$<g7$Qw<M)B' );

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
