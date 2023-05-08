<?php  

 
include('config2.php');

$query = "SELECT p.pub_name, a.album_name, pub.pub_id, pub.album_id FROM publishes pub, publisher p, album a WHERE pub.album_id = a.album_id AND pub.pub_id = p.pub_id  ORDER BY pub_id ASC";


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