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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         's@xbU fps.{DW`pg*z^EhMvU1&Qjw*DFyb=sfOFC+ud`x^kvd`FOr/(cKQzwGh&~' );
define( 'SECURE_AUTH_KEY',  'Vw62Rf8%s<&SNR;v|uYg#EO}BW}r9&+HLCM<{sTinvxw__QRNX)HAOOd!Bz(|a8,' );
define( 'LOGGED_IN_KEY',    'j<4%NRR<vm;U9Au=s!T:{SW*wQ^wv`7]Rx:<]2Ypikywd)uZmCS}P,U9aef0k3hj' );
define( 'NONCE_KEY',        'wLk$W9M5RiPv{y8#jxsF%4it~![TNVMbw8d_}lH#5x#7}]O=/7HV&?HvA(lZ=7ST' );
define( 'AUTH_SALT',        'XSET10Vu0dt~R1<.a+JO.ps`}?<]MzO&ymC*{#u]nW[dKIvnhf: f)bI_cG$0jeR' );
define( 'SECURE_AUTH_SALT', 'kBL*PDpA.gzA>ZKzgTZlw!DT/V&=Ke:b58HgBC5tl(G_a*$qM<8<2fmi:xE[;GQA' );
define( 'LOGGED_IN_SALT',   '~tYE(wkMaF3R+)<m=95N@xKCyp{ynr!6y |G}q{=tnn~#Uv49ZG2mMA0%:XS|N&=' );
define( 'NONCE_SALT',       '_+vbb8ftp||LDP2>g/XQ1c73,9hUiokw9i7_C3fV%y,pLip:Ta`r7++uh1ngWPw=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
