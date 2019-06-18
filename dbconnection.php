<?php 

date_default_timezone_set("Asia/Manila");

/*$dsn = "mysql:host=localhost;dbname=students";
$username = "root";
$password = "";*/
$host = "ec2-23-21-156-171.compute-1.amazonaws.com";
$username = "zljiamzmpjjvqf";
$password = "e50365773eff27cdb4c9bc02f3bde4d32be1926ef1e2770a8ce15718406d4f27";
$port = "5432";
$dbname = "d1jfhl83p9e0ns";

$dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname;

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