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
define('DB_NAME', 'portfoliowp');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lqX2CyC/gu9h[wHIX=9C*O`pCL +%NQifE!fj<:mA!OekQNJg*k{&o=V6u#v=uZg');
define('SECURE_AUTH_KEY',  'f5`|%-=f^,oF,MO`0Y`/3>@R/@kh`8-g;ewUFJln1rJQS#(R|S/huy7A @0&.o#<');
define('LOGGED_IN_KEY',    'R]EL1R2cyYxx^.G&Rhr)mZ-:p/HT0nXG1zo>wn1z>,m)^nFInyD+dprpG^CG$}}N');
define('NONCE_KEY',        'h5,56Q2$J&@yS@Rt4>hk~wf%f91q.)x551D96of?;H--Rj}am#3-9%<^Vb!*(P_p');
define('AUTH_SALT',        '6-z:/WSk-t-HC~[;%V]ldqQ6)MON8aP/V^1&k/77jCurM>Mo:T&dC!etDe+!Jv.F');
define('SECURE_AUTH_SALT', '+kmH[>|6BZ~ujj-`]jj`.BW-tj~U,G1V|a5dTVC~FP-nKTsXU0DDOb)Q1NVf`h=)');
define('LOGGED_IN_SALT',   '^A$Y{)V2QidWs5~/C&lKG}L<CDBas>=]k0F<}(J,n%-#etK+LeR74z(O//Xc} mP');
define('NONCE_SALT',       '<+I#^}z{|M|B3O>gJj>n4+}+Yq|z)3j9=HazBf5~MY((+f!D4b1nzLv6}/#^h]`F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpapplication_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'portfolio.wp');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
