<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
 ':pub_id'  => $form_data->pub_id,
 ':a_id'  => $form_data->a_id
);

$query = "INSERT INTO contracts(pub_id,a_id ) 
VALUES (:pub_id,:a_id)
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