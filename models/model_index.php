<?php

class model_index extends Model {

	function __construct() {
		parent::__construct();
	}

function t(){
		echo 'dkfjdfkjsfsj';
}
		function ertebat() {
		$sql  = 'select * from tbl_blog';
		$stmt =self::$conn->prepare( $sql );
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
		/*$ert_new=[];
		foreach ($result as $run){
		$title=$run['title_d'];
		$id=$run['id'];
		$ert_new[$id]=$title;
		}
		return $ert_new;*/
	}

}


?>