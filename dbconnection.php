<?php 

date_default_timezone_set("Asia/Manila");

/*$dsn = "mysql:host=localhost;dbname=students";
$username = "root";
$password = "";*/
$host = "localhost";
$username = "root";
$password = "";
$port = "3306";
$dbname = "students";

$dsn = "mysql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname;

$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
$connection = new PDO($dsn,$username,$password,$options);
}

catch (PDOException $e) {
echo "Error!".$e->getMessage();
$connection.die();
}

?>
