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
define( 'DB_NAME', 'mohey82_alboshra20' );

/** MySQL database username */
define( 'DB_USER', 'mohey82_mohey82' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Nino@5255' );

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
define( 'AUTH_KEY',         '>_@`Jp%sZ8N lF{PGV!_:XcU5prOI9xM$01=gV_O.}f+NXSyp7~*Dd*LGYx_{5XJ' );
define( 'SECURE_AUTH_KEY',  '~(VoQiQMp`j>s,,E0J2{CL%5/ROw$te3zunE/,gC_B(@HX`D>=#jC<IW_TO2mo#]' );
define( 'LOGGED_IN_KEY',    ']p]Kw>mat;}OnmjtnZ&0ns%^8snK(M]>0OPf{=msf5oqM;!iN54zGdm>!Rcw[e.1' );
define( 'NONCE_KEY',        'S7`F3K>jd@rRy-)_{MS/gREk@U8L|b|a74r#cEp/BGG<R8UY^-+So 4P_+N>}CxY' );
define( 'AUTH_SALT',        ']X9R932!ol7bT(^T><^fJHXHxaz5+(BCVJ()Da9YH^s,&aJpHy(_m=J7{1muwpi.' );
define( 'SECURE_AUTH_SALT', ',|O&-+N{D*5J3YB`.7+28Y{XAoE,geK=;b[b!jjX<%z 8r#OPs(ktnKA0z<Ucm8A' );
define( 'LOGGED_IN_SALT',   'yXF4.KEId-svE0Jbkt*TS=uV*X*P1<j)ZLe0}Jnb :0<Mb5C}dKT:.AXM--iQM5?' );
define( 'NONCE_SALT',       '=Vqd;DHK;xrC?SvC^bOae.u<rTVlI~aJZ1C#jXvF6H/+w07l[N(p0faNg:}IqH8 ' );

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
