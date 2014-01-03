<?php
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
define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));

/** MySQL database username */
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST') . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT'));

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
define('AUTH_KEY',         'Fe.3IQh5|smg$ k46T.5c5 RVF|CyDy`~PVyv+D>I5Kki{=2KB+S2Rd|;7}?l_N.');
define('SECURE_AUTH_KEY',  '}Vyg<s|jb:yupY6#tJ9XTK!dAi!-jbU?Q$KS3P*P`|`7z6;<|/oA8nH09` Ihib.');
define('LOGGED_IN_KEY',    'KwNe*VX%IzDtC(+jTCu;pcc]Uv?GtcLr_$sc[?FbB#g|Dj1[q4>!~JV0{2F$]xk2');
define('NONCE_KEY',        '+QpDFP%+6lV@OY&vv*p9`S*Zk,VzbHQ9|5K-,u`JO+]#8&/^Ou L_ozD.s.xPxT7');
define('AUTH_SALT',        '0*(4(5q{S&*Gax+RW&:f*Vo}1&f^O!}W-;#5m%`k|=BbmfmhdVtFe8+Z!6i~v;I0');
define('SECURE_AUTH_SALT', '7a+cY%Cgod2qV*S]YXi0X0 suHy[jl2|GcgDsBoQ-p7.H0j(6fpXs:^!95derf^j');
define('LOGGED_IN_SALT',   '*A?WBleBOTHb=^lej0E`>%zG;SXc@Y+QSCgNEp|N_!ir-7(yYJ&|lLtP[Gm!.6e{');
define('NONCE_SALT',       '7X]|++`]`vXTYgN(X,Fkf1wetsGXM&8%#[aa8JWIk-5;Brp$Vld`+Dg|P?{WrhR+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * fa_IR.mo to wp-content/languages and set WPLANG to 'fa_IR' to enable Persian
 * language support.
 */
define('WPLANG', 'fa_IR'); // by http://wp-persian.com Team :)

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
