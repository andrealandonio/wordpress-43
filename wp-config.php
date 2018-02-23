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

// Database settings
define('DB_NAME', 'wordpress_43');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
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
define('AUTH_KEY',         '[zLSXw`;+ZsUxQa}ZxEtQ$zqG{/d0X$LO%3D>s5PSwxKz3QV@}^E>&3gE6DcS$vr');
define('SECURE_AUTH_KEY',  '.({y7K`}4o7-Z[y9D$Qz)5oF=/6|kNRF/SG{I*TH4~x`h]$bL?.0Ve+2C)EWq]VH');
define('LOGGED_IN_KEY',    'S^{eU m&m$KwFY|.hHV/5^K/&T_||:0cu-qj~i&:4<*1S,%yR @V&P0uKL-&,u]v');
define('NONCE_KEY',        '6hdhW?{jrm(Oj%vZhyuV#Vk$GkwASGs~-rpGZ6=h80_{9,zh8]gjzrwvj`l4u@ac');
define('AUTH_SALT',        'AM+z|AB_i0ZOyGwzR.ju>5 rX:@/dstN80&?)iEz%-n,}IhjBk.B!Y4pnwx10Zzg');
define('SECURE_AUTH_SALT', 'XLU-}r1HG@_;)5oUBDiLq]jYdip|gHpQPwd[3qR8(=+WlG)[Sh!uYszg6cjN-DG<');
define('LOGGED_IN_SALT',   '|,J2+>zNuuSG0WD-!Q#-VrFjo>BW!gKS6.&H5/,{v)KN$.^>?m]+*XU-.F/PknoQ');
define('NONCE_SALT',       '-9;I>?CWpvPu21MJ1t:HK7M5#72;mWqP~l,m%CgHCwy-vw~o;Uv;$.!]qEJK=sN8');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// Custom settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 1800);
define('WP_AUTO_UPDATE_CORE', false);

// Network settings
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wordpress43.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
