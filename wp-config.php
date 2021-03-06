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
define( 'DB_NAME', 'db_darayuda' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'AMds-=YYME#,aU9*fx!#%r>qMG=g,-ryVR@R1}->O;:}-dusRgH;DgHmjAe0fm>e' );
define( 'SECURE_AUTH_KEY',  '|Syc b4?LlhJJVv^|k#(GcKx{P6>fs$%hkHX>wU#Dxr!#>C$N?A2zdbEe^`5)lW~' );
define( 'LOGGED_IN_KEY',    '1ub)]UYdTjr}N2OoCKL9`dtp=yWqGVyh7aclJ-;i9[oJ.Z/ ee`yTz>6zO;RF2t^' );
define( 'NONCE_KEY',        '0+L!ex&Nod-9{r4w#:6a[;730xa.*]p>)f^:^=9M1DB-V!GkC&Un22G++kyE7Rn.' );
define( 'AUTH_SALT',        '!D>R9A#v6NZ7x9*_R}._+|5Co5_WVw&QfyZi=g0i?{k<Qyg({/,:WD{VW[6x9AB ' );
define( 'SECURE_AUTH_SALT', 'u/8(LrJ{2TyXbYn,;1P>pcw!EGdReiqWp`nO983(y ]FjntE|OXE8!f:&dbWXn<]' );
define( 'LOGGED_IN_SALT',   'kqYEN)(0(G4ebL.k5U%|wXESNqIsl]nwOD56Th<dY(DNeR6?d$F:n)41`57zUQ/Q' );
define( 'NONCE_SALT',       'kms duLUvYA~>KlWdH5_[~-$z+[[dgLzBrXw.e1$|o)pc;M^qh],SyxOB`vl9(.a' );

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
