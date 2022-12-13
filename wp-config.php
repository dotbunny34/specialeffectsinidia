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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'specialeffectsinindia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'w4Qt%4Mywh%|x~Y:au]v5[v?0+S%m[](>@[+k@f,#o)iz)yv=lZqU-`;zh(xMgm+' );
define( 'SECURE_AUTH_KEY',  '8r~+L&0@2WRi>$cD/xI+08>Pnvg7>!T-x:iY_qD<s5StKZ:r=zxpj)2@zCp|&]``' );
define( 'LOGGED_IN_KEY',    '_vLU;K,$V<H!b R6KYuXHP~:+f>fs*_7J*1thW?hQ9![-KUH~=<.])kIzsI{7K{3' );
define( 'NONCE_KEY',        '!-xUuE>oy@XCkN}PEu.[y@|m/n4g`3?u8RmxXy@Bg,u6c=y~K5YviqQ%5nrQHRl(' );
define( 'AUTH_SALT',        '+`,65}W1/wCfR>|>o q@wnQ&fkAj~U5O~$F#dZs3x,4a%0N2Db9?GNO^EZAtI)*z' );
define( 'SECURE_AUTH_SALT', 'zeJQVECZF4wUC#oNLLSp]L!c^PI_/>hx[kfi6:3uO9mTVbnQtp&REz7_/7 )~K %' );
define( 'LOGGED_IN_SALT',   '.:^H 5YYvQ,+R>=Aj>)z[j^f[wP(`|_^<{+NdX V9MbpW}j=V?h;-pZ`6Jkf^X3!' );
define( 'NONCE_SALT',       'gL)0^Q:-MJ;sFnrB8$4xgk< wG]KHCfkY+_,cbmo(6o^s6?qnBz,x4chd~2k~^i ' );

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
