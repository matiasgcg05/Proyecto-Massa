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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbproyectoMassa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '#rFY5fz>UmEZ NGTDyhB(DTWYA$o2m<1R(V::_eOi`AIq(lq<kb T&Z>jPCUbs9M' );
define( 'SECURE_AUTH_KEY',  'QUJj#FKvNZh_aA/~vr{iw< jj ;INL@AVL1)L&e+NJ+%~^2Z=GZfi=ZeD?%k%S^o' );
define( 'LOGGED_IN_KEY',    'Iyl+G)aV73$XAr(*?1iN&Yz|A!<v*3v|`^O$%m_XxCd`}qHG7-(PsAyPIowRGT1=' );
define( 'NONCE_KEY',        'nj{S`fU{y9pQI*f(l5}>/1FfR`Dj+|IbWYsy5}[KTzk2w.{rTny*_fzR6fD;y+Lq' );
define( 'AUTH_SALT',        '<Y&RRyJ#u+Q8/B)e81G+Ty>Ub|OHks{2.`75[]n)ST&``Ws/=hfF%G! {~Y}Pe).' );
define( 'SECURE_AUTH_SALT', ' K1,G*3z$glC9^9kU,DSNgXjMG8md!ELakt1j>VhERe]<tgSX|ozrp_4fYqc!2=B' );
define( 'LOGGED_IN_SALT',   'T4NPa95gluNqW[>9h6K`+ecw!(87`!K6#co5];v~w/_,Q/Vo4`VZ?;S*1caWKwix' );
define( 'NONCE_SALT',       'oPPUKyGd/.I?N7Rz>][qWZ5Jw2?76g-=Ah]^E&7yx:>`)%m1 I[_HvJ9fVdfJ7v.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
