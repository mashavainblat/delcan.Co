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
define('DB_NAME', 'delcanCo');

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
define('AUTH_KEY',         'ctQbfcNeoLmEgPtq>?= Jlaa.n.78VlqE;Ps Y~&|gkC-s(Zyy3eKJq)2g.8xruV');
define('SECURE_AUTH_KEY',  'h]6=1H.)1KPF}-Br]]k|K4P^!2$@hJ$DifH+mK~z({[S?56:[N */M9FAh7UKjPP');
define('LOGGED_IN_KEY',    '^8crI:15 1D9_%7zD6A]mX-lLf[Y9f9hLg!iV=3d+:GR0Dru{J_aW;4Q}3,ov,+C');
define('NONCE_KEY',        'JILaZdh:2K+xAt_tb-aar94}od`QeI]0B1zDDIyO29[:&jb}u`K;n6(CT#z~vUqW');
define('AUTH_SALT',        '@s-eM&N-Uj!RI6}EFI1iM%EtcsXLzw,M-sGqZ2:_r9y[lE65,>Hk{Q6Kr<F_P~Rd');
define('SECURE_AUTH_SALT', 'ur%m`)matHQ7(}BG/j:Mq]P@e&5`};&^bA2*T58,HrIJ| he9#/`Zj*.pq*BfMfv');
define('LOGGED_IN_SALT',   '7~V.:U%h,h*AFj}Qu~zb:AyPw.M}r8v]I_n6z:{K|kw8t~_;Z8y7M),=RFFJril@');
define('NONCE_SALT',       'BI^Y>DK]O:DMkO<*iMDqns0]-%hlys AIo?]?Ny,DaKn96Ko((:9:`vrVT+P?80u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_delcanCo';

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
