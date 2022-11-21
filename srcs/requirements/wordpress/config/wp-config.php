<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );
/** MySQL database username */
define( 'DB_USER', 'user_db' );
/** MySQL database password */
define( 'DB_PASSWORD', '9998' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', '' );

define('AUTH_KEY',         '+{UIe$_|/2`UWY|R9O`#Pj@m(c(mYe{`V_c$$?sQ0t 5sZx-;]:x]-+&y1DAD-G>');
define('SECURE_AUTH_KEY',  'Xpi}V.rqcv#|:N=bXS- S!$(xQ&|Z#?{|zrLtqE;hNG,HPHY0Wd]{5%s7tCRC|hT');
define('LOGGED_IN_KEY',    '19u##CtAc4 :/Zd{(5F2e9[fM~Wir@sL)d&-0V{u:5B+(=_E+cRu81rq1GXRk@{@');
define('NONCE_KEY',        'rE|qnV7UV4(YzIwr-*hTqP7>TD5P&425c-)wg$`}xW`p]shZQV&/pYrFBq>$T+;^');
define('AUTH_SALT',        'f-|Q(9-!7*P.q$gPL)_],:ZCMpr]FOESW#,(e6x!j0Rm?) Mz[R^iabd<Sl`k,j=');
define('SECURE_AUTH_SALT', '4!w;^x;CqxdZT-l?^.}ZNP]6I$!>|.!5=o4|={;]$S+KmrF8LY-?.h{2z[:PK$(~');
define('LOGGED_IN_SALT',   'X:`uUc O1LSQ!bv:jQE{}iDHb~Gl&UXr9SwFZa$64*{@c:xRm7D^hGQcQ7OuCg!8');
define('NONCE_SALT',       'V}H,^U+|;Q}S6l$vfRG+Ht)GJeXGTJVPJ^K/JJ*I=a5(H$m|d+Id(Ni.+N_6_:Fr');

/* site url */
define('WP_SITEURL','acmaghou.42.fr');

/** WordPress Database Table prefix. */
$table_prefix = 'wp_';

/** For developers: WordPress debugging mode. */
define( 'WP_DEBUG', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>