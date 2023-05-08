<?php  

 
include('config2.php');

$query = "SELECT m.music_name, pr.prdoucer_name, p.producer_id, p.music_id FROM produces p, music m, producer pr WHERE p.producer_id = pr.producer_id AND p.music_id = m.music_id  ORDER BY producer_id ASC";


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