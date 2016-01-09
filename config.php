<?php 
	// define application constants

	define ('IMG_PATH','/admin/images/');
	define ('FILE_PATH', '/admin/files/');
	define ('DB_HOST','localhost');
	define ('DB_USER','root');
	define ('DB_PASSWORD', 'root');
	define ('DB_NAME', 'nerdcms_db');
	define ('HOST','http://'.$_SERVER['HTTP_HOST']);
	
	//class autoloader using PEAR naming convention
	spl_autoload_register(function ($class) {
		$path = str_replace('_', DIRECTORY_SEPARATOR, $class );
		if (file_exists('model/'.$path.'.class.php')) {
			include_once 'model/'.$path.'.class.php';
		} else {
			echo 'Class '.$class.' not found in model folder!';
		} 	
	});
?>