<?php

class model_details extends Model {

	function __construct() {
		parent::__construct();
	}
	function ertebat() {
		$sql = 'select * from tbl_blog';
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetch();
		return $result;

	}

}


?>