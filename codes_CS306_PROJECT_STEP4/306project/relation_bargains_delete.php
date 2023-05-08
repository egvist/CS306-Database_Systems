<?php

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$query = "DELETE FROM bargains WHERE pub_id = '".$form_data->pub_id."'";

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