<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
 ':prdoucer_name'  => $form_data->prdoucer_name,
 ':producer_rating'  => $form_data->producer_rating,

 
 
);

$query = "INSERT INTO producer(prdoucer_name, producer_rating) 
VALUES (:prdoucer_name,:producer_rating)
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
