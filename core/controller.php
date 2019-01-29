<?php

class Controller {

	function __construct() {

	}

	function view( $viewUrl, $data=[]){
		require('views/'. $viewUrl.'.php' );
		//require ('header.php');
		//require ('footer.php');
	}

	function model( $modelUrl ) {
	require( 'models/model_' . $modelUrl . '.php' );
	$classname   = 'model_' . $modelUrl;
	$this->model = new $classname;
}


}


?>