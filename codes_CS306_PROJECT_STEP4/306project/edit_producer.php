<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(

    ':prdoucer_name'  => $form_data->prdoucer_name,
    ':producer_rating'  => $form_data->producer_rating,
    ':producer_id'  => $form_data->producer_id
);


$query = 
"UPDATE producer 
SET prdoucer_name = :prdoucer_name, producer_rating = :producer_rating  
WHERE producer_id = :producer_id
";

$statement = $db->prepare($query);
if($statement->execute($data))
{
    $message = 'Data Edited';
}

$output = array(
    'message' => $message
);

echo json_encode($output);

?>