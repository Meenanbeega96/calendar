<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=ass', 'root', '');
$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => 'BOOK APPOINMENT',
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}
echo json_encode($data);
?>
