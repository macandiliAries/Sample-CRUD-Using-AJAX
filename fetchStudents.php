<?php
include('dbconnection.php');

$col = array(
	0   =>  'student_ID',
	1   =>  'firstName',
	2   =>  'middleName',
	3   =>  'lastName',
	4   =>  'gender',
	5   =>  'grade'
);

$query = "SELECT * FROM tbl_students ";

$statement = $connection->prepare($query);
$statement->execute();
$dataCount = $statement->rowCount();

if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE firstName LIKE "%'.$_POST["search"]["value"].'%"';
}
if(isset($_POST["order"]))
{
	$query.= "ORDER BY ".$col[$_POST['order'][0]['column']]."   ".$_POST['order'][0]['dir']." ";
}
else
{
	$query .= 'ORDER BY student_ID asc ';
}

if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();

foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row[0];
	$sub_array[] = $row[1];
	$sub_array[] = $row[2];
	$sub_array[] = $row[3];
	$sub_array[] = $row[4]; 
	$sub_array[] = $row[5];

	$sub_array[] = '<button type="button" name="editStudent" id="'.$row[0].'" class="btn btn-primary btn-xs editStudent">Edit</button>
	<button type="button" name="deleteStudent" id="'.$row[0].'" class="btn btn-warning btn-xs deleteStudent">Delete</button>';

	$data[] = $sub_array;
}

$json_data = array(
	"draw" =>  intval($_REQUEST["draw"]),
	"recordsTotal"  =>  intval($dataCount),
	"recordsFiltered" => intval($filtered_rows),
	"data"    => $data
);

echo json_encode($json_data);

/*
echo '<pre>';
print_r($json_data);
echo '</pre>';
*/
?>