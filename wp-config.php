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

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "news_site" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '~`[<8a2[JVlbqAuic*)4zn>_sAcw5at3zC/o,f=;)KRE_/?/@HF@BdUsl/)Ap =,' );

define( 'SECURE_AUTH_KEY',  'fX nbvvg(1005B:yjTe7EU!MNk^#)I.#7K{_<=$TS0qpfH.?H-FSVhGH_R*ryN++' );

define( 'LOGGED_IN_KEY',    ']g^cIw8|brn|XS8l%:*2Zy4k<^.)p,_D([AemaE(F0!AqK0oh{wUX]qR>M`As6w@' );

define( 'NONCE_KEY',        'DM I:KK#+z)#zbpQ6WQ>ZoPr}{+Q}yh^w `AIzd+c$Om7#&%16*~tAV3LvI6:PI{' );

define( 'AUTH_SALT',        '}h(P>mO)h+moIHiL$;NVP5t5BsUL3A$8,u)HN/YxS^]w35hI-}Qr#`}J#]>f|xG,' );

define( 'SECURE_AUTH_SALT', 'u]YHiXZD!NBdOH<u0AaOfMVoyX}{(10A?[Osz6~4K.1T1veaRzPOjh(S(VjX/}%0' );

define( 'LOGGED_IN_SALT',   'r|`C&2+kB>:}:hr}f8b4!{;5UHv*W~_YjL/H93DCo6EJYdZ_Wp$[a6Q=M /VY_pH' );

define( 'NONCE_SALT',       '@|R=avPR;&LF-UT(n;H@dyCoZ{b/!:1JLoa^M^j!B:Swn5+1DDD-G{H9xG|340%D' );


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

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

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

