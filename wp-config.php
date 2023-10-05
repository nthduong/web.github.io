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
define('DB_NAME', 'bán hàng');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '&?<eD)[zx(QKTzVt6&n*)_B=HFbefm$f(#Q#eu3!n7sh10?)lOv/?T2:H;>=_8^<');
define('SECURE_AUTH_KEY',  '#6}=1-w*#sYbCT|eVu60~SUq&_PYfC@a(>5b[I?4KBd%zorb8R/6/MNfnwt7DVOf');
define('LOGGED_IN_KEY',    'MfD$tJ}6_eLIs,|U4id]`nIf:aNyD#O!L($`Y2U]y]y=F2.V7Z|kU-|(AA@x[EuH');
define('NONCE_KEY',        'I1xOBNjWB&+Nqs1z3=b_ytdp:!v,{l;g=5,_U4|kP$AwxB>_fvv~3pJ_)mQUAJ#t');
define('AUTH_SALT',        '=5R_{9H|z_r{}{jo~0;Rz&+P91xfuv9jt5 b$A@UWwibV_W<fzSe@LoRXW@k/}q]');
define('SECURE_AUTH_SALT', 'ioSKaV6zGuSu]$T]rCzPdKOO3,d<g$|!VB%m]>l`TWM<K[qDM&:h0))9OWxsyi{{');
define('LOGGED_IN_SALT',   '8 o*6Cs;@PDmC{k-8fsg{c=T!1&$H3V=~cg}P23a|xJ)A,f5 PcKH]!Ki%aJXg2/');
define('NONCE_SALT',       'aY+hrE.s?u.;;Y0>EkK>[xs8ei` pxz^Iohoche3[TFhOTkuP5OUHs96)!XFDdwq');

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
