<?php

include('config2.php');

$message = '';



$form_data = json_decode(file_get_contents("php://input"));

$query = "DELETE FROM album WHERE album_id = '".$form_data->album_id."'";

$statement = $db->prepare($query);
if($statement->execute())
{
 $message = 'Data Deleted';
}

$output = array(
 'message' => $message
);

echo json_encode($output);

?>