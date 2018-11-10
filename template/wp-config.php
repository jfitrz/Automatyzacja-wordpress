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
define('DB_NAME', '{{database_name}}');

/** MySQL database username */
define('DB_USER', '{{database_user}}');

/** MySQL database password */
define('DB_PASSWORD', '{{database_password}}');

/** MySQL hostname */
define('DB_HOST', '{{database_host}}');

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
define('AUTH_KEY',         'g]xnQ9]ieKJgr^}gOocbCzF$2>+P<G- E/[l[=Z[kDpTQ:6439UV3tXc9/%qYNcx');
define('SECURE_AUTH_KEY',  '%V7;rl+7OBHi fE4SQO.WbyoR^BC}F0Le>0ksvM7X^Jv5gNm[SZ(H2|P0iO^G|g|');
define('LOGGED_IN_KEY',    'lL,|QA5uP%Oi2cz#1[rZADVR#jF:ma>9F%o{87G^J9CeZojV-GWLkXAATIaXouof');
define('NONCE_KEY',        '+.{6^4qi6GvbS,z>>$MrG7kcwZ9::QQO<1`w6>NZkGeS!s3nYM?:*qWrzH:xYi ~');
define('AUTH_SALT',        '2APomBcvGT#qakC%jjoZ%,#pdrXf+!=1 y5nq*1#Ue[`*!$U: tYJW{{BGhk1Zh#');
define('SECURE_AUTH_SALT', 'XhKJ]g)_O#:n0b(2cbnia!nXN4^xB;|YCE6YtO0A:,={2zR],kX!hxth<4/s&LTP');
define('LOGGED_IN_SALT',   'v;fr!cxi5ZRo6olutONnS?@KRjk{NR#ejc?,C=eRPQd:7 G=%s[~TADL1f;U}ow(');
define('NONCE_SALT',       'RZ(TLVrHq5>N*^|0:&G)cyj+!I;?*A-R?ik4:jr?./Sl8a_Ca)^RzVHjdIw?#:;2');

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
