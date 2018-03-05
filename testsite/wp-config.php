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
define('DB_NAME', 'bmac');

/** MySQL database username */
define('DB_USER', 'bmac');

/** MySQL database password */
define('DB_PASSWORD', 'KaCzar0078bmac');

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
define('AUTH_KEY',         'tP>0j=[Jq%oz=4=WU/G[iljg1_Z )0i_}vfvyf Y9L1c@D`{Ozti`7d]-kgVS}jE');
define('SECURE_AUTH_KEY',  'Ux@naWmB2iJjm45>je?e1`?!NAu.f`P??>x9&e#7U)-<l/E`bqSp7V>VX<}s&=sG');
define('LOGGED_IN_KEY',    'Axw+{%Z>ogv!Y,IAYNRS|UqCx3f=b[`/D&LvA<zV C<b4 Y`wK~&OQWUz1L;{kro');
define('NONCE_KEY',        'hLTTDWs?q-z/wEq*(n9JZU06,Geh!A,QT@GLUJT }3wrzO8gNLW)v}GJ?vSyZG:5');
define('AUTH_SALT',        'A*/jOsiAvh+r6!.y1!#A|4=XuAH j[xf3yI*<)f0Z_Uqco5Qgfm+LTe7T_6Dl8ag');
define('SECURE_AUTH_SALT', 'woeOy0)IH9xKx<7 <:v09@U[/Uu%|)_iDzqb;|tWd(vwM/ns9!$^c?0|HTlLN.SX');
define('LOGGED_IN_SALT',   'H}F8gZy+>AmlWyJAgw|KsT7a& k3@MCKr0AcI/]}J<~dT6FePeX,L)`4=I>t (hl');
define('NONCE_SALT',       'XG>FwN!uj$p@u!i1x1,3xch1`%&YFiJZU^Dc`VU/L1H{VSc(hVqjDp&K1Ib]qrOb');

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
