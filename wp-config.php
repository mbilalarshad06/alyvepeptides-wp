<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbi4gywhie3lb8' );

/** Database username */
define( 'DB_USER', 'uppk4yrpnjmgc' );

/** Database password */
define( 'DB_PASSWORD', 'mopr3koeraob' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'mYQV=kBrrz*E9f09to5lFr_U^L~,%`IqYq*oG:Tk|P7PE>j6a}ct%[n<yQ5e!9gj' );
define( 'SECURE_AUTH_KEY',   'sy~4gZcZGW?u*q9%],asMD2YjWEA=21}^pks(F!`bY;TAL&O.;#$A3qWD6]sp;!2' );
define( 'LOGGED_IN_KEY',     '/[Qd]:qYF`}n4usU^Gg)cV4:/^Qu/1#p$NAfj-^:At1% vttv%,QKB~.@NiQ+~f|' );
define( 'NONCE_KEY',         'qIh:%@]Dk3Lt9wDe{nf9@q]iJCbyT!.p^q>x)p|5C<1:W$HOp|{b$Oj/L,p!l)Q}' );
define( 'AUTH_SALT',         'Knc;CP`g)M8*|i,^*-I2$JQx{p.3)D?vK:VWy_d.}1)*[02,j<)ds % -m.mvyXz' );
define( 'SECURE_AUTH_SALT',  'Q+&)70-nq]g67Ef7^kO^Xua.}v1uj+aquYQM,+i!QkGJ7n#RMdH_]VbDxc}S+}<`' );
define( 'LOGGED_IN_SALT',    'qIHakXj>YdtuF&~XT$hJVw?SZA04m0%;P~Xr8TULYyBRVH}H2VCk5}qMp}^wwV#.' );
define( 'NONCE_SALT',        '$wJLCS.K4WM,>e/e_pq/L$_t[R3m{doihzuC/P-XA?kPAKvcw ;]}X|Ce^c[q|9_' );
define( 'WP_CACHE_KEY_SALT', 'yV <zRoG/U1y5I21+A(Hl`~@v3v>=d+/q|L{>f$n9Ia|u?Thab@]T!YZr3G[cWAX' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jtx_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
