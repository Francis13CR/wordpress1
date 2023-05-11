<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tq-[Bft<@|AE#ot.Mku@OY4?T9i%O5U,bDSo/a=^`6> St5(voyEL2/cBVr<iDcB' );
define( 'SECURE_AUTH_KEY',  '`qJP:=i6F:$vT2S_&~m`rHmDZx!g]/n8c5<p&{M*7`2NIC,&AF=l5L]7~Y1 i?TB' );
define( 'LOGGED_IN_KEY',    '9Da8fyt(I/U(T4T8DV6lp]:=c/X<!#^Hd2:7AKWwY9k//.2 =vX@n~/q?[Yf)i<p' );
define( 'NONCE_KEY',        ',T_Heud*U5 MmT59W)O<SQ,n^%FkC4V#w:QDsZ(n-v(U&r{u:1?x,*j,M_V?5mNf' );
define( 'AUTH_SALT',        '5|;|4jP.V$GV`n4^!W6A@WFhn;3Q-Yoli,+?hu%&;Q0GhKN -VR ~&3D3DFKr850' );
define( 'SECURE_AUTH_SALT', 'X{pXSR`7ONsMQ)Zz(Vev9yxke.y1j|W6>v<-u4K~*9H u&yU~2l>Xc1A&U*/B{&Y' );
define( 'LOGGED_IN_SALT',   'B}rtFg:G1Tu 1i]2Mc3}1f3F(S]k@}ES_O`p@Dn:QdR[ mzt%<x-@^xY^ESL<sNt' );
define( 'NONCE_SALT',       'WWpE.c[O{xu[myj#0BOXl_/[w1d/jjkOhLVfff1[Y$6G#pyE8s`g}OR+E8i=_)-*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
