<?php

class View {
	function __construct() {
		echo 'this is the view , under libs <br />';
	}

	public function render($name) {
		require 'views/' . $name . '.php';
	}
}
?>
