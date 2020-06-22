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
define( 'DB_NAME', 'coffee' );

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
define( 'AUTH_KEY',         'O_RzH998N*blCxTyY.h}=HL62<P9)gS!MgX=*hDOE]]%CJ9ar>Ow6@eY`@$a#JGE' );
define( 'SECURE_AUTH_KEY',  'b69iD`SXY~yV5SMBU]j/NC44{_`4W9kiTNC+1m%F]qd6lj+@.5E3w)^P$Bo3U95]' );
define( 'LOGGED_IN_KEY',    'B,?`LDAWUk/iz ^<BAPW?dp0zx.p?NBF=Z ]N9x#[avN59D9^5TC^|3MK/Pk+rw0' );
define( 'NONCE_KEY',        'T7A|9T@F FeM%c_ I^$Qe#$7zGNmZzI i+6}K|`a1LcvP--TfP8!yk^x|i{0bm_?' );
define( 'AUTH_SALT',        '680uv5!08?9vX>>y/%p:V;$06VJC+;HIAF3^5:9M0`=/tC!`dxB6=TI8p:`:~:Do' );
define( 'SECURE_AUTH_SALT', '<.;c[7Cf(c6mDrF~] l!#]-dfuSis%g#,V/Q!FIK}<D-!o)aXq<vK_0{,<fkjR*s' );
define( 'LOGGED_IN_SALT',   'vstQfJ mz5]z+E$S]DI=OGOdgk7{G*$bR{.+qrmNAre*]]8_Zi:-Jwe.N[2IoEcD' );
define( 'NONCE_SALT',       '9{)Ue%&`ZGn`{(sw-b@Fu-M:&^#h8,ag4h@Uj:FtTs`hprqvT$ BdV17:kGDk_&{' );

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
