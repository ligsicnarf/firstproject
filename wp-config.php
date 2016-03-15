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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'B?kl8Nh3oY<K&.qn<X1(;I8xU,hNBiRc+kX$;J2D:80m]xRdF~|zyJfm^j8iD>>V');
define('SECURE_AUTH_KEY',  ')Iv^VrGe%~S4eO7:s%A~fE9Z (D$aaB2M0OmXwuH_GQS2f?i1vrLg>S&,fqIhvAg');
define('LOGGED_IN_KEY',    '8R^4>?_>GP(kp&@<H~L=8w.ww/$Q4]b|oa344ATeeF(h.PL3N8(J+SPb]4=yQTtO');
define('NONCE_KEY',        'dbXW73wCzKf3Mw1B&xaqZ{o^Lsmu&=}VevqS!+xOCaeVnKTZE{J+C97UIAx$=@ ,');
define('AUTH_SALT',        'O#Vc@ i_^[8GR;</1trP%+h<7XqS)~?;=eyP6$5lTjf1HV+0j8tVUghawQ+5`Tj}');
define('SECURE_AUTH_SALT', '`@_$b0~FR2ZNo!3r7g&6TR-lk)Ajvg/Brj*#%Bv(j$]E6G_d/,hM`2ep6V+F[/C(');
define('LOGGED_IN_SALT',   'z)1bpn=.K/Y8=Ja>YD7}XB6}{sSs4J*B#g[<Cw-J34?tzT(y95Kj|t;%Y~W^}CZS');
define('NONCE_SALT',       'YX#NY1a_5Fxd=j_U/ZC`!O-G}(Vtvz%@<q%8(iu[E;b$R)~2_nXJh(QL%&hJjsGX');

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
