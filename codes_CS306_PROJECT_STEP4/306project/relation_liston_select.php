<?php  

 
include('config2.php');

$query = "SELECT a.album_name, p.platform_name, l.platform_id, l.album_id FROM lists_on l, album a, platform p WHERE l.platform_id = p.platform_id AND l.album_id = a.album_id  ORDER BY platform_id ASC";


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