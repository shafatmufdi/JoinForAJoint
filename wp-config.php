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
define( 'DB_NAME', 'tsasg_db' );

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
define( 'AUTH_KEY',         '8<,8B,X;6}].q@H,c5%*z+q}W99`<82@dU6U_)jjQ)C03_xOgk,5nnY+{BrBoa/o' );
define( 'SECURE_AUTH_KEY',  'sCw&@i_sfYX@Wa!gZiEl<&rh7[y$B2Tst&9k;|=l_Qx.45zt{+?X=dP_`X:His?d' );
define( 'LOGGED_IN_KEY',    '43WPr`!}eCgmOwG3Y;k=PrE@hl{q>pI[>_+LZ8~ n/*}P$Kc)}$hT`7u{f:{fJ,M' );
define( 'NONCE_KEY',        ';2z7+Jj{o3>}.TGuFh$LKy&-]a,cDte0,+aSl5j~%7VqMq Dhst.N.%r~q-gzDy!' );
define( 'AUTH_SALT',        'DI O{VaE+YJ8^vq*SCw1PFPpaLKYU(>AIF0o!5RZiZ>9[$lh86^{6jK>.UW91HeO' );
define( 'SECURE_AUTH_SALT', '2`a?!cL^?qrjFiXNhU!WS*_cyQeRbt+96cVsFNyg6_F 1Z#t4?pSndoKHYSoRu~h' );
define( 'LOGGED_IN_SALT',   '9#O;e?Q(gTsf@Zt?^fNfK`,*qW>U|Iv}/c(^,qC e,MOQb_C:|t@SY6Lppjq5`=q' );
define( 'NONCE_SALT',       'w.5q}57.KpU)NLH%chNVbQb354.+AOLvO;|CB4,AK=J4nBv]lc8<tILk#8-N5211' );

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
