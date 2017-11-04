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
define('DB_NAME', 'plugin_course_db');

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
define('AUTH_KEY',         'e]6;^OQi<fJPr|@3b$U00*iE4iElFDClvKW^lwVt#Fhg=l6Ojw{Dc1xT+IfQ^nV~');
define('SECURE_AUTH_KEY',  's5`tuAC9n,4{XFI|[+MsDHs[>#U/i_!b1.-QhA,s#4><%6_[5E>7 ^m0->nE-D_R');
define('LOGGED_IN_KEY',    '_[}wkk/|g?37GT }%l[N4=<q{8A+E 3Sm^QRn5$7XOe<)c[ lFhDx-u+^U6WJ:)l');
define('NONCE_KEY',        '6]^A;B|a_Rd,FOb/46TAzfsS8nqYT_ohwB]j}vJDUMkV-90Zf*c,GFC3ezWhjjEZ');
define('AUTH_SALT',        '9 (gb9K!ew4l4ye4iG1E5 mphM_n+IH.hXDGS&g245xr:ZJyE,#8klK3/sa~mq{h');
define('SECURE_AUTH_SALT', '#Eq+Ev&Zocs,!ut^1KQMr8Kb/NJ*MU&wEMKDR>7.Vt-DRHua4bfgJJ<iR1TSKrig');
define('LOGGED_IN_SALT',   '^VXLUrnMpYYX>CS^ceKWixN62KSF8 +9<az1o[Pb48(?KC*zT5E2x6&[zZZe21BD');
define('NONCE_SALT',       'HRMdNG9@:[O1:J+Kw;8FM]yEgIj} (CAOw7LG%s0e/3(S*N.h+.+]@9kE#Q8+w>d');

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
