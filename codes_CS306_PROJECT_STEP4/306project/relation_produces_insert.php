<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
 ':producer_id'  => $form_data->producer_id,
 ':music_id'  => $form_data->music_id
);

$query = "INSERT INTO produces(producer_id,music_id ) 
VALUES (:producer_id,:music_id)
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