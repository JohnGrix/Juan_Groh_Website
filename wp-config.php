<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'u575656591_9yyMZ' );

/** MySQL database username */
define( 'DB_USER', 'u575656591_aJWKl' );

/** MySQL database password */
define( 'DB_PASSWORD', '0GXnUMVtHi' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '05MP6Csf}{/=fB/n|+M?.:HPtdohL&IJ[Oj`S1sRwQIIiFETn>U1PP[u3(ax/,Y3' );
define( 'SECURE_AUTH_KEY',   'ODK)YmW2Q[cNtP6-jtTuq|24@Od<36VfSVlT[)Y$I/&RCqVx|>FX-37AiZzuqs5C' );
define( 'LOGGED_IN_KEY',     '60MZY%yJu7%,@?Q|T{0#ii.iyx=-V%!!}pX_rHZn=^6<I+;I0xyD+G{#^{J:BA!I' );
define( 'NONCE_KEY',         '8sLLW9W>OvdF2ztt3Ln$EC4/:5GE30!R_red{Z<.FLP{HGqg2V;91-[,{gN8M(Dr' );
define( 'AUTH_SALT',         'v<YbwjD9&k_LMATHA,!ZooE<S2I-zF5h7j7W/[S:%|xNulV!G 3t%Z+A+qFvTQOJ' );
define( 'SECURE_AUTH_SALT',  ';pOE?J eL0{Ui2NF_}}nqwR6ER)qe>7oG[ {ec=#{/if)Y0L]A@WJiH7d2<a;uZv' );
define( 'LOGGED_IN_SALT',    'e/[GnSS;mr?i:V~_jojw#FZUjAii93A`.JNHgZW{m1[?+_,odpVIz)0e;kNWrxw;' );
define( 'NONCE_SALT',        'a&A@RC9`$=MxLt=2f*7EtZ lgByj>jn81O 0|E97# aG.p[l9,[gEAOWm#=n[XI~' );
define( 'WP_CACHE_KEY_SALT', 'Y!xjA19ExY!hR#@O_5>%:N;N6vIb1g&.G[8CMUZ/tUo:8e3.M I(n{t2j;vr$C!4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
