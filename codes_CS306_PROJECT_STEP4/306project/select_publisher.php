<?php  

 
include('config2.php');

$query = "SELECT * FROM publisher ORDER BY pub_id ASC";

$statement = $db->prepare($query);
if($statement->execute())
{
  while($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $data[] = $row;
  }
  echo json_encode($data);
}

?>