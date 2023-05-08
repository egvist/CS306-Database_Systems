<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
 ':pub_id'  => $form_data->pub_id,
 ':album_id'  => $form_data->album_id
);

$query = "INSERT INTO publishes(pub_id,album_id ) 
VALUES (:pub_id,:album_id)
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