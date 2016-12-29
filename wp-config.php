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
define('DB_NAME', 'wordpressdemo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'aks@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aGnc:6cYgT!lN6dDp$yk3x~<B,qc>|s!sKpZ-fL/xUqe{#LoZ,3@O1#e=1%X? X4');
define('SECURE_AUTH_KEY',  'evOp U!h5z^0{lddclf+8%EExMk/B,S^}c@K*JB=j1.m51yqe:WKUKA-F>-fb95E');
define('LOGGED_IN_KEY',    'N? -G1<GoIeNiO&1$k2=LfvzU_iS1aGvoSWU[=#);1W2P,.z(Lcv0ZCNa&xy-jou');
define('NONCE_KEY',        '3S? Na!9S^naY~z9JM;*!Q *3/PHUUF >q@0zB(@yVAWU!AZjKQ`H)rVAbKV2tDG');
define('AUTH_SALT',        '`>ry3T<E}|~3<XqeR-+aJOZ7(c>Ue@&j.1H/U-mm}03~tB[]x;>B,-Fb$+_O`<sD');
define('SECURE_AUTH_SALT', 'L]w{+LyE;dd*m9TqCO<&Wl7Cmm=)_=6~kIH79RL ]gukhm LwW:aE j^p_q.mB;#');
define('LOGGED_IN_SALT',   'iRk;S.GazE<K9&}MA|bF.%yklb8$Su@:l{-V~xNIhrA^2!QrcbVQj_SIEb!Idw*5');
define('NONCE_SALT',       'J&=Nar/N/B4e 7{Rg(>..zklW0b5XOb<vCt]t?NYfE#?r*,lZh:GW=LHQ=N$m]G6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//RTU0(yj9^^wEXzRxoL