<?php
include 'dbconnection.php';

$query = "DELETE FROM tbl_students WHERE student_ID = :student_ID";
$statement = $connection->prepare($query);
$result = $statement->execute(
	array(
		':student_ID'     =>     $_POST['student_ID']
	)
);

if(!empty($result)) {
	echo 'Student deleted.';
}
else {
	echo 'Error deleting the student.';
}
?>