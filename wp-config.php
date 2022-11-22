<?php
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\Xampp\htdocs\Wordpress\wp-content\plugins\wp-super-cache/' );
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
define( 'DB_NAME', 'fun olympic' );
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
define( 'AUTH_KEY',         'r9Id/ {Yn/p29X,Tz~S;Oq9Pr#Zbl0>U6iu%o(i|0XMg<OY#ie|%[[W_ad8Bgy@s' );
define( 'SECURE_AUTH_KEY',  'zTz8}chMzZGqf`i;.NW=-jCXHu<mR~2!@*s@qlIB62#%66OS8h_(gw{Zv5oZBU;o' );
define( 'LOGGED_IN_KEY',    '>4=H8-w(F7<~PgXd<;:4Wfj7IGzpJF!x`vb)RY)Krf}euh$f$y}+E|*pAazUYh6 ' );
define( 'NONCE_KEY',        '3CYOa~),LN,H]PDFtT5%@7cn`h!o}%>yaIj++m3e [YLCpJF_zm`(FORAX>r4k1t' );
define( 'AUTH_SALT',        '1%$+wecZNM-2R;&#L`c2W$M|pkFsJzBI/7?HWJg4X`fZZe-m]*ixMo,lu@2x^E{3' );
define( 'SECURE_AUTH_SALT', 'T&S{NBdd&b5)d,yQG[UJ,#+{*Lw&x&{t`JLi74l8]XJs+I2,E.Bsn*F,PJUFR{h3' );
define( 'LOGGED_IN_SALT',   'zg!W]Jk0+}*I3VL().>.,(73,e=gw=V&|UD@ct`w2Rg#?N6nwzHunT%;okE 2vA<' );
define( 'NONCE_SALT',       '(m2/+Gi*&Z#OHjuw?11IcvPOH{x%2+cmo#HChKM4x-oJ,y $p/7+Bz/C$WcJC8F8' );
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
define('WP_ALLOW_REPAIR', true);

define('WP_MEMORY_LIMIT', '256M');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';