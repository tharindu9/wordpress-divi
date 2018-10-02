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
define('DB_NAME', 'lionco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '((&,!)P5yEu/Tx0hW/.:Zvi<J`?gdT=H5aF.J9t*h2J:-i52;YD:<Sm>ahJ1T*]#');
define('SECURE_AUTH_KEY',  '|.t4s/JmXvM./ax+:f!O#kW1~n*W4{{!$R~L0U{Vnq|sX#K;fXZ{W4yz6g|?!9[[');
define('LOGGED_IN_KEY',    '$^zx{idX`2cz&eBz<8hp>K3+j QaJ8CAwDv,VH%iF-R/!}{]REVW@$e<BE2G,?7$');
define('NONCE_KEY',        '=a|;Y{el-^7$D1g&(x:{CpzK${3<SqrWh6j~m1I5$TVS|;TIRoMW[JszR6w&>U%~');
define('AUTH_SALT',        'l<sxqDjo/xq=#fYHVPpRGJ=%)TkP7;kd$S6~XshE1qb _WwIzhJ>&x@}mCb*}4)>');
define('SECURE_AUTH_SALT', 'bY7&vKMIc68kb_+hP)r-$EAULi(,g@>lRD[2#}CsHUti,OB61jY>x/^xe0(npFSc');
define('LOGGED_IN_SALT',   '*viU5Z<J>Cpw!E,i*qMv%yXCSm>Uo`~E1YY+4!es%O{BNM%YG6t/ 8CI@}25&k{U');
define('NONCE_SALT',       ',s`nON_nMaxZ8AyL1}O]5ArQJi;e9bHQt[r`K{Voj!xPH%L ptlRSS&t$68r{jU0');

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
