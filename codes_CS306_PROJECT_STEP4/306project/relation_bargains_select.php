<?php  

 
include('config2.php');

$query = "SELECT p.pub_name, pl.platform_name, b.pub_id, b.platform_id FROM bargains b, publisher p, platform pl WHERE b.pub_id = p.pub_id AND b.platform_id = pl.platform_id  ORDER BY platform_id ASC";


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