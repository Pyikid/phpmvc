<?php
class Bootstrap {

	function __construct() {
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		
		$url = explode('/', $url);
		
		echo '<pre >';
		print_r($url);
		echo '</pre >';
		
		#echo $url;
		##http://192.168.100.185:8080/dog
		#http://192.168.100.185:8080/index.php?url=dog
		##dog
		
		$file = 'controllers/' . $url[0] . '.php';	
		if (file_exists($file)) {
			require $file;
		} else {
			require 'controllers/error.php';
			$controller = new Error();
			#throw new Exception("The file: $file Does not exists.");
			return false;
		}
		#require 'controllers/' . $url[0] . '.php';
		$controller = new $url[0];
		
		    #http://192.168.100.185:8080/help/other/10
		if (isset($url[2])){
		    $controller->{$url[1]}($url[2]);
		} else {
		    #http://192.168.100.185:8080/help/other
		    if (isset($url[1])) {
		        $controller->{$url[1]}();
		    }
		}
	}
}
?>
