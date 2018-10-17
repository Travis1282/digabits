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
define( 'DB_NAME', 'wp_blog' );

/** MySQL database username */
define( 'DB_USER', 'wp_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_blog' );

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
define( 'AUTH_KEY',          'EMZ4dQIUbWqPd*EC<ujf!T{I_$pk]a+bJ yf(q6o/g27[SH)`TTss~VN[u%?)|3H' );
define( 'SECURE_AUTH_KEY',   't/?o*PfC|-Zex~xMo;`<[p~@4{aEuzD,2N=*I2b;zS2#xM,M@&5/)ERF#fB]O|x4' );
define( 'LOGGED_IN_KEY',     'ROLW,LT(0& !*gu?g(C5-dAODZLg}VRAL=:!a|rEeh8=-=MAN7|uRxv;t3uP1SP;' );
define( 'NONCE_KEY',         'P05*5o#uNVO7(=M|72^lu`$[&IZM)TUQq4(sF;)k(*hS^GzXv;jN)iFh|PNg#}/*' );
define( 'AUTH_SALT',         'V%^rB~-]FCJ2!x ,8slH=R4F!,]U}r#8tk;M=&Do|}&WGM$+sgFO?8%CTwoW!eYf' );
define( 'SECURE_AUTH_SALT',  'Y463P;Wr$L6RLBW+ %&5`?YhqI._w&w^) <tVVV`VaV]4i>&&w$o7Tlex70<Sito' );
define( 'LOGGED_IN_SALT',    '+MtGQBM,<.-Y-j[:;ZdF1X3RVN-i=E[zg$iz5lt@=,;1^3Vj1yg`]7Jrt[m]9[2F' );
define( 'NONCE_SALT',        'HK{pEXU-e 3r2tr?x6G4UDf7zitY8i~j=dB3on@H{@Z (8~m@%<Jz)]81Qc#Q.3$' );
define( 'WP_CACHE_KEY_SALT', 't6sXl]^)G92XvIlHI{KE vrk|md2dW92z>/c*Ta;+/:rJUA,o[Y4^(ba~xsF#e*Z' );

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
