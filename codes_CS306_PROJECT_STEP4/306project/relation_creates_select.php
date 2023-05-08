<?php  

 
include('config2.php');

$query = "SELECT m.music_name, a.a_name, c.a_id, c.music_id FROM creating c, music m, artist a WHERE c.a_id = a.a_id AND c.music_id = m.music_id  ORDER BY a_id ASC";


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