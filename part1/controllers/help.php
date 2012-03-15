<?php
#class Help {
class Help extends Controller{
	function __construct() {
		parent::__construct();
		echo 'We are inside help controller <br />';
	}

	#public function other() {
	#	echo 'We are insider other function, controller';
	#}
	public function other($arg = false) {
		echo 'We are insider other function, controller<br />';
		echo 'Optional Argrument: ' . $arg . '<br />';

		require 'models/help_model.php';
		$model = new Help_Model();
	}
}
?>
