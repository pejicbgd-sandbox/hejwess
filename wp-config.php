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
define('DB_NAME', 'hejwess');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', '8evjrWfMCpmnvIyE');

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
define('AUTH_KEY',         '@C@WxYc)R&33ZJC|2fTN]manI6|8<U8!o ;z&0_prXG{b{%PPNS1SNByx4ACc7.@');
define('SECURE_AUTH_KEY',  '}# 3~xNr8|9J4mTKOJ5<lseB0xILK }+aSxrz2G*34@/4.B)#pU^jIk0J)-}Pi8^');
define('LOGGED_IN_KEY',    'o`P|zAGh~8u8 kS|)IN[f!BX=c9r+w@G#vDQf6&m%8I{+7G.UH:!KCvn{fye;E` ');
define('NONCE_KEY',        'B.j HYL(Q1U)/lJ~$ne_ 8kI6AAt#msrw{pr@PDaJ`vj;K8`qM2@|Di:b>^<QzhU');
define('AUTH_SALT',        '2MktvhpfKq=7+?n!9^4+Qj?cq-W]|i$52.0|cs3.(/gZ<L<:kD$/Kx1BkC-JF{iB');
define('SECURE_AUTH_SALT', '@}!sE3[G2^I8znmPF]ra-eVKghA3v$JM]5{=@z5%;brP[0PBF~e~OzT-usLyE1Ca');
define('LOGGED_IN_SALT',   'wU::giW+jCeU>2oRoQ6e 002e[/bW|u~8;rJSJADh15JL;Rrs<}y*6a]%A!3qGVz');
define('NONCE_SALT',       'VLeje_o)`sY&+nx %psN6_nWl(NjxAuBWR}[6$R#VT&QX 3z$-D(,-L+h77[vY8=');

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
