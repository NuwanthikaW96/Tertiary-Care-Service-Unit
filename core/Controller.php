<?php

class Controller extends Application {
	protected $_controller , $_action;
	public $view;

	public function __construct($controller , $action){
		parent:: __construct();  // call the __construct() in Application (Parent) class
		$this-> _controller = $controller;
		$this -> _action = $action;
		$this -> view = new View();
	}

	protected function load_model($model){
		if(class_exists($model)){
			$this->{$model.'Model'} = new  $model();
		}
	}
}



