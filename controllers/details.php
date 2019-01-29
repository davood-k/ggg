<?php

class details extends Controller {
	function __construct() {

	}

	function index() {
		$task=$this->model->ertebat();
		//$this->view( 'index/index',$task);
		$data=[$task];
		$this->view( 'details/index',$data);
	}

}

?>