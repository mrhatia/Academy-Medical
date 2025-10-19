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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ANL r_;Wh_&Z~h%P%Z69/GiD<}2)1+MFH)KFWi@J Qtnx@dd>B~&CHC7,(]g%yh)' );
define( 'SECURE_AUTH_KEY',   '%^qWe%yViPvHPwSd*Vb/5VS7,[mZlMJZ_ZBp6UQ>hn?2YtV,c9WZVaO3A=4}s[?]' );
define( 'LOGGED_IN_KEY',     'Ba^7d*S>woo,)?F1Dm oMk*yufArRNOm?{1{IuR=Of|U*8 [8?A;[Tjv`HJ0,3Tz' );
define( 'NONCE_KEY',         'qa/tX;q7#BCwTD$OP% }>VP?=a]NlA%u|r-m^86ZS-!eh,g[43^2 YlR!e{:$-u>' );
define( 'AUTH_SALT',         '%R*;W}(lkNH>^V]Bw.+W^78gLtK:*N4]Zi:lR}3gR37V26(yc~7B~z YjvJnl0|E' );
define( 'SECURE_AUTH_SALT',  '6i~*OA Bi!%jvg7(C6HahUxQ:<}sx1EKV+hJENs?z)gA@YW2M<k[3Ku OIQQL]Y|' );
define( 'LOGGED_IN_SALT',    'eAVy_|:hv1hbBngTjyR?YaQKLdG=Iv5`9%rwOOGqnvI6d~c]KSR]9/q3M]9X95Hl' );
define( 'NONCE_SALT',        'AumspO~Q}}s+5ik*}131g>0QCZj:@0w,e/BsA4RGx[ </V4A(;4U{XWN)if6Fhyp' );
define( 'WP_CACHE_KEY_SALT', '?CgD9IugJp5p_uIMKV$%C/1SRTOVE_^XQdms lTl`TKJ`!nX&]ycll62Qw,Nlz,]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
