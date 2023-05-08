<?php

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$query = "DELETE FROM playlist WHERE playlist_id = '".$form_data->playlist_id."'";

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