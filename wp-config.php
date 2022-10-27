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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ckitchen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ker3s1f0n');

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
define('AUTH_KEY',         'fd9i)Xp)7)_k(yyuV;w2r?Gg.du=NK@ZLoNEd7hUR=92;j{EWFxffwS*ObiFQNlU');
define('SECURE_AUTH_KEY',  'p>Wdb|z.^YJIJOU5h.M>(?gAa9{ Rw2)`OM@Z-Q9WC{(.d uuUuH-+s1@YP{5fc!');
define('LOGGED_IN_KEY',    '{Q<F24(SQ)i2135Nz$:o@7z%v[/NvOe8Nqs{lb{h~e #[r&YFc$M?T!R=<l-H)ok');
define('NONCE_KEY',        '0is_nCxSbj;qpI*n8Q@2;v/mIbEd%Xtq[6ph e]%lQHfM|v[rNW>H~V3-|YW^4n2');
define('AUTH_SALT',        '|~Ma!-=[9W%55},LOEGV,8zRk r/OFIE83esGE=0GH @?CH.](~C1%MI_^g#X.IZ');
define('SECURE_AUTH_SALT', '&EU$3AWi%wTd}^X<r*]Vp62_#: UU$p_Gm`M36>ZXm2g>qrtK8$Nd?dqvYmgu(5+');
define('LOGGED_IN_SALT',   'TIU#C!b1--JYqjwNikI`*lf%/0aB9L|OFC0X;**`&4>2Q+Kq%C7pPGa[p-|5U &(');
define('NONCE_SALT',       '(Fq&xo<,n$]_hcnv5G2*ySCk79dFWQk[jh8i`YOF4FlGT~Kxtwpw2~#,?Z{8Tvw<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD','direct');
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

