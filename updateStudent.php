<?php
include 'dbconnection.php';

$statement = $connection->prepare(
  "UPDATE tbl_students 
  SET firstName = :firstName, middleName = :middleName, lastName = :lastName, gender = :gender, grade = :grade
  WHERE student_ID = :student_ID"
);

$result = $statement->execute(
  array(
    ':firstName' => $_POST["firstName"],
    ':middleName' => $_POST["middleName"],
    ':lastName' => $_POST["lastName"],
    ':gender' => $_POST["gender"],
    ':grade' => $_POST["grade"],
    ':student_ID'   => $_POST["student_ID"]
  )
);

if(!empty($result)) {
 echo 'Success!';
}
else {
  echo 'Error in updating student data.';
}


?>