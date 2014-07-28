<?php
# Database Configuration
define( 'DB_NAME', 'wp_starknine' );
define( 'DB_USER', 'starknine' );
define( 'DB_PASSWORD', 'VbHDdRYL7Z6gQG4j' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY', 'AUaP!xq&i+a-XxQ59jVBMrH<tpLY?Z!1+7BXXdQq&#Kx5fg,e!Li16Cm6mhZAYj]');
define('SECURE_AUTH_KEY', 'UFL;2PG3Rg]]ep~1+O-,7*z*I>ARkCeWzj/Po|n~BJlb6pm%qKT%>+;cLGrD{-C=');
define('LOGGED_IN_KEY', 'akYwlsUhe2d0i3Bw/5IDXK9?{S!{#7Z+Pu)%q~HbFG9,8Hs6 E*[S2Rd~`lYtpS-');
define('NONCE_KEY', 'OQz}d2a8x=~_Q7cu W+@5A$(VevYVv#fo%7_-K>c|Xe-TXFxk)_PF^[-TgWGC}da');
define('AUTH_SALT',        'nXnOPiTmh:z^/q+j;E:{[;NRi*+H1MT =(-%!pE9-]OWLJ5oj056=)$Aqt+$+^6F');
define('SECURE_AUTH_SALT', '@P!%b@90a&`-6EiBhKUV*3ZjC%M~S?6DP/_nF-T|#U>5x_<vEFiGBw$gN(JUuSaN');
define('LOGGED_IN_SALT',   'A!1}xL{0(V4K`X+o6`_=R (slH~+Vz^D|:GNuXCESoPQJ9:)-.oWG3y|gC&&UQQj');
define('NONCE_SALT',       'r=+QO|^_Q>Mp1.BY;u;arJR}PfG}bm7NeDdxm#71*A}8$qI>:3|3,(=_nH?up7ip');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'starknine' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '4bd6063bc990007ad091605d3df0a492cea3d47a' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '1072' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'starknine.wpengine.com', 1 => 'www.starknine.com', 2 => 'starknine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-1072', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

$wpe_special_ips=array ( 0 => '66.228.49.225', );

$wpe_netdna_domains_secure=array ( );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '66.228.49.225' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
