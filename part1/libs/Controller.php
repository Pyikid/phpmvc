<?php

class Controller {
	function __construct() {
		echo 'Main Controller, libs dir<br />';
		$this->view = new View();
	}
}
?>
