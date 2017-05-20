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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C+10^pD8_|C1//lj=h>MP|A1cEmwlM@`?=f,15+yN<nb1kF,W+yvI4yBX`VNi}j^');
define('SECURE_AUTH_KEY',  'E|MGamd(+RO|{^.`?Ut.-b~-0I #.z/1|S DiG|11hDMGb|Wf@11yD1,Jvp!n+(s');
define('LOGGED_IN_KEY',    '9Wz3*$Y+X7|@}+#g^,_+Z`kf?H[yvFx6O3T}0A0+OH{W(UCyPi:j}}iOuv<h<Jc.');
define('NONCE_KEY',        '^)VguXVHBJ_0eBq@ON<5o=$gC`!*GQ9CRMm|`,){Zj zk@v&`dmu[F/B%u hC-Rm');
define('AUTH_SALT',        ' wqAOm-~B5C0F-euzH$cZbC;*T|26-z.eVC{q4h+s@Um?fe!&[5#w8Q~%x] ZH=t');
define('SECURE_AUTH_SALT', '=*ryM3$Et!qo;6.JhAfA7AA3`:?j-tL$3yGJOI`|p7>h[U;{F]-62>,pBuVimcSv');
define('LOGGED_IN_SALT',   'sW1yT6sv%GsK[!iw HXDQ|*r|-a-/#mcz0[VLoLriMormfu&JGO&^:+Lb#Y&x+y)');
define('NONCE_SALT',       '%lkVHF~g}>nVUWc66El|nqhuXynm8kiky~f?D|NTq s+ThGNEI6U}.(%ySNJBNI~');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
