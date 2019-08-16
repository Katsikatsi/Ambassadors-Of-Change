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
define( 'DB_NAME', 'Change' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b$23$xS=q}0mSn29SzaP`7@K|QqV3Zex=EB` 70ZP2+|(dKm063%4CCk$4Oo:,2-' );
define( 'SECURE_AUTH_KEY',  '[Kq,/Z:@`)wf@fT,Ghu5#@t[~mx~SA%,?1]&QM2CtSkg~K)-|}.Yc,LK}Gbv2m-g' );
define( 'LOGGED_IN_KEY',    'LF%#aXbm1md JR{B=+O}CQi@R:udCkC2 F}Jy8)YuA*v7>r`9~v#a2BRm;sQs>C}' );
define( 'NONCE_KEY',        'S?Q5$#&4f0= 7z&00#r_@egLY<*N?;{HlX pAXm|=CST=. w0^F|,V;4:TpPE%mK' );
define( 'AUTH_SALT',        '0#HI7gz~Z;_s_<L(yWV77X1{nvuqhGr[l*5em)b-:ipm*O*nbZL{XGm7Q$}6~+F@' );
define( 'SECURE_AUTH_SALT', '9GCfh~7*upM|Mcq*<@.O4q<H@717nm?*evx,%fWx1g(IfhW/h@zgT?LDH)Rd)rml' );
define( 'LOGGED_IN_SALT',   'S^%y~>oOJ>N1A7XBYBVR?CfL0Lk1~b.o`Jt,(b[|>!i[D6(M^M2PYKaGA$?w+iAq' );
define( 'NONCE_SALT',       'r$BqZ=}YLuh&:8yi<?1a8g;.ghcL_,T-qW*{m.S}T9ktS2}{m g[HpGrNgx;|>o=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
