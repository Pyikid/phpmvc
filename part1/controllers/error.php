<?php
#class Error{
class Error extends Controller{
	function __construct() {
		parent::__construct();
		echo 'This is error page, controller class Error<br />';


		##$this->view = new View();  from /lib/controller.php

		$this->view->mesg = 'This page doesnt exist';
		$this->view->render('error/index');
	}


}
?>
