<?php
include 'dbconnection.php';

$query = "SELECT * FROM tbl_students WHERE student_ID = :student_ID";
$statement = $connection->prepare($query);
$statement->execute(
	array(
		':student_ID'     =>     $_POST['student_ID']
	)
);

$result = $statement->fetchAll();

foreach($result as $row)
{
	$data["firstName"] = $row["firstName"];
	$data["middleName"] = $row["middleName"];
	$data["lastName"] = $row["lastName"];
	$data["gender"] = $row["gender"];
	$data["grade"] = $row["grade"];
}

echo json_encode($data);

?>