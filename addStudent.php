<?php
include 'dbconnection.php';

$statement = $connection->prepare(
  "INSERT INTO tbl_students (firstName, middleName, lastName, gender, grade)
  VALUES (:firstName, :middleName, :lastName, :gender, :grade)"
);

$result = $statement->execute(
  array(
    ':firstName' => $_POST["firstName"],
    ':middleName' => $_POST["middleName"],
    ':lastName' => $_POST["lastName"],
    ':gender' => $_POST["gender"],
    ':grade' => $_POST["grade"],
  )
);

if(!empty($result)) {
 echo 'Success!';
}
else {
  echo 'Error in adding new student.';
}


?>