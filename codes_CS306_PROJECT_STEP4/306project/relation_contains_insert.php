<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
 ':album_id'  => $form_data->album_id,
 ':music_id'  => $form_data->music_id
);

$query = "INSERT INTO contains(album_id,music_id ) 
VALUES (:album_id,:music_id)
";


$statement = $db->prepare($query);

if($statement->execute($data))
{
 $message = 'Data Inserted';
}

$output = array(
 'message' => $message
);

echo json_encode($output);




?>