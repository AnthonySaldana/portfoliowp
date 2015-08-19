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
define('DB_USER', 'root');

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
define('AUTH_KEY',         'kEp|J+p2K[9[)@p3x?V-kd1wMblJlQJ!3O!hWekGC&icN>ZTCoS9,c[PoA1$C;pp');
define('SECURE_AUTH_KEY',  '8C ja1GA-Z38p.[NU]LJY!3_+$w6d$XJj.k-IP52nS!CFkXLtCsOE.]97^.|Zeax');
define('LOGGED_IN_KEY',    'I7$w?6}{RtStOj]kF_]?Y4J/f4iTGCDNq3#V../|4A>np123-,%8M:3ESV,<Ml-(');
define('NONCE_KEY',        '($<gX5iI/kkaLQ-])mwqj;G)t0$|=n(9yj!i4aPO,S@ihem#6~(PEO+QuZ^/_!|Q');
define('AUTH_SALT',        '|jVsTr-q~?P(w-jwfI/O9{2^S7ZBWV-!~}(A6w2w4m--z<+U6Za<Q?Q+~&JXFXz_');
define('SECURE_AUTH_SALT', '@A3Y1+_~zw##oWF00ur_)TuE,q9M(r8{3e05[N!jMB%gx|[(VN -nh/VPXT.rs-|');
define('LOGGED_IN_SALT',   '4B.pE@Ss.Zm9 y*8V2(zJ!Z}vNLF@ZXf=dEC^+S)W[r1GMT;:i{xaZV|d*?b-* 2');
define('NONCE_SALT',       'Q2X=kQ|)16we1dzAsmnaB$-66H^tX/*?i[Q|H-X(u7! QKsP^<)dCSb!`M|5{cn|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'admin_portfolio_';

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
