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
define( 'DB_NAME', 'wild-lovage-two' );

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
define( 'AUTH_KEY',         'Xd` ,|dUC8m~:y;#5#|$3z[-vC3BV U!<@nXQJ_X7]8e=*6a{Ao HHg$_5PgLoJG' );
define( 'SECURE_AUTH_KEY',  '|[-x892iW[fYSBlKh@uTW`{cf?{#X4@kMu>=p6. -F-t+~l6FZ)$#]c{vYet~Gq^' );
define( 'LOGGED_IN_KEY',    ';n*r8p KCtuZc2S_]]CghiJQ10(/9+s,Uf($[zNU*)!] ,FZZT Ap1FCCn+7d:6`' );
define( 'NONCE_KEY',        '+vj]MruDUDv&K,+~^sHB/A*]lrHc1}yF)B?f&9m:(Z*:?},=7bVXsf7gr^Lblv95' );
define( 'AUTH_SALT',        'Zh@qvm^M`4O-7cnQI0z[G!2ag?Um6C8K;u6@m-(-.!GJczv#,w(E42B#y#r3dXmD' );
define( 'SECURE_AUTH_SALT', '8;>dJKmH.j04z=~_gkUqk:bCCK Ugf+w7!#BsDbifVcrVj9.Hy>~TYPGDAJFqc{X' );
define( 'LOGGED_IN_SALT',   'uXyrh_d1>.0w%%JaTM3KYA|_`m{GeLl!tV!C~u~.Z7}7wHEGU_EB1=Of4?uYc<nG' );
define( 'NONCE_SALT',       'tF{oO#;iJXZFU}5<2_.L$muC 8:4P!8bWaUny/Dqx WQ}-).tUmUyZD`B1ByY1[N' );

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
