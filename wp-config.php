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
define( 'DB_NAME', 'anglewood' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );


//define('DB_NAME', 'flashfo2_anglewood');
//define('DB_USER', 'flashfo2_admin');
//define('DB_PASSWORD', 'xMWx123$');
//define('DB_HOST', 'localhost');

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
define( 'AUTH_KEY',         'w{Ac=sR1|Ej^P}N=:ja^p{/#5<,(Z,Nq_)$8hmg}Cp)aYOQxx=I!k6=I(F[g7Pon' );
define( 'SECURE_AUTH_KEY',  'MqP-3CjkP^:-Hm$L[bFI%[&xRD/+(`eu~D3>eUZwt|b8<2AZWk_>1Of]~%L6)I86' );
define( 'LOGGED_IN_KEY',    'nLQ$ogn]k?Th~e=/ x/U95,4#Pr.Hgx;7}z.4QrI [[06[[SayTsz|JF Lb_lgtc' );
define( 'NONCE_KEY',        'tW8vD%)6Utr*y{1)2}C<J%A.vJM4-9X;eEb-c%V#_-(yqpr.[iGK(om81ol3u^v#' );
define( 'AUTH_SALT',        '6zDT~A8GpYQ&a2VLi+e_r4RahVnp|:H;c#4rb=opz`&$G;X5[=_pAUG)O68YsFs@' );
define( 'SECURE_AUTH_SALT', 'u~ (jG3T 3A%XnF?%/5?l#WcH|AtHP<;6zwH6Is3z5W.bP5v4dq={P.qy_iDi[N}' );
define( 'LOGGED_IN_SALT',   '.DjHMs,X%K*f7jO7*zibXY@5|l7EZB=C*l0(`h`C[(F9MiisSAVk]K&B ]TcJn`l' );
define( 'NONCE_SALT',       'h~Au;<>Q~RiX1 $.mAj%!yCU$5>(83+W&U![XDk?l.>tBA=:>m{PHvbMpKFh/)1Y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
