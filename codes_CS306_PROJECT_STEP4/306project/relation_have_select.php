<?php  

 
include('config2.php');

$query = "SELECT m.music_name, p.playlist_title, h.playlist_id, h.music_id FROM have h, music m, playlist p WHERE h.playlist_id = p.playlist_id AND h.music_id = m.music_id  ORDER BY playlist_id ASC";


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