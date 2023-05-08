<?php

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$query = "DELETE FROM producer WHERE producer_id = '".$form_data->producer_id."'";

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