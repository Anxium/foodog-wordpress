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
define('DB_NAME', 'WP_database');

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
define('AUTH_KEY',         'ql{1J=9#X&oe2Lv<,2ZCfS3S~r(%@eyI[vX8T}dY^vY.y_=f6Y?yasA+kvH-HS?g');
define('SECURE_AUTH_KEY',  '2Y=>7f^n)y^]A<`w,lAtjTXimSqHK1UK,d76QIpIvu&KqEUihZFd9@m0|(7/]x6n');
define('LOGGED_IN_KEY',    'w>OV@_Z.qIQo>ORp*.*}Mw0KQF}26O5T]5:w3j>i5UM>A;I2:,aNSo8Tmb9b-uP}');
define('NONCE_KEY',        'sT$zeOmJ_,aI#=EoMI}V@U*Qw;AWb:B0{TD^Y+jjHR2MBW%,|[+>4|CSc+Q##Ymn');
define('AUTH_SALT',        '}DP]isck(kT[E-(/d&))-HXXurnW<kT9e)S;|%_XKjrE[{W`a$r*-j>h0{0nKzVT');
define('SECURE_AUTH_SALT', 'SU+7Ey)>T`Qp9J<Qks,LSA}YQI-m,{Yhs.mtznZe_W!s?l[wMF2mN,KCUCtj0Y@0');
define('LOGGED_IN_SALT',   '/KNEBg`XF?W0#m9E].2~qPycnfdvL}p^M!6Qi=.1;wt0)OI>en,81HQMpgJ$q, -');
define('NONCE_SALT',       'l5m,K_W^o[0J,k!.c`)w=pKs4u<Qg5d&Q,F|TEu(R_4CQNjgq t>G&qXZK1Gz @t');

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
