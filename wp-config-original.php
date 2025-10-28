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
/**
* Database connection information is automatically provided.
* There is no need to set or change the following database configuration
* values:
*   DB_HOST
*   DB_NAME
*   DB_USER
*   DB_PASSWORD
*   DB_CHARSET
*   DB_COLLATE
*/
/**
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'cR]vomIJ>==^Y Ga+T}KFi{wC]n_U;94+[sW`#UYXh@(MdOw|4WAhoX06A+pNyGp');
define('SECURE_AUTH_KEY',  'Q^b{ZBbl?3?w{N0NI&+U_=sUjWd13eq@=ACGa|MgNvV,!.TY:EI|U[;{W[R(_3aU');
define('LOGGED_IN_KEY',    'C1QqXcC!|~]JM#,S/Dk0Y0bZj&Nk|HzU_V|Yb2,m_H8jLF3>m|b;^jr6Pa4N*@vc');
define('NONCE_KEY',        '+l@<><vvV&ZcD4IWhY}$?zX!Y.^:G-Vwi:AjT$XrSH@QjV6Xp~+QC6 217l-|qSK');
define('AUTH_SALT',        'Yr;{}A> &A,@ui?kndl:Y%>9=(,(h!1@B<~?Z;fEG@-1r08KfGLzYCNF:*g?EA^|');
define('SECURE_AUTH_SALT', 'woj(oTU6tGCLvKpvLz$`RF+C3k9<#n-,)R%FVZN]RMyXo|,ngXt,o3}=-x}-N/$f');
define('LOGGED_IN_SALT',   '+@)&c0l0HkA8Mcy)- J=~mE)|9}#dIcW[~?v,w`66A*[j]||O$zh6o`qDYr|oaur');
define('NONCE_SALT',       '-m@n=+XKh9hE9><?!uv}M$!+*jJtnPBLi*#+D_4n2}|8>!Q mo>L7E}}Lfq.8ZoN');
/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
define( 'DISALLOW_FILE_EDIT', true ); // Added by Defender
$table_prefix = 'wp_8jko2ocrgv_';
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
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');