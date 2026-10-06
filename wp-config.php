<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'astssi_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Local development URLs. Override the database values so the site loads on localhost. */
define('WP_HOME', 'http://localhost/asissi.com/astssi.com');
define('WP_SITEURL', 'http://localhost/asissi.com/astssi.com');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^D!i1 ,0kM$|*M&9*+MHu6*|7TPt1`a[_R><^hdYLz)zV-3rFfA@Qc]/MD}*=-i]');
define('SECURE_AUTH_KEY',  '_1_ztaCD<,0EuG#tCL2`y[x>R}&K&|T^*)6DduKU~Z,RQ+pHlpR-B-nhu|vG/NH-');
define('LOGGED_IN_KEY',    'I-Ox/rl;$KF8#-au0:_]uM}Qeew[~ngL*_uY$U<8S&E/Q7C-6|h@zQNtzqE(L_w%');
define('NONCE_KEY',        'Q*VVa2+yFW)lBvmc&EK/7^,2rJ|sFZ~D{aE?HW#BR&JC-M9L*B+fFzC@cC~UX/T ');
define('AUTH_SALT',        'hF^91*`k@IDZD]T<0B[%wD2wm-$eqCL !N:-(umd@eU,Q*;YKXZXl*B}u&x[-(E<');
define('SECURE_AUTH_SALT', '_pqy}:=:,JA07{ScxBE6r:$(IsJU;tX#)6,~@4Cw7-ST_&6^D`7q8|^:|Q;A3|Sl');
define('LOGGED_IN_SALT',   '?`b8;ndP3AzOO]e:5|CBf5QZ2CX@+e}f{l_x)xz`6hAL{<40S(jbpf2ZS30m7%6Q');
define('NONCE_SALT',       's#ei$^tF||ux[c9X-`,O)$A KBH.KYN1Cd[`ovr!1 X @g]@P]OA;G2vfdt29{6^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ef_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
