<?php
	if(!defined('LIBRARIES')) die("Error");
	
	/* Root */
	define('ROOT',__DIR__);
	/* Cấu hình coder */
	define('NN_MSHD','0300221w');
	define('NN_AUTHOR','phanminh.nina@gmail.com');
	/* Timezone */
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	/* Cấu hình coder */

	/* Cấu hình chung */
	$config = array(
		'arrayDomainSSL' => array(),
		'database' => array(
			'server-name' => $_SERVER["SERVER_NAME"],
			'url' => '/vinfast/',
			'type' => 'mysql',
			'host' => 'localhost',
			'username' => 'root',
			'password' => '',
			'dbname' => 'vinfast',
			'port' => 3306,
			'prefix' => 'table_',
			'charset' => 'utf8'
		),
		'website' => array(
			'error-reporting' => false,
			'secret' => '$pm@',
			'salt' => 'vinfast',
			'debug-developer' => false,
			'debug-css' => true,
			'debug-js' => true,
			'index' => false,
			'upload' => array(
				'max-width' => 1600,
				'max-height' => 1600
			),
			'lang' => array(
				'vi'=>'Tiếng Việt',
				// 'en'=>'Tiếng Anh'
			),
			'lang-doc' => 'vi',
			'slug' => array(
				'vi'=>'Tiếng Việt',
				// 'en'=>'Tiếng Anh'
			),
			'seo' => array(
				'vi'=>'Tiếng Việt',
				// 'en'=>'Tiếng Anh'
			),
			'comlang' => array(
				"gioi-thieu" => array("vi"=>"gioi-thieu","en"=>"about-us"),
				"san-pham" => array("vi"=>"san-pham","en"=>"product"),
				"tin-tuc" => array("vi"=>"tin-tuc","en"=>"news"),
				"tuyen-dung" => array("vi"=>"tuyen-dung","en"=>"recruitment"),
				"thu-vien-anh" => array("vi"=>"thu-vien-anh","en"=>"gallery"),
				"video" => array("vi"=>"video","en"=>"video"),
				"lien-he" => array("vi"=>"lien-he","en"=>"contact")
			)
		),
		'order' => array(
			'ship' => false
		),
		'login' => array(
			'admin' => 'LoginAdmin'.NN_MSHD,
			'member' => 'LoginMember'.NN_MSHD,
			'attempt' => 5,
			'delay' => 15
		),
		'googleAPI' => array(
			'recaptcha' => array(
				'active' => true,
				'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
				'sitekey' => '6LfzRW8aAAAAAGi4HGREnmbkbZ0AvpLvLvFWHTDu',
				'secretkey' => '6LfzRW8aAAAAAOC5Wx17pYu6aQ8w-8OCg0Gm61rV'
			)
		),
		'oneSignal' => array(
			'active' => false,
			'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
			'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
		),
		'license' => array(
			'version' => "7.0.0",
			'powered' => "phuctai.nina@gmail.com"
		)
	);

	/* Error reporting */
	error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);
	/* Cấu hình base */
	if($config['arrayDomainSSL']) 
	require_once LIBRARIES."checkSSL.php";
	$http = 'http';
   	// if(array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") $http .= "s";
   	$http .= "://";
   	$config_url = $config['database']['server-name'].$config['database']['url'];
	$config_base = $http.$config_url;

	/* Cấu hình login */
	$login_admin = $config['login']['admin'];
	$login_member = $config['login']['member'];

	/* Cấu hình upload */
	require_once LIBRARIES."constant.php";

?>