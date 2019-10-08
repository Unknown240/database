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
define( 'DB_NAME', 'sekolah' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '000' );

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
define( 'AUTH_KEY',         '(&vLU%<!nu;@L07d,w(u,X}T$A&FH)UAgXGm+v,`3;FQy*gK$cap8zx~@K]f(=dR' );
define( 'SECURE_AUTH_KEY',  'T-p!z$WuTg7k(y2v1b$EUYC+e;{#Mdp@6m1q6vd8D&+h?3#5PGHIZ{s6-Q^xvwzv' );
define( 'LOGGED_IN_KEY',    '?yhaLiP:9%hVUQxF,do-L5~N$l%QXCp{|~q=($-BYO{)y#BGv):[]HIs_D<=~$p2' );
define( 'NONCE_KEY',        'D|4JpylrNx;]dqD2T@dP~-3+8O+;b+f)a.4=q4+Z`R7E[[aOf9I$u*c?av}cGpt=' );
define( 'AUTH_SALT',        '`ubOn(?KA/eA,MDur]PrVs&#M-r3@c.@#_~62-)@HDNrR^W/z4l#/Ho-{cCRY)Qg' );
define( 'SECURE_AUTH_SALT', '[*.i@7(D[xy_p]yrjjO6;[yd$AvZHU<2+klE[D(=kEPPuZiNi65~/X*:*12I0lw|' );
define( 'LOGGED_IN_SALT',   'G3fS:PuM2x2h,GZGzLU[+t!|CJUTv0.*QzJ7@e?){8<;e@<`jy/mU+j&JzR6=RlN' );
define( 'NONCE_SALT',       '6NN},wG?)GY#GNsX!d]|Rs}4~=WXuEK)e|:?|O6EZ?tGG*Wgo`MmvaNY!3:!1vyk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sekolah';

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
