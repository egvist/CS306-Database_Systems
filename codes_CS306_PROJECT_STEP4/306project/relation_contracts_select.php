<?php  

 
include('config2.php');

$query = "SELECT p.pub_name, a.a_name, c.pub_id, c.a_id FROM contracts c, publisher p, artist a WHERE c.a_id = a.a_id AND c.pub_id = p.pub_id  ORDER BY a_id ASC";


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