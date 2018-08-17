<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'frodoskabin_dk');

/** MySQL database username */
define('DB_USER', 'frodoskabin_dk');

/** MySQL database password */
define('DB_PASSWORD', 'AbKPGDQm');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'X4Iv}#b-t8x/^Op<CYfD.6L-zB6f#(%6JMH&QA1VS8%awID~|=q%TVqn=7HOK_bl');
 define('SECURE_AUTH_KEY',  '|z~}s@W]={_9+IOX275*|?W:.&:%R <0r2`7i1Q%;I:mc~j4OD#F~@~e+0}Yj$Yn');
 define('LOGGED_IN_KEY',    'SKuX8,[R<>|3}!YoISJwOD=3U_u?.$F3k1+ybV5-ktpcfW>ff?>0@r i>mQw1jpR');
 define('NONCE_KEY',        'ZeE/eW%N8J}1IkYkgC8Vn-F2c>81zJpMUwF#-BN0zTks/hl^f(QVs+-RT>l0D:N#');
 define('AUTH_SALT',        '9O^^#=#-Enrgt8+cq:t GaDLX}KwEi9w8sS`)9-++6lukUquQ9Q3hy?i${eRDC:K');
 define('SECURE_AUTH_SALT', 'B!/Lj/@^Z]8?bG.9 -t%XaoP! <Y]w=ta>xY+mDbMRjd[-Bb`<{=?vo*s)l-[;9A');
 define('LOGGED_IN_SALT',   'Wj_o/:/h;r-r9nj}X,>6>yY?!aP+`WSAO1-s3#m!qs.KMeXj|>`I%I3$ z(55# P');
 define('NONCE_SALT',       'Q?&eRnxR-~=wKKL-5K bmuf`^c+#Kpu!pW0~3[_~$1tHCVaG%jP(/+gsW/bv+5:g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define("FS_METHOD","direct");

define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
