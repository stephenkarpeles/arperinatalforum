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
define('DB_NAME', 'arperinatal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1Jate,k)arEhK%YvT*7EQ7#~NY~js[nk=/0kpNP`K:>pXYz*!5X+xiL$,Aa]Uv-w');
define('SECURE_AUTH_KEY',  'du)Y`Y;6p2lT YEGB@y8I*b>$hj~Wgx2;qVQ5:vy6[g_G~8]Rf_>wshFS.,!G/Ae');
define('LOGGED_IN_KEY',    'QC d:FZHxvc5?vNsQ4Y>Jp<7[T,LTVWnr0YgDbIX#J{wj!%UfVmaIaa<}fvbuT]F');
define('NONCE_KEY',        'pp!,U^><1K%AR]Q|VZ]9vyNo,bc. >%qy-5Y=emVzoVV2#E-?B*a8r_]zw guV.6');
define('AUTH_SALT',        'Sf!IwXtRBC`j,c*7)t6kickA&Kr&DL/i}Xd#0%6wQzbB(t_D,5C;y+3&yEh*2^C/');
define('SECURE_AUTH_SALT', '0A68s0;J$u,T1K4BN/zgM7^*z++1pq}}#PO:t&X+Mf1dR.l-sf[lf((#-kOvr>sJ');
define('LOGGED_IN_SALT',   '?C  )X-g~rbb/}~uS#zdWw]Tu}qn`b%)p2j+tX;i3%.pV??1zMb+~zI^ep-;X8F`');
define('NONCE_SALT',       '!nt3A,3cZ$[U++$T,GnRo:*`nKBA<e0K^2yqx1A{lX<t`gf_IC~oLJ4Sxp4@jI>~');

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
