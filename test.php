<?php

class test {
	function __construct() {
		$servername = 'localhost';
		$user       = 'root';
		$pass       = '';
		$dbname     = 'db_blog';
		$array      = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'' );
		$this->conn = new PDO( 'mysql:host=' . $servername . ';dbname=' . $dbname, $user, $pass, $array );
	}

	function get_opp(){
$snr='select * from tbl_blog';
$smart=$this->conn->prepare($snr);
$smart->execute();
$result=$smart->fetchAll();

}


}
$object=new test();
$object->get_opp();
echo $_GET['url'];
?>