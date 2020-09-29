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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'infinum' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2Px}g}O^s.e@M9?`ihlof3B8*-)e<M]slSak.q+WaC:6]KR)[m/:i|ZxOR^2 |Ph' );
define( 'SECURE_AUTH_KEY',  'kU*DNCj?3XegZaou@jT=PZ>G5rNBJE`-;6a}4Wo]01m9PBr&9z9@py.j(M$oC-c!' );
define( 'LOGGED_IN_KEY',    '@lF%3*O;-GZmY#;E5zs$QoB^K``=:^!grx~!,jQslEC:OJe(!RP(lzpDqGjcs*#R' );
define( 'NONCE_KEY',        'g9_ZE[UY)t$+kCQ1k4mn>9-cLMlbq2qGDqJmPy{C }Xzi:zg.&.JlILO#f^^dhX;' );
define( 'AUTH_SALT',        'J.glW~X;MgR>Q-`tZrSv+809f7ZHRIXf!&zVb;+e#l d(A2as0$H_PEe)+lc?^ad' );
define( 'SECURE_AUTH_SALT', 'ge.(.ho&My=}PG){u15E/YE)PIOu<BpJ.|tfuNBV*iO(.LW[~3E(#:+[7(EG)i7j' );
define( 'LOGGED_IN_SALT',   'TlCh8=i[$WfPVTG<FS_sE/13S*s}PE<r]yh~I]ii-[3vum-/0tG4{TD:aTiL(&z;' );
define( 'NONCE_SALT',       'H`y[obsEV9J1J%GKU-Egv>sge7r;cD]Z:kP-s2YkjlAF__1LqjO>iKUeq)&;enOh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_kk';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
