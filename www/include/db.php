<?php 
	define('DBNAME', 'advance');
	define('DBUSER', 'root');
	define('DBPASS', 'OLuwaseun01');

	try{
		$conn = new  PDO('mysql:host=localhost;dbname'.DBNAME, DBUSER, DBPASS);
	//$conn = new  PDO('mysql:host=localhost;dbname-advance', 'root', 'OLuwaseun01');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

	}
	catch(PDOException $err) {
		echo $err->getMessage();
	}
	
	
?>