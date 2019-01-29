<?php

class Model {
	public static $conn='';

	function __construct() {
		$servername = 'localhost';
		$user       = 'root';
		$pass       = '';
		$dbname     = 'db_blog';
		$array      = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'' );
		self::$conn = new PDO( 'mysql:host=' . $servername . ';dbname=' . $dbname, $user, $pass,$array );
	}
}


?>