<?php  

 
include('config2.php');

$query = "SELECT m.music_name, a.album_name, c.album_id, c.music_id FROM contains c, music m, album a WHERE c.album_id = a.album_id AND c.music_id = m.music_id  ORDER BY album_id ASC";


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