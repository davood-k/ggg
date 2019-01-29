<?php

class index extends Controller {
	function __construct() {

	}

	function index() {
		$task=$this->model->ertebat();
		//$this->view( 'index/index',$task);
		$this->view( 'index/index',$task);
	}

}

?>