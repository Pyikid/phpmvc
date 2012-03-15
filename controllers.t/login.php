<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{	
	    echo Hash::create('md5','test',HASH_PASSWORD_KEY);
		echo '<br />';
	    echo Hash::create('md5','test',HASH_GENERAL_KEY);
		$this->view->render('login/index');
	}
	
	function run()
	{
		$this->model->run();
	}
	

}
